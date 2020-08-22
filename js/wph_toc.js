wph.toc = (function($){

    function init()
    {
        _table_of_contents_widget('center-col', 'toc-widget');
    }

    /**
     * Main menu
     */
    function _table_of_contents_widget(source_container_id, toc_container_id)
    {
        $('body').addClass('two-col-layout');

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
    
    // Return public functions.
    return {
        init: init
    }

})(jQuery);

// See initialization in `partials/doc_bottom.php`.
