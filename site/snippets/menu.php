<?php if (site()->mainMenu()->isNotEmpty()): ?>
    <ul class="o-list-bare c-menu" id="js-menu">
        <li class="o-list-bare__item">
            <a href="/" class="u-padding-small c-menu__logo">
                <?= svg("/assets/img/svg/small-logo.svg") ?>
            </a>
        </li>
        <?php foreach (site()->content()->get("mainMenu")->toPages() as $index => $item): ?>
            <li class="o-list-bare__item c-menu__item menu-item-<?= $index ?>">
                <a href="<?= url($item) ?>" title="Go to <?= $item ?>"
                   class="c-menu__link <?= (site()->page()->id() == $item->id()) ? " active" : "" ?>">
                    <?= $item->title() ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <button class="c-menu-toggle" id="js-menu-toggle">
        <?= svg("/assets/img/svg/menu.svg") ?>
    </button>
    <header class="c-menu c-scroll-menu" id="js-menu-scroll">
        <button class="c-menu-toggle c-scroll-menu__close" id="js-menu-close">
            <?= svg("/assets/img/svg/x.svg") ?>
        </button>
        <ul class="o-list-bare o-list-inline u-margin-none c-menu">
            <li class="o-list-bare__item">
                <a href="/" class="u-padding-small c-menu__logo">
                    <?= svg("/assets/img/svg/small-logo.svg") ?>
                </a>
            </li>
            <?php foreach (site()->content()->get("mainMenu")->toPages() as $item): ?>
                <li class="o-list-bare__item c-menu__item">
                    <a href="<?= url($item) ?>" title="Go to <?= $item ?>"
                       class="c-menu__link <?= (site()->page()->id() == $item->id()) ? " active" : "" ?>">
                        <?= $item->title() ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </header>
<?php endif; ?>