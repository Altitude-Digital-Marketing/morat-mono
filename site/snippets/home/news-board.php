<?php
$newsPage = page('news');
$articles = $newsPage ? $newsPage->children()->listed()->sortBy('date', 'desc')->limit(3) : new \Kirby\Cms\Pages();
?>
 <div id="home_p-menu--news-board" class="home_p-board p-fixed p-all f-column j-center a-center">
    <?php foreach($articles as $article): ?>
        <div class="home_p-news_b--article grid-m margin-b_med">
            <?php if($picture = $article->picture()->toFile()): ?>
                <?php snippet('responsive-image', ['image' => $picture, 'ratio' => '5_4', 'sizes' => '30vw']) ?>
            <?php endif ?>
            <div class="flex f-column j-between">
                <p class="t-cond t-medium t-uppercase"><?= $article->title() ?></p>
                <p class="t-grot t-small t-uppercase">Leer mas /</p>
            </div>
        </div>
    <?php endforeach ?>
     </div>
