<!DOCTYPE html>
nano ./site/snippets/head.php<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
   <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-3MQ860DV50"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-3MQ860DV50'); </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Pedro Zuber">
    <meta name="email" content="hello1@meireis.com">
    <meta name="copyright" content="<?= $site->copyright() ?>">
    <meta property="og:type" content="website">
    <meta name="url" content="<?= $site->url() ?>">
    <meta property="og:url" content="<?= $site->url() ?>">
    <meta property="og:locale" content="en_US">
    <?php snippet('head_seo') ?>
    <!-- FAVICON -->
    <?= css([
        'assets/css/normalize.css',
        'assets/css/typography.css',
        'assets/css/elements.css',
        'assets/css/styles.css',
        'assets/css/grid.css',
        'assets/css/snippets/header.css',
        'assets/css/templates/' . $page->template()->name() . '.css',
        'assets/css/snippets/footer.css',
    ]) ?>
    <?= js([
        'assets/js/main.js',
    ], ['defer' => true]) ?>
</head>
<body>
