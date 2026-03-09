<?php snippet('header') ?>
<script defer src="<?= url('assets/js/templates/home.js') ?>?v=2"></script>
<main class="p-fixed p-all">
    <?php if($heroVideo = $site->home_picture()->toFile()): ?>
        <?php if($heroVideo->type() === 'video'): ?>
        <video id="home_p-hero" class="p-fixed p-all flex" src="<?= $heroVideo->url() ?>" preload="metadata" playsinline nocontrols autoplay muted loop></video>
        <?php else: ?>
        <img id="home_p-hero" class="p-fixed p-all flex" src="<?= $heroVideo->url() ?>" alt="">
        <?php endif ?>
    <?php endif ?>

    <section id="home_p-menu" class="flex f-column j-end p-relative" onmouseenter="homeMenuHover()" onmouseleave="homeMenuUnover()">
        <div id="home_p-menu--tour"  class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= $site->url() ?>/tour" class="home_p-menu-link t-cond t-xlarge t-uppercase">Tour</a>
        </div>
        <div id="home_p-menu--fans" class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= $site->url() ?>/fans" class="home_p-menu-link t-cond t-xlarge t-uppercase">La Tea</a>
        </div>
        <div id="home_p-menu--music" class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= $site->url() ?>/music" class="home_p-menu-link t-cond t-xlarge t-uppercase">Musica</a>
        </div>
        <div id="home_p-menu--news" class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= $site->url() ?>/news" class="home_p-menu-link t-cond t-xlarge t-uppercase">Noticias</a>
        </div>
	<div id="home_p-menu--merch" class="home_p-menu-link--container stop home-menu-link" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="https://tiendamorat.com/" class="home_p-menu-link t-cond t-xlarge t-uppercase">Merch</a>
        </div>
        <div id="home_p-menu--galeria_inesperada" class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= $site->url() ?>/galeria-inesperada" class="home_p-menu-link t-cond t-xlarge t-uppercase">Galeria Inesperada</a>
        </div>
    </section>

    <!-- BOARDS -->
    <?php snippet('home/tour-board') ?>
    <?php snippet('home/music-board') ?>
    <?php snippet('home/news-board') ?>
    <?php snippet('home/fans-board') ?>
    <?php snippet('home/galeria-inesperada-board') ?>
</main>

<?php snippet('footer') ?>
