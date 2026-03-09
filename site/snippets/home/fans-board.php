<?php
$galleryPage = page('fans/gallery');
$files = $galleryPage ? $galleryPage->files()->limit(12) : new \Kirby\Cms\Files();
?>
 <div id="home_p-menu--fans-board" class="home_p-board p-fixed p-all f-column j-center a-center">
    <ul class="grid-xl">
        <?php foreach($files as $file): ?>
            <?php snippet('responsive-image', ['image' => $file, 'ratio' => '1_1', 'sizes' => '25vw']) ?>
        <?php endforeach ?>
    </ul>
     </div>
