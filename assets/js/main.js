(function ($) {
    $('.post .post-excerpt').click(function () {
        var $parentEl = $(this).parents('.home-item');
        $parentEl.addClass('expanded');
    });
})(jQuery);