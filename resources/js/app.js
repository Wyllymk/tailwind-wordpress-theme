document.addEventListener("DOMContentLoaded", function () {
  //Icons
  const sunIcon = document.getElementById("sun");
  const moonIcon = document.getElementById("moon");
  const iconDiv = document.getElementById("icon-div");

  //Theme vars
  const userTheme = localStorage.getItem("theme");
  const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

  //Icon Toggling
  const iconToggle = () => {
    moonIcon.classList.toggle("hidden");
    sunIcon.classList.toggle("hidden");
  };

  //Initial Theme Check
  const themeCheck = () => {
    if (userTheme === "dark" || (!userTheme && systemTheme)) {
      document.documentElement.classList.add("dark");
      moonIcon.classList.add("hidden");
      return;
    }
    sunIcon.classList.add("hidden");
  };

  // Manual Switch Theme
  const switchTheme = () => {
    if (document.documentElement.classList.contains("dark")) {
      document.documentElement.classList.remove("dark");
      localStorage.setItem("theme", "light");
      iconToggle();
      return;
    }
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
    iconToggle();
  };

  // Call theme on button click
  iconDiv.addEventListener("click", () => {
    switchTheme();
  });

  //Invoke theme check on initial load
  themeCheck();
});

// Navigation toggle
window.addEventListener("load", function () {
  const main_navigation = document.querySelector("#primary-menu");
  const open_menu_button = document.querySelector("#primary-menu-toggle");
  const close_menu_button = document.querySelector("#primary-menu-close");

  open_menu_button.addEventListener("click", function (e) {
    e.preventDefault();
    main_navigation.classList.remove("hidden");
    open_menu_button.classList.add("hidden");
    close_menu_button.classList.remove("hidden");
  });

  close_menu_button.addEventListener("click", (e) => {
    e.preventDefault();
    main_navigation.classList.add("hidden");
    open_menu_button.classList.remove("hidden");
    close_menu_button.classList.add("hidden");
  });
});

// Effects on scroll -navigation
window.addEventListener("scroll", function () {
  const navigation = document.getElementById("header");
  const scrollPosition = window.scrollY;

  // Change the scroll threshold to a value that suits your design
  const scrollThreshold = 100;

  if (scrollPosition > scrollThreshold) {
    // Add Tailwind CSS classes to change background color, border, and box shadow
    navigation.classList.remove("border-transparent");
    navigation.classList.add("border-b", "dark:border-slate-900", "dark:shadow-[3px_1px_10px_2px_rgba(59,7,100,0.5)]", "shadow-md");
  } else {
    // Restore the initial Tailwind CSS classes
    navigation.classList.remove("border-b", "dark:border-slate-900", "dark:shadow-[3px_1px_10px_2px_rgba(59,7,100,0.5)]", "shadow-md");
    navigation.classList.add("border-transparent");
  }
});
