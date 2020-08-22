wph.rbtxt = (function($){

    function init_rainbow_txt() {
        $('.anim-text-flow').html(function(i, html) {
            var chars = $.trim(html).split("");
            return '<span>' + chars.join('</span><span>') + '</span>';
        });
    }

    // Return public functions.
    return {
        init_rainbow_txt: init_rainbow_txt
    }

})(jQuery);


