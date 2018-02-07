<?php

/* @var $this yii\web\View */

$this->title = $vehiclerange[0]["fmanu"]." ".$vehiclerange[0]["Range_Name"]." leasing deals" ;
?>

<section class="audi-title">
    <div class="container">
        <div class="col-md-12">
            <h1><img src="/images/brands/<?=$vehiclerange[0]["flogo"];?>"><?=$vehiclerange[0]["Manufacturer_Name"];?> <?=$vehiclerange[0]["Range_Name"];?> leasing deals</h1>

        </div>
    </div>
</section>


<section class="mob_audiimg">
    <div class="container">
        <div class="col-md-12">
            <img src="/Vimages/<?=$vehiclerange[0]["Image_Set_ID"];?>.jpg" class="img-responsive">

        </div>
    </div>
</section>


<section class="deals-bg" style="background-image: url(/Vimages/<?=$vehiclerange[0]["Image_Set_ID"];?>.jpg); background-position: right; background-size: contain;">
    <div class="container">
        <div class="col-md-6">
            <div class="audio-content">
                <p>Whether you choose to call this a Super Mini or a Small Hatchback, the fact is - this is an Audi and shares all of the quality and control you should expect from its larger cousins. Little wonder this car is a winner of the WhatCar ‘Car of the Year’ award. The A1 comes in petrol and diesel versions, with manual or automatic transmissions, a variety of engine sizes ranging from the nippy 1 litre to the powerful 2 litre capacities, available in Sportback, SE, Sport and S-Line trims. There is even a 4 wheel drive version - the S1 TFSI Quattro.</p>

                <p>The fuel economy is as good as any vehicle of its class (some of the A1s boast well over 80 Miles to the Gallon). As is to be expected, the A1 is up there with the safest cars in the premium supermini class and has been awarded a five-star rating in Euro NCAP crash safety tests. However, it is in the cabin that the A1 really stands out from its rivals. Again, that prestigious Audi attention to detail has made this little vehicle the comfortable ride and a classy finish that is normally reserved for larger saloons.</p>

            </div>

        </div>
    </div>
</section>

<section class="advance_srchpg">
    <div class="container">
        <div class="col-md-8">
            <h2>Refine your search</h2>

        </div>

        <div class="col-md-4 refine_colpsfiltr">
            <div class="adv_colpsfiltr"><button>collapse filters</button></div>

        </div>

        <div class="refine_checkbox_col">
            <div class="adv_chkbxlist">

                <div class="advany_shape">
                    <div class="advchkbx_lft">
                        <input id="toggle9" type="checkbox" checked>
                        <label for="toggle9">Any Body Shape</label>
                    </div>
                </div>

                <div class="advothr_shape">
                    <div class="advchkbx_lft">
                        <input id="toggle1" type="checkbox" disabled>
                        <label for="toggle1"><img src="/images/icons/car-shape-city.svg" class="adv_unactiveimg"><img src="/images/icons/city-car-red.svg" class="adv_activeimg"><h5>city car</h5></label>
                    </div>
                    <div class="advchkbx_lft">
                        <input id="toggle2" type="checkbox">
                        <label for="toggle2"><img src="/images/icons/car-shape-hatchback.svg" class="adv_unactiveimg"><img src="/images/icons/hatchback-red.svg" class="adv_activeimg"><h5>hatchback</h5></label>
                    </div>
                    <div class="advchkbx_lft">
                        <input id="toggle3" type="checkbox">
                        <label for="toggle3"><img src="/images/icons/car-shape-saloon.svg" class="adv_unactiveimg"><img src="/images/icons/saloon-red.svg" class="adv_activeimg"><h5>Saloon</h5></label>
                    </div>
                    <div class="advchkbx_lft">
                        <input id="toggle4" type="checkbox">
                        <label for="toggle4"><img src="/images/icons/car-shape-estate.svg" class="adv_unactiveimg"><img src="/images/icons/estate-red.svg" class="adv_activeimg"><h5>Estate</h5></label>
                    </div>
                    <div class="advchkbx_lft">
                        <input id="toggle5" type="checkbox" disabled>
                        <label for="toggle5"><img src="/images/icons/car-shape-coupe.svg" class="adv_unactiveimg"><img src="/images/icons/coupe-red.svg" class="adv_activeimg"><h5>coupé</h5></label>
                    </div>
                    <div class="advchkbx_lft">
                        <input id="toggle6" type="checkbox" disabled>
                        <label for="toggle6"><img src="/images/icons/car-shape-convertible.svg" class="adv_unactiveimg"><img src="/images/icons/convertible-red.svg" class="adv_activeimg"><h5>convertible</h5></label>
                    </div>
                    <div class="advchkbx_lft">
                        <input id="toggle7" type="checkbox" disabled>
                        <label for="toggle7"><img src="/images/icons/car-shape-4x4.svg" class="adv_unactiveimg"><img src="/images/icons/4x4-SUV-red.svg" class="adv_activeimg"><h5>4x4 / suv</h5></label>
                    </div>
                    <div class="advchkbx_lft">
                        <input id="toggle8" type="checkbox" disabled>
                        <label for="toggle8"><img src="/images/icons/car-shape-people-carrier.svg" class="adv_unactiveimg"><img src="/images/icons/people-carrier-red.svg" class="adv_activeimg"><h5>people
                                carrier</h5></label>
                    </div>
                </div>
            </div><!--adv_chkbxlist-->

        </div>


        <div class="refine_search_col">
            <form class="form-inline">
                <div class="form-group">
                    <label for="exampleInputName2">Trim Level</label>
                    <select class="form-control">
                        <option>Show all</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputName2">Gearbox</label>
                    <select class="form-control">
                        <option>Show all</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputName2">Fuel Type</label>
                    <select class="form-control">
                        <option>Show all</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputName2">Contract Length</label>
                    <select class="form-control">
                        <option>Show all</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputName2">Initial Rental</label>
                    <select class="form-control">
                        <option>6 months</option>
                        <option>12 months</option>
                        <option>4 months</opton>
                        <option>8 months</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputName2">Annual Mileage</label>
                    <select class="form-control">
                        <option>8,000 miles</option>
                        <option>8,000 miles</option>
                        <option>8,000 miles</opton>
                    </select>
                </div>
                <div class="refine_search-btn">
                    <button type="submit" class="btn btn-refine"><i><img src="/images/search.png"></i>Refine search</button>
                </div>
            </form>
        </div>


    </div>
</section>


<section class="advance_srchpglist">
    <div class="container">
        <div class="adv_dealsbuttons">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="adv_dealsfound">XXXX deals found</div>
                </div><!---col-lg-6-->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="advpg_sortby">
                        <form>
                            <div class="form-group">
                                <label for="">Sort by:</label>
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

        <div class="adv_dealslist svr_model">




            <!---------------------------------------------------------->
            <?php
            foreach ($vehiclerange AS $vehicle){


            ?>
            <div class="adv_dealslistinfo">
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="adv_dlistimg">
                            <figure>

                                <figcaption><i class="fa fa-star-o" aria-hidden="true"></i> In Stock</figcaption>
                            </figure>
                        </div>
                        <div class="adv_dlistinam">
                            <h3><?=$vehicle["Manufacturer_Name"];?> <?=$vehicle["Range_Name"];?> <?=$vehicle["Model_Body_Style"];?></h3>
                            <h5><?=$vehicle["Derivative_Description"];?></h5>
                            <!--<div class="adv_namspofr">Special offer</div>-->
                        </div>
                    </div><!--col-lg-2-->

                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="adv_carspeci">
                            <ul>
                                <li>MPG<span><?=$vehicle["urbanmpg"];?>mpg - <?=$vehicle["extraurbanmpg"];?>mpg</span></li>
                                <li>Co2<span><?=$vehicle["co2"];?>g/km</span></li>
                                <li>Gearbox<span><?=$vehicle["Derivative_Transmission"];?></span></li>
                                <li>Fuel<span><?=$vehicle["Derivative_Fuel_Type"];?></span></li>
                            </ul>
                        </div>
                    </div><!--col-lg-3-->

                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <div class="adv_dlisttblinfo">
                            <div class="table-responsive adv_outrtble">
                                <table class="table adv_outrtbleinfo">
                                    <thead>
                                    <tr>
                                        <th><table  class="table">
                                                <thead>
                                                <tr>
                                                    <th><h5>Contract</h5></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><h4>Personal</h4><h5>inc. VAT</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h4>Business</h4><h5>exc. VAT</h5></td>
                                                </tr>


                                                </tbody>
                                            </table></th>
                                        <th>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th><h5>1 year</h5></th>
                                                        <th><h5>2 year</h5></th>
                                                        <th><h5>3 year</h5></th>
                                                        <th><h5>4 year</h5></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><h3>£XXX.XX</h3></td>
                                                        <td><h3>£XXX.XX</h3></td>
                                                        <td><h3>£XXX.XX</h3></td>
                                                        <td><h3>£XXX.XX</h3></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h3>£XXX.XX</h3></td>
                                                        <td><h3>£XXX.XX</h3></td>
                                                        <td><h3>£XXX.XX</h3></td>
                                                        <td><h3>£XXX.XX</h3></td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div><!--col-lg-5-->

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="adv_dlistview">
                            <a href="/car-leasing/<?=strtolower($vehicle["Friendly_URL"]) ?>"> <button type="submit" class="adv_viewbtn">View Vehicle</button></a>
                            <button type="submit" class="adv_addbtn"><img src="/images/plus.png">Add to my showroom</button>
                        </div>
                    </div><!--col-lg-4-->

                </div><!--row-->
            </div><!--adv_dealslistinfo-->

            <!---------------------------------------------------------->
            <?php

            }

            ?>

        </div><!--adv_dealslist-->


    </div>
</section>


<section class="keep_mail">
    <?php include(CONST_ROOTDIR.'/views/site/includes/email_newsletter.php'); ?>
</section>
