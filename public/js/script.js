(function ($) {
    $(document).ready(function () {
        $('.calendarMain').bxSlider({
            pager: false,
            controls: true,
            auto: true,
            pause: 10000,
            minSlides: 1,
            maxSlides: 3,
            slideMargin: 45,
            slideWidth: 350,


        });
        /*     $('.videoCurses').slick({
                 centerMode: true,
                 slidesToShow: 3,
             });
     */

        $('audio').audioPlayer();


        $('.bx-viewport').css('height', 'auto');
        $('.bx-viewport').css('min-height', '600px');


    });

})(jQuery);
