<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Проекты — Glazounov AI Lab</title>

    <meta
        name="description"
        content="Проекты Glazounov AI Lab: AI-ассистенты, автоматизация, RAG и практические решения на основе искусственного интеллекта."
    >

    <link
        rel="icon"
        href="../assets/icons/favicon.svg"
        type="image/svg+xml"
    >

    <link
        rel="stylesheet"
        href="../assets/css/style.css"
    >
</head>

<body>

<header class="site-header">
    <div class="container header-inner">

        <a class="brand" href="../index.php" aria-label="Glazounov AI Lab — главная">
            <span class="brand-mark" aria-hidden="true">
                <i></i>
                <i></i>
                <i></i>
            </span>

            <span class="brand-text">
                <strong>GLAZOUNOV</strong>
                <small>AI LAB</small>
            </span>
        </a>

        <nav class="main-nav" aria-label="Основная навигация">
            <a href="../index.php#projects">Проекты</a>
            <a href="../index.php#about">Обо мне</a>
            <a class="btn btn-small" href="../index.php#contact">
                Связаться
            </a>
        </nav>

        <button class="menu-button" type="button" aria-label="Открыть меню">
            ?
        </button>

    </div>
</header>


<main>

    <!-- PORTFOLIO HERO -->
    <section class="portfolio-hero">
        <div class="container">

            <a class="project-back" href="../index.php">
                < На главную
            </a>

            <div class="portfolio-hero-copy">
                <div class="section-label">Портфолио</div>

                <h1>Проекты</h1>

                <p>
                    AI-ассистенты, автоматизация и практические решения —
                    от постановки задачи и прототипа до тестирования
                    работающей системы.
                </p>
            </div>

        </div>
    </section>


    <!-- PROJECTS -->
    <section class="portfolio-projects">
        <div class="container">

            <div class="portfolio-grid">

                <!-- RAG ASSISTANT -->
                <article class="portfolio-card">

                    <a
                        class="portfolio-card-cover portfolio-cover-rag"
                        href="rag-assistant/"
                        aria-label="Открыть проект RAG Assistant"
                        >
                        <div class="portfolio-cover-content">
                            <span>RAG SYSTEM</span>
                            <strong>RAG ASSISTANT</strong>
                        </div>
                    </a>

                    <div class="portfolio-card-body">

                        <div class="portfolio-card-tags">
                            <span>RAG</span>
                            <span>OpenAI API</span>
                            <span>ChromaDB</span>
                        </div>

                        <h2>
                            <a href="rag-assistant/">
                                RAG Assistant
                            </a>
                        </h2>

                        <p>
                            AI-ассистент с поиском по базе знаний,
                            кэшированием ответов и SQLite-логированием.
                            Серверная часть реализована, OpenAI-редакция
                            развёрнута на Railway.
                        </p>

                        <div class="portfolio-card-footer">
                            <span class="portfolio-card-status">
                                Backend · Deployed on Railway
                            </span>

                            <a
                                class="portfolio-card-link"
                                href="rag-assistant/"
                                >
                                Подробнее &rarr;
                            </a>
                        </div>

                    </div>
                </article>


                <!-- AI IT SERVICE DESK -->
                <article class="portfolio-card">

                    <a
                        class="portfolio-card-cover portfolio-cover-service"
                        href="ai-it-service-desk/"
                        aria-label="Открыть проект AI IT Service Desk"
                    >
                        <div class="portfolio-cover-content">
                            <span>AI IT</span>
                            <strong>SERVICE DESK</strong>
                        </div>
                    </a>

                    <div class="portfolio-card-body">

                        <div class="portfolio-card-tags">
                            <span>AI Assistant</span>
                            <span>IT Support</span>
                        </div>

                        <h2>
                            <a href="ai-it-service-desk/">
                                AI IT Service Desk
                            </a>
                        </h2>

                        <p>
                            AI-ассистент первой линии IT-поддержки
                            с Knowledge Base, диагностикой,
                            маршрутизацией и контролируемой эскалацией.
                        </p>

                        <div class="portfolio-card-footer">
                            <span class="portfolio-card-status">
                                v1.0.0 · First Stable Release
                            </span>

                            <a
                                class="portfolio-card-link"
                                href="ai-it-service-desk/"
                            >
                                Подробнее &rarr;
                            </a>
                        </div>

                    </div>
                </article>


                <!-- INTERVIEW ASSISTANT -->
                <article class="portfolio-card">

                    <div class="portfolio-card-cover portfolio-cover-interview">
                        <div class="portfolio-cover-content">
                            <span>AI</span>
                            <strong>INTERVIEW ASSISTANT</strong>
                        </div>
                    </div>

                    <div class="portfolio-card-body">

                        <div class="portfolio-card-tags">
                            <span>AI Assistant</span>
                            <span>Prompt Engineering</span>
                        </div>

                        <h2>AI-ассистент подготовки к собеседованию</h2>

                        <p>
                            Ассистент для подготовки кандидатов:
                            моделирование интервью, разбор ответов
                            и рекомендации по их улучшению.
                        </p>

                        <div class="portfolio-card-footer">
                            <span class="portfolio-card-status">
                                Готовый проект
                            </span>

                            <span class="portfolio-card-link">
                                Подробнее &rarr;
                            </span>
                        </div>

                    </div>
                </article>


                <!-- A/B PROMPT TESTING -->
                <article class="portfolio-card">

                    <a class="portfolio-card-cover portfolio-cover-testing"
                        href="ab-prompt-test/"
                        aria-label="Открыть проект A/B Prompt Testing"
                        >

                        <div class="portfolio-cover-content">
                            <span>AI PROMPTS</span>
                            <strong>A / B TESTING</strong>
                        </div>
                    </a>

                    <div class="portfolio-card-body">

                        <div class="portfolio-card-tags">
                            <span>Automation</span>
                            <span>Evaluation</span>
                        </div>

                        <h2>
                            <a href="ab-prompt-test/">
                                A/B-тестирование AI-промптов
                            </a>
                        </h2>

                        <p>
                            Автоматизированное сравнение вариантов промптов
                            с рандомизацией ответов, слепой оценкой
                            и измеримыми метриками качества.
                        </p>

                        <div class="portfolio-card-footer">
                            <span class="portfolio-card-status">
                                Готовый проект
                            </span>

                            <a class="portfolio-card-link" href="ab-prompt-test/">
                                Подробнее &rarr;
                            </a>
                        </div>

                    </div>
                </article>

            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="portfolio-cta">
        <div class="container">

            <div class="portfolio-cta-inner">

                <div>
                    <h2>Есть задача, которую можно автоматизировать?</h2>

                    <p>
                        Обсудим задачу и определим, где применение AI
                        действительно даст практический результат.
                    </p>
                </div>

                <a class="btn btn-primary" href="../index.php#contact">
                    Связаться
                </a>

            </div>

        </div>
    </section>

</main>


<footer class="site-footer">

    <div class="container footer-inner">

        <a class="brand brand-small" href="../index.php">
            <span class="brand-mark">
                <i></i><i></i><i></i>
            </span>

            <span>
                <b>GLAZOUNOV</b>
                <small>AI LAB</small>
            </span>
        </a>

        <p>© 2026 Glazounov AI Lab.</p>

        <nav>
            <a href="#">Telegram</a>

            <a
                href="https://github.com/Glazounov-AI"
                target="_blank"
                rel="noopener noreferrer"
            >
                GitHub
            </a>
        </nav>

    </div>

</footer>

</body>
</html>