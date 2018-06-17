// initialize paroller.js and set attributes
$(document).ready(function () {
    $(".tilt-js").tilt({
        maxTilt: 5,
        perspective: 1000
    });

    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene , {
        relativeInput: true
    });


    $('#fullpage').fullpage();
});

