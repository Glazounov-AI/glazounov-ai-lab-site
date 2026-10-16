<?php
declare(strict_types=1);

function checkRateLimit(string $clientIp): bool
{
    $directory = sys_get_temp_dir()
        . DIRECTORY_SEPARATOR . 'glazounov-chat-rate-limit';

    if (!is_dir($directory) && !mkdir($directory, 0700, true) && !is_dir($directory)) {
        return false;
    }

    $file = $directory . DIRECTORY_SEPARATOR . 'counters.json';
    $handle = fopen($file, 'c+');

    if ($handle === false) {
        return false;
    }

    if (!flock($handle, LOCK_EX)) {
        fclose($handle);
        return false;
    }

    $now = time();
    $window = 60;
    $ipKey = hash('sha256', $clientIp);

    rewind($handle);
    $contents = stream_get_contents($handle);
    $data = json_decode($contents ?: '{}', true);

    if (!is_array($data)) {
        $data = [];
    }

    foreach ($data as $key => $timestamps) {
        if (!is_array($timestamps)) {
            unset($data[$key]);
            continue;
        }

        $data[$key] = array_values(array_filter(
            $timestamps,
            static fn($timestamp) => is_int($timestamp)
                && $timestamp > $now - $window
        ));

        if ($data[$key] === []) {
            unset($data[$key]);
        }
    }

    $ipRequests = $data[$ipKey] ?? [];
    $globalRequests = $data['_global'] ?? [];

    $allowed = count($ipRequests) < 5
        && count($globalRequests) < 30;

    if ($allowed) {
        $data[$ipKey][] = $now;
        $data['_global'][] = $now;
    }

    $json = json_encode($data);

    if ($json === false) {
        flock($handle, LOCK_UN);
        fclose($handle);
        return false;
    }

    rewind($handle);
    $written = fwrite($handle, $json);
    $saved = $written !== false
        && $written === strlen($json)
        && ftruncate($handle, strlen($json))
        && fflush($handle);

    flock($handle, LOCK_UN);
    fclose($handle);

    return $saved && $allowed;
}
