document.addEventListener("DOMContentLoaded", () => {
  const menuItems = document.querySelectorAll(".menu li");
  const fullscreenContainer = document.querySelector(".fullscreen-container");
  const sections = document.querySelectorAll(".fullscreen-content");

  menuItems.forEach(item => {
      item.addEventListener("mouseenter", () => {
          const target = item.getAttribute("data-target");
          
          // Affiche le conteneur plein écran
          fullscreenContainer.classList.add("show");

          // Masque toutes les sections et affiche celle sélectionnée
          sections.forEach(section => {
              section.style.display = section.id === target ? "block" : "none";
          });
      });
  });

  // Cacher le contenu plein écran lorsqu'on quitte la zone
  fullscreenContainer.addEventListener("mouseleave", () => {
      fullscreenContainer.classList.remove("show");
      sections.forEach(section => {
          section.style.display = "none";
      });
  });
});