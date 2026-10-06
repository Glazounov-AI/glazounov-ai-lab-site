<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AI IT Service Desk — Glazounov AI Lab</title>

    <meta
        name="description"
        content="AI IT Service Desk — AI-ассистент первой линии внутренней IT-поддержки с Knowledge Base, маршрутизацией и контролируемой эскалацией."
    >

    <link
        rel="icon"
        href="../../assets/icons/favicon.svg"
        type="image/svg+xml"
    >

    <link
        rel="stylesheet"
        href="../../assets/css/style.css"
    >
</head>

<body>

<header class="site-header">
    <div class="container header-inner">

        <a class="brand" href="../../index.php" aria-label="Glazounov AI Lab — главная">
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
            <a href="../../index.php#projects">Проекты</a>
            <a href="../../index.php#about">Обо мне</a>
            <a class="btn btn-small" href="../../index.php#contact">
                Связаться
            </a>
        </nav>

        <button class="menu-button" type="button" aria-label="Открыть меню">
            ?
        </button>

    </div>
</header>


<main>

    <!-- PROJECT HERO -->
    <section class="project-hero">
        <div class="container project-hero-inner">

            <a class="project-back" href="/portfolio/">
                &larr; Все проекты
            </a>

            <div class="project-hero-content">

                <div class="project-hero-copy">

                    <div class="project-meta">
                        <span class="project-status">v1.0.0</span>
                        <span>First Stable Release</span>
                    </div>

                    <h1>AI IT Service Desk</h1>

                    <p class="project-lead">
                        AI-ассистент первой линии внутренней IT-поддержки:
                        классифицирует обращения, использует Knowledge Base
                        для диагностики и передаёт нерешённые запросы
                        нужной группе поддержки.
                    </p>

                    <div class="project-tags">
                        <span>AI Assistant</span>
                        <span>IT Support</span>
                        <span>Knowledge Base</span>
                        <span>Routing</span>
                    </div>

                    <div class="project-actions">
                        <a
                            class="project-action-link"
                            href="https://github.com/Glazounov-AI/ai-it-service-desk"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            GitHub
                            <span class="external-icon" aria-hidden="true">↗</span>
                        </a>

                        <a
                            class="project-action-link"
                            href="#materials"
                        >
                            Документация
                        </a>
                    </div>

                </div>


                <!-- TEMPORARY PROJECT VISUAL -->
                <div class="project-cover" aria-label="AI IT Service Desk">
                    <div class="project-cover-inner">
                        <span>AI IT</span>
                        <strong>SERVICE DESK</strong>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- TASK -->
    <section class="project-section">
        <div class="container project-narrow">

            <div class="section-label">Задача проекта</div>

            <h2>
                Автоматизировать первую линию поддержки,
                не отдавая принятие решений на волю модели
            </h2>

            <p>
                Первая линия IT-поддержки получает множество повторяющихся
                обращений: проблемы с VPN, учётными записями, корпоративной
                почтой, сетью, программным обеспечением и рабочими компьютерами.
            </p>

            <p>
                Задача проекта — автоматизировать первичную обработку таких
                запросов, сохранив контроль над источниками информации,
                процедурами диагностики, безопасностью и правилами эскалации.
            </p>

        </div>
    </section>


    <!-- WORKFLOW -->
    <section class="project-section project-section-soft">
        <div class="container">

            <div class="section-label">Как работает</div>

            <h2>От обращения до решения или эскалации</h2>

            <div class="workflow">

                <div class="workflow-step">
                    <span>01</span>
                    <strong>Запрос</strong>
                </div>

                <div class="workflow-arrow">></div>

                <div class="workflow-step">
                    <span>02</span>
                    <strong>Классификация</strong>
                </div>

                <div class="workflow-arrow">></div>

                <div class="workflow-step">
                    <span>03</span>
                    <strong>Knowledge Base</strong>
                </div>

                <div class="workflow-arrow">></div>

                <div class="workflow-step">
                    <span>04</span>
                    <strong>Диагностика</strong>
                </div>

                <div class="workflow-arrow">></div>

                <div class="workflow-step workflow-result">
                    <span>05</span>
                    <strong>Результат</strong>
                    <small>Решено / Эскалация</small>
                </div>

            </div>

        </div>
    </section>


    <!-- CAPABILITIES + BOUNDARIES -->
    <section class="project-section">
        <div class="container">

            <div class="project-two-columns">

                <div>
                    <div class="section-label">Возможности</div>

                    <h2>Что умеет ассистент</h2>

                    <div class="feature-list">

                        <div class="feature-item">
                            <strong>Knowledge Base</strong>
                            <p>
                                Использует утверждённые инструкции вместо
                                свободного генерирования технических процедур.
                            </p>
                        </div>

                        <div class="feature-item">
                            <strong>Диагностический диалог</strong>
                            <p>
                                Уточняет проблему и проводит пользователя
                                через последовательность действий.
                            </p>
                        </div>

                        <div class="feature-item">
                            <strong>Классификация и маршрутизация</strong>
                            <p>
                                Определяет категорию, подкатегорию
                                и нужную группу поддержки.
                            </p>
                        </div>

                        <div class="feature-item">
                            <strong>Контролируемая эскалация</strong>
                            <p>
                                Передаёт сценарий специалисту, если безопасного
                                решения в Knowledge Base нет.
                            </p>
                        </div>

                        <div class="feature-item">
                            <strong>Structured Ticket Draft</strong>
                            <p>
                                Подготавливает структурированную информацию
                                по нерешённому обращению.
                            </p>
                        </div>

                    </div>
                </div>


                <div class="boundary-panel">

                    <div class="section-label">Границы AI</div>

                    <h2>Что ассистент не делает</h2>

                    <ul class="boundary-list">
                        <li>
                            Не придумывает отсутствующие в Knowledge Base
                            технические процедуры.
                        </li>

                        <li>
                            Не запрашивает пароли и MFA-коды.
                        </li>

                        <li>
                            Не утверждает, что выполнил административное действие.
                        </li>

                        <li>
                            Не изменяет права доступа и учётные записи.
                        </li>

                        <li>
                            Не угадывает внутренние адреса и данные инфраструктуры.
                        </li>
                    </ul>

                    <div class="boundary-result">
                        Если безопасного решения нет
                        <strong>> эскалация</strong>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- EXAMPLE -->
    <section class="project-section project-section-soft">
        <div class="container">

            <div class="section-label">Пример работы</div>

            <h2>Нерешённая проблема с VPN</h2>

            <div class="case-example">

                <div class="case-request">
                    <span>Запрос пользователя</span>

                    <p>
                        «VPN подключён, но корпоративные ресурсы всё равно
                        недоступны. Я уже проверил другой корпоративный ресурс
                        и переподключил VPN — проблема осталась».
                    </p>
                </div>


                <div class="case-data">

                    <div>
                        <span>Category</span>
                        <strong>VPN</strong>
                    </div>

                    <div>
                        <span>Subcategory</span>
                        <strong>RESOURCE_ACCESS</strong>
                    </div>

                    <div>
                        <span>Knowledge Base</span>
                        <strong>KB-011</strong>
                    </div>

                    <div>
                        <span>Assigned group</span>
                        <strong>Network</strong>
                    </div>

                </div>


                <div class="ticket-preview">
                    <div class="ticket-title">Ticket Draft</div>

<pre>{
  "category": "VPN",
  "subcategory": "RESOURCE_ACCESS",
  "priority": "normal",
  "assigned_group": "Network",
  "kb_article": "KB-011",
  "troubleshooting_completed": true,
  "resolution": "not_resolved",
  "action": "escalate"
}</pre>

                    <p>
                        Черновик содержит данные для передачи специалисту,
                        но не означает создание реальной заявки
                        во внешней Service Desk системе.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <!-- TEST RESULTS -->
    <section class="project-section">
        <div class="container">

            <div class="section-label">Тестирование</div>

            <h2>Функциональная проверка проекта</h2>

            <div class="metrics-grid">

                <div class="metric">
                    <strong>22 / 22</strong>
                    <span>сценария выполнены</span>
                </div>

                <div class="metric">
                    <strong>100%</strong>
                    <span>functional pass rate</span>
                </div>

                <div class="metric">
                    <strong>98,5%</strong>
                    <span>средняя оценка</span>
                </div>

                <div class="metric">
                    <strong>0</strong>
                    <span>functional failures</span>
                </div>

            </div>

            <div class="test-summary">
                <p>
                    Проверены классификация обращений, уточняющие вопросы,
                    работа с Knowledge Base, маршрутизация, эскалация,
                    соблюдение границ безопасности и формирование Ticket Draft.
                </p>

                <p class="project-note">
                    В тестовой среде Playground наблюдалось нестабильное
                    отображение внутренних citation-маркеров. Исследование
                    не подтвердило проблему как ошибку логики ассистента;
                    она зафиксирована как ограничение тестовой среды.
                </p>
            </div>

        </div>
    </section>


    <!-- NEXT -->
    <section class="project-section project-section-soft">
        <div class="container project-narrow">

            <div class="section-label">Дальнейшее развитие</div>

            <h2>Следующий этап</h2>

            <div class="roadmap-line">
                <span>Расширение Knowledge Base</span>
                <b>></b>
                <span>Сложные сценарии</span>
                <b>></b>
                <span>Integration Testing</span>
                <b>></b>
                <span>Service Desk API</span>
            </div>

        </div>
    </section>


    <!-- MATERIALS -->
    <section class="project-section" id="materials">
        <div class="container project-narrow">

            <div class="section-label">Материалы проекта</div>

            <h2>Исходники и документация</h2>

            <div class="materials-list">

                <a
                    href="https://github.com/Glazounov-AI/ai-it-service-desk"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <span>
                        <strong>GitHub</strong>
                        <small>Репозиторий проекта</small>
                    </span>

                    <span class="material-arrow" aria-hidden="true">&rarr;</span>
                </a>

                <a
                    href="https://github.com/Glazounov-AI/ai-it-service-desk/blob/main/README.md"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <span>
                        <strong>Документация</strong>
                        <small>Описание проекта и архитектуры</small>
                    </span>

                    <span class="material-arrow" aria-hidden="true">&rarr;</span>
                </a>

                <a
                    href="https://github.com/Glazounov-AI/ai-it-service-desk/blob/main/tests/test-results.md"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <span>
                        <strong>Test Results</strong>
                        <small>Результаты функционального тестирования</small>
                    </span>

                    <span class="material-arrow" aria-hidden="true">&rarr;</span>
                </a>

            </div>

        </div>
    </section>


    <!-- PROJECT NAVIGATION -->
    <nav class="project-navigation" aria-label="Навигация по проектам">
        <div class="container project-navigation-inner">

            <a href="#">
                <small>Предыдущий проект</small>
                <strong>< A/B Prompt Test</strong>
            </a>

            <a
                class="all-projects-link"
                href="/portfolio/"
            >
                Все проекты
            </a>

            <a class="project-next" href="#">
                <small>Следующий проект</small>
                <strong>AI Interview Assistant ></strong>
            </a>

        </div>
    </nav>

</main>


<footer class="site-footer">

    <div class="container footer-inner">

        <a class="brand brand-small" href="#top">

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
            <a href="https://github.com/Glazounov-AI">GitHub</a>
        </nav>

    </div>

</footer>


</body>
</html>
