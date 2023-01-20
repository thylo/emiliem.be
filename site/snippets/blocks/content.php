<?php
/** @var Kirby\Cms\Block $block */
?>
<div class="c-split" style="--bg-image:url(<?= $block->section_image()->toFile()->url() ?>)">
    <div class="c-split__wrapper">
        <div class="o-wrapper u-padding-vertical-huge">
            <div class="o-layout">
                <div class="o-layout__item u-1/2@tablet u-1/2@desktop">
                    <div>
                        <h2 class="c-title-4xl u-margin-bottom-large"><?= $block->title() ?></h2>
                        <?= $block->body()->markdown() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

