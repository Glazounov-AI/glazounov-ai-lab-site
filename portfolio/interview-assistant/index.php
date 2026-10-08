<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Interview Coach — Glazounov AI Lab</title>
    <meta name="description" content="AI-ассистент для подготовки к собеседованиям: анализ вакансий, пробные интервью, метод STAR и обратная связь на основе базы знаний.">
    <link rel="icon" href="../../assets/icons/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="../../index.php" aria-label="Glazounov AI Lab — главная">
            <span class="brand-mark" aria-hidden="true"><i></i><i></i><i></i></span>
            <span class="brand-text">
                <strong>GLAZOUNOV</strong>
                <small>AI LAB</small>
            </span>
        </a>
        <nav class="main-nav" aria-label="Основная навигация">
            <a href="../../index.php#projects">Проекты</a>
            <a href="../../index.php#about">Обо мне</a>
            <a class="btn btn-small" href="../../index.php#contact">Связаться</a>
        </nav>
        <button class="menu-button" type="button" aria-label="Открыть меню">☰</button>
    </div>
</header>

<main>
    <!-- HERO -->
    <section class="project-hero">
        <div class="container project-hero-inner">
            <a class="project-back" href="/portfolio/">&larr; Все проекты</a>

            <div class="project-hero-content">
                <div class="project-hero-copy">
                    <div class="project-meta">
                        <span class="project-status">Prompt Engineering / RAG</span>
                        <span>Прототип протестирован</span>
                    </div>

                    <h1>AI Interview Coach</h1>

                    <p class="project-lead">
                        AI-ассистент для подготовки кандидатов к собеседованиям:
                        анализ вакансий, тренировочные интервью, разбор ответов
                        по методу STAR и персональные рекомендации.
                    </p>

                    <div class="project-tags">
                        <span>OpenAI</span>
                        <span>File Search</span>
                        <span>Vector Store</span>
                        <span>STAR</span>
                    </div>

                    <div class="project-actions">
                        <a class="project-action-link"
                           href="https://github.com/Glazounov-AI/interview-assistant"
                           target="_blank" rel="noopener noreferrer">
                            GitHub <span class="external-icon" aria-hidden="true">↗</span>
                        </a>
                        <a class="project-action-link" href="#results">Результаты</a>
                    </div>
                </div>

                <div class="project-cover" aria-label="AI Interview Coach">
                    <div class="project-cover-inner">
                        <span>CAREER AI</span>
                        <strong>INTERVIEW COACH</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TASK -->
    <section class="project-section">
        <div class="container project-narrow">
            <div class="section-label">Задача проекта</div>
            <h2>Подготовить кандидата к реальному собеседованию</h2>

            <p>
                Общие советы по поиску работы не учитывают требования
                конкретной вакансии и профессиональный опыт кандидата.
                Для эффективной подготовки нужны вопросы по позиции,
                практика ответов и предметная обратная связь.
            </p>

            <p>
                Цель проекта — создать AI-ассистента, который помогает
                анализировать вакансию, проводить пробное интервью
                и улучшать ответы без выдумывания опыта и достижений пользователя.
            </p>
        </div>
    </section>

    <!-- WORKFLOW -->
    <section class="project-section project-section-soft">
        <div class="container">
            <div class="section-label">Как работает</div>
            <h2>От вакансии до рекомендаций кандидату</h2>

            <div class="workflow">
                <div class="workflow-step">
                    <span>01</span>
                    <strong>Вакансия</strong>
                    <small>Требования и контекст</small>
                </div>
                <div class="workflow-arrow" aria-hidden="true">&rarr;</div>
                <div class="workflow-step">
                    <span>02</span>
                    <strong>Анализ</strong>
                    <small>Навыки и вопросы</small>
                </div>
                <div class="workflow-arrow" aria-hidden="true">&rarr;</div>
                <div class="workflow-step">
                    <span>03</span>
                    <strong>Интервью</strong>
                    <small>Практика ответов</small>
                </div>
                <div class="workflow-arrow" aria-hidden="true">&rarr;</div>
                <div class="workflow-step">
                    <span>04</span>
                    <strong>STAR</strong>
                    <small>Разбор структуры</small>
                </div>
                <div class="workflow-arrow" aria-hidden="true">&rarr;</div>
                <div class="workflow-step workflow-result">
                    <span>05</span>
                    <strong>Рекомендации</strong>
                    <small>Что улучшить</small>
                </div>
            </div>

            <p class="project-note">
                Ассистент использует системные инструкции и базу знаний,
                подключённую через File Search в OpenAI Playground.
                При недостатке информации он запрашивает уточнения,
                а не придумывает биографию кандидата.
            </p>
        </div>
    </section>

    <!-- IMPLEMENTATION -->
    <section class="project-section">
        <div class="container">
            <div class="project-two-columns">
                <div>
                    <div class="section-label">Реализация</div>
                    <h2>Что сделано</h2>

                    <div class="feature-list">
                        <div class="feature-item">
                            <strong>Системный промпт</strong>
                            <p>
                                Роли, режимы работы, правила обратной связи
                                и ограничения на неподтверждённые сведения.
                            </p>
                        </div>

                        <div class="feature-item">
                            <strong>База знаний</strong>
                            <p>
                                Материалы для подготовки к интервью, подключённые
                                через File Search и Vector Store.
                            </p>
                        </div>

                        <div class="feature-item">
                            <strong>Пробное интервью</strong>
                            <p>
                                Последовательные вопросы с учётом вакансии
                                и анализ ответов кандидата.
                            </p>
                        </div>

                        <div class="feature-item">
                            <strong>Адаптация под профессии</strong>
                            <p>
                                Подготовлены сценарии для Python Developer,
                                Project Manager и UX/UI Designer.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="boundary-panel">
                    <div class="section-label">Принципы работы</div>
                    <h2>Контроль достоверности</h2>

                    <ul class="boundary-list">
                        <li>
                            <strong>Опыт кандидата</strong> — только на основе
                            предоставленных пользователем фактов.
                        </li>
                        <li>
                            <strong>STAR</strong> — помощь в структурировании
                            реальных примеров, а не создании вымышленных историй.
                        </li>
                        <li>
                            <strong>Неопределённость</strong> — уточняющие вопросы
                            при недостатке данных.
                        </li>
                        <li>
                            <strong>База знаний</strong> — дополнительный источник
                            методик и рекомендаций.
                        </li>
                    </ul>

                    <div class="boundary-result">
                        Протестированные направления
                        <strong>Python · PM · UX/UI</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RESULTS -->
    <section class="project-section project-section-soft" id="results">
        <div class="container">
            <div class="section-label">Результаты тестирования</div>
            <h2>Проверены основные сценарии подготовки</h2>

            <div class="metrics-grid">
                <div class="metric">
                    <strong>9/10</strong>
                    <span>Анализ вакансии</span>
                </div>
                <div class="metric">
                    <strong>10/10</strong>
                    <span>Пробное интервью</span>
                </div>
                <div class="metric">
                    <strong>10/10</strong>
                    <span>Адаптация под UX/UI</span>
                </div>
                <div class="metric">
                    <strong>10/10</strong>
                    <span>Контроль выдуманных фактов</span>
                </div>
            </div>

            <div class="test-summary">
                <p>
                    В OpenAI Playground проведены функциональные проверки
                    ключевых режимов работы. После корректировки поведения
                    пробного интервью выполнено повторное тестирование.
                </p>

                <p class="project-note">
                    Оценки приведены по внутренним тестовым сценариям проекта.
                    Они не являются результатами независимого исследования
                    или измерением эффективности на реальных соискателях.
                </p>
            </div>
        </div>
    </section>

    <!-- CONCLUSION -->
    <section class="project-section">
        <div class="container project-narrow">
            <div class="section-label">Вывод и ограничения</div>
            <h2>Прототип готов к дальнейшему развитию</h2>

            <p>
                Реализован и протестирован сценарий подготовки к собеседованию:
                от анализа вакансии до тренировки ответов и персональной
                обратной связи.
            </p>

            <p>
                Текущая версия работает в OpenAI Playground с подключённой
                базой знаний. Отдельное пользовательское приложение,
                авторизация и хранение истории кандидатов не реализованы.
            </p>
        </div>
    </section>

    <!-- MATERIALS -->
    <section class="project-section project-section-soft" id="materials">
        <div class="container project-narrow">
            <div class="section-label">Материалы проекта</div>
            <h2>Промпт, база знаний и документация</h2>

            <div class="materials-list">
                <a href="https://github.com/Glazounov-AI/interview-assistant"
                   target="_blank" rel="noopener noreferrer">
                    <span>
                        <strong>GitHub</strong>
                        <small>Полный репозиторий проекта</small>
                    </span>
                    <span class="material-arrow" aria-hidden="true">&rarr;</span>
                </a>

                <a href="https://github.com/Glazounov-AI/interview-assistant/blob/main/prompts/system-prompt.md"
                   target="_blank" rel="noopener noreferrer">
                    <span>
                        <strong>Системный промпт</strong>
                        <small>Инструкции и ограничения ассистента</small>
                    </span>
                    <span class="material-arrow" aria-hidden="true">&rarr;</span>
                </a>

                <a href="https://github.com/Glazounov-AI/interview-assistant/blob/main/knowledge-base/knowledge-base.md"
                   target="_blank" rel="noopener noreferrer">
                    <span>
                        <strong>База знаний</strong>
                        <small>Материалы для File Search</small>
                    </span>
                    <span class="material-arrow" aria-hidden="true">&rarr;</span>
                </a>

                <a href="https://github.com/Glazounov-AI/interview-assistant/blob/main/docs/scenarios-and-dialogues.md"
                   target="_blank" rel="noopener noreferrer">
                    <span>
                        <strong>Сценарии и диалоги</strong>
                        <small>Примеры работы с тремя профессиями</small>
                    </span>
                    <span class="material-arrow" aria-hidden="true">&rarr;</span>
                </a>

                <a href="https://github.com/Glazounov-AI/interview-assistant/blob/main/docs/project-description.md"
                   target="_blank" rel="noopener noreferrer">
                    <span>
                        <strong>Описание проекта</strong>
                        <small>Архитектура, тестирование и ограничения</small>
                    </span>
                    <span class="material-arrow" aria-hidden="true">&rarr;</span>
                </a>
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

<footer class="site-footer">
    <div class="container footer-inner">
        <a class="brand brand-small" href="../../index.php">
            <span class="brand-mark"><i></i><i></i><i></i></span>
            <span><b>GLAZOUNOV</b><small>AI LAB</small></span>
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
