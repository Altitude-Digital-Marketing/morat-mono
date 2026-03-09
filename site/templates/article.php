<?php snippet('header') ?>
<?= css(['assets/css/snippets/article-block.css']) ?>
<main class="page">
    <a href="<?= $page->parent()->url() ?>"><p class="t-grot t-small t-uppercase margin-b_small">&larr; Noticias</p></a>

    <h2 id="page-title" class="t-cond t-xlarge t-uppercase padding-t_xsmall margin-b_med"><?= $page->title() ?></h2>

    <p class="t-grot t-small t-uppercase margin-b_large"><?= $page->date()->toDate('d F Y') ?> <?php if($page->category()->isNotEmpty()): ?>| <?= $page->category() ?><?php endif ?></p>

    <?php if($picture = $page->picture()->toFile()): ?>
    <figure class="p-relative ratio-5_4 margin-b_large stop">
        <img id="" class="p-absolute p-all ratio-5_4" src="<?= $picture->resize(600)->url() ?>" srcset="<?= $picture->srcset('default') ?>" sizes="(min-width: 1024px) 66vw, 100vw" loading="lazy" alt="">
    </figure>
    <?php endif ?>

    <article class="t-grot t-body margin-b_large">
        <?= $page->editorial()->kirbytext() ?>
    </article>
</main>

<?php snippet('footer') ?>
