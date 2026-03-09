<?php
/** @var \Kirby\Cms\File $image */
/** @var string $ratio - e.g. '1_1', '5_4', '16_9' */
/** @var string $sizes - e.g. '50vw', '100vw' */
$ratio = $ratio ?? '1_1';
$sizes = $sizes ?? '50vw';
$alt = $alt ?? '';
?>
<img id="" class="<?php if($ratio): ?>ratio-<?= $ratio ?><?php endif ?>" src="<?= $image->resize(600)->url() ?>" srcset="<?= $image->srcset('default') ?>" sizes="<?= $sizes ?>" loading="lazy" alt="<?= $alt ?>">
