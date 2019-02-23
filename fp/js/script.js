// When the user scrolls the page, execute stickyNav
window.onscroll = function() {stickyNav()};

// Get the navbar
var navbar = document.getElementById("navbar");
var content = document.getElementById("content-start");
var mobile = window.matchMedia("(min-width: 769px)");



// Get the offset position of the navbar
var sticky = navbar.offsetTop;
// var sticky = content.offsetTop;


// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyNav() {
    if (window.pageYOffset >= sticky && mobile.matches) {
        navbar.classList.add("sticky");
        navbar.classList.remove("un-sticky");

    } else {
        navbar.classList.remove("sticky");
        navbar.classList.add("un-sticky");



    }
}

function responsiveNav() {
    var x = document.getElementById("navbar");
    if (x.className === "navbar navbar-scroll-color" || x.className === "navbar navbar-scroll-color un-sticky") {
        x.className += " responsive";
    } else {
        x.className = "navbar navbar-scroll-color";
    }
}

