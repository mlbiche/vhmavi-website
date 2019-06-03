/**
 * Scripts proper to the home page carousel (index-carousel.php)
 */

// Resize the carousel height according to the window height
$(window).resize(function() {
    const windowHeight = $(this).height();
    const windowWidth = $(this).width();
    const navbarHeight = $('nav.navbar').outerHeight();

    /**
     * Uses this 0.5 ratio so when the screen is really higher than wide, it is still convenient
     * (ex : tablets and smartphones)
     */
    const newHeight = Math.min(0.5 * windowWidth, windowHeight - navbarHeight);

    $('#homeCarousel .carousel-inner .carousel-item').height(newHeight);
});

/**
 * Trigger the resize events so it is called at least one time
 * It avoids to have unexpected display when we load the page from its middle (and not top)
 * (ex : when we reopen our browser keeping the tabs active or quick refreshing the page)
 */
$(window).trigger('resize');

// Scroll down to the index description on carousel control down click
$('.vhmavi-carousel-control-down').click(() => {
    $('html, body').animate({ scrollTop: $('#homeCarousel').height() }, 750);
});