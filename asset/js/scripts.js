$(document).ready(function(){
    
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

    $("nav li").hover(function () {
        $(this).animate({ "padding-left":"+=30px"});
    } , function () {
        $(this).animate({ "padding-left":"-=30px"});
    });
    
    $(document).on("wheel" , function (e) {
        e.preventDefault();
        var pagePosition = $("#page-pos-detector");
        if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
            // Scroll up
            if(pagePosition.val() == 1) {
                goToHomePage();
            } else if (pagePosition.val() == 2) {
                goToPortfolioPage();
            }
        }
        else {
            // Scroll down
            if(pagePosition.val() == 0) {
                goToPortfolioPage();
            } else if (pagePosition.val() == 1) {
                goToContactPage();
            }
        }

    });
});