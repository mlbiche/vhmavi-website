import {
    initValidityState,
    inputsValidationSubscribe,
    formSubmitionSubscribe
} from '../components/vhmavi-form/vhmavi-form.js';

// Initialise the validity state array once the document is ready
initValidityState();

// Subscribe to the input validation on change
inputsValidationSubscribe();

// Subscribe to the form submition event, providing the post service
formSubmitionSubscribe('services/send_mail.php');

// On suggested subject change
$('#contact-form-suggested-subject').change(function() {
    switch ($(this).val()) {
        case 'children-to-sponsor-subject':
            // Hide the subject input
            $('#contact-form-group-subject').hide();

            $('#contact-form-subject').val('Je souhaite connaître les enfants en attente de parrainage');
            break;
        case 'form-issue-subject':
            // Hide the subject input
            $('#contact-form-group-subject').hide();

            $('#contact-form-subject').val('Je rencontre un problème avec un formulaire du site');
            break;
        case 'sponsor-package-subject':
            // Hide the subject input
            $('#contact-form-group-subject').hide();

            $('#contact-form-subject').val('Je souhaite envoyer un colis à un mon/ma filleul/le');
            break;
        case 'sponsor-cancellation-subject':
            // Hide the subject input
            $('#contact-form-group-subject').hide();

            $('#contact-form-subject').val('Je souhaite résilier mon parrainage');
            break;
        case 'sponsor-change-subject':
            // Hide the subject input
            $('#contact-form-group-subject').hide();

            $('#contact-form-subject').val('Je souhaite changer de formule de parrainage');
            break;
        case 'gear-donation-subject':
            // Hide the subject input
            $('#contact-form-group-subject').hide();

            $('#contact-form-subject').val('Je souhaite faire un don matériel à l\'école');
            break;
        case 'volunteer-subject':
            // Hide the subject input
            $('#contact-form-group-subject').hide();

            $('#contact-form-subject').val('J\'ai une question concernant le bénévolat');
            break;
        case 'other-subject':
            // Show the subject input
            $('#contact-form-group-subject').show();
            
            $('#contact-form-subject').val('');
            break;
    }

    // If the other subject option is selected
    if ($(this).val() == 'other-subject') {
        // Show the subject input
        $('#contact-form-group-subject').show();
    } else {
        // If the subject input is required - the previous selected option was the other subject option
        if ($('#contact-form-subject').prop('required')) {
            // Hide the subject input
            $('#contact-form-group-subject').hide();
        }
    }

    // Trigger the change event for the subject input
    $('#contact-form-subject').trigger('change');
});