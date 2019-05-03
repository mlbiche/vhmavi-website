/**
 * vhmavi-form.js
 * Provide the behaviour of a form - its validation and its submition
 */

export { 
    initValidityState,
    inputsValidationSubscribe,
    validators,
    validatorsParameters
} from './vhmavi-form-validation.js';

import {
    formSubmitionSubscribe as fSS
} from './vhmavi-form-submition.js';

import { 
    initValidityState
} from './vhmavi-form-validation.js';

/**
 * Initialize the vhmavi-form-submition with the provided POST service and the 
 * vhmavi-form-validation validity state initialisation function
 * @param postService The post service url to transmit to the vhmavi-form-submition
 */
export function formSubmitionSubscribe(postService) {
    fSS(postService, initValidityState);
}