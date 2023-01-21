<?php
/** @var Kirby\Cms\Block $block */
?>
<div class="c-workshops" style="--bg-image:url(<?= $block->background_image()->toFile()->url() ?>)">
  <div class="o-wrapper">
    <div class="c-workshops__content">
      <h2 class="c-title-4xl u-margin-bottom"><?= $block->title() ?></h2>
      <ul class="o-list-bare c-workshops__list">
        <?php foreach ($block->workshops()->toStructure() as $workshop): ?>
          <li class="o-list-bare__item c-workshop c-workshops__item">
            <h4 class="c-title-2xl"><?= $workshop->title() ?></h4>
            <div class="u-wysiwig-none c-workshop__price"><?= $workshop->description()->markdown() ?></div>
          </li>
        <?php endforeach; ?>
      </ul>
      <?= snippet('prices', ['prices' => $block->prices()]) ?>
    </div>
  </div>
</div>