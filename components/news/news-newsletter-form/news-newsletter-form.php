<!-- 
    news-newsletter-form.php
    Newsletter subscription form used in news.php
 -->

<form class="vhmavi-form" novalidate>
    <!-- Display an alert for application sent success -->
    <div class="alert alert-success vhmavi-form-alert-success" role="alert">
        Vous êtes abonnés à notre newsletter !
    </div>
    <!-- Display an alert for application sent failure -->
    <div class="alert alert-danger vhmavi-form-alert-danger" role="alert">
        Votre abonnement a échoué... Veuillez réessayer plus tard.
    </div>

    <!-- Form group for first name -->
    <div class="form-group">
        <label for="volunter-form-first-name">Prénom <span class="vhmavi-required-field">*</span></label>
        <input type="text" class="form-control" name="firstName" id="volunter-form-first-name" placeholder="Prénom" required>
        <div class="invalid-feedback">
            Laissez-nous vous connaître un peu en donnant votre prénom.
        </div>
    </div>
    <!-- Form group for last name -->
    <div class="form-group">
        <label for="volunteer-form-last-name">Nom <span class="vhmavi-required-field">*</span></label>
        <input type="text" class="form-control" name="lastName" id="volunteer-form-last-name" placeholder="Nom" required>
        <div class="invalid-feedback">
            Laissez-nous vous connaître un peu en donnant votre nom.
        </div>
    </div>
    <!-- Form group for email address -->
    <div class="form-group">
        <label for="volunteer-form-email">Adresse mail <span class="vhmavi-required-field">*</span></label>
        <input type="email" class="form-control" name="email" id="volunteer-form-email" placeholder="Adresse mail" required>
        <div class="invalid-feedback">
            Merci d'entrer une adresse valide.
        </div>
    </div>
    <div class="form-group">
        <small class="form-text vhmavi-required-field">
            * Champs requis
        </small>
    </div>
    <!-- The reCAPTACHA V2 -->
    <div id="vhmavi-recaptcha-container"></div>
    <!-- The click on the send button is catched in the JS corresponding file (news-newsletter-form.js) -->
    <button class="btn btn-outline-vhmavi vhmavi-submit-btn" type="submit" disabled>
        S'abonner
    </button>
    <button class="btn btn-outline-vhmavi vhmavi-submitting-spinner-btn" type="submit" disabled> 
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        Abonnement en cours...
    </button>
</form>