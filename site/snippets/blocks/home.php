<?php
/** @var Kirby\Cms\Block $block */
?>
<div class="c-split">
  <div class="c-split__wrapper">
    <div class="o-wrapper u-padding-vertical-huge">
      <div class="o-layout">
        <div class="o-layout__item u-1/2@tablet u-1/2@desktop">
          <div>
            <h1><?= $block->title() ?></h1>
            <?= $block->intro() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--
  <div class="c-home-links">
      {% for link in page.home_links%}
      <div class="c-home-link u-margin-bottom">
          {% include cloudinary.html path=link.image options="w_300,h_300,c_fill,g_face,f_auto" alt=link.title %}
          <div class="u-padding c-home-link__content">
              <h3>{{link.title?></h3>
              <div>{{link.description()?></div>
              <a href="{{link.link?>" class="c-btn c-btn--ghost c-btn--small u-margin-top"><small>En savoir plus</small></a>
          </div>
      </div>
      {% endfor %}
  </div>
  -->
</div>

