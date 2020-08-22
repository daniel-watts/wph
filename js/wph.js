// jQuery Module definition.
var wph = (function($){

    /**
     * Main menu
     */
    function init_main_menu() {

        // Bind to the main menu toggle button.
        $('#main-menu-toggle').on('click', function(e) {
            e.preventDefault(e);
            _main_menu_open();
        });

        // Bind to page scroll.
        $( window ).scroll(function() {
            _main_menu_close();
        });

        // Bind to click off-menu.
        $(document).mouseup(function(e) {
            var container = $('#main-menu');

            // if the target of the click isn't the container nor a descendant of the container, close.
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                _main_menu_close();
            }
        });
    }

    function _main_menu_open() {
        $('#main-menu-toggle').addClass('active');
        $('#main-menu').addClass('active');
    }

    function _main_menu_close() {
        $('#main-menu-toggle').removeClass('active');
        $('#main-menu').removeClass('active');
    }

    /**
     * Header slide
     */
    function init_header_slide() {
        /**
         * Toggle the header on-scroll
         * Mostly from: https://stackoverflow.com/a/31223774
         */
        let last_scroll_position = 0;
        window.onscroll = function (e) {
            _main_menu_close();
            let current_scroll_position = window.pageYOffset || document.documentElement.scrollTop;
            if (current_scroll_position > last_scroll_position){
                $('.page-header').addClass('hide');
            } else {
                $('.page-header').removeClass('hide');
            }
            last_scroll_position = current_scroll_position <= 0 ? 0 : current_scroll_position; // For Mobile or negative scrolling
        }
    }

    // $(window).on('resize', function() {
    //     let win = $(this); //this = window

    //     // Get the available space.
    //     let space = win.width() - ($('.search-form').offset().left + $('.search-form').width());

    //     // Get the width of the menu.
    //     let menu_width = $('#main-menu').outerWidth();

    //     // Get the menu items.
    //     let menu_items = $('#main-menu li');
    // });

    /**
     * Header search
     */
    function init_header_search() {
        if ($('.search-field').val() != '') {
            $('.search-field').addClass('filled');
        }

        $('.search-field').focus(function() {
            $(this).addClass('filled');
        });

        $('.search-field').blur(function() {
            if ($(this).val() == '') {
                $(this).removeClass('filled');
            }
        });
    }
    
    // Return public functions.
    return {
        init_main_menu: init_main_menu,
        init_header_slide: init_header_slide,
        init_header_search: init_header_search
    }

})(jQuery);

// See initializations in `partials/page_footer`.
