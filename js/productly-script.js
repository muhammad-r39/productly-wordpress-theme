"use strict";

const navTrigger = document.querySelector(".menu-icon");

navTrigger.addEventListener("click", function () {
  const nav = document.querySelector(".primary-navigation nav");
  const parent = document.querySelector(".primary-navigation");

  if (parent.classList.contains("open")) {
    // Set max-height to 0 to collapse
    nav.style.maxHeight = "0";
    parent.classList.remove("open");
  } else {
    // Set max-height to scrollHeight to expand
    nav.style.maxHeight = nav.scrollHeight + "px";
    parent.classList.add("open");
  }
});
