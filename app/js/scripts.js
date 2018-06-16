$(document).ready(function(){

    var currentMousePos = { x: -1, y: -1 };
    $(document).mousemove(function(event) {
        currentMousePos.x = event.pageX;
        currentMousePos.y = event.pageY;
    });


    $("#main-wrapper").append($("#home-page").show());
    $('.menu-wrapper').click(function(){
        $(".menu").toggleClass('open');
        var active = $(".menu-active");
        var menuItems = $(".menu-items");
        
        if(active.val() == 0) {
            $(".content").css({ "z-index" : "-1"});
            menuItems.css({ "z-index" : "10"});
            active.val(1);
            menuItems.animate({ "margin-left" : "0"});
        } else {
            active.val(0);
            menuItems.animate({"margin-left" : "-45%"} , function () {
                $(".content").css({ "z-index" : "10"});
                menuItems.css({ "z-index" : "9"});
            });
        }
    });

    $(".read-more").hover(function () {
        $(".read-more-p").animate({ "padding-bottom" : "+=10px" });
    } , function () {
        $(".read-more-p").animate({ "padding-bottom" : "-=10px" });
    });

    $("nav li").mouseover(function () {
        $(this).animate({ "padding-left":"+=30px"});
    });

    $("nav li").mouseleave(function () {
        $(this).animate({ "padding-left":"-=30px"});
    })
});