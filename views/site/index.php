<?php

/* @var $this yii\web\View */
$this->title = 'AMT Vehicle Group | Home ';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="home_banner_des">
                <div class="page-title">
                    <h1 class="wow fadeInUp">Car or van? Business or personal? This is vehicle leasing made easy.</h1>
                    <p class="home-bannertext wow fadeInUp" data-wow-delay="0.2s">Whether you’re new to car leasing or a seasoned professional; if you want to understand the benefits that leasing can provide for your business, or you’re after a new car for personal use, we’re here to find you the best deal on your new vehicle.</p>

                    <p class="mob-bannertext wow fadeInUp" data-wow-delay="0.4s">We're here to find you the best deal on your new vehicle</p>
                </div>
            </div>
        </div>
    </div>
</div>

</header>

<?php include("includes/amt_api.php"); ?>

<div class="home-searchcol">
    <div class="home_search">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-md-12 col-lg-offset-1">
                    <div class="home_tab_search">
                        <div class="instead-text"><a href="#">Looking for vans instead?</a></div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" class="personal_home_link" aria-controls="home" role="tab" data-toggle="tab">Personal</a></li>
                            <li role="presentation"><a href="#profile" class="business_home_link" aria-controls="profile" role="tab" data-toggle="tab">Business</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="hm_search_form">
                                    <form method="post" name="home_search_form" class="form-inline" action="" id="theForm">
                                        <div class="form-group">



                                              <?php
                                                  $makedealscount=0;
                                                  $dealscount=0;
                                                  $TOTALCOUNT="";
                                                  // Set Temporary variable

                                                  $modelList = "";
                                                  $text = "";
                                                  $options ="";
                                                  $modeldealscount="";




                                                  // Get all vehicle information
                                                  $newArray = $retArray['makemodels'];




                                              		foreach($newArray as $makemodelArray) {

                                                    $index = 0;



                                            			$make = $makemodelArray['make']; // INDIVIDUAL MAKE: ABARTH // ALFA ROMEO // ASTON MARTIN



                                                  $model = str_replace( ',', '","', $makemodelArray['modellist'] ); // SET OF MODELS: 124 Spider", "595", "695



                                                  $dealscount = $makemodelArray['totalmodeldeals']; // AMOUNT OF DEALS PER MANUFACTURER: ABARTH HAS '27'






                                                        $text = $text . ' "' .$make. '" : [ "' . $model . '" ],'; // PUTS INTO ARRAY EACH MANUFACTURERS ALONG WITH MODEL // "ABARTH" : [ "124 SPIDER","595","695" ]





                                            			       $options .= "<option value='". $make. "'> ". $make . " </option>"; // PRINTS EACH OPTION VALUE

                                                         $modelList = $model;




                                                          $newArrayModelCount = $makemodelArray['modeldealcountlist'];




                                                            $testDavid = preg_split("/[\s,]+/", $newArrayModelCount);
                                                           print_r("Count: ".$testDavid[0] );

                                                            $index++;

                                              }




                                              $text = "state = {" . rtrim($text, ",") . "};";





// list($part1, $part2) = explode('.', $string);

                                              ?>

                                              <script type="text/javascript">

                                                <?php print $text; ?>

                                              </script>

                                              <?php


                                            // state = {"1":["Rome","Milan","Parma"],"2":["Paris","Lile","Nice"],"3":["Algiers","Jijel","Bejaia"],"4":["London","Manchester"]};

                                              ?>
                                            <select class="form-control modal-select home_search_panel" name="manufacturer" id="vehicle_makes">
                                              <option value="" name="make"> - Select Make - </option>
                                              <?php print $options; ?>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <select class="form-control modal-select home_search_panel" id="vehicle_models">
                                              <option value="" name="model" disabled selected> - Select Model - </option>
                                            </select>
                                        </div>


                                        <div class="form-group min-bud">

                                            <select class="form-control home_search_panel" id="min_budget">

                                                <option value="0" selected disabled>Min. Budget</option>
                                                <option value="0">£0</option>
                                                <option value="100">£100</option>
                                                <option value="200">£200</option>
                                                <option value="300">£300</option>
                                                <option value="400">£400</option>
                                                <option value="500">£500</option>
                                                <option value="600">£600</option>
                                                <option value="700">£700</option>
                                                <option value="800">£800</option>
                                                <option value="900">£900</option>
                                                <option value="1000">£1000</option>
                                                <option value="1100">£1100</option>
                                                <option value="1200">£1200</option>
                                                <option value="1300">£1300</option>
                                                <option value="1400">£1400</option>
                                                <option value="1500">£1500</option>
                                                <option value="1600">£1600</option>
                                                <option value="1700">£1700</option>
                                                <option value="1800">£1800</option>
                                                <option value="1900">£1900</option>
                                                <option value="2000">£2000</option>
                                            </select>
                                        </div>

                                        <div class="form-group min-bud">
                                            <select class="form-control home_search_panel" id="max_budget">
                                                <option value="" selected disabled>Max. Budget</option>
                                                <option value="0">£0</option>
                                                <option value="100">£100</option>
                                                <option value="200">£200</option>
                                                <option value="300">£300</option>
                                                <option value="400">£400</option>
                                                <option value="500">£500</option>
                                                <option value="600">£600</option>
                                                <option value="700">£700</option>
                                                <option value="800">£800</option>
                                                <option value="900">£900</option>
                                                <option value="1000">£1000</option>
                                                <option value="1100">£1100</option>
                                                <option value="1200">£1200</option>
                                                <option value="1300">£1300</option>
                                                <option value="1400">£1400</option>
                                                <option value="99999"> £1500 + </option>
                                            </select>
                                        </div>


                                        <input type="hidden" name="  <?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->getCsrfToken()?>" />

                                        <a class="btn btn-search_result" id="searchResultHref"><p class="search_result_p"><i><img src="images/search.png"></i>Search <?php if(isset($dealscount)){print $dealscount;} ?>  Results</p></a>


                                        <div class="search-bottom">
                                            <div class="row">
                                                <div class="mob-vew-adv_search">
                                                    <p>Looking for something more specific?</p>
                                                    <a href="#">View advanced search options</a>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <a class="btn btn-reset" href="#" role="button"><i class="fa fa-refresh" aria-hidden="true"></i>
Reset Form</a>
                                                </div>

                                                <div class="col-md-9 col-sm-9 help-car">
                                                    <p>Looking for something more specific? <strong><a href="#">Help me find a car</a></strong></p>
                                                </div>

                                            </div>
                                        </div>
  </form>

                                </div>

                            </div>

                            <div role="tabpanel" class="tab-pane" id="profile">

                              <form class="form-inline">
                                  <div class="form-group">

                                      <select class="form-control modal-select home_search_panel">
                                          <option>Audi</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <select class="form-control modal-select home_search_panel">
                                          <option value="">Model</option>
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                      </select>
                                  </div>

                                  <div class="form-group min-bud">

                                      <select class="form-control home_search_panel">

                                          <option value="">Min. Budget</option>
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                      </select>
                                  </div>

                                  <div class="form-group min-bud">
                                      <select class="form-control home_search_panel">
                                          <option value="">Max. Budget</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                      </select>
                                  </div>

                                  <input type="submit" class="btn btn-search_result"><i><img src="images/search.png"></i>Search XX,XXX Results</input>

                                  <div class="search-bottom">
                                      <div class="row">
                                          <div class="mob-vew-adv_search">
                                              <p>Looking for something more specific?</p>
                                              <a href="#">View advanced search options</a>
                                          </div>
                                          <div class="col-md-3 col-sm-3">
                                              <a class="btn btn-reset" href="#" role="button"><i class="fa fa-refresh" aria-hidden="true"></i>
Reset Form</a>
                                          </div>

                                          <div class="col-md-9 col-sm-9 help-car">
                                              <p>Looking for something more specific? <strong><a href="#">Help me find a car</a></strong></p>
                                          </div>

                                      </div>
                                  </div>

                              </form>

                            </div>

                        </div>

                        <div class="mob-look-instant">
                            <a href="#">Looking for vans instead?</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<section class="hmpg_support grey_bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="hm_supotinfo">
                    <figure><img src="images/icons/dedicated-support.svg"></figure>
                    <h4><strong>Dedicated support</strong></h4>
                    <p>You’ll get a dedicated, experienced Account Manager who will be your point of contact throughout the leasing process and beyond.</p>
                </div>
            </div>
            <!--col-lg-3-->
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="hm_supotinfo">
                    <figure><img src="images/icons/flexible-term.svg"></figure>
                    <h4><strong>Flexible terms</strong></h4>
                    <p>The contract length, business or personal terms, the initial payment, mileage, monthly costs and the type of finance arrangement are all tailored to your needs.</p>
                </div>
            </div>
            <!--col-lg-3-->
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="hm_supotinfo">
                    <figure><img src="images/icons/part-exchange.svg"></figure>
                    <h4><strong>Part exchange</strong></h4>
                    <p>Save yourself time - if you’ve got a vehicle to sell, we can part exchange it for you.</p>
                </div>
            </div>
            <!--col-lg-3-->
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="hm_supotinfo">
                    <figure><img src="images/icons/great-value.svg"></figure>
                    <h4><strong>Great value</strong></h4>
                    <p>We will search the market to get you the best deal possible. If you need something quickly, we also have some great vehicles in stock, all at great prices.</p>
                </div>
            </div>
            <!--col-lg-3-->
        </div>
        <!--row-->
    </div>
    <!--container-fluid-->
</section>

<section class="hm_leasingamt">
    <div class="container">
        <div class="hm_leasingamtinfo">
            <h2 class="wow fadeInUp">Leasing from AMT</h2>
            <h4 class="wow fadeInUp" data-wow-delay="0.2s">We’ve been established for over 20 years so we know the car leasing and van leasing market.</h4>
            <p  class="wow fadeInUp" data-wow-delay="0.4s">We partner with a range of different funders so we can remain impartial and work with you to get the best lease deal possible. Accredited by the BVRLA – the UK’s independent vehicle rental and leasing body – you can be rest assured you’re dealing with reputable and knowledgeable car leasing experts. Need a car or van lease at short notice? We have a range of cars and vans in stock which can be available to you in as little as two weeks.
            </p>
          <a href="/about-us">  <button type="submit" class="hm_redbtns wow fadeInUp" data-wow-delay="1s">Find out more about AMT <img src="images/hmright_arrow.png"> </button> </a>
        </div>
    </div>
    <!--container-->
</section>

<section class="hm_carvanofr">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft">
                <div class="hm_cvofferinfo">
                    <figure><img src="images/hm_carofr.png" class="img-responsive center-block"/></figure>
                    <h2 class="mt-4p">Cars</h2>
                    <h4>Special Offers</h4>
                    <p>Take a look at our current car leasing special offers. Many of these cars are in stock and can be delivered within two weeks. Hurry, these offers won’t be around for long.</p>
                    <button type="submit" class="hm_redbtns">View Car offers <img src="images/hmright_arrow.png"> </button>
                </div>
            </div>
            <!--col-lg-6-->
            <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight">
                <div class="hm_cvofferinfo">
                    <figure><img src="images/hm_vanofr.png"></figure>
                    <h2>Vans</h2>
                    <h4>Special Offers</h4>
                    <p>We search the market on a daily basis to bring you a range of fantastic special offers on vans. To take advantage of one of these offers, get in touch today.</p>
                    <button type="submit" class="hm_redbtns">View Van offers <img src="images/hmright_arrow.png"> </button>
                </div>
            </div>
            <!--col-lg-6-->
        </div>
        <!--row-->
    </div>
    <!--container-->
</section>

<section class="hm_ourspoffr">
    <div class="container">
        <div class="hm_oursoinfo">
            <h2 class="wow fadeInUp">Our Special Offers</h2>
            <div class="special-offers-slick special-offers-slick-css normal-imglist wow fadeInUp">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <a href="#">
                        <div class="hm_oursodtl">
                            <figure>
                                <img class="img-responsive" src="images/hm_spofr1.jpg">
                            </figure>
                            <div class="hm_spofrtxt">Special offer</div>
                            <div class="item_spofrname">
                                <h4>BMW 3 Series</h4>
                                <h5>335d xDrive M Sport 4dr Step Auto</h5>
                            </div>
                            <div class="spoffrsap"><img src="images/sp_ofrline.png"></div>
                            <div class="apofr_price">
                                <h4>£XXX.XX <small>per month incl. tax</small></h4>
                                <ul>
                                    <li>Initial rental: £XXX.XX</li>
                                    <li>48 month lease</li>
                                    <li>10,000 miles per annum</li>
                                </ul>
                                <div class="hm_viewspo">
                                    <button type="submit"><img src="images/hm_spoicon.png"> view special offer</button>
                                </div>
                                <div class="hm_addmyshrm">
                                    <button type="submit">Add to my showroom</button>
                                </div>
                            </div>

                        </div>
                        <!--hm_oursodtl-->
                    </a>
                </div>
                <!--item-->
                <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <a href="#">
                        <div class="hm_oursodtl">
                            <figure>
                                <img class="img-responsive" src="images/hm_spofr2.jpg">

                            </figure>
                            <div class="hm_spofrtxt">Special offer</div>
                            <div class="item_spofrname">
                                <h4>Mercedes-Benz CLA Class Diesel Shooting Brake</h4>
                                <h5>CLA 220d AMG Line 5dr Tip Auto</h5>
                            </div>
                            <div class="spoffrsap"><img src="images/sp_ofrline.png"></div>
                            <div class="apofr_price">
                                <h4>£XXX.XX <small>per month incl. tax</small></h4>
                                <ul>
                                    <li>Initial rental: £XXX.XX</li>
                                    <li>48 month lease</li>
                                    <li>10,000 miles per annum</li>
                                </ul>
                                <div class="hm_viewspo">
                                    <button type="submit"><img src="images/hm_spoicon.png"> view special offer</button>
                                </div>
                                <div class="hm_addmyshrm">
                                    <button type="submit">Add to my showroom</button>
                                </div>
                            </div>

                        </div>
                        <!--hm_oursodtl-->
                    </a>
                </div>
                <!--item-->
                <div  class="wow fadeInUp" data-wow-delay="0.6s">
                    <a href="#">
                        <div class="hm_oursodtl">
                            <figure>
                                <img class="img-responsive" src="images/hm_spofr3.jpg">
                                <figcaption><i class="fa fa-star-o" aria-hidden="true"></i> In Stock</figcaption>
                            </figure>
                            <div class="hm_spofrtxt">Special offer</div>
                            <div class="item_spofrname">
                                <h4>Land Rover Range Rover Sport Estate</h4>
                                <h5>5.0 V8 S/C SVR 5dr Auto</h5>
                            </div>
                            <div class="spoffrsap"><img src="images/sp_ofrline.png"></div>
                            <div class="apofr_price">
                                <h4>£XXX.XX <small>per month incl. tax</small></h4>
                                <ul>
                                    <li>Initial rental: £XXX.XX</li>
                                    <li>48 month lease</li>
                                    <li>10,000 miles per annum</li>
                                </ul>
                                <div class="hm_viewspo">
                                    <button type="submit"><img src="images/hm_spoicon.png"> view special offer</button>
                                </div>
                                <div class="hm_addmyshrm">
                                    <button type="submit">Add to my showroom</button>
                                </div>
                            </div>

                        </div>
                        <!--hm_oursodtl-->

                    </a>
                </div>
                <!--item-->

                <div>
                    <a href="#">
                        <div class="hm_oursodtl">
                            <figure>
                                <img class="img-responsive" src="images/hm_spofr1.jpg">
                            </figure>
                            <div class="hm_spofrtxt">Special offer</div>
                            <div class="item_spofrname">
                                <h4>BMW 3 Series</h4>
                                <h5>335d xDrive M Sport 4dr Step Auto</h5>
                            </div>
                            <div class="spoffrsap"><img src="images/sp_ofrline.png"></div>
                            <div class="apofr_price">
                                <h4>£XXX.XX <small>per month incl. tax</small></h4>
                                <ul>
                                    <li>Initial rental: £XXX.XX</li>
                                    <li>48 month lease</li>
                                    <li>10,000 miles per annum</li>
                                </ul>
                                <div class="hm_viewspo">
                                    <button type="submit"><img src="images/hm_spoicon.png"> view special offer</button>
                                </div>
                                <div class="hm_addmyshrm">
                                    <button type="submit">Add to my showroom</button>
                                </div>
                            </div>

                        </div>
                        <!--hm_oursodtl-->
                    </a>
                </div>
                <!--item-->
                <div>
                    <a href="#">
                        <div class="hm_oursodtl">
                            <figure>
                                <img class="img-responsive" src="images/hm_spofr2.jpg">

                            </figure>
                            <div class="hm_spofrtxt">Special offer</div>
                            <div class="item_spofrname">
                                <h4>Mercedes-Benz CLA Class Diesel Shooting Brake</h4>
                                <h5>CLA 220d AMG Line 5dr Tip Auto</h5>
                            </div>
                            <div class="spoffrsap"><img src="images/sp_ofrline.png"></div>
                            <div class="apofr_price">
                                <h4>£XXX.XX <small>per month incl. tax</small></h4>
                                <ul>
                                    <li>Initial rental: £XXX.XX</li>
                                    <li>48 month lease</li>
                                    <li>10,000 miles per annum</li>
                                </ul>
                                <div class="hm_viewspo">
                                    <button type="submit"><img src="images/hm_spoicon.png"> view special offer</button>
                                </div>
                                <div class="hm_addmyshrm">
                                    <button type="submit">Add to my showroom</button>
                                </div>
                            </div>

                        </div>
                        <!--hm_oursodtl-->
                    </a>
                </div>
                <!--item-->
                <div>
                    <a href="#">
                        <div class="hm_oursodtl">
                            <figure>
                                <img class="img-responsive" src="images/hm_spofr3.jpg">
                                <figcaption><i class="fa fa-star-o" aria-hidden="true"></i> In Stock</figcaption>
                            </figure>
                            <div class="hm_spofrtxt">Special offer</div>
                            <div class="item_spofrname">
                                <h4>Land Rover Range Rover Sport Estate</h4>
                                <h5>5.0 V8 S/C SVR 5dr Auto</h5>
                            </div>
                            <div class="spoffrsap"><img src="images/sp_ofrline.png"></div>
                            <div class="apofr_price">
                                <h4>£XXX.XX <small>per month incl. tax</small></h4>
                                <ul>
                                    <li>Initial rental: £XXX.XX</li>
                                    <li>48 month lease</li>
                                    <li>10,000 miles per annum</li>
                                </ul>
                                <div class="hm_viewspo">
                                    <button type="submit"><img src="images/hm_spoicon.png"> view special offer</button>
                                </div>
                                <div class="hm_addmyshrm">
                                    <button type="submit">Add to my showroom</button>
                                </div>
                            </div>

                        </div>
                        <!--hm_oursodtl-->

                    </a>
                </div>
                <!--item-->

                <div>
                    <a href="#">
                        <div class="hm_oursodtl">
                            <figure>
                                <img class="img-responsive" src="images/hm_spofr1.jpg">
                            </figure>
                            <div class="hm_spofrtxt">Special offer</div>
                            <div class="item_spofrname">
                                <h4>BMW 3 Series</h4>
                                <h5>335d xDrive M Sport 4dr Step Auto</h5>
                            </div>
                            <div class="spoffrsap"><img src="images/sp_ofrline.png"></div>
                            <div class="apofr_price">
                                <h4>£XXX.XX <small>per month incl. tax</small></h4>
                                <ul>
                                    <li>Initial rental: £XXX.XX</li>
                                    <li>48 month lease</li>
                                    <li>10,000 miles per annum</li>
                                </ul>
                                <div class="hm_viewspo">
                                    <button type="submit"><img src="images/hm_spoicon.png"> view special offer</button>
                                </div>
                                <div class="hm_addmyshrm">
                                    <button type="submit">Add to my showroom</button>
                                </div>
                            </div>

                        </div>
                        <!--hm_oursodtl-->
                    </a>
                </div>
                <!--item-->
                <div>
                    <a href="#">
                        <div class="hm_oursodtl">
                            <figure>
                                <img class="img-responsive" src="images/hm_spofr2.jpg">

                            </figure>
                            <div class="hm_spofrtxt">Special offer</div>
                            <div class="item_spofrname">
                                <h4>Mercedes-Benz CLA Class Diesel Shooting Brake</h4>
                                <h5>CLA 220d AMG Line 5dr Tip Auto</h5>
                            </div>
                            <div class="spoffrsap"><img src="images/sp_ofrline.png"></div>
                            <div class="apofr_price">
                                <h4>£XXX.XX <small>per month incl. tax</small></h4>
                                <ul>
                                    <li>Initial rental: £XXX.XX</li>
                                    <li>48 month lease</li>
                                    <li>10,000 miles per annum</li>
                                </ul>
                                <div class="hm_viewspo">
                                    <button type="submit"><img src="images/hm_spoicon.png"> view special offer</button>
                                </div>
                                <div class="hm_addmyshrm">
                                    <button type="submit">Add to my showroom</button>
                                </div>
                            </div>

                        </div>
                        <!--hm_oursodtl-->
                    </a>
                </div>
                <!--item-->

            </div>
            <!--hm_specialofr-->

            <div class="hm_viewspobtn">
                <a href="special-offers.php"><button type="submit" class="hm_redbtns">View Special offers <img src="images/hmright_arrow.png"> </button></a>
            </div>
        </div>
        <!--hm_oursoinfo-->
    </div>
    <!--container-->
</section>

<section class="hm_takealook">
    <div class="container-fluid">
        <div class="hm_takealookinfo">
            <h2 class="wow fadeIn">Take a look at what AMT can do for you</h2>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInLeft">
                    <div class="hm_takealookdtl">
                        <figure>
                            <img src="images/hm_tklookimg1.jpg">
                            <div class="tklokimg1 tklokimg"><img src="images/tklookimg_ovr1.png"></div>
                        </figure>
                        <div class="hm_takealookcontt">
                            <h3>Why Lease with AMT</h3>
                            <p>Our wealth of experience, competitive deals, dedicated account management and great customer service are just some of the reasons our customers stay with AMT.
                            </p>

                          <a href="/about-us">  <button type="submit" class="hm_redbtns">Find out more about amt <img src="/images/hmright_arrow.png"> </button> </a>
                        </div>
                    </div>
                </div>
                <!--col-lg-4-->

                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp">
                    <div class="hm_takealookdtl">
                        <figure>
                            <img src="/images/hm_tklookimg2.jpg">
                            <div class="tklokimg2 tklokimg"><img src="/images/tklookimg_ovr2.png"></div>
                        </figure>
                        <div class="hm_takealookcontt">
                            <h3>Part Exchange </h3>
                            <p>If you’ve got a vehicle to sell, just give us a call or use our calculator and see how much you could expect to receive if you part exchange your vehicle with us. We’re here to help so get in touch today.
                            </p>

                          <a href="/part-exchange">  <button type="submit" class="hm_redbtns">Free car valuation service <img src="images/hmright_arrow.png"> </button> </a>
                        </div>
                    </div>
                </div>
                <!--col-lg-4-->

                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInRight">
                    <div class="hm_takealookdtl">
                        <figure>
                            <img src="images/hm_tklookimg3.jpg">
                            <div class="tklokimg3 tklokimg"><img src="images/tklookimg_ovr3.png"></div>
                        </figure>
                        <div class="hm_takealookcontt">
                            <h3>BIK Calculator</h3>
                            <p>If you want to estimate the benefit in kind tax you could pay for a vehicle, then use our calculator to help you make an informed choice. Still in doubt? Then give us a call.

                            </p>

                          <a href="/bik-tax-calculator">  <button type="submit" class="hm_redbtns">Calculate tax now <img src="/images/hmright_arrow.png"> </button> </a>
                        </div>

                    </div>
                </div>
                <!--col-lg-4-->

            </div>
            <!--row-->

        </div>
    </div>
    <!--container-fluid-->
</section>

<section class="hm_leasprocss">
    <div class="container">
        <div class="hm_leasprocssinfo">
            <h2 class="wow fadeIn">The leasing process made simple</h2>
            <h3 class="wow fadeIn" data-wow-delay="0.2s">If you’re new to leasing and want to understand how it all works, read on.</h3>
            <div class="hmleasing_steps wow fadeInUp" data-wow-delay="0.2s">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="hm_lstepimg">
                            <img src="images/hm_step1.jpg">
                        </div>
                    </div>
                    <!--col-lg-6-->
                    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="hm_lstepinfo">
                            <h5>Step 1</h5>
                            <h4>Choose a Vehicle</h4>
                            <p>If you know what you’re looking for, either use our website search tool, or click on the manufacturer and model you want. Not so sure what is the right vehicle for you? Then try our advanced website search or give one of our Account Managers a call to discuss your needs.
                            </p>
                        </div>
                    </div>
                    <!--col-lg-6-->
                </div>
                <!--row-->
            </div>
            <!--hmleasing_steps-->

            <div class="hmleasing_steps wow fadeInUp" data-wow-delay="0.2s">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 pull-right wow fadeInRight" data-wow-delay="0.2s">
                        <div class="hm_lstepimg">
                            <img src="images/hm_step2.jpg">
                        </div>
                    </div>
                    <!--col-lg-6-->
                    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="hm_lstepinfo">
                            <h5>Step 2</h5>
                            <h4>Make an enquiry</h4>
                            <p>Once you’ve decided on which vehicle you want simply just click the ‘enquire now’ button and complete the form. We’ll receive your enquiry by email and get a personalised quote to you quickly. Alternatively, call us to request a quote or you can request a call back at a time to suit you.
                            </p>
                        </div>
                    </div>
                    <!--col-lg-6-->
                </div>
                <!--row-->
            </div>
            <!--hmleasing_steps-->

            <div class="hmleasing_steps wow fadeInUp" data-wow-delay="0.2s">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="hm_lstepimg">
                            <img src="images/hm_step3.jpg">
                        </div>
                    </div>
                    <!--col-lg-6-->
                    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="hm_lstepinfo">
                            <h5>Step 3</h5>
                            <h4>Receive a personalised quote</h4>
                            <p>Once we’ve received your enquiry, we’ll conduct a search across a range of funders to find you the best deal possible. We’ll then put together a personalised quote for you and email it over to you. Your Account Manager will contact you to discuss it in more detail and answer any questions you may have.

                            </p>
                        </div>
                    </div>
                    <!--col-lg-6-->
                </div>
                <!--row-->
            </div>
            <!--hmleasing_steps-->

            <div class="hmleasing_steps wow fadeInUp" data-wow-delay="0.2s">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 pull-right  wow fadeInRight" data-wow-delay="0.2s">
                        <div class="hm_lstepimg">
                            <img src="images/hm_step4.jpg">
                        </div>
                    </div>
                    <!--col-lg-6-->
                    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="hm_lstepinfo">
                            <h5>Step 4</h5>
                            <h4>Order your vehicle</h4>
                            <p>Almost there! If you’re happy with the quote, and have added any extra options such as maintenance, servicing or customisation to your vehicle we will place the order for you. There’s just a bit of paperwork for you to complete and then you’re done.
                            </p>
                        </div>
                    </div>
                    <!--col-lg-6-->
                </div>
                <!--row-->
            </div>
            <!--hmleasing_steps-->

            <div class="hmleasing_steps">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="hm_lstepimg">
                            <img src="images/hm_step5.jpg">
                        </div>
                    </div>
                    <!--col-lg-6-->
                    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="hm_lstepinfo">
                            <h5>Step 5</h5>
                            <h4>Your vehicle is delivered to your door</h4>
                            <p>We’ll keep in touch to let you know when your vehicle can be delivered to you – in stock vehicles can be in as little as four weeks. We offer free delivery throughout mainland UK.

                            </p>
                        </div>
                    </div>
                    <!--col-lg-6-->
                </div>
                <!--row-->
            </div>
            <!--hmleasing_steps-->
        </div>
    </div>
    <!--container-->
</section>

<section class="hm_stillnsure wow fadeInUpBig">
    <div class="container">
        <div class="hm_stillinfo">
            <h3>Still not sure?</h3>
            <a href="leasing.php">
                <button type="submit" class="hm_redbtns">Learn about how leasing works <img src="images/hmright_arrow.png"> </button>
            </a>
            <p>Or visit our <a class="" href="faq.php">FAQ section</a></p>
        </div>
    </div>
    <!--container-->
</section>

<section class="about_ever">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInUp">
                <div class="title2 what-defftitle">
                    <i><img src="images/icons/difference.svg"></i>
                    <h1>What’s the difference?</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="twopart what_differ">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 inner_box1 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="veh_sol">

                        <article>
                            <h2>Personal Leasing</h2>
                            <p>Personal leasing, also known as personal contract hire is an increasing popular way to acquire a car in the UK. Essentially, you rent the vehicle on a long-term basis and for a fixed time period of between one to five years. You pay a monthly fixed fee in return. At the end of the contract you simply return the vehicle.</p>
                            <p> <a href="/personal-leasing">Learn more about personal leasing <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </p>
                        </article>

                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 inner_box1 noborder wow fadeInRight" data-wow-delay="0.3s">
                    <div class="veh_sol pad-left">

                        <article>
                            <h2>Business Leasing</h2>
                            <p>Business leasing is much the same as personal leasing, apart from you don’t pay VAT on the vehicle, which gives you lower monthly payments. Those payments can be offset against your business’s taxable profits, in part or even in full. Our Account Managers have helped hundreds of businesses to save money whether acquiring a single car or a fleet of vehicles.
                            </p>
                            <p> <a href="/business-leasing">Learn more about Business leasing <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </p>
                        </article>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>

<section class="hm_brandsbg wow fadeInUp">
    <div class="container">
        <div class="hm_brandsinfo">
            <h2>Our car brands:</h2>
            <div class="hm_carbrands">
                <div class="row">
                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/audi.png"></div>
                                <div class="hm_brandnam">Audi <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/BMW.png"></div>
                                <div class="hm_brandnam">BMW <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/CITROEN.png"></div>
                                <div class="hm_brandnam">Citroen <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/FIAT.png"></div>
                                <div class="hm_brandnam">FIAT <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/FORD.png"></div>
                                <div class="hm_brandnam">FORD <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/HONDA.png"></div>
                                <div class="hm_brandnam">HONDA <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/HYUNDAI.png"></div>
                                <div class="hm_brandnam">HYUNDAI <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/JAGUAR.png"></div>
                                <div class="hm_brandnam">JAGUAR <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <!-- Brands---------------------------->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/KIA.png"></div>
                                <div class="hm_brandnam">KIA <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/LAND-ROVER.png"></div>
                                <div class="hm_brandnam">LAND-ROVER <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/LEXUS.png"></div>
                                <div class="hm_brandnam">LEXUS <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/MAZDA.png"></div>
                                <div class="hm_brandnam">MAZDA <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/MERCEDES.png"></div>
                                <div class="hm_brandnam">MERCEDES <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/MINI.png"></div>
                                <div class="hm_brandnam">MINI <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/NISSAN.png"></div>
                                <div class="hm_brandnam">NISSAN <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/RENAULT.png"></div>
                                <div class="hm_brandnam">RENAULT <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <!-- Brands---------------------------->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/SEAT.png"></div>
                                <div class="hm_brandnam">SEAT <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/SKODA.png"></div>
                                <div class="hm_brandnam">SKODA <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/SUZUKI.png"></div>
                                <div class="hm_brandnam">SUZUKI <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/TOYOTA.png"></div>
                                <div class="hm_brandnam">TOYOTA <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/VAUXHALL.png"></div>
                                <div class="hm_brandnam">VAUXHALL <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/VOLKSWAGON.png"></div>
                                <div class="hm_brandnam">VOLKSWAGeN <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/VOLVO.png"></div>
                                <div class="hm_brandnam">VOLVO <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/MITSUBISHI.png"></div>
                                <div class="hm_brandnam">MITSUBISHI <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                </div>
                <!--row-->
                <div class="show_morbrands">
                    <button>Show me more car brands <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                </div>
            </div>
            <!--row-->
            <h2 class="wow fadeInUp">Our van brands:</h2>
            <div class="hm_carbrands hm_vanbrands wow fadeInUp">
                <div class="row">
                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/CITROEN.png"></div>
                                <div class="hm_brandnam">CITROEN <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/DACIA.png"></div>
                                <div class="hm_brandnam">DACIA <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/FIAT.png"></div>
                                <div class="hm_brandnam">FIAT <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/FORD.png"></div>
                                <div class="hm_brandnam">FORD <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/fuso.png"></div>
                                <div class="hm_brandnam">fuso <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/HYUNDAI.png"></div>
                                <div class="hm_brandnam">HYUNDAI <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/ISUZU.png"></div>
                                <div class="hm_brandnam">ISUZU <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->

                    <div class="col-lg-2 col-md-2  col-sm-2   col-xs-2 hm_brandresize">
                        <div class="hm_branddtl">
                            <a href="#">
                                <div class="hm_brandimg"><img src="images/brands/IVECO.png"></div>
                                <div class="hm_brandnam">IVECO <img src="images/hmbrand_arrow.png"></div>
                            </a>
                        </div>
                    </div>
                    <!--col-lg-2-->
                </div>
                <!--row-->
                <div class="show_morbrands">
                    <button>Show me more car brands <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                </div>
            </div>
            <!--hm_vanbrands-->
        </div>
        <!--hm_brandsinfo-->
    </div>
    <!--container-->
</section>

<section class="faq-col">
    <div class="container">
        <div class="col-md-12">
            <div class="title2 wow fadeInUp">
                <h1>Frequently asked questions</h1>
            </div>

        </div>
        <div class="faq-main">
            <div class="col-md-8 col-md-offset-2">
                <div class="tc-accordion tc-accordion-style1" id="home_faq">
                    <div class="panel wow fadeInUp" data-wow-delay="0.2s">
                        <h4 class="acdn-title">
                                <a data-toggle="collapse" data-parent="#home_faq" class="collapsed" data-target="#home_faq_collapse1">What is leasing?</a>
                            </h4>
                        <div id="home_faq_collapse1" class="panel-collapse collapse in">
                            <div class="acdn-body"> Leasing is an agreement between the funder and a customer which allows you to drive a brand-new car for a fixed term. You pay an agreed initial payment plus regular monthly payments at a set amount for the term of the contract. At the end of the contract, you simply return the car.  </div>
                        </div>
                    </div>


                    <div class="panel wow fadeInUp" data-wow-delay="0.4s">
                        <h4 class="acdn-title">
                                <a data-toggle="collapse"  data-parent="#home_faq"  data-target="#home_faq_collapse2">Why would you lease instead of buying a car or van?</a>
                            </h4>
                        <div id="home_faq_collapse2" class="panel-collapse collapse">
                            <div class="acdn-body"> Leasing has always been a popular option for businesses to acquire vehicles. More recently we’ve seen the personal market leasing grow rapidly as people look to avoid depreciation and one-off large repair bills. Essentially leasing a car or van allows you to spread the cost effectively. People may also find it’s an affordable way to get a higher value vehicle than they could afford if they were to buy it outright. </div>
                        </div>
                    </div>


                    <div class="panel wow fadeInUp" data-wow-delay="0.6s">
                        <h4 class="acdn-title">
                                <a data-toggle="collapse" data-parent="#home_faq" data-target="#home_faq_collapse3">Why should I lease from AMT Leasing?</a>
                            </h4>
                        <div id="home_faq_collapse3" class="panel-collapse collapse">
                            <div class="acdn-body"> We’ve been established for over 20 years and in that time, we have built up extensive knowledge of the marketplace and have developed strong relationships with manufacturers, dealerships and funding companies. Our financial standing and size give us buying power - we purchase stock vehicles and larger volumes of vehicles at very competitive prices which means we can offer low prices to our customers. We can also offer some in-house funding if credit is an issue – if you’ve just started a company for example and would struggle to get credit from a funder. </div>
                        </div>
                    </div>

                    <div class="panel wow fadeInUp" data-wow-delay="0.8s">
                        <h4 class="acdn-title">
                                <a data-toggle="collapse"  data-parent="#home_faq" data-target="#home_faq_collapse4">How long is the contract hire or lease period?</a>
                            </h4>
                        <div id="home_faq_collapse4" class="panel-collapse collapse">
                            <div class="acdn-body"> Our contracts range from 12 to 60 months depending on the vehicle and contract chosen. If you want to try a new car for a period before committing to a 12 month+ contract we can offer short term leasing from 1 month to 12 months, inclusive of maintenance, on immediately available vehicles from our wholly owned premium and specialist fleet. </div>
                        </div>
                    </div>

                    <div class="panel wow fadeInUp" data-wow-delay="0.8s">
                        <h4 class="acdn-title">
                                <a data-toggle="collapse"  data-parent="#home_faq" data-target="#home_faq_collapse5">What’s the difference between contract hire and leasing?</a>
                            </h4>
                        <div id="home_faq_collapse5" class="panel-collapse collapse">
                            <div class="acdn-body"> There isn’t really any difference between contract hire and leasing - essentially, they mean the same thing. Contract hire is generally the term used when describing a business leasing agreement. </div>
                        </div>
                    </div>

                    <div class="panel wow fadeInUp" data-wow-delay="0.8s">
                        <h4 class="acdn-title">
                                <a data-toggle="collapse"  data-parent="#home_faq" data-target="#home_faq_collapse6">Should I take out a personal leasing contract or business leasing?</a>
                            </h4>
                        <div id="home_faq_collapse6" class="panel-collapse collapse">
                            <div class="acdn-body"> Businesses don’t pay VAT on leasing contracts so this can be a good way to reduce your costs. However, if you have a limited company, depending on the company car tax implications, you may prefer to lease a car personally. If you’d like some advice on what’s best for your particular set of circumstances, just give us a call. </div>
                        </div>
                    </div>

                    <div class="panel wow fadeInUp" data-wow-delay="0.8s">
                        <h4 class="acdn-title">
                                <a data-toggle="collapse"  data-parent="#home_faq" data-target="#home_faq_collapse7">Can I take my chosen vehicle for a test drive?</a>
                            </h4>
                        <div id="home_faq_collapse7" class="panel-collapse collapse">
                            <div class="acdn-body"> As we don’t have a forecourt we can’t offer our customers the opportunity to have a test drive. We’d recommend you visit a local dealership, have a test drive of the vehicle you are interested in then come back to us to arrange your contract. </div>
                        </div>
                    </div>

                    <div class="panel wow fadeInUp" data-wow-delay="0.8s">
                        <h4 class="acdn-title">
                                <a data-toggle="collapse"  data-parent="#home_faq" data-target="#home_faq_collapse8">Will you part exchange my car?</a>
                            </h4>
                        <div id="home_faq_collapse8" class="panel-collapse collapse">
                            <div class="acdn-body"> We can offer a part exchange service. Just complete our online form <a href="/part-exchange"> Part Exchange </a> or alternatively speak to one of our account managers who will be able to help you. </div>
                        </div>
                    </div>
                </div>

                <div class="button-col wow fadeInUp" data-wow-delay="1s">
                    <a class="btn btn-readfaq" href="/faq" role="button">Read more questions <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

    </div>

</section>

<style>

</style>

<section class="customers-col wow fadeInUp">
    <div class="container">
        <div class="col-md-12">
            <div class="title2">
                <h1>What our customers are saying about us</h1>
            </div>
        </div>
    </div>

    <?php include(CONST_ROOTDIR.'/views/site/testimonials.php'); ?>

        <section class="main-section wow fadeInUp">
            <div class="container">
                <div class="col-md-12">
                    <div class="title2">
                        <h1>Latest blog posts by AMT</h1>
                    </div>
                </div>

                <div class="hm_blog_col">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="hm_blog">
                                <span class="blog_catlable">Category</span>
                                <figure>
                                    <div class="blog_overlay"></div>
                                    <img src="images/hm_blog_img1.jpg">
                                    <div class="hmblogimg1">
                                        <img src="images/hm_blog_shape.png"></div>
                                </figure>

                                <div class="hmblog-inner">
                                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i>24 May 2017
</h5>
                                    <p>AMT Group launches first ever blended fleet service for SMES</p>

                                    <a href="#">Read article <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hm-blogcnter wow fadeInUp" data-wow-delay="0.4s">
                            <div class="hm_blog">
                                <span class="blog_catlable">Category</span>
                                <figure>
                                    <div class="blog_overlay"></div>
                                    <img src="images/hm_blog_img2.jpg">
                                    <div class="hmblogimg1">
                                        <img src="images/hm_blog_shape.png"></div>
                                </figure>

                                <div class="hmblog-inner">
                                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i>04 Jan 2017
</h5>
                                    <p>AMT Group launches first ever blended fleet service for SMES</p>

                                    <a href="#">Read article <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.6s">
                            <div class="hm_blog hm_blog_last">
                                <span class="blog_catlable">Category</span>
                                <figure>
                                    <div class="blog_overlay"></div>
                                    <img src="images/hm_blog_img3.jpg">
                                    <div class="hmblogimg1">
                                        <img src="images/hm_blog_shape.png"></div>
                                </figure>

                                <div class="hmblog-inner">
                                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i>24 May 2017
</h5>
                                    <p>AMT Group launches first ever blended fleet service for SMES</p>

                                    <a href="#">Read article <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp">
                            <div class="hm_viewspobtn">
                                <a href="blog.php">
                                    <button type="submit" class="hm_redbtns">Read more blog posts<img src="images/hmright_arrow.png"> </button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

        </section>

        <section class="hm_brandsbg vr_slider">
            <div class="container">
                <div class="col-md-12">
                    <div class="title2 wow fadeInUp">
                        <h1>Your recently viewed vehicles <button class="btn btn-clear" type="submit"><i class="fa fa-times" aria-hidden="true"></i>
Clear All</button></h1>
                    </div>

                </div>
            </div>

            <?php include(CONST_ROOTDIR.'/views/site/recently_viewed_vehicles.php'); ?>

        </section>

<?php include(CONST_ROOTDIR.'/views/site/newsletter.php'); ?>
