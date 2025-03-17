// Toggle navigation menu for mobile view
const menuToggleButton = document.getElementById("menu-toggle");
const navLinks = document.getElementById("nav-links");

menuToggleButton.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});

// Add smooth scroll behavior to anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});
