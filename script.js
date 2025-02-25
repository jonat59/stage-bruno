document.querySelector(".menu-toggle").addEventListener("click", function () {
  document.querySelector(".menu").classList.toggle("show");
});

/* Ajoute un style pour le mode mobile */
document.addEventListener("DOMContentLoaded", function () {
  const menu = document.querySelector(".menu");
  menu.classList.add("hidden");

  document.querySelector(".menu-toggle").addEventListener("click", function () {
    menu.classList.toggle("hidden");
  });
});
