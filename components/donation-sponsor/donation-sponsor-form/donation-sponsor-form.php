<!-- 
    donation-sponsor-form.php
    Sponsoring form used in donation-sponsor.php
 -->

<form class="vhmavi-form" novalidate>
    <!-- Display an alert for email sent success -->
    <div class="alert alert-success vhmavi-form-alert-success" role="alert">
        <?php echo $lang['donationSponsor-donationSponsorFormAlertSuccess']; ?>
    </div>
    <!-- Display an alert for email sent failure -->
    <div class="alert alert-danger vhmavi-form-alert-danger" role="alert">
        <?php echo $lang['donationSponsor-donationSponsorFormAlertDanger']; ?>
    </div>
    <!-- Display an alert for newsletter subscription failure -->
    <div class="alert alert-danger vhmavi-form-alert-danger-newsletter" role="alert">
        <?php echo $lang['donationSponsor-donationSponsorFormNewsletterAlertDanger']; ?>
    </div>

    <!-- Form group for sponsor type -->
    <div class="form-group">
        <div class="btn-group vhmavi-sponsor-type-btn-group" role="group" aria-label="Sponsor type">
            <button type="button" class="btn btn-outline-vhmavi vhmavi-btn-group-selected" id="sponsor-type-person">
                <?php echo $lang['donationSponsor-donationSponsorFormTypePerson']; ?>
            </button>
            <button type="button" class="btn btn-outline-vhmavi" id="sponsor-type-association">
                <?php echo $lang['donationSponsor-donationSponsorFormTypeAssociation']; ?>
            </button>
        </div>
    </div>
    <!-- Person sponsoring fields -->
    <div id="vhmavi-person-identity">
        <!-- Form group for person first name -->
        <div class="form-group">
            <label for="donation-sponsor-form-first-name"><?php echo $lang['donationSponsor-donationSponsorFormFirstNameLabel']; ?> <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="firstName" id="donation-sponsor-form-first-name" placeholder="<?php echo $lang['donationSponsor-donationSponsorFormFirstNamePlaceholder']; ?>" required>
            <div class="invalid-feedback">
                <?php echo $lang['donationSponsor-donationSponsorFormFirstNameFeedback']; ?>
            </div>
        </div>
        <!-- Form group for person last name -->
        <div class="form-group">
            <label for="donation-sponsor-form-last-name"><?php echo $lang['donationSponsor-donationSponsorFormLastNameLabel']; ?> <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="lastName" id="donation-sponsor-form-last-name" placeholder="<?php echo $lang['donationSponsor-donationSponsorFormLastNamePlaceholder']; ?>" required>
            <div class="invalid-feedback">
                <?php echo $lang['donationSponsor-donationSponsorFormLastNameFeedback']; ?>
            </div>
        </div>
    </div>
    <!-- Association sponsoring fields -->
    <div id="vhmavi-association-identity">
        <!-- Form group for association name -->
        <div class="form-group">
            <label for="donation-sponsor-form-association-name"><?php echo $lang['donationSponsor-donationSponsorFormAssociationNameLabel']; ?> <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="associationName" id="donation-sponsor-form-association-name" placeholder="<?php echo $lang['donationSponsor-donationSponsorFormAssociationNamePlaceholder']; ?>">
            <div class="invalid-feedback">
                <?php echo $lang['donationSponsor-donationSponsorFormAssociationNameFeedback']; ?>
            </div>
        </div>
        <!-- Form group for association responsible first name -->
        <div class="form-group">
            <label for="donation-sponsor-form-responsible-first-name"><?php echo $lang['donationSponsor-donationSponsorFormAssociationFirstNameLabel']; ?> <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="associationFirstName" id="donation-sponsor-form-responsible-first-name" placeholder="<?php echo $lang['donationSponsor-donationSponsorFormAssociationFirstNamePlaceholder']; ?>">
            <div class="invalid-feedback">
                <?php echo $lang['donationSponsor-donationSponsorFormAssociationFirstNameFeedback']; ?>
            </div>
        </div>
        <!-- Form group for association responsible last name -->
        <div class="form-group">
            <label for="donation-sponsor-form-responsible-last-name"><?php echo $lang['donationSponsor-donationSponsorFormAssociationLastNameLabel']; ?> <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="associationLastName" id="donation-sponsor-form-responsible-last-name" placeholder="<?php echo $lang['donationSponsor-donationSponsorFormAssociationLastNamePlaceholder']; ?>">
            <div class="invalid-feedback">
                <?php echo $lang['donationSponsor-donationSponsorFormAssociationLastNameFeedback']; ?>
            </div>
        </div>
    </div>
    <!-- Form group for email address -->
    <div class="form-group">
        <label for="donation-sponsor-form-email"><?php echo $lang['donationSponsor-donationSponsorFormEmailLabel']; ?> <span class="vhmavi-required-field">*</span></label>
        <input type="email" class="form-control" name="email" id="donation-sponsor-form-email" placeholder="<?php echo $lang['donationSponsor-donationSponsorFormEmailPlaceholder']; ?>" required>
        <div class="invalid-feedback">
            <?php echo $lang['donationSponsor-donationSponsorFormEmailFeedback']; ?>
        </div>
    </div>
    <!-- Form group for phone -->
    <div class="form-group">
        <label for="donation-sponsor-form-phone"><?php echo $lang['donationSponsor-donationSponsorFormPhoneNumberLabel']; ?> <span class="vhmavi-required-field">*</span></label>
        <input type="tel" class="form-control" name="phone" id="donation-sponsor-form-phone" placeholder="<?php echo $lang['donationSponsor-donationSponsorFormPhoneNumberPlaceholder']; ?>" required>
        <div class="invalid-feedback">
            <?php echo $lang['donationSponsor-donationSponsorFormPhoneNumberFeedback']; ?>
        </div>
    </div>
    <!-- Form group for address -->
    <div class="form-group">
        <label for="donation-sponsor-form-address"><?php echo $lang['donationSponsor-donationSponsorFormAddressLabel']; ?> <span class="vhmavi-required-field">*</span></label>
        <input type="text" class="form-control" name="address" id="donation-sponsor-form-address" placeholder="<?php echo $lang['donationSponsor-donationSponsorFormAddressPlaceholder']; ?>" required>
        <div class="invalid-feedback">
            <?php echo $lang['donationSponsor-donationSponsorFormAddressFeedback']; ?>
        </div>
    </div>
    <!-- This form row contains the postal code and the city name -->
    <div class="form-row">
        <div class="form-group col-12 col-md-3">
            <label for="donation-sponsor-form-postal-code"><?php echo $lang['donationSponsor-donationSponsorFormPostCodeLabel']; ?> <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="postalCode" id="donation-sponsor-form-postal-code" placeholder="<?php echo $lang['donationSponsor-donationSponsorFormPostCodePlaceholder']; ?>" required>
            <div class="invalid-feedback">
                <?php echo $lang['donationSponsor-donationSponsorFormPostCodeFeedback']; ?>
            </div>
        </div>
        <div class="form-group col-12 col-md-9">
            <label for="donation-sponsor-form-city"><?php echo $lang['donationSponsor-donationSponsorFormCityLabel']; ?> <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="city" id="donation-sponsor-form-city" placeholder="<?php echo $lang['donationSponsor-donationSponsorFormCityPlaceholder']; ?>" required>
            <div class="invalid-feedback">
                <?php echo $lang['donationSponsor-donationSponsorFormCityFeedback']; ?>
            </div>
        </div>
    </div>
    <!-- Form group for sponsoring option -->
    <div class="form-group">        
        <!-- Donation sponsor sponsoring option include -->
        <?php include('components/donation-sponsor/donation-sponsor-option/donation-sponsor-option.php'); ?>
    </div>
    <!-- Form group for total amount -->
    <div class="form-group">
        <!-- Display the total amount in the label -->
        <label for="donation-sponsor-form-total-amount-input">
            <?php echo $lang['donationSponsor-donationSponsorFormTotalAmount']; ?>
            <label id="donation-sponsor-form-total-amount-lab">10</label>€<label id="donation-sponsor-form-sponsoring-total-amount-lab"><?php echo $lang['donationSponsor-donationSponsorFormTotalAmountPerMonth']; ?></label>
        </label>
        <!-- Add the total amount in the input for the form submission -->
        <input type="text" class="form-control" id="donation-sponsor-form-total-amount-input" name="totalAmount" value="10" hidden required>
    </div>
    <!-- Form group for newsletter subscription -->
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" name="subscribeNewsletter" type="checkbox" value="" id="donation-sponsor-form-newsletter-subscription">
            <label class="form-check-label" for="donation-sponsor-form-newsletter-subscription">
                <?php echo $lang['donationSponsor-donationSponsorFormSubscribeToNewsletter']; ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <small class="form-text vhmavi-required-field">
            * <?php echo $lang['donationSponsor-donationSponsorFormRequiredFields']; ?>
        </small>
    </div>
    <!-- The reCAPTACHA V2 -->
    <div id="vhmavi-recaptcha-container"></div>
    <!-- The click on the send button is catched in the JS corresponding file (donation-sponsor-form.js) -->
    <button class="btn btn-outline-vhmavi vhmavi-submit-btn" type="submit" disabled>
        <?php echo $lang['donationSponsor-donationSponsorFormSponsor']; ?>
    </button>
    <button class="btn btn-outline-vhmavi vhmavi-submitting-spinner-btn" type="submit" disabled> 
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        <?php echo $lang['donationSponsor-donationSponsorFormSponsoring']; ?>
    </button>
</form>