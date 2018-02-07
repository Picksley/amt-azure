<?php

/* @var $this yii\web\View */

$this->title = $page["PageTitle"] ;
?>

<section class="audi-title">
    <div class="container">
        <div class="col-md-12">
            <h1><img src="/images/audi_logo.png"><?=$samplevehicle["Manufacturer_Name"][0] ?> leasing deals</h1>
        </div>
    </div>
</section>
<section class="manufa_deals-bg image-section">
    <div class="container">
        <div class="col-md-5 pull-right image item">
            <img src="/images/audi-blue.jpg">
        </div>
        <div class="col-md-7">
            <div class="audio-content">
                <p>With our extensive knowledge of premium car contract hire and leasing, AMT Leasing is the natural first stop for anyone interested in leasing an Audi.  Whether you are looking for a premium <strong>Audi A3 </strong>or <strong>Audi Q5 </strong>or a sporty number from our <strong>Audi TT </strong>range, our superior customer service along with our commitment to offering the best Audi lease deals is bound to impress.</p>

                <p>Audi is renowned for the quality of their engineering and design. These are cars built for drivers that truly appreciate style and performance. At AMT Leasing we have extensive experience of dealing with both Audi personal lease and Audi business lease customers. Also, we can deliver your new Audi straight to your door throughout the UK. </p>
            </div>
            <div class="choose_model">
                <form>
                    <div class="form-group">
                        <label for="">I know what Audi model I’m looking for</label>
                        <select class="form-control"  onChange="window.location.href=this.value">
                            <option>Choose your desired model</option>
                            <?php
                            foreach ($vehiclemodels AS $vehiclerange) {

                                ?>
                                <option  value="/car-leasing/<?=$samplevehicle["Manufacturer_Name"][0] ?>/<?=$vehiclerange["Range_Name"]?>"><?=$vehiclerange["Range_Name"]?></option>
                                <?php
                            }

                            ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <p>Haven’t decided? <a href="#">Get in touch and let us help you find <?php
                                $vocals = array('a','e','i','o','u');

                                if (in_array(strtolower ($samplevehicle["Manufacturer_Name"][0]{0}), $vocals)) {
                                    echo "an ";
                                } else {
                                    echo "a ";
                                }

                                echo $samplevehicle["Manufacturer_Name"][0]; ?></a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="advance_srchpglist">
    <div class="container">
        <div class="adv_dealsbuttons">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="adv_dealsfound">
                        <?= array_sum($samplevehicle["NumDealsAvailable"]);?> deals found</div>
                </div><!---col-lg-6-->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="advpg_sortby">
                        <form>
                            <div class="form-group">    <label for="">Sort by:</label>
                                <select class="form-control modal-select">

                                    <option>Popularity</option>
                                    <option>Low</option>
                                    <option>High</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div><!--col-lg-6-->
            </div><!--row-->
        </div><!--adv_dealsbuttons-->

        <div class="srchmodls_carlist">
            <div class="sm_carinfo">
                <div class="row">
                    <?php
                    for ($i = 0; $i<count($samplevehicle["Range_Name"]); $i++)
                    {

                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="sm_cardtl">
                            <div class="sm_cardtlimg">
                                <figure> <img class="img-responsive" src="/Vimages/<?=$samplevehicle["Image_Set_ID"][$i] ?>.jpg"></figure>
                                <figcaption><?=$samplevehicle["NumDealsAvailable"][$i] ?> deals available</figcaption>
                            </div>
                            <div class="sm_carcontt">

                                    <div class="sm_carnamsap">
                                        <img src="/images/sp_ofrline.png">
                                    </div>
                                    <div class="sm_carnam">
                                        <h3><?=$samplevehicle["Manufacturer_Name"][$i] ?> <?=$samplevehicle["Range_Name"][$i] ?></h3>
                                    </div>
                                    <div class="sm_carnamsap">
                                        <img src="/images/sp_ofrline.png">
                                    </div>
                                    <div class="sm_carfeatur">
                                        <ul>
                                            <li>MPG<span> From <?=$samplevehicle["UrbanMPG"][$i] ?>mpg to <?=$samplevehicle["ExtraUrbanMPG"][$i] ?>mpg </span></li>
                                            <li>Co2<span> From XX g/km to 130g/km</span></li>
                                        </ul>
                                    </div>
                                    <div class="sm_carpersbus">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-6 col-sm-6">
                                                <div class="sm_carperlft">
                                                    <h4>Personal from</h4>
                                                    <h5>inc. VAT</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-sm-6">
                                                <div class="sm_carperrgt">
                                                    <h3><?=Yii::$app->formatter->asCurrency(($samplevehicle["Derivative_Monthly_Rental_Price"][$i])*CONST_VAT)?></h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-sm-6">
                                                <div class="sm_carperlft">
                                                    <h4>Business from</h4>
                                                    <h5>excl. VAT</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-sm-6">
                                                <div class="sm_carperrgt">
                                                    <h3><?=Yii::$app->formatter->asCurrency(($samplevehicle["Derivative_Monthly_Rental_Price"][$i]))?></h3>
                                                </div>
                                            </div>
                                        </div><!--row-->
                                    </div>
                                    <div class="sm_carrngviewbtn">
                                        <a href="/car-leasing/<?=$samplevehicle["Manufacturer_Name"][$i] ?>/<?=$samplevehicle["Range_Name"][$i] ?>"> <button type="submit" class="hm_redbtns">View Range <img
                                                    src="/images/hmright_arrow.png"></button></a>
                                    </div>


                            </div>
                        </div><!--sm_caridtl-->
                    </div>    <!--col-lg-4-->
                        <?php
                    }
                    ?>

                    <!------------------------------------------------->
                </div><!--row-->
            </div><!--sm_carinfo-->


        </div>
    </div>
</section>


