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
    if($click.is(':checked') == true) {

        // show menu
        $click.attr('checked', true);

    } else {

        // hide menu
        $click.attr('checked', false);

    }

});


