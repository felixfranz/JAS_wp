jQuery(document).ready((function($){var e=$(".nav_toggle"),t=$(".search_toggle");e.click((function(){return $("body").toggleClass("menu_open"),$("html").toggleClass("menu_open"),1==$("body").hasClass("menu_open")?$(".type").text("CLOSE"):$(".type").text("MENU"),$(".nav_container_mobile li").each((function(e){var t=$(this);setTimeout((function(){t.toggleClass("animate_menu")}),40*e)})),!1})),t.click((function(){return $("body").toggleClass("search_open"),!1}));var n="scrolled";$((function(){$(window).scroll((function(){(window.pageYOffset||document.documentElement.scrollTop)>=150?$("body").addClass(n):$("body").removeClass(n)}))})),$(".mobile-nav > li").prepend('<a href="#" class="sub_menu-toggle"></a>'),$(".sub_menu-toggle").on("click",(function(e){var t=$(this).closest("li").find("ul");1==t.hasClass("menu-active")?(t.removeClass("menu-active"),$(this).removeClass("toggle-active"),e.preventDefault()):($(".mobile-nav ul").removeClass("menu-active"),$(".mobile-nav .sub_menu-toggle").removeClass("toggle-active"),t.addClass("menu-active"),$(this).addClass("toggle-active"),e.preventDefault())}))}));