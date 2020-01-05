<!-- 
    team-direction.php
    The direction presentation used in team.php
 -->

<div class="row justify-content-center">
    <div class="col">
        <h1><?php echo $lang['team-directionHeader']; ?></h1>
    </div>
</div>
<div class="row justify-content-center">
    <!-- The first column is first -->
    <div class="col-12 col-md-6 col-lg-4 vhmavi-member-col order-1">
        <h2><?php echo $lang['team-directionPramodKhakurelName']; ?></h2>
        <h3><?php echo $lang['team-directionPramodKhakurelStatus']; ?></h3>
        <div class="vhmavi-member-img-container">
            <img src="img/team/pramod_khakurel.jpg" alt="Pramod Khakurel" />
        </div>
        <button type="button" class="btn btn-outline-vhmavi" id="vhmavi-pramod-khakurel-btn">
            <?php echo $lang['team-directionFindOutMore']; ?>
        </button>
    </div>
    <!--
        The explanation column for Pramod Khakurel
        This column will appear after the learn-more button has been clicked.
        Three cases :
        - On large screen, the three member columns are on the same row. So this
            explanation column appears after the three columns : it is the sixth one
        - On medium screen, the first two member columns are on the same row and the
            thrid one is on its own row. So, this explanation columns appears after
            the first two columns : it is the fourth one.
        - On small screens, each member column is on its own row. If the first member
            column is clicked, this explanation column appear after the first member
            column : it is the second one.
        By default, this column is not visible.
    -->
    <div class="col-12 col-lg-9 order-2 order-md-4 order-lg-6 vhmavi-member-explanation-col" id="vhmavi-pramod-khakurel-explanation-col">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title"><?php echo $lang['team-directionPramodKhakurelCardHeader']; ?></h2>
                <p><?php echo $lang['team-directionPramodKhakurelParagraph1']; ?></p>
                <p><?php echo $lang['team-directionPramodKhakurelParagraph2']; ?></p>
                <p class="vhmavi-direction-quote"><?php echo $lang['team-directionPramodKhakurelQuotation']; ?></p>
            </div>
        </div>
    </div>
    <!-- The second column is third -->
    <div class="col-12 col-md-6 col-lg-4 vhmavi-member-col order-3">
        <h2><?php echo $lang['team-directionSaruKhakurelName']; ?></h2>
        <h3><?php echo $lang['team-directionSaruKhakurelStatus']; ?></h3>
        <div class="vhmavi-member-img-container">
            <img src="img/team/saru_khakurel.jpg" alt="Saru Khakurel" />
        </div>
        <button type="button" class="btn btn-outline-vhmavi" id="vhmavi-saru-khakurel-btn">
            <?php echo $lang['team-directionFindOutMore']; ?>
        </button>
    </div>
    <!-- The explanation column for Saru Khakurel -->
    <div class="col-12 col-lg-9 order-4 order-lg-6 vhmavi-member-explanation-col" id="vhmavi-saru-khakurel-explanation-col">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title"><?php echo $lang['team-directionSaruKhakurelCardHeader']; ?></h2>
                <p><?php echo $lang['team-directionSaruKhakurelParagraph1']; ?></p>
                <p><?php echo $lang['team-directionSaruKhakurelParagraph2']; ?></p>
                <p><?php echo $lang['team-directionSaruKhakurelParagraph3']; ?></p>
                <p><?php echo $lang['team-directionSaruKhakurelParagraph4']; ?></p>
                <p class="vhmavi-direction-quote"><?php echo $lang['team-directionSaruKhakurelQuotation']; ?></p>
            </div>
        </div>
    </div>
    <!-- The third columns is fifth -->
    <div class="col-12 col-md-6 col-lg-4 vhmavi-member-col order-5">
        <h2><?php echo $lang['team-directionTristanLecomteName']; ?></h2>
        <h3><?php echo $lang['team-directionTristanLecomteStatus']; ?></h3>
        <div class="vhmavi-member-img-container">
            <img src="img/team/tristan_lecomte.jpg" alt="Tristan Lecomte" />
        </div>
        <button type="button" class="btn btn-outline-vhmavi" id="vhmavi-tristan-lecomte-btn">
            <?php echo $lang['team-directionFindOutMore']; ?>
        </button>
    </div>
    <!-- The explanation column for Tristan Lecomte -->
    <div class="col-12 col-lg-9 order-6 vhmavi-member-explanation-col" id="vhmavi-tristan-lecomte-explanation-col">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title"><?php echo $lang['team-directionTristanLecomteCardHeader']; ?></h2>
                <p><?php echo $lang['team-directionTristanLecomteParagraph1']; ?></p>
                <p><?php echo $lang['team-directionTristanLecomteParagraph2']; ?></p>
                <p><?php echo $lang['team-directionTristanLecomteParagraph3']; ?></p>
                <p><a href="https://www.altereco.com/" rel="noopener noreferer" target="_blank">www.altereco.com</a></p>
                <p><a href="https://www.purprojet.com/" rel="noopener noreferer" target="_blank">www.purprojet.com</a></p>
            </div>
        </div>
    </div>
</div>