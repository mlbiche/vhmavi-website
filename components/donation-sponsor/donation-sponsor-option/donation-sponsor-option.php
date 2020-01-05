<!-- 
    donation-sponsor-option.php
    Sponsoring options used in donation-sponsor-form.php
 -->

<label><?php echo $lang['donationSponsor-donationSponsorOptionLabel']; ?> <span class="vhmavi-required-field">*</span></label>

<!--
    We use a card deck so all cards have the height.
    We use some separators to have the card deck responsive.
    On large screen, there are 2 cards in a row.
    On other screen, there are 1 card by row.
-->
<div class="card-deck">
    <div class="card vhmavi-sponsoring-option vhmavi-sponsoring-option-selected" id="donation-sponsor-option-project">
        <h2 class="card-header"><?php echo $lang['donationSponsor-donationSponsorOptionProjectHeader']; ?></h2>
        <div class="card-body">
            <p class="vhmavi-amount"><?php echo $lang['donationSponsor-donationSponsorOptionProjectAmount']; ?></p>
            <p class="vhmavi-amount vhmavi-amount-deduced"><?php echo $lang['donationSponsor-donationSponsorOptionProjectAmountDeduced']; ?></p>
            <p><?php echo $lang['donationSponsor-donationSponsorOptionProjectParagraph']; ?></p>
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
        <h2 class="card-header"><?php echo $lang['donationSponsor-donationSponsorOptionExternHeader']; ?></h2>
        <div class="card-body">
            <p class="vhmavi-amount"><?php echo $lang['donationSponsor-donationSponsorOptionExternAmount']; ?></p>
            <p class="vhmavi-amount vhmavi-amount-deduced"><?php echo $lang['donationSponsor-donationSponsorOptionExternAmountDeduced']; ?></p>
            <p><?php echo $lang['donationSponsor-donationSponsorOptionExternParagraph']; ?></p>
        </div>
    </div>
    <!-- For all type of screens, collapse cards in two rows -->
    <div class="w-100 d-block mt-3"></div>
    <div class="card vhmavi-sponsoring-option" id="donation-sponsor-option-half-intern">
        <h2 class="card-header"><?php echo $lang['donationSponsor-donationSponsorOptionInternHalfHeader']; ?></h2>
        <div class="card-body">
            <p class="vhmavi-amount"><?php echo $lang['donationSponsor-donationSponsorOptionInternHalfAmount']; ?></p>
            <p class="vhmavi-amount vhmavi-amount-deduced"><?php echo $lang['donationSponsor-donationSponsorOptionInternHalfAmountDeduced']; ?></p>
            <p><?php echo $lang['donationSponsor-donationSponsorOptionInternHalfParagraph']; ?></p>
        </div>
    </div>
    <!-- For medium screen, collapse each card on its own row -->
    <div class="w-100 d-block d-lg-none mt-3"></div>
    <div class="card vhmavi-sponsoring-option" id="donation-sponsor-option-intern">
        <h2 class="card-header"><?php echo $lang['donationSponsor-donationSponsorOptionInternFullHeader']; ?></h2>
        <div class="card-body">
            <p class="vhmavi-amount"><?php echo $lang['donationSponsor-donationSponsorOptionInternFullAmount']; ?></p>
            <p class="vhmavi-amount vhmavi-amount-deduced"><?php echo $lang['donationSponsor-donationSponsorOptionInternFullAmountDeduced']; ?></p>
            <p><?php echo $lang['donationSponsor-donationSponsorOptionInternFullParagraph']; ?></p>
        </div>
    </div>
</div>

<!-- This input contains the selected option in its value for the form submission -->
<input type="text" id="donation-sponsor-form-sponsoring-option" class="form-control" name="sponsoringOption" value="donation-sponsor-option-project" hidden required>