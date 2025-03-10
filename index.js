// Scripte pour le menu burger sur mobile

document.addEventListener("DOMContentLoaded", () => {
  const burgers = document.querySelectorAll(".navbar-burger");
  const menu = document.querySelector("#navbarBasicExample");
  burgers.forEach((burger) => {
    burger.addEventListener("click", () => {
      burger.classList.toggle("is-active");
      menu.classList.toggle("is-active");
    });
  });
});
