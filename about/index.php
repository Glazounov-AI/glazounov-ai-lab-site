<?php
$pageTitle = 'Обо мне — Андрей Глазунов | Glazounov AI Lab';
$pageDescription = 'Андрей Глазунов: профессиональный опыт, компетенции, подход к разработке AI-ассистентов и программных решений.';
$pageType = 'about';
$pageCss = '/assets/css/about.css';

require $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main class="about-page">
    <section class="project-hero">
        <div class="container">
            <a class="project-back" href="/index.php">&larr; На главную</a>

            <div class="about-hero-grid">
                <div class="project-hero-copy">
                    <p class="eyebrow">ОБО МНЕ</p>
                    <h1>Андрей Глазунов</h1>
                    <p class="project-lead">
                        Разработка AI-ассистентов, программных решений
                        и автоматизация рабочих процессов.
                    </p>
                    <p>
                        Я занимаюсь разработкой программного обеспечения,
                        проектированием баз данных и созданием решений
                        с использованием искусственного интеллекта.
                    </p>
                    <p>
                        Glazounov AI Lab — моё персональное портфолио проектов
                        по разработке AI-ассистентов, RAG-систем, чат-ботов
                        и интеграции языковых моделей.
                    </p>
                    <p>
                        Моя цель — создавать прикладные инструменты, которые
                        помогают обрабатывать информацию, сокращать ручную
                        работу и решать задачи пользователей и бизнеса.
                    </p>
                </div>
                <div class="about-portrait" aria-label="Место для фотографии автора">
                    <span>Фотография</span>
                </div>
            </div>
        </div>
    </section>

    <section class="project-section">
        <div class="container project-narrow">
            <h2>Профессиональный опыт</h2>
            <p>
                Мой практический опыт разработки программного обеспечения
                составляет около <strong>2,5 лет</strong>, включая примерно
                <strong>шесть месяцев работы с AI-технологиями</strong>.
            </p>
            <p>
                До перехода к AI-разработке я занимался программированием
                на Python и PHP, проектированием баз данных, работой
                с SQL и MySQL, созданием веб-приложений с использованием
                HTML, CSS и JavaScript.
            </p>
            <p>
                Этот опыт стал основой для работы с языковыми моделями
                и интеллектуальными системами. AI я рассматриваю как
                компонент полноценного программного решения.
            </p>
            <p>
                В портфолио представлены работающие прототипы,
                экспериментальные разработки и проекты с развёрнутыми
                серверными компонентами. Для каждого проекта отдельно
                описаны возможности, результаты тестирования и статус.
            </p>
        </div>
    </section>

    <section class="project-section">
        <div class="container project-narrow">
            <h2>Основные направления работы</h2>

            <div class="about-skills-grid">

                <article class="about-skill-card">
                    <span class="about-skill-number">01 / AI</span>
                    <h3>AI-ассистенты и RAG-системы</h3>
                    <p>
                        Разработка ассистентов, использующих собственные базы
                        знаний для поиска информации и формирования ответов.
                        Подготовка документов, семантический поиск, управление
                        контекстом, интеграция с API и оценка качества.
                    </p>
                </article>

                <article class="about-skill-card">
                    <span class="about-skill-number">02 / AUTOMATION</span>
                    <h3>Чат-боты и автоматизация</h3>
                    <p>
                        Создание диалоговых сценариев, интеграция Telegram
                        и других сервисов с языковыми моделями, использование
                        Webhooks, API и инструментов автоматизации, включая n8n.
                    </p>
                </article>

                <article class="about-skill-card">
                    <span class="about-skill-number">03 / DEVELOPMENT</span>
                    <h3>Программирование и базы данных</h3>
                    <p>
                        Разработка серверной логики и REST API, проектирование
                        реляционных баз данных и интеграция приложений
                        с системами хранения информации. Основные технологии:
                        Python, PHP, JavaScript, SQL, FastAPI, MySQL,
                        PostgreSQL и SQLite.
                    </p>
                </article>

                <article class="about-skill-card">
                    <span class="about-skill-number">04 / ML</span>
                    <h3>Prompt Engineering и машинное обучение</h3>
                    <p>
                        Разработка системных промптов, сценариев взаимодействия
                        с языковыми моделями и механизмов контроля качества.
                        Практический опыт включает A/B-тестирование промптов,
                        работу с локальными и облачными моделями,
                        эксперименты с LoRA-дообучением.
                    </p>
                </article>

            </div>
        </div>
    </section>

    <section class="project-section">
        <div class="container project-narrow">
            <h2>Как я подхожу к разработке</h2>
            <p>
                Работа начинается с понимания задачи: какие данные
                доступны, какой результат требуется получить
                и какие ограничения необходимо учитывать.
            </p>
            <p>
                Затем выбираются инструменты и архитектура,
                создаётся прототип, проводится тестирование
                и анализируются результаты.
            </p>
            <p>
                Особое внимание уделяю достоверности ответов AI-систем,
                обработке ошибок, качеству исходных данных,
                документированию и возможности развития решения.
            </p>
            <p>
                Считаю важным не усложнять систему без необходимости:
                выбор технологий должен соответствовать задаче,
                инфраструктуре и затратам на сопровождение.
            </p>
        </div>
    </section>

    <section class="project-section">
        <div class="container project-narrow">
            <h2>Проекты, которые показывают мой подход</h2>

            <div class="about-projects-grid">

                <article class="about-project-card">
                    <span class="about-project-type">RAG / API</span>
                    <h3>RAG Assistant</h3>
                    <p>
                        AI-ассистент с поиском по базе знаний,
                        FastAPI, ChromaDB, кэшированием и
                        журналированием запросов.
                        Серверный API развёрнут на Railway.
                    </p>
                    <a href="/portfolio/rag-assistant/">
                        Подробнее о проекте &rarr;
                    </a>
                </article>

                <article class="about-project-card">
                    <span class="about-project-type">AI / SERVICE DESK</span>
                    <h3>AI IT Service Desk</h3>
                    <p>
                        Прототип интеллектуального помощника
                        для технической поддержки с базой знаний,
                        диагностическими сценариями
                        и маршрутизацией обращений.
                    </p>
                    <a href="/portfolio/ai-it-service-desk/">
                        Подробнее о проекте &rarr;
                    </a>
                </article>

                <article class="about-project-card">
                    <span class="about-project-type">ML / FINE-TUNING</span>
                    <h3>Client Request Normalizer</h3>
                    <p>
                        Эксперимент по LoRA-дообучению компактной
                        языковой модели для преобразования
                        клиентских запросов в структурированные данные.
                    </p>
                    <a href="/portfolio/client-request-normalizer/">
                        Подробнее о проекте &rarr;
                    </a>
                </article>

            </div>

            <a class="about-all-projects" href="/portfolio/">
                Смотреть все проекты &rarr;
            </a>
        </div>
    </section>

    <section class="project-section">
        <div class="container project-narrow">
            <div class="about-contact">
                <div>
                    <p class="eyebrow">СОТРУДНИЧЕСТВО</p>
                    <h2>Обсудим вашу задачу</h2>
                    <p>
                        Если вам нужен AI-ассистент, чат-бот,
                        автоматизация обработки информации
                        или интеграция программных систем,
                        можно обсудить задачу, варианты реализации
                        и ограничения.
                    </p>
                </div>

                <a class="button primary" href="/contacts/">
                    Связаться со мной &rarr;
                </a>
            </div>
            <!--a class="button primary" href="/contacts/">
                Связаться со мной &rarr;
            </a-->
        </div>
    </section>
</main>

<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>
