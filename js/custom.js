document.addEventListener("DOMContentLoaded", function(event) {

  var hamburger = document.getElementById("hamburger");
  hamburger.addEventListener("click", openMenu, false);





});

function openMenu(event) {

  myNav = document.getElementsByTagName("nav")[0];

  if (myNav.className == "close-menu") {
    hamburger.className = "ham-open";
    myNav.className = "open-menu";
  } else {
    hamburger.className = "";
    myNav.className = "close-menu";
  }
}