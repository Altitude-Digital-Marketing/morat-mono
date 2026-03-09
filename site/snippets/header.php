<?php snippet('head') ?>
<?php snippet('newsletter-block') ?>
<?php
$navItems = [
    'tour' => 'Tour',
    'fans' => 'La Tea',
    'music' => 'Musica',
    'news' => 'Noticias',
];
$isHome = $page->template()->name() === 'home';
$currentSlug = $page->slug();
?>
<header class="p-fixed grid-xxl padding">
    <a href="<?= $site->url() ?>" id="header-logo"><img src="<?= url('assets/media/morat-logo.svg') ?>" alt="Morat logo"></a>
    <button id="header-menu_button" class="hide-d" onclick="menuToggle(this)" data-status="close"><img class="icon" src="<?= url('assets/media/icons/menu-button.svg') ?>" alt="Header menu button"></button>
    <?php if(!$isHome): ?>
    <nav id="header-menu_pages" class="hide-m_t j-end">
        <?php $i = 0; foreach($navItems as $slug => $label): ?>
        <?php if($i > 0): ?><span class="t-grot t-small t-uppercase">&nbsp&nbsp&bull;&nbsp&nbsp</span><?php endif ?>
        <a href="<?= $site->url() ?>/<?= $slug ?>" class="t-grot t-small t-uppercase <?= $currentSlug === $slug ? 't-underline' : '' ?>"><?= $label ?></a>
        <?php $i++; endforeach ?>
	<span class="t-grot t-small t-uppercase">&nbsp&nbsp&bull;&nbsp&nbsp</span>
        <a href="https://tienda.morat.co/" class="t-grot t-small t-uppercase">Merch</a>
 	<span class="t-grot t-small t-uppercase">&nbsp&nbsp&bull;&nbsp&nbsp</span>
        <a href="<?= $site->url() ?>/galeria-inesperada" class="t-grot t-small t-uppercase <?= $currentSlug === 'galeria-inesperada' ? 't-underline' : '' ?>">Galeria Inesperada</a>
    </nav>
    <?php endif ?>
    </header>

<section id="menu" class="p-fixed p-all flex f-column j-end padding stop hide-d" data-status="close">
    <nav class="flex f-column j-between p-relative">
        <a href="<?= $site->url() ?>/tour" class="t-cond t-xlarge t-uppercase t-right">Tour</a>
        <a href="<?= $site->url() ?>/fans" class="t-cond t-xlarge t-uppercase t-right">La Tea</a>
        <a href="<?= $site->url() ?>/music" class="t-cond t-xlarge t-uppercase t-right">Musica</a>
        <a href="<?= $site->url() ?>/news" class="t-cond t-xlarge t-uppercase t-right">Noticias</a>
	<a href="https://tienda.morat.co/" class="t-cond t-xlarge t-uppercase t-right">Merch</a>
        <a href="<?= $site->url() ?>/galeria-inesperada" class="t-cond t-xlarge t-uppercase t-right">Galeria Inesperada</a>
    </nav>

    <div class="footer-placeholder padding flex">
    <?php snippet('marquee-block') ?>
    <?php snippet('footer-circles') ?>
</div>

</body>
</html></section>
