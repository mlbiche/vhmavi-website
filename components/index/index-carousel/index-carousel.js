/**
 * Scripts proper to the home page carousel (index-carousel.php)
 */

/**
 * IMPORTANT NOTE : "this" and arrow functions
 * Here, "this" refers to the module so it is "window".
 * So we could do $(this) as we are doing $(window)
 * See more on next IMPORTANT NOTE...
 */

// Resize the carousel height according to the window height
$(window).resize(function() {
    /**
     * IMPORTANT NOTE : "this" and arrow functions
     * Here, "this" refers to "window" as the calling object :
     * ($(window).resize(function() {
     *    We are here, the calling object is the above $(window)
     * })).
     * We use $(this) to be able to use jQuery functions height() and width()
     * 
     * Why are we using function() {...} (normal) and not () => {...} (arrow) as in other
     * places in the code ?
     * () => {...} is a more recent (ES6) and concise syntax for functions. Let's say it is
     * better.
     * But it has a different behaviour with "this" keyword. In case of using "this" inside
     * arrow function, it refers to the surrounding code. Here the surrounding code, is the
     * module itself (see above IMPORTANT NOTE). Luckily, here the module (window as said in
     * above IMPORTANT NOTE) and the calling object (window as said just above) are the same.
     * But, it is not always the case and we can face unexpected things.
     * To avoid this unexpected behaviour, let's always use arrow funtions as it is more
     * recent and concise, EXCEPT when there is the use of the "this" keyword inside the body
     * of the function (in this case, use normal function).
     */
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