// pada file scripts/script.js
var nav = document.querySelector("nav");

window.addEventListener("scroll", function () {
  if (window.pageYOffset > 100) {
    nav.classList.add("navbar-dark", "navbar-hijau");
  } else {
    nav.classList.remove("navbar-dark", "shadow", "navbar-hijau");
  }
});

$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
  });
});
