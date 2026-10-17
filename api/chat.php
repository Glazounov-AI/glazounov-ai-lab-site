<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

function respond(int $status, array $data): void
{
    http_response_code($status);
    echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_SUBSTITUTE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    respond(405, ['error' => 'Метод не поддерживается']);
}

if (($_SERVER['CONTENT_TYPE'] ?? '') !== 'application/json'
    && !preg_match('~^application/json\s*;~i', $_SERVER['CONTENT_TYPE'] ?? '')) {
    respond(415, ['error' => 'Ожидается application/json']);
}

if ((int) ($_SERVER['CONTENT_LENGTH'] ?? 0) > 16384) {
    respond(413, ['error' => 'Слишком большой запрос']);
}

$raw = file_get_contents('php://input', false, null, 0, 16385);

if ($raw === false || strlen($raw) > 16384) {
    respond(413, ['error' => 'Слишком большой запрос']);
}

$data = json_decode($raw, true);

if (!is_array($data) || !isset($data['query'], $data['topic'])
    || !is_string($data['query']) || !is_string($data['topic'])) {
    respond(400, ['error' => 'Некорректный запрос']);
}

$query = trim($data['query']);
$topic = $data['topic'];

if (!in_array($topic, ['projects', 'about'], true)) {
    respond(400, ['error' => 'Неизвестная тема']);
}

try {
    $config = require __DIR__ . '/config.php';
} catch (Throwable $e) {
    error_log('Chat configuration error: ' . $e->getMessage());

    respond(503, [
        'error' => 'AI-ассистент временно недоступен'
    ]);
}

if ($query === '' || strlen($query) > $config['max_query_length']) {
    respond(400, ['error' => 'Недопустимая длина вопроса']);
}

require_once __DIR__ . '/rate-limit.php';

$clientIp = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

if (!checkRateLimit($clientIp, $config['rate_limit_dir'])) {
    header('Retry-After: 60');
    respond(429, ['error' => 'Слишком много запросов. Попробуйте позже']);
}

$payload = json_encode([
    'query' => $query,
    'mode' => 'portfolio',
], JSON_UNESCAPED_UNICODE);

$ch = curl_init($config['rag_api_url']);

$headers = ['Content-Type: application/json'];

if ($config['rag_api_key'] !== '') {
    $headers[] = 'X-API-Key: ' . $config['rag_api_key'];
}

curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT => $config['timeout_seconds'],
    CURLOPT_FOLLOWLOCATION => false,
]);

$result = curl_exec($ch);
$status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
$failed = ($result === false);

if ($failed) {
    error_log('RAG API cURL error: ' . curl_error($ch));
}

curl_close($ch);

if ($failed) {
    respond(502, ['error' => 'AI-ассистент временно недоступен']);
}

if ($status === 429) {
    respond(429, ['error' => 'Слишком много запросов. Попробуйте позже']);
}

if ($status !== 200) {
    respond(502, ['error' => 'Ошибка сервиса AI-ассистента']);
}

$answer = json_decode($result, true);

if (!is_array($answer) || !isset($answer['answer'])
    || !is_string($answer['answer'])) {
    respond(502, ['error' => 'Некорректный ответ AI-ассистента']);
}

respond(200, ['answer' => $answer['answer']]);
