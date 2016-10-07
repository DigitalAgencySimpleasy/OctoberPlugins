if ($('.simpleSlick').index() > -1) {
    switch ($('.simpleSlick').data('layout')) {
        case 'fullside':
            break;

        case 'fullscreen':
            var screenHeight = $(window).height();
            $('.simpleSlick[data-layout = "fullscreen"]').css({height: screenHeight + 'px', overflow: 'hidden'});
            break;

        case 'frame':
            break;

        case 'half':
            break;
    }
    $('.simpleSlick').slick({
        dots: true,
        autoplay: true,
        fade: true,
        pauseOnHover: false,
        autoplaySpeed: 2500
    });
}
