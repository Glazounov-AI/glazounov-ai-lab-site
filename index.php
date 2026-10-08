<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Glazounov AI Lab — AI-решения и автоматизация</title>

    <link rel="icon"
        href="assets/icons/favicon.svg"
        type="image/svg+xml">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header class="site-header">
    <div class="container header-inner">

        <a class="brand" href="#top">
            <span class="brand-mark" aria-hidden="true">
                <i></i><i></i><i></i>
            </span>

            <span>
                <b>GLAZOUNOV</b>
                <small>AI LAB</small>
            </span>
        </a>

        <nav class="main-nav">
            <a href="#projects">Проекты</a>
            <a href="#about">Обо мне</a>
            <a class="nav-cta" href="#contact">
                Связаться
            </a>
        </nav>

        <button class="menu-button" aria-label="Открыть меню">?</button>

    </div>
</header>


<main id="top">

    <section class="hero">
        <div class="container hero-grid">

            <div class="hero-copy">

                <p class="eyebrow">АНДРЕЙ ГЛАЗУНОВ</p>

                <h1>
                    AI-решения, которые
                    <span>берут рутинную работу на себя</span>
                </h1>

                <p class="hero-text">
                    Помогаю бизнесу и специалистам автоматизировать
                    повторяющиеся задачи, работу с информацией
                    и взаимодействие с клиентами.
                </p>

                <div class="actions">

                    <a class="button primary" href="#projects">
                        Посмотреть проекты 
                    </a>

                    <a class="button secondary" href="#contact">
                        Связаться
                    </a>

                </div>

            </div>


            <div class="hero-visual" aria-label="Схема работы AI-решения">

                <div class="flow-card request">
                    <strong>Запрос</strong>
                    <small>Вопрос, задача<br>или данные</small>
                </div>

                <div class="flow-line line-one"></div>

                <div class="ai-core">AI</div>

                <div class="flow-tags">
                    <span>Анализ</span>
                    <span>Поиск информации</span>
                    <span>Планирование</span>
                    <span>Интеграции</span>
                </div>

                <div class="flow-line line-two"></div>

                <div class="flow-card result">
                    <strong>? &nbsp; Результат</strong>
                    <small>Готовое решение<br>и экономия времени</small>
                </div>

            </div>

        </div>
    </section>


    <section class="projects" id="projects">
        <div class="container">

            <div class="section-heading">

                <div>
                    <p class="eyebrow">ПРОЕКТЫ</p>
                    <h2>Реальные решения, а не просто идеи</h2>
                </div>

                <a href="/portfolio/">Смотреть все проекты &rarr;</a>

            </div>


            <div class="project-grid">

				<!-- RAG ASSISTANT -->
				<article class="project-card">

					<div class="project-image project-image-rag">
						<span>RAG Assistant</span>
					</div>

					<div class="project-body">

						<h3>RAG Assistant</h3>

						<p>
							AI-ассистент с поиском по базе знаний,
							кэшированием и SQLite-логированием.
							OpenAI-редакция развёрнута на Railway.
						</p>

						<a href="/portfolio/rag-assistant/">
							Подробнее &rarr;
						</a>

						<div class="tags">
							<span>RAG</span>
							<span>OpenAI API</span>
							<span>Railway</span>
						</div>

					</div>

				</article>

				<!-- AI IT SERVICE DESK -->
                <article class="project-card">

                    <div class="project-image project-image-one">
                        <span>AI IT Service Desk</span>
                    </div>

                    <div class="project-body">

                        <h3>AI IT Service Desk</h3>

                        <p>
                            AI-ассистент первой линии IT-поддержки
                            с базой знаний и маршрутизацией обращений.
                        </p>

                        <a href="/portfolio/ai-it-service-desk/">Подробнее &rarr;</a>

                        <div class="tags">
                            <span>AI-ассистент</span>
                            <span>База знаний</span>
                        </div>

                    </div>

                </article>


				<!-- INTERVIEW ASSISTANT -->
                <article class="project-card">

                    <div class="project-image project-image-two">
                        <span>Interview Assistant</span>
                    </div>

                    <div class="project-body">

                        <h3>AI-ассистент подготовки к собеседованию</h3>

                        <p>
                            Помощник для анализа вакансий и системной
                            подготовки кандидата к интервью.
                        </p>

                        <a href="#">Подробнее ></a>

                        <div class="tags">
                            <span>Анализ вакансий</span>
                            <span>Подготовка</span>
                        </div>

                    </div>

                </article>

            </div>

        </div>
    </section>


    <section class="about" id="about">
        <div class="container about-grid">

            <div>
                <p class="eyebrow">ОБО МНЕ</p>

                <h2>
                    Технологии, которые работают на людей
                </h2>
            </div>

            <div class="portrait-placeholder">
                <span>Фото</span>
            </div>

            <div class="about-copy">

                <p>
                    Я разрабатываю AI-инструменты и автоматизацию,
                    которые помогают решать практические задачи:
                    сокращать ручную работу, структурировать информацию
                    и делать рабочие процессы эффективнее.
                </p>

                <a href="#">Подробнее обо мне ></a>

            </div>


            <aside class="contact-card" id="contact">

                <strong>Есть задача?</strong>

                <p>
                    Обсудим, как AI может помочь именно вам.
                </p>

                <a class="button primary" href="#">
                    Связаться
                </a>

            </aside>

        </div>
    </section>

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
