<?php snippet('header') ?>

<main class="page">
    <h2 id="page-title" class="t-cond t-xlarge t-uppercase padding-t_xsmall margin-b_large"><?= $page->title() ?></h2>

    <ul>
    <?php foreach($galeria as $item): ?>
        <?php $soldOut = $item->sold_out()->toBool(); ?>
        <?php $class = $soldOut ? 't-through' : ''; ?>
        <li>
            <?php if(!$soldOut && $item->tickets()->isNotEmpty()): ?>
                <a href="<?= $item->tickets() ?>" target="_blank" class="tour_p-item margin-b_med grid-xxl">
            <?php else: ?>
                <div class="tour_p-item margin-b_med grid-xxl">
            <?php endif ?>
            <h3 class="t-cond t-body t-uppercase <?= $class ?>"><?= $item->city() ?></h3>
            <p class="t-cond t-body t-uppercase <?= $class ?>"><?= $item->country() ?></p>
            <p class="t-cond t-body t-uppercase <?= $class ?>"><?= $item->venue() ?></p>
            <p class="t-cond t-body t-uppercase <?= $class ?>"><?= $item->date() ?></p>
            <?php if($soldOut): ?>
                <p class="t-cond t-body t-uppercase t-through">Agotado</p>
            <?php else: ?>
                <p class="t-cond t-body t-uppercase t-underline">Comprar</p>
            <?php endif ?>
            <?php if(!$soldOut && $item->tickets()->isNotEmpty()): ?>
                </a>
            <?php else: ?>
                </div>
            <?php endif ?>
        </li>
    <?php endforeach ?>
    </ul>
</main>

<?php snippet('footer') ?>
