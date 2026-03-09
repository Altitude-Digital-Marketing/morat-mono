<?php snippet('header') ?>
<script defer src="<?= url('assets/js/snippets/fans-map.js') ?>?v=2"></script>
<script defer src="<?= url('assets/js/templates/fans.js') ?>?v=2"></script>
<main class="">
    <div id="fans-map-token" data-token="<?= option('mapbox.token', '') ?>"></div>
    <section id="map" class="p-fixed p-all"></section>
</main>

<footer class="p-fixed padding flex">
    <?php snippet('marquee-block') ?>
    <?php snippet('footer-circles') ?>
</footer>

</body>
</html>
