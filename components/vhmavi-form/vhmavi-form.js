/**
 * vhmavi-form.js
 * Provide the behaviour of a form - its validation and its submission
 */

export { 
    initValidityState,
    inputsValidationSubscribe,
    validators,
    validatorsParameters
} from './vhmavi-form-validation.js';

import {
    formSubmissionSubscribe as fSS
} from './vhmavi-form-submission.js';

import { 
    initValidityState
} from './vhmavi-form-validation.js';

/**
 * Initialize the vhmavi-form-submission with the provided POST service and the 
 * vhmavi-form-validation validity state initialisation function
 * @param postService The post service url to transmit to the vhmavi-form-submission
 */
export function formSubmissionSubscribe(postService) {
    fSS(postService, initValidityState);
}