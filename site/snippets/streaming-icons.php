<?php
$platforms = [
    'spotify' => 'Spotify',
    'youtube' => 'YouTube',
    'apple_music' => 'Apple Music',
    'amazon' => 'Amazon Music',
    'souncloud' => 'SoundCloud',
    'tidal' => 'Tidal',
];
?>
<?php foreach($platforms as $key => $label): ?>
    <?php $iconFile = $key === 'amazon' ? 'amazon_music' : ($key === 'souncloud' ? 'soundcloud' : $key); ?>
    <img class="icon-height f-margin" src="<?= url('assets/media/icons/' . $iconFile . '.svg') ?>" alt="<?= $label ?>">
<?php endforeach ?>
