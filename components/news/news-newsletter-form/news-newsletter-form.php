<!-- 
    news-newsletter-form.php
    Newsletter subscription form used in news.php
 -->

<form class="vhmavi-form" novalidate>
    <!-- Display an alert for application sent success -->
    <div class="alert alert-success vhmavi-form-alert-success" role="alert">
        <?php echo $lang['news-newsFormAlertSuccess']; ?>
    </div>
    <!-- Display an alert for application sent failure -->
    <div class="alert alert-danger vhmavi-form-alert-danger" role="alert">
        <?php echo $lang['news-newsFormAlertDanger']; ?>
    </div>

    <!-- Form group for first name -->
    <div class="form-group">
        <label for="volunter-form-first-name"><?php echo $lang['news-newsFormFirstNameLabel']; ?> <span class="vhmavi-required-field">*</span></label>
        <input type="text" class="form-control" name="firstName" id="volunter-form-first-name" placeholder="<?php echo $lang['news-newsFormFirstNamePlaceholder']; ?>" required>
        <div class="invalid-feedback">
            <?php echo $lang['news-newsFormFirstNameFeedback']; ?>
        </div>
    </div>
    <!-- Form group for last name -->
    <div class="form-group">
        <label for="volunteer-form-last-name"><?php echo $lang['news-newsFormLastNameLabel']; ?> <span class="vhmavi-required-field">*</span></label>
        <input type="text" class="form-control" name="lastName" id="volunteer-form-last-name" placeholder="<?php echo $lang['news-newsFormLastNamePlaceholder']; ?>" required>
        <div class="invalid-feedback">
            <?php echo $lang['news-newsFormLastNameFeedback']; ?>
        </div>
    </div>
    <!-- Form group for email address -->
    <div class="form-group">
        <label for="volunteer-form-email"><?php echo $lang['news-newsFormEmailLabel']; ?> <span class="vhmavi-required-field">*</span></label>
        <input type="email" class="form-control" name="email" id="volunteer-form-email" placeholder="<?php echo $lang['news-newsFormEmailPlaceholder']; ?>" required>
        <div class="invalid-feedback">
            <?php echo $lang['news-newsFormEmailFeedback']; ?>
        </div>
    </div>
    <div class="form-group">
        <small class="form-text vhmavi-required-field">
            * <?php echo $lang['news-newsFormRequiredFields']; ?>
        </small>
    </div>
    <!-- The reCAPTACHA V2 -->
    <div id="vhmavi-recaptcha-container"></div>
    <!-- The click on the send button is catched in the JS corresponding file (news-newsletter-form.js) -->
    <button class="btn btn-outline-vhmavi vhmavi-submit-btn" type="submit" disabled>
        <?php echo $lang['news-newsFormSubscribe']; ?>
    </button>
    <button class="btn btn-outline-vhmavi vhmavi-submitting-spinner-btn" type="submit" disabled> 
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        <?php echo $lang['news-newsFormSubscribing']; ?>
    </button>
</form>