(function ($) {
    "use strict";
  
    // Update Header Style and Scroll to Top
    // function headerStyle() {
    //     if ($(".main-header").length) {
    //         var windowpos = $(window).scrollTop();
    //         var siteHeader = $(".main-header");
    //         var headerUpper = $(".main-header .header-upper");
    //         var sticky_header = $(".main-header .sticky-header");
    //         if (windowpos > 120) {
    //             siteHeader.addClass("fixed-header");
    //             headerUpper.addClass("nav-white");
    //             sticky_header.addClass("animated slideInDown");

    //             $('#dLogo').attr('src', '/frontend/images/logo-dark.png');

    //         } else {
    //             siteHeader.removeClass("fixed-header");
    //             headerUpper.addClass("nav-white");
    //             sticky_header.removeClass("animated slideInDown");

    //             // change navbar logo
    //             $('#dLogo').attr('src', '/frontend/images/logo-dark.png');
    //         }
    //     }
    // }

    // home
    function headerStyle() {
        if ($(".main-header").length) {
            var windowpos = $(window).scrollTop();
            var siteHeader = $(".main-header");
            var headerUpper = $(".main-header .header-upper");
            var sticky_header = $(".main-header .sticky-header");
            if (windowpos > 120) {
                siteHeader.addClass("fixed-header");
                headerUpper.addClass("nav-white");
                sticky_header.addClass("animated slideInDown");

                $('#dLogo').attr('src', '/frontend/images/logo-dark.png');

            } else {
                siteHeader.removeClass("fixed-header");
                headerUpper.removeClass("nav-white");
                sticky_header.removeClass("animated slideInDown");

                // change navbar logo
                $('#dLogo').attr('src', '/frontend/images/logo-white.png');
            }
        }
    }

    headerStyle();

    $(window).on("scroll", function () {
        headerStyle();
    });

    $('.gallery-item').click(function () {

        // open modal gallery
        $('#produkModal').modal('show');

    });

})(window.jQuery);
