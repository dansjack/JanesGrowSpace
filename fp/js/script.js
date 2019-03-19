



//---START NAV BAR SCRIPTS---//
// When the user scrolls the page, execute stickyNav
window.onscroll = function() {stickyNav()};

// Get the navbar
var navbar = document.getElementById("navbar");
var mobile = window.matchMedia("(min-width: 769px)");


// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position.
function stickyNav() { // Remove "sticky" when you leave the scroll position
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

// reload the page on load -- band-aid for issue where sticky nav appears
function MyReload() // at unexpected offset until the user reloads the page
{
    window.location.reload();
}

//---END NAV BAR SCRIPTS---//

//---START ACCORDION FAQ SCRIPT---//
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

//---END ACCORDION FAQ SCRIPT---//

//---START CHECKBOX FILTER SCRIPT---//
$(function () {
    $(':checkbox').change(function () {

        // Get a string of classes for each filter
        var sizes = $('.sizes input:checked').map(function(){ return "." + this.value; }).get().join();
        var lightLevel = $('.light-level input:checked').map(function(){ return "." + this.value; }).get().join();
        var misc = $('.misc input:checked').map(function(){ return "." + this.value; }).get().join();


        // Start with all plants
        var plants =  $('.box');

        // Size filter
        if(sizes) {
            plants = plants.filter(sizes);
        }

        // Light level filter
        if(lightLevel) {
            plants = plants.filter(lightLevel);
        }

        // Miscellaneous filter
        if(misc) {
            plants = plants.filter(misc);
        }

        // Hide all
        $('.box').hide();
        // Show filtered results
        plants.show();
        console.log(plants.length);
    });
});
//---END CHECKBOX FILTER SCRIPT---//
