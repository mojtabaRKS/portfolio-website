// $('.read-more').hover(function () {
//     var $this = $('.read-more-p');
//     $this.toggle({
//         'width' : '14%',
//         'padding-bottom' : '1.5%',
//         'max-width': 'inherit',
//         'border-bottom' : '2px solid black' ,
//         'font-style' : 'bold'
//     });
// });

$(document).ready(function(){
    
    $('.menu-wrapper').click(function(){
        $(".menu").toggleClass('open');
        var active = $(".menu-active");
        if(active.val() == 0) {
            $(".content").css({ "z-index" : "-1"});
            $(".menu-items").css({ "z-index" : "10"});
            active.val(1);
            $(".menu-items").animate({
                "margin-left" : "0"
            });
        } else {
            active.val(0);
            $(".menu-items").animate({
                "margin-left" : "-45%"
            } , function () {
                $(".content").css({ "z-index" : "10"});
                $(".menu-items").css({ "z-index" : "9"});
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
    })



});