// When the user scrolls the page, execute stickyNav
window.onscroll = function() {stickyNav()};

// Get the navbar
var navbar = document.getElementById("navbar");
var headerContainer = document.getElementById("hdr-bg-img");
var header = document.getElementById("header");


// Get the offset position of the navbar
// var sticky = navbar.offsetTop;
var sticky = navbar.offsetTop;


// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyNav() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
        // headerContainer.classList.remove("hdr-bg-img");
        // header.classList.add("header-bg-img");

    } else {
        navbar.classList.remove("sticky");
        // headerContainer.classList.add("hdr-bg-img");
        // header.classList.remove("header-bg-img");


    }
}
