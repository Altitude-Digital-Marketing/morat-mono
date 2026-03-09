<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Pedro Meireis">
    <meta name="email" content="hello@meireis.com">
    <meta name="copyright" content="<?= $site->seo_copyright() ?>">
    <meta property="og:type" content="website">
    <meta name="url" content="<?= $site->url() ?>">
    <meta property="og:url" content="<?= $site->url() ?>">
    <meta property="og:locale" content="en_US">
    <?php snippet('head_seo') ?>
    <!-- FAVICON -->

    <?php $v = '?v=2'; ?>
    <link href="<?= url('assets/css/normalize.css') . $v ?>" rel="stylesheet">
    <link href="<?= url('assets/css/typography.css') . $v ?>" rel="stylesheet">
    <link href="<?= url('assets/css/elements.css') . $v ?>" rel="stylesheet">
    <link href="<?= url('assets/css/styles.css') . $v ?>" rel="stylesheet">
    <link href="<?= url('assets/css/grid.css') . $v ?>" rel="stylesheet">
    <link href="<?= url('assets/css/snippets/header.css') . $v ?>" rel="stylesheet">
    <link href="<?= url('assets/css/templates/' . $page->template()->name() . '.css') . $v ?>" rel="stylesheet">
    <link href="<?= url('assets/css/snippets/footer.css') . $v ?>" rel="stylesheet">
    <link href="<?= url('assets/css/snippets/newsletter-block.css') . $v ?>" rel="stylesheet">
    <link href="<?= url('assets/css/snippets/marquee-block.css') . $v ?>" rel="stylesheet">
    <script defer src="<?= url('assets/js/main.js') . $v ?>"></script>
    <script defer src="<?= url('assets/js/snippets/header.js') . $v ?>"></script>
    <script defer src="<?= url('assets/js/snippets/newsletter-block.js') . $v ?>"></script>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= url('assets/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= url('assets/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= url('assets/favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= url('assets/favicon/site.webmanifest') ?>">
    <link rel="mask-icon" href="<?= url('assets/favicon/safari-pinned-tab.svg') ?>" color="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>

    <!-- MAPBOX -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v3.6.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.6.0/mapbox-gl.js"></script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3MQ860DV50"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-3MQ860DV50');
    </script>

</head>
<body data-url="<?= $site->url() ?>" data-template="<?= $page->template()->name() ?>">
