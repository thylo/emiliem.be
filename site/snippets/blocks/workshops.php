<?php
/** @var Kirby\Cms\Block $block */
?>
<div class="c-workshops" style="--bg-image:url(<?= $block->background_image()->toFile()->url() ?>)">
  <div class="o-wrapper">
    <div class="c-workshops__content">
      <h2 class="c-title-4xl"><?= $block->title() ?></h2>
      <ul class="o-list-bare">
        <?php foreach ($block->workshops()->toStructure() as $workshop): ?>
          <li class="u-margin-bottom o-list-bare__item c-workshop">
            <h4><?= $workshop->title() ?></h4>
            <div><?= $workshop->description()->markdown() ?></div>
          </li>
        <?php endforeach; ?>
      </ul>
      <?= snippet('prices', ['prices' => $block->prices()]) ?>
    </div>
  </div>
</div>