<?php
declare(strict_types=1);

$privateFile = dirname(__DIR__, 2) . '/chat-data/config.php';

if (is_file($privateFile)) {
    $config = require $privateFile;

    if (!is_array($config)
        || empty($config['rag_api_url'])
        || empty($config['rag_api_key'])
        || empty($config['rate_limit_dir'])) {
        throw new RuntimeException('Invalid private chat configuration');
    }

    if (!str_starts_with($config['rag_api_url'], 'https://')) {
        throw new RuntimeException('RAG API must use HTTPS');
    }

    return [
        'rag_api_url' => $config['rag_api_url'],
        'rag_api_key' => $config['rag_api_key'],
        'timeout_seconds' => 30,
        'max_query_length' => 8000,
        'rate_limit_dir' => $config['rate_limit_dir'],
    ];
}

// Локальная разработка: приватный конфигурационный файл отсутствует.
if (PHP_SAPI !== 'cli-server'
    && PHP_SAPI !== 'cli') {
    throw new RuntimeException('Private chat configuration not found');
}

return [
    'rag_api_url' => getenv('RAG_API_URL') ?: 'http://127.0.0.1:8000/query',
    'rag_api_key' => getenv('RAG_API_ACCESS_KEY') ?: '',
    'timeout_seconds' => 30,
    'max_query_length' => 8000,
    'rate_limit_dir' => getenv('CHAT_RATE_LIMIT_DIR')
        ?: sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'glazounov-chat-rate-limit',
];