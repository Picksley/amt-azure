<?php

/* @var $this yii\web\View */

$this->title = $page["PageTitle"] ;
?>

<section class="bus_car_col">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bus_car-des">
                    <h1>Personal car leasing</h1>
                    <p>If you love that new car experience, and are tired of driving a vehicle that has seen better days, then personal car leasing could be a great option for you. With more companies offering a car allowance as opposed to a company car, as well as changes in attitudes towards car ownership, now is a boom time for personal leasing. Leasing can be the ideal way to get the new car that you want at a budget to suit your lifestyle.</p>

                    <div class="show_morbrands"><a href="#car-leasing-benefits"><button>View the benefits <i class="fa fa-angle-down" aria-hidden="true"></i></button></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
</header> <?php /* ENSURE THIS </HEADER> LINE IS PRESENT ON EVERY PAGE. DO NOT PLACE IN HEADER FILE. */ ?>

<div class="home-searchcol">
    <div class="home_search bcar_leasing_search">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-md-12 col-lg-offset-1">
                    <div class="home_tab_search">

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="hm_search_form">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <select class="form-control modal-select">
                                                <option>Audi</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control modal-select">
                                                <option value="">Model</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <div class="form-group min-bud">
                                            <select class="form-control">
                                                <option value="">Min. Budget</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <div class="form-group min-bud">
                                            <select class="form-control">
                                                <option value="">Max. Budget</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-search_result"><i><img src="images/search.png"></i>Search XX,XXX Results</button>

                                        <div class="search-bottom">
                                            <div class="row">
                                                <div class="mob-vew-adv_search">
                                                    <p>Looking for something more specific?</p>
                                                    <a href="#">View advanced search options</a>
                                                </div>

                                                <div class="col-md-3 col-sm-3">
                                                    <a class="btn btn-reset" href="#" role="button"><i class="fa fa-refresh" aria-hidden="true"></i> Reset Form</a>
                                                </div>

                                                <div class="col-md-9 col-sm-9 help-car">
                                                    <p>Looking for something more specific? <a href="#">Help me find a car</a></p>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="hm_brandsbg search_brand">
    <div class="container">
        <div class="hm_brandsinfo">
            <h2>Search our car brands:</h2>
            <div class="hm_carbrands">
                <div class="row">
                    <?php
                    foreach ($manulogos as $value) {
                        ?>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 hm_brandresize">
                            <div class="hm_branddtl">
                                <a href="/car-leasing/<?=$value["fmanu"] ?>"><div class="hm_brandimg"><img src="images/brands/<?=$value["flogo"] ?>"></div>
                                    <div class="hm_brandnam"><?=$value["fmanu"] ?> <img src="images/hmbrand_arrow.png"></div></a>
                            </div>
                        </div><!--col-lg-2-->

                        <?php
                    }
                    ?>


                </div><!--row-->
                <div class="show_morbrands"><button>Show me more car brands <i class="fa fa-angle-down" aria-hidden="true"></i></button></div>
            </div><!--row-->


        </div><!--hm_brandsinfo-->
    </div><!--container-->
</section>


<section class="benefits_amt" id="car-leasing-benefits">
    <div class="container">
        <div class="col-md-12">
            <div class="hm_leasingamtinfo">
                <h2>What are the benefits of<br>Business Leasing with AMT?
                </h2>
                <h4>Businesses can gain numerous financial and
                    operational benefits from contract hire. They include:
                </h4>

            </div>

        </div>


        <div class="benefits-main">
            <div class="row">
                <!--Start List-->
                <div class="col-md-4 col-sm-6 col-xs-12 benefit-item rtl-nopadd">
                    <div class="benefits-list first-l">
                        <span class="benefits-num">1</span>
                        <h2>Your payments are fixed</h2>
                        <p>Personal leasing offers you a peace of mind as you pay a fixed price for your motoring each month. There's no large bills to worry about, making financial planning and household budgeting much easier.
                        </p>

                    </div>
                </div>
                <!--End List-->

                <!--Start List-->
                <div class="col-md-4 col-sm-6 col-xs-12 benefit-item no-padd">
                    <div class="benefits-list first-l">
                        <span class="benefits-num">2</span>
                        <h2>No ownership risks</h2>
                        <p>Owning a vehicle comes with financial risk. There's depreciation of the vehicle value, MOT, servicing, repairs and breakdown cover to organise and pay for separately. With leasing you have all the benefits of ownership without the hassle and risk that come with it.
                        </p>

                    </div>
                </div>
                <!--End List-->

                <!--Start List-->
                <div class="col-md-4 col-sm-6 col-xs-12 benefit-item left-nopadd">
                    <div class="benefits-list rtl-noborder first-l">
                        <span class="benefits-num">3</span>
                        <h2>Depreciation is factored in</h2>
                        <p>Most brand-new cars lose 50%-60% of their value in the first three years. When it comes to personal leasing, the risk of depreciation is taken on by the funder.</p>

                    </div>
                </div>
                <!--End List-->


                <!--Start List-->
                <div class="col-md-4 col-sm-6 col-xs-12 benefit-item rtl-nopadd">
                    <div class="benefits-list">
                        <span class="benefits-num">4</span>
                        <h2>A low intitial payment</h2>
                        <p>Purchasing a new car requires a high payment upfront whereas leasing a car gives you access to a brand-new car with a flexible initial payment - this is normally 3, 6 or 9 months rental up front - depending on your preference.
                        </p>

                    </div>
                </div>
                <!--End List-->

                <!--Start List-->
                <div class="col-md-4 col-sm-6 col-xs-12 benefit-item no-padd">
                    <div class="benefits-list">
                        <span class="benefits-num">5</span>
                        <h2>Cost effective</h2>
                        <p>Over the same period of time, car leasing usually works out to be the most cost-effective option when you want to drive a brand-new car or van. </p>

                    </div>
                </div>
                <!--End List-->

                <!--Start List-->
                <div class="col-md-4 col-sm-6 col-xs-12 benefit-item left-nopadd">
                    <div class="benefits-list rtl-noborder">
                        <span class="benefits-num">6</span>
                        <h2>Manufacturer warranty included</h2>
                        <p>A full manufacturer warranty normally covers you for the full period of the lease so you don't have to worry about any surprise costs if something goes wrong with the vehicle that wasn't your fault.</p>

                    </div>
                </div>
                <!--End List-->





                <!--Start List-->
                <div class="col-md-4 col-sm-6 col-xs-12 benefit-item rtl-nopadd">
                    <div class="benefits-list bm-border0 last-h">
                        <span class="benefits-num">7</span>
                        <h2>Less hassle all around</h2>
                        <p>You can also take out a maintenance package which includes breakdown assistance, servicing, even replacement tyres and puncture repairs. Leasing also releases you from the bind of selling old vehicles privately - when you come to the end of the contract you can simply lease another brand new car.

                        </p>

                    </div>
                </div>
                <!--End List-->

                <!--Start List-->
                <div class="col-md-4 col-sm-6 col-xs-12 benefit-item no-padd">
                    <div class="benefits-list bm-border0 last-h">
                        <span class="benefits-num">8</span>
                        <h2>What you can get for your money </h2>
                        <p>You may be pleasantly surprised to see that you can get much more for your money than would be possible if you were looking to purchase a car.
                        </p>

                    </div>
                </div>
                <!--End List-->

                <!--Start List-->
                <div class="col-md-4 col-sm-6 col-xs-12 benefit-item left-nopadd">
                    <div class="benefits-list rtl-noborder bm-border0 last-h">
                        <span class="benefits-num">9</span>
                        <h2>Limited credit? No problem </h2>
                        <p>If you are seeking a personal agreement and are employed with capital to commit up front, a poor credit history doesn't have to be a problem. Just let us know.
                        </p>

                    </div>
                </div>
                <!--End List-->




            </div>
        </div>

    </div>
</section>


<section class="options-finance">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="options-header">
                    <h1>Options to finance your car lease</h1>
                    <p>There are four main types of leasing and finance options available to you when you choose to lease a car...</p>


                </div>


                <div class="contract-hire-box">
                    <div class="cont_main">
                        <h3>Personal Contract Hire (PCH)</h3>
                        <p>Personal contract hire (PCH) is by far the most popular financial arrangement for AMT customers. With personal contract hire you simply pay a fixed amount to effectively rent the car for between 1 and 5 years. </p>

                        <a class="btn btn-readfaq" href="#" role="button">read more about pch</a>

                    </div>

                </div>


                <div class="other_options">
                    <div class="opther_head">
                        <p>The other options available are:</p>
                    </div>


                    <div class="twopart">

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 inner_box1">
                            <div class="veh_sol">

                                <article>
                                    <h2>Personal Contract Purchase (PCP)</h2>
                                    <p>You pay an agreed monthly payment as you do with a personal contract hire, the only difference is that when it comes to the end of the conteact, you have the option to purchase the vehicle for an agreed amount.</p>
                                    <p> <a href="#">read more about pcp <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </p>
                                </article>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 inner_box1">
                            <div class="veh_sol">

                                <article>
                                    <h2>Hire Purchase (HP)</h2>
                                    <p>Hire purchase (HP) is a very simple finance option. A deposit payment is agreed - typically a multiple of the monthly payment - and repayments will be calculated based on this figure, the value of the vehicle and the length of the repayment term. Once all the repayments have been completed, the individual will become the legal owner of the vehicle. </p>
                                    <p> <a href="#">more about hire purchase <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </p>
                                </article>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 inner_box1 noborder">
                            <div class="veh_sol pad-left">

                                <article>
                                    <h2>Lease Purchase (LP)</h2>
                                    <p>With lease purchase you pay something called a balloon payment at the end of the contract and take ownership of the vehicle at that time. The monthly payments are normally cheaper than a hire purchase arrangement. </p>
                                    <p> <a href="#">more about lease purchase <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </p>
                                </article>

                            </div></div>
                        <div class="clearfix"></div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<section class="choose-car">
    <div class="container">
        <div class="row">
            <div class="choose-carhead">
                <h2><span><img src="images/icons/car-keys.svg"></span>Ready to choose your car?</h2>
                <p>We aren’t tied to any car manufacturer or funder  so we bring you the best lease deals from across the market at any one time. If you’re looking for an economical vehicle to minimise the company VAT you’ll pay, want some advice on choosing the right vehicle for your employees or simply want to see what you can get for your budget, we can help. Try out our car search facility now or give us all to discuss. We’re confident we can find you the right lease deal.
                </p>
            </div>

            <div class="still_not">
                <h2>Still not sure?</h2>
                <p>Then give our dedicated Account team a call to discuss your needs on:</p>
                <h6><img src="images/icons/phone.svg">0113 350 9776</h6>
            </div>



        </div>
    </div>
</section>
<section class="vr_slider">
    <?php /* include(CONST_ROOTDIR.'/views/site/includes/recently_viewed_vehicles.php'); */ ?>
</section>

<section class="keep_mail">
    <?php /* include(CONST_ROOTDIR.'/views/site/includes/email_newsletter.php'); */ ?>
</section>
