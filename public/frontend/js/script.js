document.addEventListener("DOMContentLoaded", () => {
  // Mobile menu toggle
  const mobileMenuButton = document.querySelector(".mobile-menu-button");
  const mobileNav = document.querySelector(".mobile-nav");

  if (mobileMenuButton && mobileNav) {
    mobileMenuButton.addEventListener("click", () => {
      mobileNav.classList.toggle("active");
      mobileMenuButton.textContent = mobileNav.classList.contains("active") ? "Close" : "Menu";
    });
  }

  // Tabs functionality
  document.querySelectorAll(".tab-button").forEach((button) => {
    button.addEventListener("click", function () {
      const tabsContainer = this.closest(".tabs-container");
      tabsContainer.querySelectorAll(".tab-button, .tab-content").forEach((el) => el.classList.remove("active"));
      this.classList.add("active");
      tabsContainer.querySelector("#" + this.getAttribute("data-tab")).classList.add("active");
    });
  });

  // Donation amount selection
  document.querySelectorAll(".donation-amount").forEach((amount) => {
    amount.addEventListener("click", function () {
      const parentForm = this.closest("form");
      parentForm.querySelectorAll(".donation-amount").forEach((amt) => amt.classList.remove("active"));
      this.classList.add("active");
      parentForm.querySelector(".custom-amount-input").style.display = this.getAttribute("data-amount") === "custom" ? "block" : "none";
    });
  });

  // Active navigation link based on scroll position
  const sections = document.querySelectorAll(".section");
  const navLinks = document.querySelectorAll(".nav-link");

  function setActiveNavLink() {
    let currentSection = "";
    sections.forEach((section) => {
      if (window.pageYOffset >= section.offsetTop - 200) {
        currentSection = section.getAttribute("id");
      }
    });
    navLinks.forEach((link) => {
      link.classList.toggle("active", link.getAttribute("href") === "#" + currentSection);
    });
  }

  window.addEventListener("scroll", setActiveNavLink);
  setActiveNavLink();

  // Form validation
  document.querySelectorAll("form").forEach((form) => {
    form.addEventListener("submit", (event) => {
      let isValid = true;
      form.querySelectorAll("[required]").forEach((field) => {
        field.classList.toggle("error", !field.value.trim());
        if (!field.value.trim()) isValid = false;
      });
      form.querySelectorAll('input[type="email"]').forEach((field) => {
        if (field.value.trim() && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value)) {
          field.classList.add("error");
          isValid = false;
        }
      });
      if (!isValid) {
        event.preventDefault();
        alert("Please fill in all required fields correctly.");
      }
    });
  });

  // Set current year in footer
  const yearElement = document.getElementById("current-year");
  if (yearElement) yearElement.textContent = new Date().getFullYear();

  // Smooth scrolling for navigation links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const targetElement = document.querySelector(this.getAttribute("href"));
      if (targetElement) {
        if (mobileNav.classList.contains("active")) {
          mobileNav.classList.remove("active");
          mobileMenuButton.textContent = "Menu";
        }
        window.scrollTo({ top: targetElement.offsetTop - 80, behavior: "smooth" });
      }
    });
  });
});


