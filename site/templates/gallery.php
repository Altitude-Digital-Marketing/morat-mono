<?php snippet('header') ?>
<script defer src="<?= url('assets/js/templates/fans.js') ?>?v=2"></script>
<main class="page">
    <a href="<?= $page->parent()->url() ?>"><h2 id="page-title" class="t-cond t-xlarge t-uppercase padding-t_xsmall">Gallery</h2></a>

    <ul class="grid-xl margin-t_med">
        <?php foreach($page->files() as $file): ?>
            <?php $type = $file->type() === 'video' ? 'video' : 'image'; ?>
            <li class="fans_p-item" data-type="<?= $type ?>" data-url="<?= $file->url() ?>" onclick="fansOverlayOpen(this)">
                <?php if($type === 'video'): ?>
                    <video src="<?= $file->url() ?>" class="ratio-1_1" preload="metadata"></video>
                <?php else: ?>
                    <?php snippet('responsive-image', ['image' => $file, 'ratio' => '1_1', 'sizes' => '25vw']) ?>
                <?php endif ?>
            </li>
        <?php endforeach ?>
    </ul>

    <div id="fans_p-overlay" class="p-fixed p-all padding flex f-column j-center a-center" data-status="close">
        <button class="p-absolute" onclick="fansOverlayClose()"><img class="icon" src="<?= url('assets/media/icons/menu-button.svg') ?>" alt="Close overlay"></button>
        <img class="fans_p-overlay--element hide" src="">
        <video class="fans_p-overlay--element hide" src="" controls></video>
        <nav id="fans_p-overlay--nav" class="p-fixed p-all">
            <button onclick="fansOverlayNav('prev')"><img class="icon" src="<?= url('assets/media/icons/menu-button.svg') ?>" alt="Previous"></button>
            <button onclick="fansOverlayNav('next')"><img class="icon" src="<?= url('assets/media/icons/menu-button.svg') ?>" alt="Next"></button>
        </nav>
    </div>
</main>

<?php snippet('footer') ?>
