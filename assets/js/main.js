(function ($) {

    /*
     * Only run on home page.
     */
    if ($('body').hasClass('home')) {

        /*
         * Set the height of all post excerpts explicitly from its actual height with rendered content.
         */
        $('.post .post-excerpt').each(function(){
            $(this).css({height:$(this).height()});
        });

        /*
         * Handle post expand/contract toggle
         */
        $('.post .post-excerpt, .close-button').click(function () {

            var $parentEl = $(this).parents('.home-item');
            var $excerpt = $(this).hasClass('post-excerpt') ? $(this) : $(this).closest('.post').find('.post-excerpt'); // was the excerpt clicked or the close button?
            var $content = $(this).siblings('.post-full-content');

            $parentEl.toggleClass('expanded');

            if ($parentEl.hasClass('expanded')) {
                $excerpt.css({height: 0, opacity: 0});
                setTimeout(function(){ // delay the second animation
                    $content.delay(500).css({height: $content.children('.content-measuring-wrapper').height(), opacity: 1});
                },500);
            } else {
                $content.css({height: 0, opacity: 0});
                setTimeout(function(){ // delay the second animation
                    $excerpt.css({height: $excerpt.children('.excerpt-measuring-wrapper').height(), opacity: 1});
                },1000);
            }
        });
    }
})(jQuery);