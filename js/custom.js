document.addEventListener("DOMContentLoaded", function (event) {

    var hamburger = document.getElementById("hamburger");
    hamburger.addEventListener("click", function (event) {

        var myMenu = document.getElementById("menu");

        if (myMenu.className == "close-menu") {
            hamburger.className = "ham-open";
            myMenu.className = "open-menu";
        } else {
            hamburger.className = "";
            myMenu.className = "close-menu";
        }
    }, false);


});
