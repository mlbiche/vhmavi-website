<!-- 
    donation-sponsor-option.php
    Sponsoring options used in donation-sponsor-form.php
 -->

<label>Formule de parrainage <span class="vhmavi-required-field">*</span></label>

<!--
    We use a card deck so all cards have the height.
    We use some separators to have the card deck responsive.
    On large screen, there are 2 cards in a row.
    On other screen, there are 1 card by row.
-->
<div class="card-deck">
    <div class="card vhmavi-sponsoring-option vhmavi-sponsoring-option-selected" id="donation-sponsor-option-project">
        <h2 class="card-header">Projet</h2>
        <div class="card-body">
            <p class="vhmavi-amount">Versement libre et ponctuel</p>
            <p class="vhmavi-amount vhmavi-amount-deduced">Coût réel de 34% de votre don après déduction d'impôt</p>
            <p>Votre parrainage est affecté aux coûts de fonctionnement et d’investissements de l’école. Il permet notamment de financer nos projets de développement éducatif <em>(voir dans nos dernières <a href="news.php">newsletters</a>)</em>.</p>
            <!-- The project amount -->
            <div class="form-group row vhmavi-amount-input">
                <div class="col-10">
                    <input type="text" class="form-control" id="donation-sponsor-form-project-amount" name="projectAmount" value="10" required>
                </div>
                <label for="donation-sponsor-form-project-amount" class="col-2 col-form-label">€</label>
            </div>
        </div>
    </div>
    <!-- For medium screen, collapse each card on its own row -->
    <div class="w-100 d-block d-lg-none mt-3"></div>
    <div class="card vhmavi-sponsoring-option" id="donation-sponsor-option-extern">
        <h2 class="card-header">Externe</h2>
        <div class="card-body">
            <p class="vhmavi-amount">25€ mensuel</p>
            <p class="vhmavi-amount vhmavi-amount-deduced">Coût réel 8,5€ mensuel après déduction d'impôt</p>
            <p>Votre parrainage prend en charge la scolarisation d'un élève. Ceci comprend son accès à la cantine le midi, le matériel scolaire et l'uniforme.</p>
        </div>
    </div>
    <!-- For all type of screens, collapse cards in two rows -->
    <div class="w-100 d-block mt-3"></div>
    <div class="card vhmavi-sponsoring-option" id="donation-sponsor-option-half-intern">
        <h2 class="card-header">Interne 50%</h2>
        <div class="card-body">
            <p class="vhmavi-amount">50€ mensuel</p>
            <p class="vhmavi-amount vhmavi-amount-deduced">Coût réel 17€ mensuel après déduction d'impôt</p>
            <p>Votre parrainage finance 50% des coûts pour un élève résidant à l'internat.</p>
        </div>
    </div>
    <!-- For medium screen, collapse each card on its own row -->
    <div class="w-100 d-block d-lg-none mt-3"></div>
    <div class="card vhmavi-sponsoring-option" id="donation-sponsor-option-intern">
        <h2 class="card-header">Interne 100%</h2>
        <div class="card-body">
            <p class="vhmavi-amount">100€ mensuel</p>
            <p class="vhmavi-amount vhmavi-amount-deduced">Coût réel 34€ mensuel après déduction d'impôt</p>
            <p>Votre parrainage permet à un de nos élèves de résider à l'internat sans aucun frais pour sa famille. Cette formule comprend les frais de scolarité, le matériel scolaire, l'uniforme, les frais de pension et les frais médicaux.</p>
        </div>
    </div>
</div>

<!-- This input contains the selected option in its value for the form submission -->
<input type="text" id="donation-sponsor-form-sponsoring-option" class="form-control" name="sponsoringOption" value="donation-sponsor-option-project" hidden required>