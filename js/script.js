/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function ($) {

    // NAVI AUF UND ZU

    var nav_toggle = $(".nav_toggle");
    var search_toggle = $(".search_toggle");

    function toggle_menu() {

        $("body").toggleClass('menu_open');
        $("html").toggleClass('menu_open');

        if ($("body").hasClass("menu_open") == true) {
            $(".type").text("CLOSE");
        }
        else {
            $(".type").text("MENU");
        }

    }

    nav_toggle.click(function () {

        toggle_menu();

        $(".nav_container_mobile li").each(function (i) {
            var div = $(this);
            setTimeout(function () {
                div.toggleClass("animate_menu");
            }, i * 40);
        });

        return false;
    });


    // SEARCH TOGGLE
    function toggle_search() {

        $("body").toggleClass('search_open');

    }

    search_toggle.click(function () {

        toggle_search();

        return false;
    });


    ///////////////////////
    // switch header style
    ///////////////////////
    var scrolled_class = "scrolled";

    $(function () {
        var pageHeader = 150;

        $(window).scroll(function () {

            var scroll = getCurrentScroll();
            if (scroll >= pageHeader) {
                $('body').addClass(scrolled_class);
            }
            else {
                $('body').removeClass(scrolled_class);
            }

        });

        // function to geht scrol position
        function getCurrentScroll() {
            return window.pageYOffset || document.documentElement.scrollTop;
        }
    });


    // add mobile nav list toggles
    $(".mobile-nav > li").prepend('<a href="#" class="sub_menu-toggle"></a>');

    $(".sub_menu-toggle").on('click', function (event) {

        var target = $(this).closest("li").find("ul");

        if (target.hasClass("menu-active") == true) {

            target.removeClass("menu-active");
            $(this).removeClass("toggle-active");
            event.preventDefault();
        }

        else {

            $(".mobile-nav ul").removeClass("menu-active");
            $(".mobile-nav .sub_menu-toggle").removeClass("toggle-active");

            target.addClass("menu-active");
            $(this).addClass("toggle-active");
            event.preventDefault();

        }
    });


}); /* end of as page load scripts */    