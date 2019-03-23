<!-- 
    donation-sponsor-form.php
    Sponsoring form used in donation-sponsor.php
 -->

<form class="vhmavi-form" novalidate>
    <!-- Display an alert for email sent success -->
    <div class="alert alert-success vhmavi-form-alert-success" role="alert">
        Votre parrainage a été envoyé ! Un immense merci ! Nous vous recontacterons avec nos coordonnées bancaires dans les plus brefs délais.
    </div>
    <!-- Display an alert for email sent failure -->
    <div class="alert alert-danger vhmavi-form-alert-danger" role="alert">
        L'envoi de votre parrainage a échoué... Veuillez réessayer plus tard.
    </div>
    <!-- Display an alert for newsletter subscription failure -->
    <div class="alert alert-danger vhmavi-form-alert-danger-newsletter" role="alert">
        Nous avons cependant rencontré un problème pour vous abonner à notre newsletter. Vous pouvez réessayer sur le <a href="news.php" class="alert-link">formulaire dédié</a>.
    </div>

    <!-- Form group for sponsor type -->
    <div class="form-group">
        <div class="btn-group vhmavi-sponsor-type-btn-group" role="group" aria-label="Sponsor type">
            <button type="button" class="btn btn-outline-vhmavi vhmavi-btn-group-selected" id="sponsor-type-person">
                Je suis un particulier
            </button>
            <button type="button" class="btn btn-outline-vhmavi" id="sponsor-type-association">
                Je suis une association
            </button>
        </div>
    </div>
    <!-- Person sponsoring fields -->
    <div id="vhmavi-person-identity">
        <!-- Form group for person first name -->
        <div class="form-group">
            <label for="donation-sponsor-form-first-name">Prénom <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="firstName" id="donation-sponsor-form-first-name" placeholder="Prénom" required>
            <div class="invalid-feedback">
                Laissez-nous vous connaître un peu en donnant votre prénom.
            </div>
        </div>
        <!-- Form group for person last name -->
        <div class="form-group">
            <label for="donation-sponsor-form-last-name">Nom <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="lastName" id="donation-sponsor-form-last-name" placeholder="Nom" required>
            <div class="invalid-feedback">
                Laissez-nous vous connaître un peu en donnant votre nom.
            </div>
        </div>
    </div>
    <!-- Association sponsoring fields -->
    <div id="vhmavi-association-identity">
        <!-- Form group for association name -->
        <div class="form-group">
            <label for="donation-sponsor-form-association-name">Nom de l'association <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="associationName" id="donation-sponsor-form-association-name" placeholder="Nom de l'association">
            <div class="invalid-feedback">
                Laissez-nous vous connaître un peu en donnant le nom de votre association.
            </div>
        </div>
        <!-- Form group for association responsible first name -->
        <div class="form-group">
            <label for="donation-sponsor-form-responsible-first-name">Prénom du responsable <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="associationFirstName" id="donation-sponsor-form-responsible-first-name" placeholder="Prénom du responsable">
            <div class="invalid-feedback">
                Laissez-nous vous connaître un peu en donnant votre nom.
            </div>
        </div>
        <!-- Form group for association responsible last name -->
        <div class="form-group">
            <label for="donation-sponsor-form-responsible-last-name">Nom du responsable <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="associationLastName" id="donation-sponsor-form-responsible-last-name" placeholder="Nom du responsable">
            <div class="invalid-feedback">
                Laissez-nous vous connaître un peu en donnant votre nom.
            </div>
        </div>
    </div>
    <!-- Form group for email address -->
    <div class="form-group">
        <label for="donation-sponsor-form-email">Adresse mail <span class="vhmavi-required-field">*</span></label>
        <input type="email" class="form-control" name="email" id="donation-sponsor-form-email" placeholder="Adresse mail" required>
        <div class="invalid-feedback">
            Merci d'entrer une adresse valide.
        </div>
    </div>
    <!-- Form group for phone -->
    <div class="form-group">
        <label for="donation-sponsor-form-phone">Téléphone <span class="vhmavi-required-field">*</span></label>
        <input type="tel" class="form-control" name="phone" id="donation-sponsor-form-phone" placeholder="Téléphone" required>
        <div class="invalid-feedback">
            Merci d'entrer un numéro de téléphone valide.
        </div>
    </div>
    <!-- Form group for address -->
    <div class="form-group">
        <label for="donation-sponsor-form-address">N° et rue <span class="vhmavi-required-field">*</span></label>
        <input type="text" class="form-control" name="address" id="donation-sponsor-form-address" placeholder="Adresse" required>
        <div class="invalid-feedback">
            Merci d'entrer une adresse postale pour l'édition des reçus fiscaux.
        </div>
    </div>
    <!-- This form row contains the postal code and the city name -->
    <div class="form-row">
        <div class="form-group col-12 col-md-3">
            <label for="donation-sponsor-form-postal-code">Code postal <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="postalCode" id="donation-sponsor-form-postal-code" placeholder="Code postal" required>
            <div class="invalid-feedback">
                Merci d'entrer un code postal valide pour l'édition des reçus fiscaux.
            </div>
        </div>
        <div class="form-group col-12 col-md-9">
            <label for="donation-sponsor-form-city">Ville <span class="vhmavi-required-field">*</span></label>
            <input type="text" class="form-control" name="city" id="donation-sponsor-form-city" placeholder="Ville" required>
            <div class="invalid-feedback">
                Merci d'entrer une ville pour l'édition des reçus fiscaux.
            </div>
        </div>
    </div>
    <!-- Form group for sponsoring option -->
    <div class="form-group">        
        <!-- Donation sponsor sponsoring option include -->
        <?php include("components/donation-sponsor/donation-sponsor-option/donation-sponsor-option.php"); ?>
    </div>
    <!-- Form group for total amount -->
    <div class="form-group">
        <!-- Display the total amount in the label -->
        <label>
            Montant total : 
            <label id="donation-sponsor-form-total-amount-lab">10</label>€<label id="donation-sponsor-form-each-month-lab">/mois</label>
        </label>
        <!-- Add the total amount in the input for the form submition -->
        <input type="text" class="form-control" id="donation-sponsor-form-total-amount-input" name="totalAmount" value="10" hidden required>
    </div>
    <!-- Form group for newsletter subscription -->
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" name="subscribeNewsletter" type="checkbox" value="" id="donation-sponsor-form-newsletter-subscription">
            <label class="form-check-label" for="donation-sponsor-form-newsletter-subscription">
                M'abonner à la newsletter
            </label>
        </div>
    </div>
    <div class="form-group">
        <small class="form-text vhmavi-required-field">
            * Champs requis
        </small>
    </div>
    <!-- The click on the send button is catched in the JS corresponding file -->
    <button class="btn btn-outline-vhmavi vhmavi-submit-btn" type="submit" disabled>
        Parrainer !
    </button>
    <button class="btn btn-outline-vhmavi vhmavi-submitting-spinner-btn" type="submit" disabled> 
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        Envoi du parrainage...
    </button>
</form>