<?php

/* @var $this yii\web\View */

$this->title = $content["Manufacturer_Name"].' '.$content["Model_Description"] ;
$session = Yii::$app->session;
if ($session->isActive){
    echo "sessionid".Yii::$app->session->getId();

}else{
$session->open();
}
?>
<section class="car_postpg">
    <div class="container">
        <div class="car_postcontt">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 carlft_blocksize">
                    <div class="cpost_title">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2"><img src="/images/audi_logo.png"></div>
                            <div class="col-lg-10 col-md-10 col-sm-10">
                                <h1><?=$content["Manufacturer_Name"] ?> <?=$content["Range_Name"] ?> <?=$content["Model_Body_Style"] ?></h1>
                                <h5><?=$content["Model_Description"] ?> <?=$content["Derivative_CAP_ID"] ?></h5>
                            </div>
                        </div>
                        <button>Add to my showroom</button>
                    </div>

                    <div class="cpost_cars">
                        <?php include(CONST_ROOTDIR.'/views/site/includes/car_carousel.php'); ?>

                    </div>

                    <div class="clearfix"></div>
                    <div class="cpost_vdtls">
                        <?php include(CONST_ROOTDIR.'/views/site/includes/vehicle_details.php'); ?>


                    </div><!--cpost_vdtls-->
                    <div class="clearfix"></div>
                    <div class="cpost_tabs">
                        <?php include(CONST_ROOTDIR.'/views/site/includes/table_stan_specs_options.php'); ?>

                    </div>
                    <div class="clearfix"></div>
                    <div class="cpost-emission">
                        <?php include(CONST_ROOTDIR.'/views/site/includes/bik_emmisions.php'); ?>

                    </div>

                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 carrgt_blocksize">
                    <div class="car_postrgt">
                        <?php include(CONST_ROOTDIR.'/views/site/includes/car_custom_deal.php'); ?>
                        <?php include(CONST_ROOTDIR.'/views/site/includes/car_want_to_save.php'); ?>
                        <?php include(CONST_ROOTDIR.'/views/site/includes/car_share_links.php'); ?>
                    </div><!--car_postrgt-->

                </div><!--col-lg-5-->
            </div><!--row-->
        </div><!--car_postcontt-->
    </div><!--container-->
</section>

<section class="hmpg_support cpost_support">
    <?php include(CONST_ROOTDIR.'/views/site/includes/why_lease_with_us.php'); ?>
</section>

<section class="customers-col cpostcutmr">
    <?php include(CONST_ROOTDIR.'/views/site/includes/customers_are_saying.php'); ?>
</section>

<section class="vr_slider">
    <?php include(CONST_ROOTDIR.'/views/site/includes/recently_viewed_vehicles.php'); ?>
</section>

<section class="keep_mail">
    <?php include(CONST_ROOTDIR.'/views/site/includes/email_newsletter.php'); ?>
</section>

