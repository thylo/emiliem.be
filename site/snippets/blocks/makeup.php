<?php
/** @var Kirby\Cms\Block $block */
?>
<div class="o-wrapper u-margin-vertical-huge" style="--bg-image:url(<?= $block->section_image()->toFile()->url() ?>)">
  <div class="c-column-overlay">
    <div class="c-column-overlay__image" >

    </div>
    <div class="c-column-overlay__content">
      <h2 class="c-title-4xl u-margin-bottom-large"><?= $block->title() ?></h2>
      <div class=""><?= $block->description()->markdown() ?></div>
    </div>
  </div>
</div>