<!-- 
    volunteer-form.php
    Volunteer application form used in volunteer.php
 -->
<form class="vhmavi-form" novalidate>
    <!-- Display an alert for application sent success -->
    <div class="alert alert-success vhmavi-form-alert-success" role="alert">
        <?php echo $lang['volunteer-volunteerFormAlertSuccess']; ?>
    </div>
    <!-- Display an alert for application sent failure -->
    <div class="alert alert-danger vhmavi-form-alert-danger" role="alert">
        <?php echo $lang['volunteer-volunteerFormAlertDanger']; ?>
    </div>

    <!-- Form group for first name -->
    <div class="form-group">
        <label for="volunteer-form-first-name"><?php echo $lang['volunteer-volunteerFormFirstNameLabel']; ?> <span class="vhmavi-required-field">*</span></label>
        <input type="text" class="form-control" name="firstName" id="volunteer-form-first-name" placeholder="<?php echo $lang['volunteer-volunteerFormFirstNamePlaceholder']; ?>" required>
        <div class="invalid-feedback">
            <?php echo $lang['volunteer-volunteerFormFirstNameFeedback']; ?>
        </div>
    </div>
    <!-- Form group for last name -->
    <div class="form-group">
        <label for="volunteer-form-last-name"><?php echo $lang['volunteer-volunteerFormLastNameLabel']; ?> <span class="vhmavi-required-field">*</span></label>
        <input type="text" class="form-control" name="lastName" id="volunteer-form-last-name" placeholder="<?php echo $lang['volunteer-volunteerFormLastNamePlaceholder']; ?>" required>
        <div class="invalid-feedback">
            <?php echo $lang['volunteer-volunteerFormLastNameFeedback']; ?>
        </div>
    </div>
    <!-- Form group for email address -->
    <div class="form-group">
        <label for="volunteer-form-email"><?php echo $lang['volunteer-volunteerFormEmailLabel']; ?> <span class="vhmavi-required-field">*</span></label>
        <input type="email" class="form-control" name="email" id="volunteer-form-email" placeholder="<?php echo $lang['volunteer-volunteerFormEmailPlaceholder']; ?>" required>
        <div class="invalid-feedback">
            <?php echo $lang['volunteer-volunteerFormEmailFeedback']; ?>
        </div>
    </div>
    <!-- Form group for CV -->
    <div class="form-group">
        <label for="volunteer-form-cv-text"><?php echo $lang['volunteer-volunteerFormCVLabel']; ?> <span class="vhmavi-required-field">*</span></label>
        <div class="vhmavi-file-input" id="volunteer-form-cv-container">
            <input type="text" class="form-control vhmavi-file-input-text" id="volunteer-form-cv-text" placeholder="<?php echo $lang['volunteer-volunteerFormCVPlaceholder']; ?>" aria-describedby="volunteer-form-cv-help-block" disabled>
            <button class="btn btn-outline-vhmavi vhmavi-file-input-btn">
                <?php echo $lang['volunteer-volunteerFormCVBrowseButton']; ?>
            </button>
            <input type="file" accept="application/pdf" class="form-control" id="volunteer-form-cv-file" name="cv" hidden>
        </div>
        <!-- This is an help text always displayed -->
        <small id="volunteer-form-cv-help-block" class="form-text text-muted">
            <?php echo $lang['volunteer-volunteerFormCVHelpText']; ?>
        </small>
        <div class="invalid-feedback">
            <?php echo $lang['volunteer-volunteerFormCVFeedback']; ?>
        </div>
    </div>
    <!-- Form group for the presentation content -->
    <div class="form-group">
        <label for="volunteer-form-presentation"><?php echo $lang['volunteer-volunteerFormPresentationLabel']; ?> <span class="vhmavi-required-field">*</span></label>
        <textarea class="form-control" name="presentation" id="volunteer-form-presentation" placeholder="<?php echo $lang['volunteer-volunteerFormPresentationPlaceholder']; ?>" rows="6" aria-describedby="volunteer-form-presentation-help-block" required></textarea>
        <small id="volunteer-form-presentation-help-block" class="form-text text-muted">
            <?php echo $lang['volunteer-volunteerFormPresentationHelpText']; ?>
        <div class="invalid-feedback">
            <?php echo $lang['volunteer-volunteerFormPresentationFeedback']; ?>
        </div>
    </div>
    <div class="form-group">
        <small class="form-text vhmavi-required-field">
            * <?php echo $lang['volunteer-volunteerFormRequiredFields']; ?>
        </small>
    </div>
    <!-- The reCAPTACHA V2 -->
    <div id="vhmavi-recaptcha-container"></div>
    <!-- The click on the send button is catched in the JS corresponding file (volunteer-form.js) -->
    <button class="btn btn-outline-vhmavi vhmavi-submit-btn" type="submit" disabled>
        <?php echo $lang['volunteer-volunteerFormSponsor']; ?>
    </button>
    <button class="btn btn-outline-vhmavi vhmavi-submitting-spinner-btn" type="submit" disabled> 
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        <?php echo $lang['volunteer-volunteerFormSponsoring']; ?>
    </button>
</form>