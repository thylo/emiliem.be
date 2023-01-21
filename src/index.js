import "./scss/emiliem.scss";

let last_known_scroll_position = 0;
let ticking = false;
let scrollMenu;

const menu = document.getElementById("js-menu"),
  toggle = document.getElementById("js-menu-toggle"),
  close = document.getElementById("js-menu-close"),
  sections = [...document.querySelectorAll("section")];

if (menu){
  scrollMenu = menu.cloneNode(true);
  scrollMenu.classList.add('c-menu--scroll');
  menu.parentElement.appendChild(scrollMenu);
}

if (toggle && close) {
  toggle.addEventListener("click", (e) => {
    console.log("click");
    e.preventDefault();
    e.stopPropagation();
    menu.classList.add("visible");
  });

  close.addEventListener("click", (e) => {
    console.log("click");
    e.preventDefault();
    e.stopPropagation();
    menu.classList.remove("visible");
  });
}

const mod = 3;

function doSomething(scroll_pos) {
  const navHeight = menu.clientHeight;
  if (navHeight * mod < scroll_pos && !menu.classList.contains("scroll")) {
    scrollMenu.classList.add("scroll");
  } else if (
    navHeight * mod > scroll_pos * mod &&
      scrollMenu.classList.contains("scroll")
  ) {
    scrollMenu.classList.remove("scroll");
  }
}

window.addEventListener("scroll", function (e) {
  last_known_scroll_position = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(function () {
      doSomething(last_known_scroll_position);
      ticking = false;
    });
    ticking = true;
  }
});
