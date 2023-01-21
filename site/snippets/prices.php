<?php
/** @var Kirby\Cms\FIeld $prices */
?>
<ul class="o-list-bare c-prices">

    <?php foreach ($prices->toStructure() as $price): ?>
        <li class="o-list-bare__item c-prices__item c-price u-padding-small">
            <div class="c-price__description">
                <h4 class="o-flex-layout__item u-margin-bottom-small c-price__title c-title-2xl">
                    <?= $price->title() ?>
                </h4>
                <?= $price->description()->markdown() ?>
            </div>
            <div class="c-price__meta">
                <?php if ($price->duration()->isNotEmpty()): ?>
                    <span class="u-padding-small c-price__duration">
                        <span><?= $price->duration() ?></span>
                        <?= svg("/assets/img/svg/watch.svg") ?>
                    </span>
                <?php endif; ?>
                <span class="u-padding-small c-price__price">
                    <?= $price->price() ?>
                </span>
            </div>
        </li>
    <?php endforeach; ?>

</ul>
