<?php
/** @var Kirby\Cms\Block $block */
?>
<div class="o-wrapper u-padding-vertical-large">
    <h2 class="c-title-4xl u-margin-bottom"><?= $block->title()->html() ?></h2>
    <div class="u-margin-bottom-large">
        <?= $block->description()->markdown() ?>
    </div>

    <ul class="u-padding-vertical-large o-list-bare c-consulting-services">
        <?php foreach ($block->services()->toStructure() as $service): ?>
            <li class="o-list-bare__item">
                <div class="c-consulting-service">
                    <div class="c-consulting-service__content l-consulting-service">
                        <div class="c-consulting-service__header l-consulting-service__header">
                            <?php if ($service->service_image()->isNotEmpty()): ?>
                                <div class="u-margin-bottom c-consulting-service__image">
                                    <?= $service->service_image()->toFile()->resize(250, 250) ?>
                                </div>
                            <?php endif; ?>
                            <h3 class="c-title-3xl u-margin-bottom c-consulting-service__title"><?= $service->title() ?></h3>
                            <div class="c-service__description"><?= $service->description()->markdown() ?></div>
                        </div>
                        <div class="l-consulting-service__content c-service__prices">
                            <?= snippet('prices', ['prices' => $service->prices()]) ?>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>