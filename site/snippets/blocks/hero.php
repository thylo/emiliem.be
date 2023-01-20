<?php
/** @var Kirby\Cms\Block $block */
?>

<div class="c-hero o-wrapper u-padding-large">

    <img
            class="c-hero__img"
            src="<?= $block->hero_image()->toFile()->url() ?>"
            srcset="<?= $block->hero_image()->toFile()->srcset() ?>"/>

</div>