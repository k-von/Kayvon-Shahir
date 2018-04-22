document.addEventListener("DOMContentLoaded", function(event) {
<<<<<<< HEAD
=======

  var hamburger = document.getElementById("hamburger");
  hamburger.addEventListener("click", openMenu, false);



>>>>>>> 2be1df4c73922cded96f99906a28f716e755444f

  

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