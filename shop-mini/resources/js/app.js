// public/js/app.js

document.addEventListener("DOMContentLoaded", () => {
  console.log("✅ App loaded");

  // Header shadow khi scroll
  const header = document.querySelector("header");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 10) header.classList.add("scrolled");
    else header.classList.remove("scrolled");
  });

  // Fade-in toàn trang
  document.body.classList.add("fade-in");
});