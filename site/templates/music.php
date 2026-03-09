<?php snippet('header') ?>
<?= css(['assets/css/snippets/article-block.css']) ?>
<script defer src="<?= url('assets/js/templates/music.js') ?>?v=2"></script>
<main class="page" data-url="<?= $site->url() ?>">
    <h2 id="page-title" class="t-cond t-xlarge t-uppercase padding-t_xsmall margin-b_large">Musica</h2>

    <?php
    $allSongs = $page->music()->toStructure();
    $latest = $allSongs->first();
    $platforms = [
        'spotify' => ['icon' => 'spotify', 'label' => 'Spotify'],
        'youtube' => ['icon' => 'youtube', 'label' => 'YouTube'],
        'apple_music' => ['icon' => 'apple_music', 'label' => 'Apple Music'],
        'amazon' => ['icon' => 'amazon_music', 'label' => 'Amazon Music'],
        'souncloud' => ['icon' => 'soundcloud', 'label' => 'SoundCloud'],
        'tidal' => ['icon' => 'tidal', 'label' => 'Tidal'],
    ];
    ?>

    <?php if($latest): ?>
    <section id="music_p-highlight" class="margin-b_large">
        <p class="t-grot t-small t-uppercase margin-b_small">Ultimo lanzamiento</p>
        <?php
        $ytLink = $latest->youtube()->value();
        $ytId = '';
        if($ytLink) {
            $ytId = str_replace(['https://youtu.be/', 'https://www.youtube.com/watch?v='], '', $ytLink);
            $ytId = explode('?', $ytId)[0];
            $ytId = explode('&', $ytId)[0];
        }
        ?>
        <?php if($ytId): ?>
        <div class="margin-b_small"><iframe allow="fullscreen" allowfullscreen src="https://www.youtube.com/embed/<?= $ytId ?>"></iframe></div>
        <?php endif ?>
        <div id="music_p-highlight--streaming" class="flex f-column">
            <p class="t-cond t-large t-uppercase"><?= $latest->title() ?>, <?= $latest->year() ?></p>
            <nav class="margin-t_med">
                <div class="flex j-center margin-b">
                    <?php foreach($platforms as $field => $info): ?>
                        <?php if($latest->$field()->isNotEmpty()): ?>
                        <a href="<?= $latest->$field() ?>" target="_blank" class="f-margin"><img class="icon-height" src="<?= url('assets/media/icons/' . $info['icon'] . '.svg') ?>" alt="<?= $info['label'] ?>"></a>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
                <p class="t-grot t-small t-uppercase t-center">Escuchalo en todas las plataformas</p>
            </nav>
        </div>
    </section>
    <?php endif ?>

    <section>
        <?php
        $songsByYear = [];
        $counter = 0;
        foreach($allSongs as $song) {
            $year = $song->year()->value() ?: 'Unknown';
            if(!isset($songsByYear[$year])) $songsByYear[$year] = [];
            $songsByYear[$year][] = $song;
        }
        krsort($songsByYear);
        ?>
        <?php foreach($songsByYear as $year => $songs): ?>
        <ul class="music_p-year margin-b_large">
        <h3 class="t-cond t-xlarge t-uppercase padding-t_xsmall margin-b_med"><?= $year ?></h3>
            <?php $i = 1; foreach($songs as $song): ?>
                <?php $cover = $song->cover()->toFile(); ?>
                <li class="music_p-item grid-xxl margin-b_med" <?php if($cover): ?>data-cover="<?= $cover->url() ?>"<?php endif ?> onclick="musicOverlayOpen(this)" onmouseenter="musicItemEnter(this)" onmousemove="musicItemMove()" onmouseleave="musicItemLeave()">
            <p class="t-cond t-body t-uppercase"><?= $i ?></p>
            <p class="t-cond t-body t-uppercase"><?= $song->title() ?></p>
            <p class="t-cond t-body t-uppercase"><?= $song->duration() ?></p>
            <p class="t-cond t-body t-uppercase"><?= $song->artist() ?></p>
        </li>
            <?php $i++; endforeach ?>
        </ul>
        <?php endforeach ?>
    </section>

    <div id="music_p-overlay" class="p-fixed p-all padding flex f-column j-center" data-status="close">
        <button class="p-absolute" onclick="musicOverlayClose()"><img class="icon" src="<?= url('assets/media/icons/menu-button.svg') ?>" alt="Overlay close button"></button>

        <iframe width="100%" height="auto" src="" title="Song on YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <nav class="p-absolute">
            <div class="flex j-center margin-b">
                <a id="music_p-overlay--spotify" data-status="inactive" href="" target="_blank" class="f-margin"><img class="icon-height" src="<?= url('assets/media/icons/spotify.svg') ?>" alt="Spotify"></a>
                <a id="music_p-overlay--youtube" data-status="inactive" href="" target="_blank" class="f-margin"><img class="icon-height" src="<?= url('assets/media/icons/youtube.svg') ?>" alt="YouTube"></a>
                <a id="music_p-overlay--apple_music" data-status="inactive" href="" target="_blank" class="f-margin"><img class="icon-height" src="<?= url('assets/media/icons/apple_music.svg') ?>" alt="Apple Music"></a>
                <a id="music_p-overlay--amazon_music" data-status="inactive" href="" target="_blank" class="f-margin"><img class="icon-height" src="<?= url('assets/media/icons/amazon_music.svg') ?>" alt="Amazon Music"></a>
                <a id="music_p-overlay--soundcloud" data-status="inactive" href="" target="_blank" class="f-margin"><img class="icon-height" src="<?= url('assets/media/icons/soundcloud.svg') ?>" alt="SoundCloud"></a>
                <a id="music_p-overlay--tidal" data-status="inactive" href="" target="_blank" class="f-margin"><img class="icon-height" src="<?= url('assets/media/icons/tidal.svg') ?>" alt="Tidal"></a>
            </div>
            <p data-status="inactive" class="t-grot t-xsmall t-uppercase t-center">Escuchalo en todas las plataformas</p>
        </nav>
    </div>

    <img id="music_p-cover" class="p-fixed hide">
</main>

<?php snippet('footer') ?>
