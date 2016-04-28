(function ($) {
    if ($('body').hasClass('home')) {
        $('.post .post-excerpt').each(function(){
            $(this).css({height:$(this).height()});
        });
        $('.post .post-excerpt, .close-button').click(function () {
            var $parentEl = $(this).parents('.home-item');
            var $excerpt = $(this).hasClass('post-excerpt') ? $(this) : $(this).closest('.post').find('.post-excerpt');
            var $content = $(this).siblings('.post-full-content');
            $parentEl.toggleClass('expanded');
            if ($parentEl.hasClass('expanded')) {
                // time to open...
                $excerpt.css({height: 0, opacity: 0});
                setTimeout(function(){
                    $content.delay(500).css({height: $content.children('.content-measuring-wrapper').height(), opacity: 1});
                },500);
            } else {
                $content.css({height: 0, opacity: 0});
                setTimeout(function(){
                    $excerpt.css({height: $excerpt.children('.excerpt-measuring-wrapper').height(), opacity: 1});
                },1000);
            }
        });
    }
})(jQuery);