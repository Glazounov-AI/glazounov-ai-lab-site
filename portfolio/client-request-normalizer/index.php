
<?php
$pageTitle = 'Client Request Normalizer — Glazounov AI Lab';
$pageDescription = 'Эксперимент по дообучению Qwen2.5-0.5B с LoRA для преобразования клиентских запросов в структурированный JSON. Сравнение Baseline и LoRA на 15 тестовых примерах.';
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
                        <span class="project-status">ML / Fine-tuning</span>
                        <span>v1.0.0 · Эксперимент завершён</span>
                    </div>

                    <h1>Client Request Normalizer</h1>

                    <p class="project-lead">
                        Эксперимент по адаптации языковой модели для преобразования
                        свободно сформулированных клиентских запросов в структурированный JSON.
                        Сравнение исходной модели (Baseline) и версии после LoRA-дообучения.
                    </p>

                    <div class="project-tags">
                        <span>Qwen2.5-0.5B</span>
                        <span>LoRA</span>
                        <span>Fine-tuning</span>
                        <span>Evaluation</span>
                    </div>

                    <div class="project-actions">
                        <a class="project-action-link" href="demo/">
                            Открыть демо &rarr;
                        </a>
                        <a class="project-action-link"
                           href="https://github.com/Glazounov-AI/client-request-normalizer"
                           target="_blank" rel="noopener noreferrer">
                            GitHub <span class="external-icon" aria-hidden="true">&#8599;</span>
                        </a>
                        <a class="project-action-link" href="#results">
                            Результаты эксперимента
                        </a>
                    </div>
                </div>

                <div class="project-cover" aria-label="Client Request Normalizer">
                    <div class="project-cover-inner">
                        <span>ML / FINE-TUNING</span>
                        <strong>CLIENT REQUEST NORMALIZER</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project-section">
        <div class="container project-narrow">
            <div class="section-label">Задача проекта</div>
            <h2>Преобразование клиентских запросов в структурированные данные</h2>

            <p>
                Клиенты описывают свои потребности обычным языком. Для последующей
                автоматизации такие сообщения необходимо преобразовать в предсказуемую
                структуру: определить намерение пользователя и извлечь необходимые поля.
            </p>

            <p>
                Цель эксперимента — проверить, насколько дообучение компактной языковой
                модели помогает точнее распознавать намерения, извлекать поля и
                формировать JSON заданной структуры.
            </p>
        </div>
    </section>

    <section class="project-section project-section-soft">
        <div class="container project-narrow">
            <div class="section-label">Подход</div>
            <h2>Baseline и LoRA: сравнение двух версий модели</h2>

            <div class="roadmap-line">
                <span>Клиентский запрос</span><b>&rarr;</b>
                <span>Qwen2.5-0.5B</span><b>&rarr;</b>
                <span>JSON</span><b>&rarr;</b>
                <span>Оценка результата</span>
            </div>

            <p>
                В качестве базовой модели использована Qwen2.5-0.5B.
                Для адаптации применён метод LoRA — дообучение небольшого
                набора дополнительных параметров без полного обновления
                весов исходной модели.
            </p>

            <p>
                Исходная и дообученная версии проверены на одном наборе
                из 15 синтетических тестовых примеров. Оценивались корректность
                JSON, соответствие схеме, распознавание намерений,
                точность извлечения полей и полное совпадение с эталоном.
            </p>
        </div>
    </section>

    <section class="project-section" id="results">
        <div class="container project-narrow">
            <div class="section-label">Результаты</div>
            <h2>Изменение качества после LoRA-дообучения</h2>

            <div class="test-summary">
                <p>
                    На тестовом наборе дообученная модель показала улучшение
                    по всем пяти метрикам. Наиболее заметный прирост получен
                    в определении намерения и извлечении полей.
                </p>
            </div>

            <div class="project-narrow">
                <table class="normalizer-metrics-table">
                    <thead>
                        <tr>
                            <th scope="col">Метрика</th>
                            <th scope="col">Baseline</th>
                            <th scope="col">LoRA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>JSON validity</td>
                            <td>93,3%</td>
                            <td><strong>100%</strong></td>
                        </tr>
                        <tr>
                            <td>Schema validity</td>
                            <td>66,7%</td>
                            <td><strong>73,3%</strong></td>
                        </tr>
                        <tr>
                            <td>Intent accuracy</td>
                            <td>53,3%</td>
                            <td><strong>93,3%</strong></td>
                        </tr>
                        <tr>
                            <td>Field accuracy</td>
                            <td>39,0%</td>
                            <td><strong>85,7%</strong></td>
                        </tr>
                        <tr>
                            <td>Exact match</td>
                            <td>0%</td>
                            <td><strong>46,7%</strong></td>
                        </tr>
                    </tbody>
                </table>

                <p class="project-note">
                    Результаты относятся только к использованному тестовому набору.
                    Они не являются подтверждением качества модели на реальных
                    клиентских обращениях.
                </p>
            </div>
        </div>
    </section>

    <section class="project-section project-section-soft">
        <div class="container project-narrow">
            <div class="section-label">Демонстрация</div>
            <h2>Сравнение ответов на конкретных примерах</h2>

            <p>
                Демо позволяет просмотреть 15 тестовых запросов, эталонные данные,
                ответы Baseline и LoRA, а также итоговые метрики эксперимента.
                Это помогает увидеть не только общие показатели, но и характер
                ошибок каждой версии.
            </p>

            <p>
                Демо работает с заранее сохранёнными результатами эксперимента.
                Оно не отправляет запросы к модели и не выполняет инференс
                в реальном времени.
            </p>

            <div class="project-actions">
                <a class="project-action-link" href="demo/">
                    Перейти к демо &rarr;
                </a>
            </div>
        </div>
    </section>

    <section class="project-section">
        <div class="container project-narrow">
            <div class="section-label">Ограничения</div>
            <h2>Что ещё необходимо проверить</h2>

            <p>
                Эксперимент проводился на небольшой синтетической выборке.
                Для оценки практической применимости потребуется более крупный
                независимый тестовый набор, включающий реальные формулировки,
                неоднозначные запросы и случаи с неполными данными.
            </p>

            <p>
                Даже после дообучения соответствие JSON заданной схеме
                составило 73,3%, а полное совпадение с эталоном — 46,7%.
                Поэтому для производственного применения потребуется
                дополнительная валидация структуры и обработка ошибок.
            </p>
        </div>
    </section>

    <section class="project-section" id="materials">
        <div class="container project-narrow">
            <div class="section-label">Материалы проекта</div>
            <h2>Исходники и результаты</h2>

            <div class="materials-list">
                <a href="https://github.com/Glazounov-AI/client-request-normalizer"
                   target="_blank" rel="noopener noreferrer">
                    <span>
                        <strong>GitHub</strong>
                        <small>Исходный код и материалы эксперимента</small>
                    </span>
                    <span class="material-arrow" aria-hidden="true">&rarr;</span>
                </a>

                <a href="demo/">
                    <span>
                        <strong>Интерактивное демо</strong>
                        <small>Метрики и сравнение ответов Baseline / LoRA</small>
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

<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>
