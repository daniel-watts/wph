
/* WHP JS functions. */
var wph = (function($){

    /**
     * Initialize stuff
     */
    function init()
    {
        search_field_init();
        main_menu_init();
        header_collapse_on_scroll_init();
    }

    function header_collapse_on_scroll_init()
    {
        /**
         * Toggle the header on-scroll
         * Mostly from: https://stackoverflow.com/a/31223774
         */
        let last_scroll_position = 0;
        window.onscroll = function (e) {
            main_menu_close();
            let current_scroll_position = window.pageYOffset || document.documentElement.scrollTop;
            if (current_scroll_position > last_scroll_position){
                $('.site-header').addClass('hide');
            } else {
                $('.site-header').removeClass('hide');
            }
            last_scroll_position = current_scroll_position <= 0 ? 0 : current_scroll_position; // For Mobile or negative scrolling
        }

        $(window).on('resize', function() {

            let win = $(this); //this = window

            // Get the available space.
            let space = win.width() - ($('.search-form').offset().left + $('.search-form').width());

            // Get the width of the menu.
            let menu_width = $('#main-menu').outerWidth();

            // Get the menu items.
            let menu_items = $('#main-menu li');
        });
    }

    function main_menu_init()
    {
        $('#main-menu-toggle').on('click', function(e) {
            e.preventDefault(e);
            main_menu_open();
        });

        $(document).mouseup(function(e) {
            var container = $('#main-menu');

            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                main_menu_close();
            }
        });
    }

    function main_menu_open()
    {
        $('#main-menu').addClass('open');
    }

    function main_menu_close()
    {
        $('#main-menu').removeClass('open');
    }

    function search_field_init()
    {
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

    function table_of_contents_widget(source_container_id, toc_container_id)
    {
        // If the content element exists...
        if ($('#' + source_container_id).length) {
            
            var output = '';
            var i = 0;
            var tags = $(
                // '#' + source_container_id + " h1, " +
                '#' + source_container_id + " h2, " +
                '#' + source_container_id + " h3, " +
                '#' + source_container_id + " h4, " +
                '#' + source_container_id + " h5, " +
                '#' + source_container_id + " h6"
            );

            output += '<h3>Table of Contents</h3>';
            output += '<ul>';

            $.each(tags, function(key, value) {

                var id = 'toch-' + i;
                $('<a id="' + id + '" class="toc-jumplink"></a>').insertBefore(value);

                output += '<li class="toc-header-' + $(value).prop("tagName") + '">';
                output += '<a href="#' + id + '">' + $(value).text() + '</a>';
                output += '</li>';

                i++;
            });

            output += '</ul>';

            $('#' + toc_container_id).html(output);
        }
    }

    // Expose public functions.
    return {
        init: init,
        table_of_contents_widget: table_of_contents_widget
    };
    
})(jQuery);

jQuery( document ).ready(function() {
    wph.init();
});

