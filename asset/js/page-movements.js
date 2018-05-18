var pagePosition = $("#page-pos-detector");
var pagePositionTitle = $("#page-position-title");

function changePositionTitle(text) {
    pagePositionTitle.fadeOut( 200 , function () {
        pagePositionTitle.html(text).promise().done(function () {
            pagePositionTitle.fadeIn(200);
        });
    } );
}

function changePositionNavigator() {
    $(".scroll-pos-current").each(function () {
        var positionLine = $(this).data('position');
        if (positionLine == pagePosition.val()) {
            $(this).addClass("active-current");
        } else {
            $(this).removeClass("active-current");
        }
    });
}


function goToHomePage() {
    pagePosition.val(0);
    changePositionTitle("HOME");
    changePositionNavigator();
    $("#home-page").fadeIn();
}


function goToPortfolioPage() {
    pagePosition.val(1);
    changePositionTitle("PORTFOLIO");
    changePositionNavigator();
    $("#home-page").fadeOut();
}

function goToContactPage() {
    pagePosition.val(2);
    changePositionTitle("CONTACT");
    changePositionNavigator();
// $("#portfolio-page").fadeOut()
//fade out portfolio page and move on to contact page

}