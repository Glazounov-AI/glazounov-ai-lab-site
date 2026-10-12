<?php
$pageTitle = 'RAG Assistant — Glazounov AI Lab';
$pageDescription = 'RAG Assistant: две независимые редакции на OpenAI и GigaChat, поиск через ChromaDB, SQLite-кэш и логирование, FastAPI и развёртывание OpenAI-редакции на Railway.';
$pageType = 'project';

require $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main>
    <section class="project-hero">
        <div class="container project-hero-inner">
            <a class="project-back" href="/portfolio/">&larr; Все проекты</a>
            <div class="project-hero-content">
                <div class="project-hero-copy">
                    <div class="project-meta">
                        <span class="project-status">Backend · Railway</span>
                        <span>OpenAI-редакция развёрнута</span>
                    </div>
                    <h1>RAG Assistant</h1>
                    <p class="project-lead">AI-ассистент для ответов на вопросы по документам: поиск контекста через ChromaDB, генерация с помощью LLM, кэширование ответов и SQLite-журнал запросов. Две независимые редакции — OpenAI и GigaChat.</p>
                    <div class="project-tags">
                        <span>RAG</span><span>FastAPI</span><span>ChromaDB</span><span>Railway</span>
                    </div>
                    <div class="project-actions">
                        <a class="project-action-link" href="https://github.com/Glazounov-AI/RAG_Assistant" target="_blank" rel="noopener noreferrer">GitHub <span class="external-icon" aria-hidden="true">↗</span></a>
                        <a class="project-action-link" href="https://ragassistant-production-6923.up.railway.app/docs" target="_blank" rel="noopener noreferrer">Демо API <span class="external-icon" aria-hidden="true">↗</span></a>
                        <a class="project-action-link" href="#materials">Документация</a>
                    </div>
                </div>
                <div class="project-cover" aria-label="RAG Assistant">
                    <div class="project-cover-inner"><span>RAG SYSTEM</span><strong>RAG ASSISTANT</strong></div>
                </div>
            </div>
        </div>
    </section>

    <section class="project-section">
        <div class="container project-narrow">
            <div class="section-label">Задача проекта</div>
            <h2>Отвечать на вопросы с опорой на документы заказчика</h2>
            <p>Обычная языковая модель не знает содержание внутренних документов. RAG-подход позволяет находить релевантные фрагменты в базе знаний и передавать их модели как контекст для ответа.</p>
            <p>Дополнительные задачи — ускорить повторные обращения за счёт кэша и обеспечить наблюдаемость через журнал запросов, в котором фиксируются источник обращения, ответ, признак попадания в кэш и время обработки.</p>
        </div>
    </section>

    <section class="project-section project-section-soft">
        <div class="container">
            <div class="section-label">Как работает</div>
            <h2>От вопроса до ответа с найденным контекстом</h2>
            <div class="workflow">
                <div class="workflow-step"><span>01</span><strong>Запрос</strong></div>
                <div class="workflow-arrow" aria-hidden="true">&rarr;</div>
                <div class="workflow-step"><span>02</span><strong>Проверка кэша</strong></div>
                <div class="workflow-arrow" aria-hidden="true">&rarr;</div>
                <div class="workflow-step"><span>03</span><strong>ChromaDB</strong><small>Если нет ответа в кэше</small></div>
                <div class="workflow-arrow" aria-hidden="true">&rarr;</div>
                <div class="workflow-step"><span>04</span><strong>LLM</strong><small>Ответ по контексту</small></div>
                <div class="workflow-arrow" aria-hidden="true">&rarr;</div>
                <div class="workflow-step workflow-result"><span>05</span><strong>Ответ</strong><small>Кэш + SQLite-журнал</small></div>
            </div>
            <p class="project-note">При попадании в кэш поиск и генерация пропускаются: сохранённый ответ возвращается сразу. Пользовательские запросы журналируются в обоих случаях.</p>
        </div>
    </section>

    <section class="project-section">
        <div class="container">
            <div class="project-two-columns">
                <div>
                    <div class="section-label">Возможности</div>
                    <h2>Что реализовано</h2>
                    <div class="feature-list">
                        <div class="feature-item"><strong>Индексация документов</strong><p>Текстовые файлы из каталога data индексируются в ChromaDB; при последующих запусках добавляются новые файлы.</p></div>
                        <div class="feature-item"><strong>RAG-пайплайн</strong><p>Эмбеддинг вопроса, поиск релевантных фрагментов и генерация ответа с найденным контекстом.</p></div>
                        <div class="feature-item"><strong>SQLite-кэш</strong><p>Повторный идентичный запрос может получить ранее сохранённый ответ без нового вызова модели.</p></div>
                        <div class="feature-item"><strong>SQLite-логирование</strong><p>Записываются запрос, ответ, источник, время обработки и признак использования кэша.</p></div>
                        <div class="feature-item"><strong>HTTP API на FastAPI</strong><p>В OpenAI-редакции доступны GET /health и POST /query. Консольный и HTTP-интерфейсы используют общий RAGPipeline.</p></div>
                    </div>
                </div>
                <div class="boundary-panel">
                    <div class="section-label">Архитектура</div>
                    <h2>Две независимые редакции</h2>
                    <ul class="boundary-list">
                        <li><strong>assistant_api</strong> — OpenAI, модель gpt-4o-mini, эмбеддинги text-embedding-3-small, консольный и HTTP-интерфейсы, оценка через RAGAS.</li>
                        <li><strong>assistant_giga</strong> — GigaChat и GigaChat Embeddings, консольный интерфейс.</li>
                        <li>У каждой редакции собственные настройки, RAG-пайплайн, ChromaDB, SQLite-кэш и журнал запросов.</li>
                        <li>Это два самостоятельных приложения, а не переключатель LLM-провайдера в одной системе.</li>
                    </ul>
                    <div class="boundary-result">Развёртывание на Railway<strong>Только assistant_api (OpenAI)</strong></div>
                </div>
            </div>
        </div>
    </section>

    <section class="project-section project-section-soft">
        <div class="container">
            <div class="section-label">HTTP API</div>
            <h2>Программный доступ к ассистенту</h2>
            <div class="case-example">
                <div class="case-request">
                    <span>POST /query</span>
                    <p>Принимает вопрос пользователя в JSON и возвращает ответ, модель и признак использования кэша.</p>
                </div>
                <div class="case-data">
                    <div><span>GET /health</span><strong>Проверка доступности</strong></div>
                    <div><span>POST /query</span><strong>Обработка вопроса</strong></div>
                    <div><span>Логирование</span><strong>source = api</strong></div>
                    <div><span>Редакция</span><strong>assistant_api</strong></div>
                </div>
                <div class="ticket-preview">
                    <div class="ticket-title">Формат ответа POST /query</div>
<pre>{
  "query": "Текст вопроса",
  "answer": "Текст ответа",
  "from_cache": false,
  "model": "gpt-4o-mini"
}</pre>
                    <p>Схематичный пример структуры ответа, а не запись конкретного тестового запроса.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="project-section">
        <div class="container">
            <div class="section-label">Проверка развёртывания</div>
            <h2>Подтверждённые результаты на Railway</h2>
            <div class="metrics-grid">
                <div class="metric"><strong>OK</strong><span>GET /health: сервис отвечает</span></div>
                <div class="metric"><strong>RAG</strong><span>POST /query: обработан реальный запрос</span></div>
                <div class="metric"><strong>Cache</strong><span>Повторный запрос: from_cache = true</span></div>
                <div class="metric"><strong>Volume</strong><span>Кэш сохранился после redeploy</span></div>
            </div>
            <div class="test-summary">
                <p>На Railway подключён постоянный том данных (Railway Volume) с каталогом /data/db. В нём хранятся ChromaDB, SQLite-кэш и журнал запросов. После redeploy повторный запрос снова вернул ответ из кэша.</p>
                <p class="project-note">Это результаты функциональной проверки API и постоянного хранения данных, а не показатели общей точности RAG или производительности под нагрузкой.</p>
            </div>
        </div>
    </section>

    <section class="project-section project-section-soft">
        <div class="container project-narrow">
            <div class="section-label">Особенности реализации</div>
            <h2>Разделение редакций и сохранность данных</h2>
            <div class="roadmap-line">
                <span>OpenAI / GigaChat</span><b>&rarr;</b>
                <span>Независимые хранилища</span><b>&rarr;</b>
                <span>FastAPI для OpenAI</span><b>&rarr;</b>
                <span>Railway Volume</span>
            </div>
            <p>Консольный интерфейс и HTTP API OpenAI-редакции работают с одним RAG-пайплайном. Хранилище вынесено в постоянный каталог, чтобы кэш, журнал и векторная база не терялись при повторном развёртывании.</p>
        </div>
    </section>

    <section class="project-section" id="materials">
        <div class="container project-narrow">
            <div class="section-label">Материалы проекта</div>
            <h2>Исходники и документация</h2>
            <div class="materials-list">
                <a href="https://github.com/Glazounov-AI/RAG_Assistant" target="_blank" rel="noopener noreferrer"><span><strong>GitHub</strong><small>Репозиторий RAG Assistant</small></span><span class="material-arrow" aria-hidden="true">&rarr;</span></a>
                <a href="https://github.com/Glazounov-AI/RAG_Assistant/blob/main/README.md" target="_blank" rel="noopener noreferrer"><span><strong>Документация</strong><small>Архитектура, API, кэширование, логирование и Railway</small></span><span class="material-arrow" aria-hidden="true">&rarr;</span></a>
                <a href="https://github.com/Glazounov-AI/RAG_Assistant/blob/main/assistant_api/api.py" target="_blank" rel="noopener noreferrer"><span><strong>Исходный код HTTP API</strong><small>FastAPI: GET /health и POST /query</small></span><span class="material-arrow" aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
    </section>

    <nav class="project-navigation" aria-label="Навигация по проектам">
        <div class="container project-navigation-inner">
            <span aria-hidden="true"></span>
            <a class="all-projects-link" href="/portfolio/">Все проекты</a>
            <span aria-hidden="true"></span>
        </div>
    </nav>
</main>

<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>