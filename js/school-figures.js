/**
 * school-figures.js
 * This file update the labels, paragraphs or spans that need some figures about the school.
 */

const schoolFigures = {
    'foundationYear': 2010,
    'nbStudents': 242,
    'feesExemptedPercentage': 80,
    'nbBoarders': 42,
    'nbTeachers': 36,
    'nbSponsors': 75
};

// Update all the figures in the document
$(document).ready(() => {
    $('.vhmavi-figure-foundation-year').html(schoolFigures.foundationYear);
    $('.vhmavi-figure-nb-students').html(schoolFigures.nbStudents);
    $('.vhmavi-figure-fees-exempted-percentage').html(schoolFigures.feesExemptedPercentage);
    $('.vhmavi-figure-nb-boarders').html(schoolFigures.nbBoarders);
    $('.vhmavi-figure-nb-teachers').html(schoolFigures.nbTeachers);
    $('.vhmavi-figure-nb-sponsors').html(schoolFigures.nbSponsors);
});