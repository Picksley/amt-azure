<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Bik Tax Calculator';
$this->params['breadcrumbs'][] = $this->title;
?>
    <section class="bus_car_col">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bus_car-des">
                        <h1 class="wow fadeInUp">BIK tax calculator</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">A company car can be a valuable perk and choosing one can be a lot of fun. Unfortunately, the potential tax implications are not so much fun and choosing the wrong car can prove to be an expensive mistake. So be in the know - use our BIK tax calculator as a guide to see how much tax you will pay on the vehicle of your choice.</p>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <div class="home-searchcol wow fadeInUp">
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
                                                <select class="form-control modal-select2">
                                                    <option>Audi</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control modal-select2">
                                                    <option value="">Model</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <select class="form-control modal-select2" disabled>
                                                    <option value="">Min. Budget</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>

                                            <span class="txt_brand">Tax band:</span>

                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                                <label for="inlineRadio1"> 20% </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio2" value="option1" name="radioInline">
                                                <label for="inlineRadio2">40% </label>
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

    <section class="hm_brandsbg search_brand">
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
                            <h2>Your tax results for Renault Clio Hatchback 1.2 16V Play 5dr:</h2>
                            <div class="inerblock table-responsive">

                                <table>
                                    <tr>
                                        <td>
                                            <div class="black_mn">
                                                <table class="table-bordered table ">
                                                    <tr>
                                                        <td>
                                                            <p>Emissions band</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>P11d price</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p class="sm_txt">Tax year</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>BIK rate</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="make_lst">
                                                        <td>
                                                            <p>Monthly tax payable</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="make_lst">
                                                        <td>
                                                            <p>Annual tax payable</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="black_km">
                                                <table class="table-bordered table">
                                                    <tr>
                                                        <td colspan="3">
                                                            <p><span>A</span>101-110g/km</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">
                                                            <p>£XXX.XX</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>2017/18</p>
                                                        </td>
                                                        <td>
                                                            <p>2018/19</p>
                                                        </td>
                                                        <td>
                                                            <p>2019/20</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>XX%</p>
                                                        </td>
                                                        <td>
                                                            <p>XX%</p>
                                                        </td>
                                                        <td>
                                                            <p>XX%</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>£XXX.XX</p>
                                                        </td>
                                                        <td>
                                                            <p>£XXX.XX</p>
                                                        </td>
                                                        <td>
                                                            <p>£XXX.XX</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>£XXX.XX</p>
                                                        </td>
                                                        <td>
                                                            <p>£XXX.XX</p>
                                                        </td>
                                                        <td>
                                                            <p>£XXX.XX</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </td>
                                    </tr>
                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <div class="clearfix"></div>
    <section class="understnd_fullsec">
        <div class="container">

            <div class="understnd_row">
                <div class="inner_under wow fadeInUp">
                    <h4>Understanding how BIK tax is calculated</h4>
                    <p>Benefit-in-kind is a tax you pay on any perks you receive from your company, in addition to your salary as part of your remuneration package. How much company-car tax you’ll pay depends on a number of factors; the cost of the car (P11D value), your salary and the car’s CO2 emissions. While your salary is likely to be fixed when you choose your company car, you can choose a car with a lower P11D value and low CO2 emissions in order to reduce the amount you’ll pay in BIK tax.</p>

                </div>

                <div class="inner_under wow fadeInUp" data-wow-delay="0.3s">
                    <h4>Working it all out</h4>
                    <p>To work out the BIK value of a company car, you multiply the car’s P11D price (list price including optional extras, VAT and delivery charges, less the first-year registration fee and annual road tax) by the percentage BIK band the car sits in. The BIK band is determined by the CO2 emissions of the vehicle.
                        <br> The actual figure you’ll pay is this number multiplied by your income tax band of 20% or 40%.
                        <br>
                    </p>
                    <p>To allow for easy comparison of vehicles by BIK rate, save yourself a headache and use our BIK rate calculator. </p>

                </div>

            </div>
        </div>

    </section>

    <section class="botm_takealook">
        <div class="container-fluid row-eq">
            <div class="bik_footer">
                <h2 class="wow fadeInUp">Take a look at what AMT can do for you</h2>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft">
                        <div class="hm_takealookdtl col-eq">
                            <figure>
                                <img src="/images/bik_mg2.jpg">
                                <div class="tklokimg1 tklokimg"><img src="/images/tklookimg_ovr1.png"></div>
                            </figure>
                            <div class="hm_takealookcontt">
                                <h3>Fuel cost calculator</h3>
                                <p>Our fuel cost calculator helps you to estimate a vehicles’ average fuel costs so you can take accurate running costs into account when considering a car or van lease.
                                </p>

                                <button type="submit" class="hm_redbtns">Find out more about amt <img src="/images/hmright_arrow.png"> </button>
                            </div>
                        </div>
                    </div>
                    <!--col-lg-4-->

                    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight">
                        <div class="hm_takealookdtl col-eq">
                            <figure>
                                <img src="/images/bik_mg.jpg">
                                <div class="tklokimg3 tklokimg"><img src="/images/tklookimg_ovr3.png"></div>
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


                </div>


            </div>
        </div>

    </section>

    <?php include(CONST_ROOTDIR.'/views/site/newsletter.php'); ?>
