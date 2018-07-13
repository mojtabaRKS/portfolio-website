$(window).on('click' , function (e) {
    // if(! $(e.target).closest("description").length) {
    //     $(".skill-description").fadeOut();
    // }
});

$(".skill").click(function () {
    var $excerpt = $(this).find(".excerpt").html();
    var $skillDescription = $(".skill-description");
    $skillDescription.find(".excerpt").html($excerpt);
    $skillDescription.delay(50).fadeIn();
});

$(".skill-description").on('click' , '.fa-window-close' , function () {
    $(".skill-description").fadeOut();
    $(".skill-description").find(".excerpt").html('');
});

$("#click").click(function () {
    var $click = $(this);
    var $menu = $(".menu-wrapper");
    if($click.is(':checked') === true) {

        // show menu
        $menu.fadeIn();
        $("#fp-nav").fadeOut();
        $menu.find("h1").animate({"top" : 0}, 100 , 'easeInOutElastic');
        $click.attr('checked', true);

    } else {

        // hide menu
        $menu.find("h1").animate({"top" : "100px"}, 'easeInOutElastic');
        $menu.delay(600).fadeOut();
        $click.attr('checked', false);
        $("#fp-nav").delay(600).fadeIn();

    }
});

$(".line-1").on('type' , function () {
    $(".line-1").addClass("anim-typewriter");
});


