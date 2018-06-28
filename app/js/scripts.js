$(document).ready(function(){

    var currentMousePos = { x: -1, y: -1 };
    $(document).mousemove(function(event) {
        currentMousePos.x = event.pageX;
        currentMousePos.y = event.pageY;
    });




    $(".read-more").hover(function () {
        $(".read-more-p").animate({ "padding-bottom" : "+=10px" });
    } , function () {
        $(".read-more-p").animate({ "padding-bottom" : "-=10px" });
    });


});