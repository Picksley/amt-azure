<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | My Showroom';
$this->params['breadcrumbs'][] = $this->title;
?>

    <div class="container">
        <div class="col-md-12">
            <div class="page-title-dark">
                <h1>My Showroom</h1>
                <p> My showroom is our vehicle comparison tool which allows you to compare up to three vehicles - by price, standard equipment, technical specification, optional extras, BIK tax payable or by fuel costs. If you want to save your selection for later, just provide us with your email address and we'll send you a link so you can view your chosen vehicles at anytime.</p>
            </div>
        </div>
    </div>

    <section class="my_showroom_compare_box">
        <div class="container-fluid dark_compare">
            <div class="row text-center">
                <h2> Compare vehicles by:    </h2>

                <div class="showroom_cpost_tabs">
                    <div id="showroom_filter" class="" style="display: block; width: 100%; margin: auto;">
                        <div class="clearfix" style="background-color:#33414E;">
                            <ul class="resp-tabs-list cpost_spctbs tabIdentifer" style="max-width:56%;margin:auto;">
                                <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">PRICE</li>
                                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab">STANDARD EQUIPMENT</li>
                                <li class="resp-tab-item" aria-controls="tab_item-2" role="tab">TECHNICAL SPEC</li>
                                <li class="resp-tab-item" aria-controls="tab_item-3" role="tab">OPTIONAL EXTRAS</li>
                                <li class="resp-tab-item" aria-controls="tab_item-4" role="tab">TAX RATES</li>
                                <li class="resp-tab-item" aria-controls="tab_item-5" role="tab">FUEL COSTS</li>
                            </ul>
                        </div>


                        <!--BASIC INFO FOR SHOWROOM CARS -->
                        <div class="container">
                            <div class="row selected_vehicles">
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
                                        <div class="showroom_vehicle">

                                            <figure>
                                                <img class="img-responsive center-block" src="images/hm_spofr3.jpg">
                                            </figure>

                                            <div class="spoffrsap"><img src="images/sp_ofrline.png"></div>

                                            <div class="item_spofrname">
                                                <h4>Dacia Sandero Hatchback</h4>
                                                <h5>1.2 16V Access 5dr</h5>
                                            </div>

                                            <div class="spoffrsap"><img src="images/sp_ofrline.png"></div>

                                            <div class="showroom_vehicle_specs">
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
                                                    <button type="submit"> view vehicle </button>
                                                </div>

                                                <div class="showroom_actions">
                                                    <button class="btn" type=""><i class="fa fa-lg fa-trash-o" aria-hidden="true"></i> DELETE </button>
                                                    <button class="btn" type=""><i class="fa fa-lg fa-clone" aria-hidden="true"></i> DUPLICATE </button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">

                                        <div class="showroom_vehicle unselected">

                                            <figure>
                                                <img class="center-block" src="images/icon1.png">
                                            </figure>

                                            <div class="item_spofrname text-center">
                                                <h4> No vehicle selected </h4>
                                                <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                            </div>

                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                                <div class="form-group">
                                                    <select class="form-control unselected_vehicle" id="manufacturer">
                                                        <option value="" disabled selected>Manufacturers</option>
                                                        <option value="">Audi</option>
                                                        <option value="">BMW</option>
                                                        <option value="">Chevrolet</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-control unselected_vehicle" disabled id="model">
                                                        <option value="" disabled selected>Model</option>
                                                        <option value="">A1</option>
                                                        <option value="">A3</option>
                                                        <option value="">A5</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-control unselected_vehicle" disabled id="derivative">
                                                        <option value="" disabled selected>Derivative</option>
                                                        <option value="">Version 1</option>
                                                        <option value="">Version 2</option>
                                                        <option value="">Version 3</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="showroom_vehicle_specs">

                                                <div class="hm_viewspo">
                                                    <button type="submit"> add vehicle </button>
                                                </div>

                                            </div>
                                        </div>

                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">

                                        <div class="showroom_vehicle unselected">

                                            <figure>
                                                <img class="center-block" src="images/icon1.png">
                                            </figure>

                                            <div class="item_spofrname text-center">
                                                <h4> No vehicle selected </h4>
                                                <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                            </div>

                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                                <div class="form-group">
                                                    <select class="form-control unselected_vehicle" id="manufacturer">
                                                        <option value="" disabled selected>Manufacturers</option>
                                                        <option value="">Audi</option>
                                                        <option value="">BMW</option>
                                                        <option value="">Chevrolet</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-control unselected_vehicle" disabled id="model">
                                                        <option value="" disabled selected>Model</option>
                                                        <option value="">A1</option>
                                                        <option value="">A3</option>
                                                        <option value="">A5</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-control unselected_vehicle" disabled id="derivative">
                                                        <option value="" disabled selected>Derivative</option>
                                                        <option value="">Version 1</option>
                                                        <option value="">Version 2</option>
                                                        <option value="">Version 3</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="showroom_vehicle_specs">

                                                <div class="hm_viewspo">
                                                    <button type="submit"> add vehicle </button>
                                                </div>

                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
<style>
.resp-tab-content { background-color: #fff}
</style>
                        <!-- Compare vehicles by... light strip  -->
                        <div class="container-fluid light_compare">
                            <div class="row text-center">
                              <h2> Comparing vehicles by: <div id="nested-tabInfo"></div><strong><span class="tabIdentifer"></span></strong></h2><a href="#showroom_filter"><button class="compare_by" type=""> Change Comparison </button></a>
                            </div>
                        </div>

                        <div class="resp-tabs-container tabIdentifer">



                            <!-- Tab Price 1  -->
                            <div class="resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">

                                <div class="container">
                                    <div class="col-lg-12">
                                        <div class="row">
                                        <h2 class="resp-accordion" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Price</h2>

                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
                                            <!-- THIS IS THE FIRST PRICE OPTION FIELD ITEM -->
                                                <div class="showroom_vehicle">

                                                    <figure>
                                                        <table class="short_dark_table">
                                                            <tr>
                                                                <td class="drk">
                                                                    <p> Personal leasing </p><span> inc. VAT </span></td>
                                                                <td class="lgt">
                                                                    <p>£XXX.XX</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="drk">
                                                                    <p> Annual fuel costs</p><span> excl. VAT </span></td>
                                                                <td class="lgt">
                                                                    <p>£XXX.XX</p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </figure>


                                                    <div class="item_spofrname my_showroom_comparison">
                                                        <h4>Customise your deal:</h4>

                                                        <div class="form-group">
                                                            <select class="form-control unselected_vehicle" data-toggle="dropdown"  id="contract-type">
                                                                <option value="" disabled selected><strong> Personal Leasing </strong></option>
                                                                <option value="">Audi</option>
                                                                <option value="">BMW</option>
                                                                <option value="">Chevrolet</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <select class="form-control unselected_vehicle" data-toggle="dropdown"  id="initial-payment">
                                                                <option value="" disabled selected><strong> 9 Months </strong></option>
                                                                <option value="">A1</option>
                                                                <option value="">A3</option>
                                                                <option value="">A5</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <select class="form-control unselected_vehicle" data-toggle="dropdown" id="contract-length">
                                                                <option value="" disabled selected><strong> 4 years </strong></option>
                                                                <option value="">Version 1</option>
                                                                <option value="">Version 2</option>
                                                                <option value="">Version 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control unselected_vehicle" data-toggle="dropdown"  id="annual-mileage">
                                                                <option value="" disabled selected><strong> 8,000 miles </strong></option>
                                                                <option value="">Version 1</option>
                                                                <option value="">Version 2</option>
                                                                <option value="">Version 3</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="showroom_vehicle_specs my_showroom_comparison">

                                                          <div class="showroom_summary">
                                                            <h3> Your summary: </h3>
                                                            <p> Processing Fee: <strong> £XXX.XX </strong> Inc VAT</p>
                                                            <p> Initial Payment: <strong> £XXX.XX </strong> Inc VAT</p>
                                                            <p> 48 Monthly Rentals: <strong> £XXX.XX </strong> Inc VAT</p>
                                                            <p> Excess mileage charge: <strong> £XXX.XX </strong></p>
                                                    </div>

                                                        <h3> Found your vehicle? </h3>

                                                        <div class="hm_viewspo">
                                                            <button type="submit"> REQUEST A QUOTE </button>
                                                        </div>

                                                        <div class="hm_viewspo">
                                                            <button class="btn" type=""> ORDER VEHICLE ONLINE </button>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                        <!-- THIS IS THE END OF THE FIRST PRICE OPTION FIELD ITEM -->
                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
                                                <div class="showroom_vehicle unselected">

                                                    <figure>
                                                        <img class="center-block" src="images/icon1.png">
                                                    </figure>

                                                    <div class="item_spofrname text-center">
                                                        <h4> No vehicle selected </h4>
                                                        <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                                    </div>

                                                </div>
                                        </div>

                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
                                                <div class="showroom_vehicle unselected">

                                                    <figure>
                                                        <img class="center-block" src="images/icon1.png">
                                                    </figure>

                                                    <div class="item_spofrname text-center">
                                                        <h4> No vehicle selected </h4>
                                                        <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                                    </div>

                                                </div>
                                        </div>


                                      </div> <!-- /.row-->
                                    </div>
                                </div>
                            </div>  <!--tab-div-->




                            <!--  Tab Standard Equipment 2 -->

                            <div class="resp-tab-content" aria-labelledby="tab_item-1">
                              <div class="container">
                                <div class="row">

                                  <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow">1</span>Technical Specifications</h2>
                                  <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
                                      <!-- THIS IS THE FIRST PRICE OPTION FIELD ITEM -->
                                          <div class="showroom_vehicle">

                                            <div class="panel-group" id="accordion_standard_equipment_1">
                                                <div class="panel panel-default">
                                                  <div class="panel-heading">
                                                    <h4 data-toggle="collapse" data-parent="#accordion_standard_equipment_1" href="#collapse1" class="panel-title expand">
                                                       <div class="right-arrow pull-right"></div>
                                                      <a href="#">Collapsible Group 1</a>
                                                    </h4>
                                                  </div>
                                                  <div id="collapse1" class="panel-collapse collapse">
                                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                  </div>
                                                </div>
                                                <div class="panel panel-default">
                                                  <div class="panel-heading">
                                                    <h4 data-toggle="collapse" data-parent="#accordion_standard_equipment_1" href="#collapse2" class="panel-title expand">
                                                        <div class="right-arrow pull-right"></div>
                                                      <a href="#">Collapsible Group 2</a>
                                                    </h4>
                                                  </div>
                                                  <div id="collapse2" class="panel-collapse collapse">
                                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                  </div>
                                                </div>
                                                <div class="panel panel-default">
                                                  <div class="panel-heading">
                                                    <h4 data-toggle="collapse" data-parent="#accordion_standard_equipment_1" href="#collapse3" class="panel-title expand">
                                                        <div class="right-arrow pull-right"></div>
                                                      <a href="#">Collapsible Group 3</a>
                                                    </h4>
                                                  </div>
                                                  <div id="collapse3" class="panel-collapse collapse">
                                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                  </div>
                                                </div>
                                              </div>

                                          </div>
                                  </div>
                                  <!-- THIS IS THE END OF THE FIRST PRICE OPTION FIELD ITEM -->
                                  <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">

                                          <div class="showroom_vehicle unselected">

                                              <figure>
                                                  <img class="center-block" src="images/icon1.png">
                                              </figure>

                                              <div class="item_spofrname text-center">
                                                  <h4> No vehicle selected </h4>
                                                  <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                              </div>
                                          </div>

                                  </div>
                                  <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">

                                          <div class="showroom_vehicle unselected">

                                              <figure>
                                                  <img class="center-block" src="images/icon1.png">
                                              </figure>

                                              <div class="item_spofrname text-center">
                                                  <h4> No vehicle selected </h4>
                                                  <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                              </div>

                                          </div>

                                  </div>


                                </div> <!-- ROW END -->
                              </div> <!-- CONTAINER END -->
                            </div> <!-- TAB 2 END -->



                              <!--  Technical Spec 3 -->
                              <div class="resp-tab-content" aria-labelledby="tab_item-2">
                                <div class="container">
                                  <div class="row">

                                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow">1</span>Technical Specifications</h2>
                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
                                        <!-- THIS IS THE FIRST PRICE OPTION FIELD ITEM -->

                                            <div class="showroom_vehicle">

                                              <div class="panel-group" id="accordion">
                                                <div class="panel panel-default">
                                                  <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                      <a data-toggle="collapse" data-parent="#accordion" href="#">Collapsible Group 1</a>
                                                    </h4>
                                                  </div>
                                                  <div id="collapse1" class="panel-collapse collapse in">
                                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                  </div>
                                                </div>
                                                <div class="panel panel-default">
                                                  <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                      <a data-toggle="collapse" data-parent="#accordion" href="#">Collapsible Group 2</a>
                                                    </h4>
                                                  </div>
                                                  <div id="collapse2" class="panel-collapse collapse">
                                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                  </div>
                                                </div>
                                                <div class="panel panel-default">
                                                  <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                      <a data-toggle="collapse" data-parent="#accordion" href="#">Collapsible Group 3</a>
                                                    </h4>
                                                  </div>
                                                  <div id="collapse3" class="panel-collapse collapse">
                                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                  </div>
                                                </div>
                                              </div>

                                            </div>

                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">

                                            <div class="showroom_vehicle unselected">

                                                <figure>
                                                    <img class="center-block" src="images/icon1.png">
                                                </figure>

                                                <div class="item_spofrname text-center">
                                                    <h4> No vehicle selected </h4>
                                                    <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                                </div>

                                            </div>

                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">

                                            <div class="showroom_vehicle unselected">

                                                <figure>
                                                    <img class="center-block" src="images/icon1.png">
                                                </figure>

                                                <div class="item_spofrname text-center">
                                                    <h4> No vehicle selected </h4>
                                                    <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                                </div>
                                            </div>

                                    </div>
                                    <!-- THIS IS THE END OF THE FIRST PRICE OPTION FIELD ITEM -->
                                  </div> <!-- ROW END -->
                                </div> <!-- CONTAINER END -->
                              </div> <!-- TAB 3 END -->


                            <!--  Optional Extras 4 -->
                            <div class="resp-tab-content" aria-labelledby="tab_item-3">
                              <div class="container">
                                <div class="row">

                                  <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow">1</span>Technical Specifications</h2>
                                  <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
                                      <!-- THIS IS THE FIRST PRICE OPTION FIELD ITEM -->

                                          <div class="showroom_vehicle">


                                            <figure>
                                                <table class="short_dark_table">
                                                    <tr>
                                                        <td class="drk">
                                                            <p> Personal leasing </p><span> inc. VAT </span></td>
                                                        <td class="lgt">
                                                            <p>£XXX.XX</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="drk">
                                                            <p> Annual fuel costs</p><span> excl. VAT </span></td>
                                                        <td class="lgt">
                                                            <p>£XXX.XX</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </figure>
                                            <div class="panel-group" id="accordion">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#">Collapsible Group 1</a>
                                                  </h4>
                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse in">
                                                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                </div>
                                              </div>
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#">Collapsible Group 2</a>
                                                  </h4>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse">
                                                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                </div>
                                              </div>
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#">Collapsible Group 3</a>
                                                  </h4>
                                                </div>
                                                <div id="collapse3" class="panel-collapse collapse">
                                                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                </div>
                                              </div>
                                            </div>

                                          </div>

                                  </div>
                                  <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">

                                          <div class="showroom_vehicle unselected">

                                              <figure>
                                                  <img class="center-block" src="images/icon1.png">
                                              </figure>

                                              <div class="item_spofrname text-center">
                                                  <h4> No vehicle selected </h4>
                                                  <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                              </div>

                                          </div>

                                  </div>
                                  <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">

                                          <div class="showroom_vehicle unselected">

                                              <figure>
                                                  <img class="center-block" src="images/icon1.png">
                                              </figure>

                                              <div class="item_spofrname text-center">
                                                  <h4> No vehicle selected </h4>
                                                  <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                              </div>

                                          </div>

                                  </div>
                                  <!-- THIS IS THE END OF THE FIRST PRICE OPTION FIELD ITEM -->
                                </div> <!-- ROW END -->
                              </div> <!-- CONTAINER END -->
                            </div> <!-- TAB 3 END -->

                            <!-- Tax Rates 5 -->
                            <div class="resp-tab-content" aria-labelledby="tab_item-4">

                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
                                            <!-- THIS IS THE FIRST PRICE OPTION FIELD ITEM -->

                                                <div class="showroom_vehicle">

                                                    <figure>
                                                        <table class="short_dark_table">
                                                            <tr>
                                                                <td class="drk">
                                                                    <p> Personal leasing </p><span> inc. VAT </span></td>
                                                                <td class="lgt">
                                                                    <p>£XXX.XX</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="drk">
                                                                    <p> Annual fuel costs</p><span> excl. VAT </span></td>
                                                                <td class="lgt">
                                                                    <p>£XXX.XX</p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </figure>

                                                    <div class="showroom_vehicle_specs">

                                                        <div class="hm_viewspo">
                                                            <button type="submit"> REQUEST A QUOTE </button>
                                                        </div>

                                                    </div>
                                                </div>

                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">

                                                <div class="showroom_vehicle unselected">

                                                    <figure>
                                                        <img class="center-block" src="images/icon1.png">
                                                    </figure>

                                                    <div class="item_spofrname text-center">
                                                        <h4> No vehicle selected </h4>
                                                        <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                                    </div>

                                                </div>

                                        </div>
                                        <!-- THIS IS THE END OF THE FIRST PRICE OPTION FIELD ITEM -->
                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">

                                                <div class="showroom_vehicle unselected">

                                                    <figure>
                                                        <img class="center-block" src="images/icon1.png">
                                                    </figure>

                                                    <div class="item_spofrname text-center">
                                                        <h4> No vehicle selected </h4>
                                                        <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                                    </div>

                                                </div>

                                        </div>
                                    </div>
                                </div>
                            </div>  <!--tab-div-->

                            <!-- Tax Rates 6 -->
                            <div class="resp-tab-content" aria-labelledby="tab_item-5">

                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
                                            <!-- THIS IS THE FIRST PRICE OPTION FIELD ITEM -->

                                                <div class="showroom_vehicle">

                                                    <figure>
                                                        <table class="short_dark_table">
                                                            <tr>
                                                                <td class="drk">
                                                                    <p> Personal leasing </p><span> inc. VAT </span></td>
                                                                <td class="lgt">
                                                                    <p>£XXX.XX</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="drk">
                                                                    <p> Annual fuel costs</p><span> excl. VAT </span></td>
                                                                <td class="lgt">
                                                                    <p>£XXX.XX</p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </figure>

                                                    <div class="showroom_vehicle_specs">

                                                        <div class="hm_viewspo">
                                                            <button type="submit"> REQUEST A QUOTE </button>
                                                        </div>

                                                    </div>
                                                </div>

                                        </div>
                                        <!-- THIS IS THE END OF THE FIRST PRICE OPTION FIELD ITEM -->
                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">

                                                <div class="showroom_vehicle unselected">

                                                    <figure>
                                                        <img class="center-block" src="images/icon1.png">
                                                    </figure>

                                                    <div class="item_spofrname text-center">
                                                        <h4> No vehicle selected </h4>
                                                        <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                                    </div>

                                                </div>

                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">

                                                <div class="showroom_vehicle unselected">

                                                    <figure>
                                                        <img class="center-block" src="images/icon1.png">
                                                    </figure>

                                                    <div class="item_spofrname text-center">
                                                        <h4> No vehicle selected </h4>
                                                        <p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
                                                    </div>

                                                </div>

                                        </div>

                                    </div>
                                </div>
                            </div>  <!--tab-div-->

                        </div>
                        <!--resp-tabs-container-->
                    </div>
                </div>
            </div>
        </div>


    </section>
