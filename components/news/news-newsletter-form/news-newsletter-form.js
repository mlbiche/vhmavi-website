import {
    initValidityState,
    inputsValidationSubscribe,
    formSubmissionSubscribe
} from '../../vhmavi-form/vhmavi-form.js';

// Initialise the validity state array once the document is ready
initValidityState();

// Subscribe to the input validation on change
inputsValidationSubscribe();

// Subscribe to the form submission event
formSubmissionSubscribe('services/subscribe_newsletter.php', 'NewsletterForm');