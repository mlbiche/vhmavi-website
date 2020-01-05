<!-- 
    index-description.php
    Description of the school and its logo used in index.php
 -->

<div class="container vhmavi-container vhmavi-description-container">
    <div class="row justify-content-center">
        <!--
            Description container - on medium, small and extra-small devices, it takes
            full screen width
        -->
        <div class="col-12 col-lg-9">
            <h1><?php echo $lang['index-description-header']; ?></h1>
            <h2><?php echo $lang['index-description-headerSlogan']; ?></h2>
            <p><?php echo $lang['index-description-description1']; ?></p>
            <p><?php echo $lang['index-description-description2']; ?></p>
            <p><?php echo $lang['index-description-description3']; ?></p>
        </div>
        <!--
            Logo container - on medium, small and extra-small devices, it takes
            full screen width
        -->
        <div class="col-12 col-lg-5 vhmavi-centered-col">
            <img src="img/index/logo_name.svg" alt="<?php echo $lang['index-description-imgAlt1']; ?>" />
        </div>
    </div>
</div>