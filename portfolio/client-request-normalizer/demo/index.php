<?php
$pageTitle = 'Демо — Client Request Normalizer | Glazounov AI Lab';
$pageDescription = 'Сравнение Baseline и LoRA на 15 тестовых запросах: метрики и исходные ответы моделей.';
$pageType = 'project';
$pageCss = '/portfolio/client-request-normalizer/demo/demo.css';

require $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<script src="/portfolio/client-request-normalizer/demo/demo.js" defer></script>

<main>
  <section class="project-hero">
    <div class="container">
      <a class="project-back" href="../">&larr; К описанию проекта</a>
      <div class="project-meta"><span class="project-status">Эксперимент · сохранённые результаты</span></div>
      <h1>Client Request Normalizer</h1>
      <p class="project-lead">Сравнение базовой модели и модели после LoRA-дообучения на одинаковых клиентских запросах.</p>
      <p class="demo-disclaimer">Это интерактивный просмотр <strong>заранее полученных результатов</strong>, а не выполнение моделей в реальном времени.</p>
    </div>
  </section>
  <section class="project-section">
    <div class="container">
      <div class="section-label">Результаты эксперимента</div>
      <h2>Baseline и LoRA: пять метрик</h2>
      <p class="demo-muted">15 синтетических тестовых запросов. Проценты рассчитываются по исходному файлу метрик.</p>
      <div id="metrics-chart" class="demo-chart" aria-label="Сравнительный график пяти метрик"><p>Загрузка графика…</p></div>
      <div class="demo-legend"><span><i class="demo-swatch baseline"></i> Baseline</span><span><i class="demo-swatch lora"></i> LoRA</span></div>
    </div>
  </section>
  <section class="project-section project-section-soft">
    <div class="container">
      <div class="section-label">Исходные ответы</div>
      <h2>Сравните конкретный запрос</h2>
      <div class="demo-picker">
        <label for="example-select">Тестовый пример</label>
        <select id="example-select"><option>Загрузка примеров…</option></select>
        <span id="example-count" class="demo-muted"></span>
      </div>
      <div class="demo-query"><h3>Запрос клиента</h3><p id="instruction"></p></div>
      <div class="demo-columns">
        <article class="demo-panel"><h3>Baseline</h3><div id="baseline-status" class="demo-status"></div><pre id="baseline-output"></pre></article>
        <article class="demo-panel"><h3>LoRA</h3><div id="lora-status" class="demo-status"></div><pre id="lora-output"></pre></article>
      </div>
      <div class="demo-panel demo-reference"><h3>Эталонный ответ</h3><pre id="expected-output"></pre></div>
      <div class="demo-panel demo-fields"><h3>Сравнение полей с эталоном</h3><div id="field-comparison" class="demo-table-wrap"></div></div>
    </div>
  </section>
  <section class="project-section">
    <div class="container project-narrow">
      <div class="section-label">Методика и ограничения</div>
      <h2>Что показывают результаты</h2>
      <p>Модели оценивались на одном тестовом наборе из 15 синтетических запросов. Проверяются корректность JSON, соответствие схеме, распознавание намерения, совпадение полей и полное совпадение с эталоном.</p>
      <p>Даже после LoRA-дообучения встречаются нарушения схемы и неточные значения. Сырые ответы отображаются без автоматического исправления. Результаты этого небольшого теста нельзя считать оценкой качества на всех реальных клиентских запросах.</p>
      <p id="load-error" class="demo-error" role="alert" hidden></p>
    </div>
  </section>
</main>

</main>

<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>