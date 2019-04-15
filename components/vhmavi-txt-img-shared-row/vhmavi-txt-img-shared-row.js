/**
 * vhmavi-txt-img-shared-row.js
 * Provide the process for initialising row that contains image facing text
 * The image fill its full columns and do not change container height
 */

// Resize the image in text with image rows so the image height depends on the text height
$(window).resize(() => {
    $('.row.vhmavi-txt-img-shared-row').each(function() {
        const $vhmaviTextColJqEl = $(this).children('.vhmavi-text-col');
        const $vhmaviImgColJqEl = $(this).children('.vhmavi-img-col');

        // Compute the height of all the elements inside the text column
        let vhmaviTextColHeight = 0;

        $($vhmaviTextColJqEl).children().each((index, $vhmaviTextColChildHTMLEl) => {
            vhmaviTextColHeight += $($vhmaviTextColChildHTMLEl).outerHeight(true);
        });

        // Resize the image column
        $($vhmaviImgColJqEl).height(vhmaviTextColHeight + 80);
    });
});

/**
 * Trigger the resize event so they are called at least one time
 * It avoids to have unexpected display when we load the page from its middle (and not top)
 * (ex : when we reopen our browser keeping the tabs active or quick refreshing the page)
 */
$(window).trigger('resize');