<?php
$pageTitle = 'Проекты — Glazounov AI Lab';
$pageDescription = 'Проекты Glazounov AI Lab: AI-ассистенты, автоматизация, RAG и практические решения на основе искусственного интеллекта.';
$pageType = 'project';

require $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

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


                <!-- AI INTERVIEW COACH -->
                <article class="portfolio-card">

                    <a
                        class="portfolio-card-cover portfolio-cover-interview"
                        href="interview-assistant/"
                        aria-label="Открыть проект AI Interview Coach"
                        >
                        <div class="portfolio-cover-content">
                            <span>AI</span>
                            <strong>INTERVIEW COACH</strong>
                        </div>
                    </a>

                    <div class="portfolio-card-body">

                        <div class="portfolio-card-tags">
                            <span>AI Assistant</span>
                            <span>Prompt Engineering</span>
                        </div>

                        <h2>
                            <a href="interview-assistant/">AI Interview Coach</a>
                        </h2>

                        <p>
                            Ассистент для подготовки кандидатов:
                            моделирование интервью, разбор ответов
                            и рекомендации по их улучшению.
                        </p>

                        <div class="portfolio-card-footer">
                            <span class="portfolio-card-status">
                                Прототип протестирован
                            </span>

                            <a class="portfolio-card-link" href="interview-assistant/">
                                Подробнее &rarr;
                            </a>
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

                <!-- CLIENT REQUEST NORMALIZER -->
                <article class="portfolio-card">

                    <a class="portfolio-card-cover portfolio-cover-normalizer"
                       href="client-request-normalizer/"
                       aria-label="Открыть проект Client Request Normalizer">
                        <div class="portfolio-cover-content">
                            <span>ML / FINE-TUNING</span>
                            <strong>CLIENT REQUEST NORMALIZER</strong>
                        </div>
                    </a>

                    <div class="portfolio-card-body">

                        <div class="portfolio-card-tags">
                            <span>Qwen2.5</span>
                            <span>LoRA</span>
                            <span>Evaluation</span>
                        </div>

                        <h2>
                            <a href="client-request-normalizer/">
                                Client Request Normalizer
                            </a>
                        </h2>

                        <p>
                            Дообучение языковой модели для преобразования
                            клиентских запросов в структурированный JSON.
                            Сравнение Baseline и LoRA на 15 тестовых примерах
                            с визуализацией метрик и исходных ответов.
                        </p>

                        <div class="portfolio-card-footer">
                            <span class="portfolio-card-status">
                                v1.0.0 · LoRA Experiment
                            </span>

                            <a class="portfolio-card-link"
                               href="client-request-normalizer/">
                                Подробнее &rarr;
                            </a>
                        </div>

                    </div>
                </article>

            <!--КОНЕЦ СЕТКИ ПОРТФОЛИО-->
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

                <a class="button primary" href="/index.php#contact">
                    Связаться
                </a>

            </div>

        </div>
    </section>

</main>


<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>