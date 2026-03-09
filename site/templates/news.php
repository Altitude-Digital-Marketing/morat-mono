<?php snippet('header') ?>
<?= css(['assets/css/snippets/article-block.css']) ?>
<main class="page">
    <h2 id="page-title" class="t-cond t-xlarge t-uppercase padding-t_xsmall">Noticias</h2>
    <nav class="flex f-wrap margin-t margin-b_large a-center">
        <span class="margin-r_small"><img src="<?= url('assets/media/icons/filter.svg') ?>" class="icon" alt="Filter News"></span>
        <?php
        $categories = $page->categories()->split(',');
        $i = 0;
        foreach($categories as $cat):
            $cat = trim($cat);
        ?>
            <?php if($i > 0): ?>
                <span class="t-grot t-small t-uppercase">&nbsp;&bull;&nbsp;</span>
            <?php endif ?>
            <a href="<?= $page->url() ?>/typology:<?= $cat ?>" class="t-grot t-small t-uppercase"><?= $cat ?></a>
        <?php $i++; endforeach ?>
    </nav>

    <?php
    $articles = $page->children()->listed()->sortBy('date', 'desc');
    // Filter by category if requested
    $typology = param('typology');
    if($typology) {
        $articles = $articles->filterBy('category', $typology);
    }
    ?>

    <ul class="grid-xxl">
        <?php foreach($articles as $article): ?>
            <li class="news_p-item grid-xl margin-b_large"><?php snippet('news/article-item', ['article' => $article]) ?></li>
        <?php endforeach ?>
    </ul>
</main>

<?php snippet('footer') ?>
