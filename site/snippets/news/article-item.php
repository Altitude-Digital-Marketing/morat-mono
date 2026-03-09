<?php /** @var \Kirby\Cms\Page $article */ ?>
<a href="<?= $article->url() ?>" class="article-block --large grid-xxl">
        <p class="t-grot t-small t-uppercase margin-b_small"><?= $article->date()->toDate('d F Y') ?></p>

        <?php if($picture = $article->picture()->toFile()): ?>
        <figure class="p-relative ratio-5_4 margin-b stop">
                <img id="" class="p-absolute p-all ratio-5_4 " src="<?= $picture->resize(600)->url() ?>" srcset="<?= $picture->srcset('default') ?>" sizes="(min-width: 1024px) 50vw, 100vw" loading="lazy" alt="">
        </figure>
        <?php endif ?>

    <div class="flex f-column">
        <h3 class="t-cond t-large t-uppercase "><?= $article->title() ?></h3>
                <article class="margin-t_xsmall news_p-item--article t-grot t-small"><?= $article->editorial()->toBlocks() ?></article>
                <p class="news_p-item--article t-grot t-small t-uppercase margin-t_med">Leer mas /</p>
    </div>
</a>
