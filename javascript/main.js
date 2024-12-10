//responsive navigation
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");
navLink.forEach((n) => n.addEventListener("click", closeMenu));

function closeMenu() {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
}

//sticky navigation
const navbar = document.querySelector(".header");

window.addEventListener("scroll", () => {
  if (window.scrollY > 200) {
    navbar.classList.add("sticky");
    navbar.style.backgroundColor = "rgb(240, 240, 240)";
    navbar.style.borderBottom = "none";
  } else {
    navbar.classList.remove("sticky");
    navbar.style.backgroundColor = "transparent";
    navbar.style.borderBottom = "1px solid #E2E8F0";
  }
});

//scroll to top btn
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    scrollToTopBtn.classList.add("show");
  } else {
    scrollToTopBtn.classList.remove("show");
  }
}

window.onscroll = scrollFunction;

scrollToTopBtn.addEventListener("click", function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// swiper js
document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".swiper-container", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 15000,
      disableOnInteraction: false,
    },
    effect: "slide",
    speed: 900,
  });
});
