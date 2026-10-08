
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A/B Prompt Testing — Glazounov AI Lab</title>
    <meta name="description" content="A/B-тестирование системных промптов с n8n, OpenAI и Google Sheets. Слепая оценка 25 запросов: сравнение релевантности и галлюцинаций.">
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
                        <span class="project-status">Prompt Engineering</span>
                        <span>Эксперимент завершён</span>
                    </div>

                    <h1>A/B Prompt Testing</h1>

                    <p class="project-lead">
                        Автоматизированное сравнение двух системных промптов
                        AI-ассистента с рандомизацией порядка ответов,
                        слепой оценкой и измерением качества.
                    </p>

                    <div class="project-tags">
                        <span>n8n</span>
                        <span>OpenAI</span>
                        <span>Google Sheets</span>
                        <span>Evaluation</span>
                    </div>

                    <div class="project-actions">
                        <a class="project-action-link"
                           href="https://github.com/Glazounov-AI/ab-prompt-test"
                           target="_blank"
                           rel="noopener noreferrer">
                            GitHub <span class="external-icon" aria-hidden="true">↗</span>
                        </a>
                        <a class="project-action-link" href="#results">
                            Результаты
                        </a>
                    </div>
                </div>

                <div class="project-cover" aria-label="A/B Prompt Testing">
                    <div class="project-cover-inner">
                        <span>AI PROMPTS</span>
                        <strong>A / B TESTING</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TASK -->
    <section class="project-section">
        <div class="container project-narrow">
            <div class="section-label">Задача проекта</div>
            <h2>Снизить количество выдуманных ответов AI-ассистента</h2>

            <p>
                Базовый системный промпт требует от AI-ассистента
                отвечать клиенту вежливо и по существу, но не содержит
                явного запрета на использование неподтверждённых сведений.
            </p>

            <p>
                Требовалось проверить, улучшится ли качество ответов,
                если добавить инструкции не придумывать отсутствующие
                данные и задавать уточняющие вопросы при недостатке информации.
            </p>
        </div>
    </section>

    <!-- WORKFLOW -->
    <section class="project-section project-section-soft">
        <div class="container">
            <div class="section-label">Как работает</div>
            <h2>От тестового запроса до слепой оценки</h2>

            <div class="workflow">
                <div class="workflow-step">
                    <span>01</span>
                    <strong>Google Sheets</strong>
                    <small>25 запросов</small>
                </div>

                <div class="workflow-arrow" aria-hidden="true">&rarr;</div>

                <div class="workflow-step">
                    <span>02</span>
                    <strong>Prompt A / B</strong>
                    <small>Два ответа</small>
                </div>

                <div class="workflow-arrow" aria-hidden="true">&rarr;</div>

                <div class="workflow-step">
                    <span>03</span>
                    <strong>n8n</strong>
                    <small>Перестановка ответов</small>
                </div>

                <div class="workflow-arrow" aria-hidden="true">&rarr;</div>

                <div class="workflow-step">
                    <span>04</span>
                    <strong>Оценка</strong>
                    <small>Вручную, вслепую</small>
                </div>

                <div class="workflow-arrow" aria-hidden="true">&rarr;</div>

                <div class="workflow-step workflow-result">
                    <span>05</span>
                    <strong>Сравнение</strong>
                    <small>Метрики A и B</small>
                </div>
            </div>

            <p class="project-note">
                Каждый запрос обрабатывался обоими вариантами промпта.
                Рандомизировался порядок ответов для оценщика, а не
                распределение пользователей между экспериментальными группами.
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
                            <strong>Два варианта системного промпта</strong>
                            <p>
                                Базовая инструкция и альтернативная версия
                                с ограничениями на неподтверждённую информацию.
                            </p>
                        </div>

                        <div class="feature-item">
                            <strong>Автоматизация в n8n</strong>
                            <p>
                                Получение запросов, вызовы модели GPT-4o mini,
                                объединение и сохранение ответов.
                            </p>
                        </div>

                        <div class="feature-item">
                            <strong>Слепое тестирование</strong>
                            <p>
                                Случайная перестановка ответов и отдельное
                                сохранение ключа соответствия A/B.
                            </p>
                        </div>

                        <div class="feature-item">
                            <strong>Проверяемые результаты</strong>
                            <p>
                                Опубликованы датасет, ручные оценки,
                                методология и экспорт workflow.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="boundary-panel">
                    <div class="section-label">Методология</div>
                    <h2>Критерии качества</h2>

                    <ul class="boundary-list">
                        <li>
                            <strong>Relevance</strong> — релевантность ответа
                            по шкале от 1 до 5.
                        </li>
                        <li>
                            <strong>Hallucination</strong> — наличие
                            выдуманных или неподтверждённых сведений:
                            0 или 1.
                        </li>
                        <li>
                            <strong>MDE</strong> — минимально значимое
                            улучшение релевантности: +0,5 балла.
                        </li>
                        <li>
                            Оценка проводилась вручную после скрытия
                            обозначений промптов.
                        </li>
                    </ul>

                    <div class="boundary-result">
                        Объём эксперимента
                        <strong>25 запросов · 50 ответов</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RESULTS -->
    <section class="project-section project-section-soft" id="results">
        <div class="container">
            <div class="section-label">Результаты</div>
            <h2>Prompt B показал лучшие результаты на тестовом наборе</h2>

            <div class="metrics-grid">
                <div class="metric">
                    <strong>3,08</strong>
                    <span>Релевантность Prompt A</span>
                </div>

                <div class="metric">
                    <strong>4,68</strong>
                    <span>Релевантность Prompt B</span>
                </div>

                <div class="metric">
                    <strong>48%</strong>
                    <span>Галлюцинации Prompt A</span>
                </div>

                <div class="metric">
                    <strong>4%</strong>
                    <span>Галлюцинации Prompt B</span>
                </div>
            </div>

            <div class="test-summary">
                <p>
                    Средняя релевантность выросла на
                    <strong>1,60 балла</strong>, превысив установленный
                    MDE (+0,5). Доля ответов с галлюцинациями
                    снизилась на <strong>44 процентных пункта</strong>.
                </p>

                <p class="project-note">
                    Результаты получены на 25 тестовых запросах.
                    Статистическая значимость отдельно не проверялась.
                    Для промышленного внедрения необходимы дополнительные тесты.
                </p>
            </div>
        </div>
    </section>

    <!-- CONCLUSION -->
    <section class="project-section">
        <div class="container project-narrow">
            <div class="section-label">Вывод</div>
            <h2>Явные ограничения улучшили качество ответов</h2>

            <p>
                На использованном наборе запросов альтернативный промпт
                обеспечил более высокую релевантность и меньшую частоту
                галлюцинаций.
            </p>

            <p>
                Prompt B выбран для дальнейшего пилотного тестирования.
                Следующий этап — расширение датасета, привлечение
                дополнительных оценщиков и проверка на реальных сценариях.
            </p>
        </div>
    </section>

    <!-- MATERIALS -->
    <section class="project-section project-section-soft" id="materials">
        <div class="container project-narrow">
            <div class="section-label">Материалы проекта</div>
            <h2>Workflow, датасет и документация</h2>

            <div class="materials-list">
                <a href="https://github.com/Glazounov-AI/ab-prompt-test"
                   target="_blank" rel="noopener noreferrer">
                    <span>
                        <strong>GitHub</strong>
                        <small>Полный репозиторий проекта</small>
                    </span>
                    <span class="material-arrow" aria-hidden="true">&rarr;</span>
                </a>

                <a href="https://github.com/Glazounov-AI/ab-prompt-test/blob/main/workflows/prompt-ab-dataset-test.json"
                   target="_blank" rel="noopener noreferrer">
                    <span>
                        <strong>n8n Workflow</strong>
                        <small>Экспорт автоматизированного сценария</small>
                    </span>
                    <span class="material-arrow" aria-hidden="true">&rarr;</span>
                </a>

                <a href="https://github.com/Glazounov-AI/ab-prompt-test/blob/main/data/datasets.xlsx"
                   target="_blank" rel="noopener noreferrer">
                    <span>
                        <strong>Датасет и оценки</strong>
                        <small>25 запросов, ответы и ключ A/B</small>
                    </span>
                    <span class="material-arrow" aria-hidden="true">&rarr;</span>
                </a>

                <a href="https://github.com/Glazounov-AI/ab-prompt-test/blob/main/docs/methodology.md"
                   target="_blank" rel="noopener noreferrer">
                    <span>
                        <strong>Методология</strong>
                        <small>Гипотеза, метрики и правила оценки</small>
                    </span>
                    <span class="material-arrow" aria-hidden="true">&rarr;</span>
                </a>

                <a href="https://github.com/Glazounov-AI/ab-prompt-test/blob/main/docs/results.md"
                   target="_blank" rel="noopener noreferrer">
                    <span>
                        <strong>Результаты</strong>
                        <small>Расчёты, выводы и ограничения</small>
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
