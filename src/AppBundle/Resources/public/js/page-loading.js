/*
 * Title:   Travelo | Responsive HTML5 Travel Template - Page Loading Js
 * Author:  http://themeforest.net/user/soaptheme
 */

// pace.js should be active

if (typeof Pace != "undefined") {
    var soapPageLoadingContent = false;
    //document.write('<img alt="" src="/communes/web/bundles/app/images/logo.png" style="display: none;">');
    var logoImg = new Image();
    logoImg.src = "/communes/web/bundles/app/images/logo.png";
    var soapPageLoadingProgressInterval = setInterval(function() {
        try {
            if (document.body.className.indexOf("pace-done") != -1) {
                clearInterval(soapPageLoadingProgressInterval);
            }
            if (document.body.className.indexOf("pace-running") == -1) {
                return;
            }
            if (!soapPageLoadingContent) {
                document.getElementsByClassName("pace-activity")[0].innerHTML = '<div class="loading-page style1">' +
                                                '<div class="loading-page-wrapper">' +
                                                    '<div class="container">' +
                                                            '<h1 class="IvoireCommunes">' +
                                                                '<a title="IvoireCommunes" href="#">' +
                                                                    '<img alt="" src="/communes/web/bundles/app/images/logo.png">' +
                                                                '</a>' +
                                                            '</h1>' +
                                                            '<div class="loading-progress-bar block col-sm-10 col-md-9 col-lg-8">' +
                                                                '<div style="width: 1%;" class="loading-progress"></div>' +
                                                            '</div>' +
                                                            '<span class="loading-text">Chargement...</span>' +
                                                    '</div>' +
                                                '</div>' +
                                            '</div>';
                soapPageLoadingContent = true;
            }

            var percent = document.getElementsByClassName("pace-progress")[0].getAttribute("data-progress-text");
            document.getElementsByClassName("loading-progress")[0].style.width = percent;
        } catch(e) {  }
    }, 50);
}