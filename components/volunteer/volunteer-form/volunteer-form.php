<!-- 
    volunteer-form.php
    Volunteer application form used in volunteer.php
 -->
<form class="vhmavi-form" novalidate>
    <!-- Display an alert for application sent success -->
    <div class="alert alert-success vhmavi-form-alert-success" role="alert">
        Votre candidature a été envoyé ! Nous vous recontacterons dans les plus brefs délais après avoir pris connaissance de votre candidature.
    </div>
    <!-- Display an alert for application sent failure -->
    <div class="alert alert-danger vhmavi-form-alert-danger" role="alert">
        Votre candidature a échoué... Veuillez réessayer plus tard.
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
    <!-- Form group for CV -->
    <div class="form-group">
        <label for="volunteer-form-cv-text">CV <span class="vhmavi-required-field">*</span></label>
        <div class="vhmavi-file-input" id="volunteer-form-cv-container">
            <input type="text" class="form-control vhmavi-file-input-text" id="volunteer-form-cv-text" placeholder="Ajoutez votre CV" aria-describedby="volunteer-form-cv-help-block" disabled>
            <button class="btn btn-outline-vhmavi vhmavi-file-input-btn">
                Parcourir...
            </button>
            <input type="file" accept="application/pdf" class="form-control" id="volunteer-form-cv-file" name="cv" hidden>
        </div>
        <!-- This is an help text always displayed -->
        <small id="volunteer-form-cv-help-block" class="form-text text-muted">
            Merci d'ajouter un fichier au format PDF.
        </small>
        <div class="invalid-feedback">
            Présentez-nous votre parcours en ajoutant votre CV. <em>(Fichier PDF obligatoire)</em>
        </div>
    </div>
    <!-- Form group for the presentation content -->
    <div class="form-group">
        <label for="volunteer-form-presentation">Présentation <span class="vhmavi-required-field">*</span></label>
        <textarea class="form-control" name="presentation" id="volunteer-form-presentation" placeholder="Entrez votre présentation..." rows="6" aria-describedby="volunteer-form-presentation-help-block" required></textarea>
        <small id="volunteer-form-presentation-help-block" class="form-text text-muted">
            Présentez-vous rapidement, parlez-nous de votre mission et précisez les dates auxquelles vous souhaitez venir...                        </small>
        <div class="invalid-feedback">
            Merci de présenter votre projet.
        </div>
    </div>
    <div class="form-group">
        <small class="form-text vhmavi-required-field">
            * Champs requis
        </small>
    </div>
    <!-- The reCAPTACHA V2 -->
    <div id="vhmavi-recaptcha-container"></div>
    <!-- The click on the send button is catched in the JS corresponding file (volunteer-form.js) -->
    <button class="btn btn-outline-vhmavi vhmavi-submit-btn" type="submit" disabled>
        Candidater
    </button>
    <button class="btn btn-outline-vhmavi vhmavi-submitting-spinner-btn" type="submit" disabled> 
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        Candidature en cours...
    </button>
</form>