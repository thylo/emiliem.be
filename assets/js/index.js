(function() {
  let last_known_scroll_position = 0;
  let ticking = false;

  const menu = document.getElementById("js-menu-scroll"),
    sections = [...document.querySelectorAll("section")];

  const mod = 3;

  function doSomething(scroll_pos) {
    const navHeight = menu.clientHeight;
    if (navHeight * mod < scroll_pos && !menu.classList.contains("scroll")) {
      menu.classList.add("scroll");
    } else if (
      navHeight * mod > scroll_pos * mod &&
      menu.classList.contains("scroll")
    ) {
      menu.classList.remove("scroll");
    }

    sections.forEach(function(section) {
      const top = section.offsetTop - navHeight,
        bottom = top + section.clientHeight;

      if (scroll_pos >= top && scroll_pos <= bottom) {
        [...menu.querySelectorAll(".c-menu__link")].forEach(link => {
          link.classList.remove("active");
        });
        menu
          .querySelector(`[href='#${section.getAttribute("id")}']`)
          .classList.add("active");
        sections.forEach(link => {
          link.classList.remove("active");
        });
        section.classList.add("active");
      }
    });
  }

  /*
    nav.find('a').on('click', function () {
        var $el = $(this)
            , id = $el.attr('href');

        $('html, body').animate({
            scrollTop: $(id).offset().top - nav_height
        }, 500);

        return false;
    });
*/
  window.addEventListener("scroll", function(e) {
    last_known_scroll_position = window.scrollY;

    if (!ticking) {
      window.requestAnimationFrame(function() {
        doSomething(last_known_scroll_position);
        ticking = false;
      });

      ticking = true;
    }
  });
})();
