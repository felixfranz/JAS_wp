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

    // BARRIEREFREI 
    ////////////////////////////////////
    // SETTING UP NAV FOR ACCESIBILITY
    ////////////////////////////////////

    // add aria-expanded to all submenues
    var sub_menu = $(".sub-menu");
    var toplevel_a = $(".primary-nav>li>a");

    sub_menu.attr("aria-expanded", "false");

    // on focus on top-level a
    toplevel_a.on("focus", function () {

        // get sub-menu
        var menu = $(this).closest(".menu-item").find(sub_menu);

        // set state
        var isOpen = false;

        // reset all sub-menus
        sub_menu.css("display", "none");
        sub_menu.attr("aria-expanded", "false");
        sub_menu.removeClass("open");
        $("li").remove(".tab_nav_point");

        me = $(this);

        // on keydown while still top-level
        $(this).on("keydown", function (event) {

            var keycode = (event.keyCode ? event.keyCode : event.which);

            if (keycode == '13') {
                event.preventDefault();

                if (isOpen) {

                    menu.removeClass("open");
                    menu.css("display", "none");
                    menu.attr("aria-expanded", "false");
                    sub_menu.remove(".tab_nav_point");
                    sub_menu.removeClass("open");
                    isOpen = false;
                } else {
                    $("li").remove(".tab_nav_point");
                    me.clone().prependTo(menu);
                    menu.find("> a").wrap('<li class="tab_nav_point"></li>');
                    menu.addClass("open");
                    menu.css("display", "block");
                    menu.attr("aria-expanded", "true");
                    isOpen = true;
                }

            } // end keydown 13 // enter

            if (keycode == '27') {
                event.preventDefault();

                menu.removeClass("open");
                menu.css("display", "none");
                menu.attr("aria-expanded", "false");
                sub_menu.remove(".tab_nav_point");
                sub_menu.removeClass("open");
                isOpen = false;

            } // end keydown 13 // enter

        }); // keydown event

    }); // end focus


    // on focus on sub-level a // to close the sub menu
    $(".sub-menu li a").on("focus", function () {

        // get sub-menu
        var menu = $(this).closest(sub_menu);
        var parent_item = $(this).closest(".menu-item-has-children").find(">a");

        // on keydown while still sub-level
        $(this).on("keydown", function (event) {

            var keycode = (event.keyCode ? event.keyCode : event.which);

            if (keycode == '27') {

                console.log("down");
                event.preventDefault();

                menu.removeClass("open");
                menu.css("display", "none");
                menu.attr("aria-expanded", "false");
                sub_menu.remove(".tab_nav_point");
                sub_menu.removeClass("open");
                isOpen = false;
                parent_item.focus();
            } // end keydown 27 // escape

        }); // keydown event

    }); // end focus

    ////////////////////////////////////
    // END ACCESIBILITY
    ////////////////////////////////////
    




}); /* end of as page load scripts */    