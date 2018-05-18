var pagePosition = $("#page-pos-detector");


function changePositionNavigator(positionLine) {
    if (positionLine == pagePosition.val()) {
        $(this).addClass("active-current");
    } else {
        $(this).removeClass("active-current");
    }
}


function goToHomePage() {
    pagePosition.val(0);
    $("#home-page").fadeIn();
    $(".scroll-pos-current").each(function () {
        var positionLine = $(this).data('position');
        changePositionNavigator(positionLine);
    });
}


function goToPortfolioPage() {
    pagePosition.val(1);
    $("#home-page").fadeOut();
    $(".scroll-pos-current").each(function () {
        var positionLine = $(this).data('position');
        changePositionNavigator(positionLine);
    });
}


