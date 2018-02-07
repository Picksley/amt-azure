<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Fuel Cost Calculator';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="bus_car_col">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bus_car-des">
                    <h1 class="wow fadeInUp">Fuel cost calculator</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">A company car can be a valuable perk and choosing one can be a lot of fun. Unfortunately, the potential tax implications are not so much fun and choosing the wrong car can prove to be an expensive mistake. So be in the know - use our BIK tax calculator as a guide to see how much tax you will pay on the vehicle of your choice.</p>

                </div>

            </div>

        </div>
    </div>
</section>

<div class="home-searchcol">
    <div class="home_search bcar_leasing_search">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12">
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

                                        <div class="form-group">
                                            <select class="form-control modal-select">
                                                <option value="">Min. Budget</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control modal-select">
                                                <option value="">Derivative</option>
                                                <option>1.2 16V play 5dr</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <img class="img-responsive" style="padding:20px" src="/images/hm_specofrline.png" />

                                        <div class="form-group col-md-6 col-md-offset-3 ">

                                            <input class="form-control  modal-select" type="text" style="width:100%" placeholder="Estimated annual mileage" />
                                        </div>

                                        <div class="search-bottom">
                                            <div class="text-center">
                                                <a class="btn btn-reset" href="#" role="button"><i class="fa fa-refresh" aria-hidden="true"></i>
Reset Form</a>

                                                <button type="submit" class="btn btn-search_culcullatr">Calculate your tax</button>

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

<section class="hm_brandsbg search_brand_fuel_cost">
    <div class="container">
        <div class="bik_center">
            <div class="row">
                <div class="col-lg-5 col-xs-12 col-sm-5 col-ms-5 wow fadeInLeft">
                    <div class="prd_oursodtl prd_list">
                        <figure>
                            <img src="/images/hm_spofr3.jpg">
                        </figure>
                        <div class="spoffrsap"><img src="/images/sp_ofrline.png" class="img-responsive"></div>

                        <div class="item_spofrname">
                            <h4>Renault Clio Hatchback</h4>
                            <h5>1.2 16V Access 5dr</h5>
                        </div>

                        <div class="spoffrsap"><img src="/images/sp_ofrline.png" class="img-responsive"></div>

                        <div class="apofr_price">
                            <div class="row">
                                <!--start main div-->
                                <div class="prd-list">
                                    <div class="col-md-6">
                                        <p>MPG <span>38 - 57.7</span></p>
                                    </div>

                                    <div class="col-md-6">
                                        <p>Gearbox <span>Manual</span></p>
                                    </div>
                                </div>
                                <!--End main div-->

                                <!--start main div-->
                                <div class="prd-list">
                                    <div class="col-md-6">
                                        <p>Co2 <span>130g/km</span></p>
                                    </div>

                                    <div class="col-md-6">
                                        <p>Fuel <span>Petrol</span></p>
                                    </div>
                                </div>
                                <!--End main div-->

                            </div>

                            <div class="hm_viewspo">
                                <button type="submit"><img src="/images/hm_spoicon.png"> view again</button>
                            </div>
                            <div class="wht_viewspo">
                                <button type="submit"> add to my showroom</button>
                            </div>

                            <div class="hm_addmyshrm">
                                <button type="submit"><img src="/images/delete.png" alt="">Delete</button>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-7 col-xs-12 col-sm-7 col-ms-7 wow fadeInRight">
                    <div class="clo_result">
                        <h2>Your calculated fuel costs for Renault Clio Hatchback 1.2 16V Play 5dr:</h2>
                        <div class="inerblock table-responsive">

                            <table class="fuel_cost_table">
                                <tr>
                                    <td class="drk">
                                        <p> Indicitive fuel costs</p>
                                    </td>
                                    <td class="lgt">
                                        <p>£XXX.XX</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="drk">
                                        <p> Annual fuel costs</p>
                                    </td>
                                    <td class="lgt">
                                        <p>£XXX.XX</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="drk">
                                        <p> Monthly fuel costs</p>
                                    </td>
                                    <td class="lgt">
                                        <p>£XXX.XX</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="drk">
                                        <p> Weekly fuel costs</p>
                                    </td>
                                    <td class="lgt">
                                        <p>£XXX.XX</p>
                                    </td>
                                </tr>

                            </table>
                            <p class="fuel-cost-text"> Based on Real MPG, as well as UK average prices for Diesel XXX.Xp/litre, Petrol XXXX.Xp/litre, Electricity XXp/kW. Edit the price below if you wish to see calculations based off different prices prices: </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<section class="botm_takealook">
    <div class="container-fluid row-eq">
        <div class="bik_footer">
            <h2>Take a look at what AMT can do for you</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft">
                    <div class="hm_takealookdtl col-eq">
                        <figure>
                            <img src="/images/bik_mg2.jpg">
                            <div class="tklokimg2 tklokimg"><img src="/images/tklookimg_ovr1.png"></div>
                        </figure>
                        <div class="hm_takealookcontt">
                            <h3>Part exchange</h3>
                            <p>Our fuel cost calculator helps you to estimate a vehicles’ average fuel costs so you can take accurate running costs into account when considering a car or van lease.
                            </p>

                            <form class="example" action="/action_page.php">
                                <input type="text" placeholder="Your r3g" name="search2">
                                <button type="submit">get valuation</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--col-lg-4-->

                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight">
                    <div class="hm_takealookdtl col-eq">
                        <figure>
                            <img src="/images/bik_mg.jpg">
                            <div class="tklokimg1 tklokimg"><img src="/images/tklookimg_ovr3.png"></div>
                        </figure>
                        <div class="hm_takealookcontt">
                            <h3>BIK tax calculator</h3>
                            <p>If you want to estimate the benefit in kind tax you could pay for a vehicle, then use our calculator and make an informed choice. Still in doubt? Then give us a call.
                            </p>

                            <button type="submit" class="hm_redbtns"> Calculate tax now <img src="/images/hmright_arrow.png"> </button>
                        </div>
                    </div>
                </div>
                <!--col-lg-4-->

                <!--col-lg-4-->

            </div>
            <!--row-->

        </div>
    </div>
    <!--container-fluid-->
</section>

<?php include(CONST_ROOTDIR.'/views/site/newsletter.php'); ?>
