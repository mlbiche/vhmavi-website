<!-- 
    index-figures.php
    Figures about the school used in index.php
 -->

<!--
    Few figures container
    On extrasmall devices, each figure takes full screen width
    On small devices, there are two figures per line
    On wider devices, there are three figures per line
-->
<div class="container vhmavi-container vhmavi-figures-container">
    <div class="row row-cols-12 row-cols-sm-6 row-cols-md-4">
        <div class="col-12 vhmavi-centered-col">
            <p class="vhmavi-figures-headline"><?php echo $lang['index-figures-header']; ?></p>
        </div>
        <!-- Figures are centered in there column -->
        <div class="col vhmavi-centered-col">
            <p class="vhmavi-figure vhmavi-figure-foundation-year"></p>
            <p class="vhmavi-figure-description"><?php echo $lang['index-figures-foundationYear']; ?></p>
        </div>
        <!--
            This figure is the middle one when there are three figures per line so it has
            left and right borders in this case
            This figure is the right one when there are two figures per line so it has a left
            border in this case
        -->
        <div class="col vhmavi-centered-col vhmavi-figures-3-col-middle vhmavi-figures-2-col-right">
            <p class="vhmavi-figure vhmavi-figure-nb-students"></p>
            <p class="vhmavi-figure-description"><?php echo $lang['index-figures-numberStudents']; ?></p>
            <p class="vhmavi-figure-description"><?php echo $lang['index-figures-numberStudentsClassRange']; ?></p>
        </div>
        <div class="col vhmavi-centered-col">
            <p class="vhmavi-figure">
                <span class="vhmavi-figure-fees-exempted-percentage"></span>%
            </p>
            <p class="vhmavi-figure-description"><?php echo $lang['index-figures-feeExemptedPercentage']; ?></p>
        </div>
        <div class="col vhmavi-centered-col vhmavi-figures-2-col-right">
            <p class="vhmavi-figure vhmavi-figure-nb-boarders"></p>
            <p class="vhmavi-figure-description"><?php echo $lang['index-figures-numberBoarders']; ?></p>
        </div>
        <div class="col vhmavi-centered-col vhmavi-figures-3-col-middle">
            <p class="vhmavi-figure vhmavi-figure-nb-teachers"></p>
            <p class="vhmavi-figure-description"><?php echo $lang['index-figures-numberTeachers']; ?></p>
        </div>
        <div class="col vhmavi-centered-col vhmavi-figures-2-col-right">
            <p class="vhmavi-figure vhmavi-figure-nb-sponsors"></p>
            <p class="vhmavi-figure-description"><?php echo $lang['index-figures-numberSponsors']; ?></p>
        </div>
    </div>
</div>