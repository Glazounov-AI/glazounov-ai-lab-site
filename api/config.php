<?php

return [
    'rag_api_url' => getenv('RAG_API_URL') ?: 'http://127.0.0.1:8000/query',
    'rag_api_key' => getenv('RAG_API_ACCESS_KEY') ?: '',
    'timeout_seconds' => 30,
    'max_query_length' => 8000,
];
