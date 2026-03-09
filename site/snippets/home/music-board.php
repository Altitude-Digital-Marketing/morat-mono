<?php
$musicPage = page('music');
$musicItems = $musicPage ? $musicPage->music()->toStructure() : new \Kirby\Cms\Structure();
$latest = $musicItems->first();
?>
 <div id="home_p-menu--music-board" class="home_p-board p-fixed p-all f-column j-center a-center">
    <?php if($latest): ?>
        <div class="flex f-column">
            <p class="t-grot t-xsmall t-uppercase t-center margin-b_small">Escucha el ultimo lanzamiento</p>
            <?php if($cover = $latest->cover()->toFile()): ?>
                <?php snippet('responsive-image', ['image' => $cover, 'ratio' => '1_1', 'sizes' => '50vw']) ?>
            <?php endif ?>
            <p class="t-cond t-large t-uppercase t-center margin-b_med"><?= $latest->title() ?> </p>
            <div class="flex j-center margin-b">
                <?php snippet('streaming-icons') ?>
            </div>
            <p class="t-grot t-xsmall t-uppercase t-center">Escuchalo en todas las plataformas</p>
        </div>
    <?php endif ?>
     </div>
