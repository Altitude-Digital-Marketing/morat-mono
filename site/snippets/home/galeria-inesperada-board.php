<?php
$tourPage = page('tour');
$tourItems = $tourPage ? $tourPage->tour()->toStructure() : new \Kirby\Cms\Structure();
$first = true;
?>
 <div id="home_p-menu--galeria_inesperada-board" class="home_p-board p-fixed p-all f-column">
    <p class="t-grot t-xsmall t-uppercase margin-b_small">Proxima Galeria Inesperada:</p>
    <?php foreach($tourItems as $item): ?>
        <?php if($first): ?>
            <div id="home-tour-board--title" class="home_p-tour_b--item flex margin-b">
                <p class="t-cond t-xxlarge t-uppercase"><?= $item->city() ?></p>
                <div class="t-cond t-large t-uppercase margin-l">
                    <?= $item->date() ?><br>
                    <?= $item->year() ?>
                </div>
            </div>
            <?php $first = false; ?>
        <?php else: ?>
            <div class="home_p-tour_b--item grid-xxl margin-b_small">
                <p class="t-cond t-body t-uppercase"><?= $item->city() ?></p>
                <p class="t-cond t-body t-uppercase"><?= $item->date() ?></p>
                <p class="t-cond t-body t-uppercase"><?= $item->year() ?></p>
                <p class="t-cond t-body t-uppercase"><?= $item->venue() ?></p>
            </div>
        <?php endif ?>
    <?php endforeach ?>
     </div>
