/**
 * vhmavi-accordion.js
 * Provide the behaviour of an accordion for hiding/showing content
 */

// On click, open or close the accordion
$('.card.vhmavi-accordion .card-header').click(function() {
    const $accordionJqEl = $($(this).parent()[0]);
    const $accordionBodyJqEl = $accordionJqEl.children('.vhmavi-accordion-body');

    if ($accordionJqEl.hasClass('hide')) {
        // When the accordion is closed, show the body
        $accordionJqEl.removeClass('hide');
        $accordionBodyJqEl.show(400);
    } else {
        // When the accordion is closed, hide the body
        $accordionBodyJqEl.hide(400);
        $accordionJqEl.addClass('hide');
    }
});

