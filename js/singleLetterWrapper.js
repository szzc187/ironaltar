(function($){
    $.fn.removeOrphans = function(){
        if($(this).length > 0) {
            var $html = $(this).html();
            $html = $html.replace(/(\s)([\S])[\s]+/g, "$1$2&nbsp;");
             $(this).empty().html($html);
        }
    }
})(jQuery);