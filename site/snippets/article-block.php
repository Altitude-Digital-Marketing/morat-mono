<?php
/** @var \Kirby\Cms\Page $article */
/** @var string $size - 'large' or 'small' */
$size = $size ?? 'large';
?>
<a href="<?= $article->url() ?>" class="article-block grid-xxl <?= $size === 'large' ? '--large' : '' ?> margin-b_med">
    <?php if($picture = $article->picture()->toFile()): ?>
    <figure class="overflow-hidden">
        <?php snippet('responsive-image', ['image' => $picture, 'ratio' => '5_4', 'sizes' => $size === 'large' ? '50vw' : '30vw']) ?>
    </figure>
    <?php endif ?>
    <div class="flex f-column j-between">
        <p class="t-cond t-medium t-uppercase"><?= $article->title() ?></p>
        <article class="t-grot t-small"><?= $article->editorial()->excerpt(200) ?></article>
        <p class="t-grot t-small t-uppercase">Leer mas /</p>
    </div>
</a>
