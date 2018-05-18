var pagePosition = $("#page-pos-detector");
var pagePositionTitle = $("#page-position-title");
var mainDiv = $("#main-wrapper");
var homeDiv = $("#home-page");
var portfolioDiv = $("#portfolio-page");
var contactDiv = $("#contact-page");
var aboutDiv = $("#about-page");

function changePositionTitle(text) {
    pagePositionTitle.fadeOut( 200 , function () {
        pagePositionTitle.html(text).promise().done(function () {
            pagePositionTitle.fadeIn(200);
        });
    } );
}

function appendPage(page) {
    mainDiv.fadeOut(200 , function () {
        $(this).html('').promise().done(function () {
            mainDiv.html(page).promise().done(function () {
                page.css({"display": "block"});
                mainDiv.fadeIn();
            });
        })
    });
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
    appendPage(homeDiv);
    homeDiv.tilt({
        maxTilt: 5,
        perspective: 1000
    });
}


function goToPortfolioPage() {
    pagePosition.val(1);
    changePositionTitle("PORTFOLIO");
    changePositionNavigator();
    appendPage(portfolioDiv);
}


function goToContactPage() {
    pagePosition.val(2);
    changePositionTitle("CONTACT");
    changePositionNavigator();
    appendPage(contactDiv);
}


function goToAboutPage() {
    pagePosition.val(3);
    changePositionTitle("ABOUT");
    changePositionNavigator();
    appendPage(aboutDiv);
}


$(document).on("wheel" , function (e) {
    e.preventDefault();
    var pagePosition = $("#page-pos-detector");
    if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
        // Scroll up
        if(pagePosition.val() == 1) {
            goToHomePage();
        } else if (pagePosition.val() == 2) {
            goToPortfolioPage();
        } else if (pagePosition.val() == 3) {
            goToContactPage();
        }
    }
    else {
        // Scroll down
        if(pagePosition.val() == 0) {
            goToPortfolioPage();
        } else if (pagePosition.val() == 1) {
            goToContactPage();
        } else if (pagePosition.val() == 2) {
            goToAboutPage();
        }
    }
});