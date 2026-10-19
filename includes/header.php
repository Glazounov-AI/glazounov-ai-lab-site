<?php
require_once __DIR__ . '/config.php';

if (!isset($pageTitle)) {
    $pageTitle = $siteName;
}
if (!isset($pageDescription)) {
    $pageDescription = '';
}
if (!isset($pageType)) {
    $pageType = 'project';
}
if (!isset($pageCss)) {
    $pageCss = '';
}

$isHome = ($pageType === 'home');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

    <?php if ($pageDescription !== ''): ?>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <?php endif; ?>

    <link rel="icon" href="/favicon.ico" sizes="16x16 32x32 48x48">
    <link rel="icon" href="/assets/icons/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="/assets/css/style.css">

    <?php if ($pageCss !== ''): ?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($pageCss, ENT_QUOTES, 'UTF-8'); ?>">
    <?php endif; ?>
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="<?php echo $isHome ? '#top' : '/index.php'; ?>"
           aria-label="Glazounov AI Lab — главная">
            <span class="brand-mark" aria-hidden="true">
                <i></i><i></i><i></i>
            </span>
            <span class="<?php echo $isHome ? '' : 'brand-text'; ?>">
                <?php if ($isHome): ?>
                    <b>GLAZOUNOV</b>
                <?php else: ?>
                    <strong>GLAZOUNOV</strong>
                <?php endif; ?>
                <small>AI LAB</small>
            </span>
        </a>

        <nav class="main-nav" aria-label="Основная навигация">
            <a href="/portfolio/index.php">Проекты</a>
            <a href="<?php echo $isHome ? '#about' : '/index.php#about'; ?>">Обо мне</a>
            <a class="<?php echo $isHome ? 'nav-cta' : 'btn btn-small'; ?>"
               href="/contacts/">Связаться</a>
        </nav>

        <button class="menu-button" type="button" aria-label="Открыть меню">&#9776;</button>
    </div>
</header>
