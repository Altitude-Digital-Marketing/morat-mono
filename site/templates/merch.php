<?php snippet('header') ?>

<main class="page">
    <h2 id="page-title" class="t-cond t-xlarge t-uppercase padding-t_xsmall margin-b_large">Merch</h2>

    <ul class="grid-xl">
        <?php foreach($page->music()->toStructure() as $item): ?>
            <?php $link = $item->link()->value(); ?>
            <li class="margin-b_large">
                <?php if($link): ?><a href="<?= $link ?>" target="_blank"><?php endif ?>
                    <?php if($picture = $item->picture()->toFile()): ?>
                        <?php snippet('responsive-image', ['image' => $picture, 'ratio' => '1_1', 'sizes' => '25vw']) ?>
                    <?php endif ?>
                    <p class="t-cond t-body t-uppercase margin-t_small"><?= $item->product() ?></p>
                    <p class="t-grot t-small"><?= $item->price() ?>&euro;</p>
                <?php if($link): ?></a><?php endif ?>
            </li>
        <?php endforeach ?>
    </ul>
</main>

<?php snippet('footer') ?>
