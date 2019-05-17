/**
 * team-direction.js
 * Provide the behaviour of the "learn-more" button for each direction member
 */

const memberNames = [ 'pramod-khakurel', 'saru-khakurel', 'tristan-lecomte' ];

// When a "learn-more" button is clicked, we display the corresponding explanation
$('.vhmavi-member-col .btn.btn-outline-vhmavi').click(function() {
    const $clickedBtnJqEl = $(this);
    let clickedMemberName = '';

    /**
     * Find which member name is corresponding to the clicked button
     * It goes through each member name in the array memberNames and check
     * if this string is inside the button id. If it is, it saves it
     */
    memberNames.forEach(memberName => {
        if ($clickedBtnJqEl.attr('id').includes(memberName)) {
            clickedMemberName = memberName;
        }
    });

    // Get the corresponding explanation column
    const $memberExplanationColJqEl = $('#vhmavi-' + clickedMemberName + '-explanation-col');

    // If the column is already visible, it hides it
    if ($memberExplanationColJqEl.is(':visible')) {
        $memberExplanationColJqEl.hide(400);
        return;
    }
    
    // Here, the explanation column is not already visible
    // Hide other explanation columns
    hideOtherShown(clickedMemberName);

    // And show the explanation column
    $memberExplanationColJqEl.show(400);

    /**
     * Scroll to some position above the "learn-more" button so the displayed text
     * is in the visible part of the screen.
     * It prevent unexpected behaviour on small screens (smartphones), when another
     * explanation columns was shown. The fact of hidding it and showing the new
     * explanation column could finish in an unexpected zone of the screen (the image or
     * button, or in the middle of the text), making the user to scroll to the shown
     * explanation column
     */
    $(document).scrollTop($clickedBtnJqEl.offset().top - 100);
});

/**
 * Check if another explanation is already called and hide it
 * @param memberName The member name that has been clicked
 *  'pramod-khakurel', 'saru-khakurel' or 'tristan-lecomte'
 */
function hideOtherShown(memberName) {
    $('.vhmavi-member-explanation-col').each(function() {
        if (!$(this).attr('id').includes(memberName) && $(this).is(':visible')) {
            $(this).hide();
        }
    });
}