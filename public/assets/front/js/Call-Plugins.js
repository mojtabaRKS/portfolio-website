// initialize paroller.js and set attributes
$(document).ready(function () {


    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene , {
        relativeInput: true
    });


    $('#fullpage').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: true,
        navigation: true,
        navigationPosition: 'right',
        showActiveTooltip: true,
        slidesNavigation: true,
        slidesNavPosition: 'bottom' ,

        afterLoad: function(){
            if($(this).hasClass("contact-page")) {
                $(".line-1").show();
                $(".line-1").addClass("anim-typewriter");
            }
        }

    });
    $.fn.fullpage.afterLoad();

    $('[data-toggle="tooltip"]').tooltip();

});

$(".js-tilt").tilt({
    maxTilt: 2
});


