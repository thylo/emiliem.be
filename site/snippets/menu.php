<?php if (site()->mainMenu()->isNotEmpty()): ?>
    <button class="c-menu-toggle" id="js-menu-toggle">
        <?= svg("/assets/img/svg/menu.svg") ?>
    </button>
    <header class="c-menu" id="js-menu">
        <button class="c-menu-toggle c-menu__close" id="js-menu-close">
            <?= svg("/assets/img/svg/x.svg") ?>
        </button>
        <ul class="o-list-bare o-list-inline u-margin-none c-menu__content">
            <li class="o-list-bare__item c-menu__item c-menu-item c-menu-item--logo">
                <a href="/" class="c-menu-item__link">
                    <?= svg("/assets/img/svg/small-logo.svg") ?>
                </a>
            </li>
            <?php foreach (site()->content()->get("mainMenu")->toPages() as $item): ?>
                <li class="o-list-bare__item c-menu__item c-menu-item">
                    <a href="<?= url($item) ?>" title="Go to <?= $item ?>"
                       class="c-menu-item__link <?= (site()->page()->id() == $item->id()) ? " active" : "" ?>">
                        <?= $item->title() ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </header>
<?php endif; ?>