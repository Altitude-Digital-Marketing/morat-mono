<?php snippet('header') ?>

<main class="page">
    <a href="<?= $page->parent()->url() ?>"><h2 id="page-title" class="t-cond t-xlarge t-uppercase padding-t_xsmall margin-b_large">Videos</h2></a>

    <ul>
        <?php foreach($page->videos()->toStructure() as $video): ?>
            <?php
            $ytUrl = $video->link()->value();
            $ytId = '';
            if($ytUrl) {
                $ytId = str_replace(['https://youtu.be/', 'https://www.youtube.com/watch?v='], '', $ytUrl);
                $ytId = explode('?', $ytId)[0];
                $ytId = explode('&', $ytId)[0];
            }
            ?>
            <li class="margin-b_large">
                <p class="t-cond t-body t-uppercase margin-b_small"><?= $video->title() ?></p>
                <?php if($ytId): ?>
                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/<?= $ytId ?>" title="<?= $video->title() ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <?php endif ?>
            </li>
        <?php endforeach ?>
    </ul>
</main>

<?php snippet('footer') ?>
