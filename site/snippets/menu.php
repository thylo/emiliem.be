<?php if (site()->content()->get("mainManu")->isNotEmpty()): ?>
<ul class="o-list-bare c-menu o-list-inline" id="js-menu">

  {% for item in menu %}
  <li class="o-list-bare__item o-list-inline__item c-menu__item menu-item-{{ forloop.index }} {% if item.url == page.url %}active{% endif %}">
    <a href="#{{ item.uid }}" title="Go to {{ item.title }}" class="c-menu__link">
      {{ item.title }}
    </a>
    {% if item.children %}
    {% assign menu = item.children %}
    {% include menu.html %}
    {% endif %}
  </li>
  {% endfor %}
</ul>
<button class="c-menu-toggle" id="js-menu-toggle">
  <img src="/assets/img/svg/menu.svg">
</button>
<header class="c-menu c-scroll-menu" id="js-menu-scroll">
  <button class="c-menu-toggle c-scroll-menu__close" id="js-menu-close">
    <img src="/assets/img/svg/x.svg">
  </button>
  <ul class="o-list-bare o-list-inline u-margin-none">
    <li class="o-list-bare__item o-list-inline__item">
      <a href="/" class="u-padding-small c-menu__logo">
        <img src="/assets/img/svg/small-logo.svg" alt="Emilie M." class="c-menu__svg">
      </a>
    </li>
    {% for item in menu %}
    <li class="o-list-bare__item o-list-inline__item c-menu__item menu-item-{{ forloop.index }} {% if item.url == page.url %}active{% endif %}">
      <a href="#{{ item.uid }}" title="Go to {{ item.title }}" class="c-menu__link">
        {{ item.title }}
      </a>
      {% if item.children %}
      {% assign menu = item.children %}
      {% include menu.html %}
      {% endif %}
    </li>
    {% endfor %}
  </ul>
</header>
<?php endif; ?>