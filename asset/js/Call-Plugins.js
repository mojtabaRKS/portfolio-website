// initialize paroller.js and set attributes
$(document).ready(function () {
    
    
    $("#fullpage").fullpage({
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        verticalCentered: true,
        scrollHorizontally: true
    });
});

$(".tilt-js").tilt({
	maxTilt: 5,
	perspective: 1000
});


// var scene = document.getElementById('scene');
// var parallaxInstance = new Parallax(scene);



// $(".description").tilt({
// 	maxTilt: 5,
// 	perspective: 1000,
// 	transform-style: preserve-3d,
// 	transform: translateZ(20px)
// });
