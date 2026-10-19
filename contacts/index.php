<?php
$pageTitle = 'Контакты — Glazounov AI Lab';
$pageDescription = 'Связаться с разработчиком AI-ассистентов, чат-ботов и решений для автоматизации.';
$pageType = 'contact';

require $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main class="contacts-page">
    <section class="project-hero">
        <div class="container">
            <a class="project-back" href="/index.php">
                &larr; На главную
            </a>

            <div class="project-hero-copy">
                <p class="eyebrow">КОНТАКТЫ</p>
                <h1>Обсудим вашу задачу</h1>

                <p class="project-lead">
                    Разрабатываю AI-ассистентов, чат-ботов
                    и решения для автоматизации бизнес-процессов.
                    Если у вас есть идея, задача или вопрос
                    по проекту — напишите удобным способом.
                </p>
            </div>
        </div>
    </section>

    <section class="project-section">
        <div class="container project-narrow">

            <div class="contact-methods">

                <article class="contact-method">
                    <h2>Telegram</h2>
                    <p>
                        Для быстрого обсуждения задачи,
                        вопросов и предложений.
                    </p>

                    <a class="button primary"
                       href="<?php echo htmlspecialchars($telegramUrl, ENT_QUOTES, 'UTF-8'); ?>"
                       target="_blank"
                       rel="noopener noreferrer">
                        Написать в Telegram &rarr;
                    </a>
                </article>

                <article class="contact-method">
                    <h2>Электронная почта</h2>
                    <p>
                        Для технических заданий, документов
                        и деловой переписки.
                    </p>

                    <a class="button secondary"
                       href="mailto:<?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?>">
                        <?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </article>

            </div>

            <p class="contact-note">
                Необязательно заранее готовить подробное
                техническое задание. Для начала достаточно
                кратко описать, какую задачу вы хотите решить.
            </p>

        </div>
    </section>
</main>

<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>
