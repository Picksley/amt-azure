<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Advanced Search ';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="advance_srchpg">
	<div class="advn_container">

            <div class="container">
                        <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                                                <div class="advcars_vans advnclftlink">
                                                        <ul>
                                                                <li class="active"><a href="#">cars</a></li>
                                                                <li><a href="#">vans</a></li>
                                                        </ul>
                                                </div>
                                    </div><!--col-lg-6-->

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="advcars_vans">
                                                        <ul>
                                                                <li class="active"><a href="#">All cars</a></li>
                                                                <li><a href="#">in stock</a></li>
                                                                  <li class="ad_spofr"><a href="#">special offers</a></li>
                                                        </ul>
                                                </div>
                                    </div><!--col-lg-6-->
                        </div><!--row-->


			<div class="advance_title">
           			<div class="row">
                    		<div class="col-lg-8 col-md-8 col-sm-8 text-right">
                            		<div class="ad_titl"> <h1>Advanced search</h1></div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            		<div class="ad_restfiltr"><button>Reset filters</button></div>
                            </div>
                    </div><!--row-->
            </div>    <!--advance_title-->

            </div>

           <div class="advsrch_tabssectn">
                    <div id="horizontalTab">
                            <ul class="resp-tabs-list advsrch_imgtbs">
                                   <li>
                                    <div class="advimgtbs_img"><img src="images/icons/manufacturer.svg"></div>
                                    <div class="advsrch_tabnm">Manufacturer</div>
                                    <div class="advimgtbs_slectd">Audi</div>
                                    </li>

                                 <li>
                                    <div class="advimgtbs_img"><img src="images/icons/piggy-bank.svg"></div>
                                    <div class="advsrch_tabnm">Budget</div>
                                    <div class="advimgtbs_slectd"></div>
                                    </li>

                                     <li>
                                    <div class="advimgtbs_img"><img src="images/icons/car-body.svg"></div>
                                    <div class="advsrch_tabnm">Body</div>
                                    <div class="advimgtbs_slectd">Any</div>
                                    </li>

                                     <li>
                                    <div class="advimgtbs_img"><img src="images/icons/engine.svg"></div>
                                    <div class="advsrch_tabnm">Engine</div>
                                    <div class="advimgtbs_slectd"></div>
                                    </li>

                                   <li>
                                    <div class="advimgtbs_img"><img src="images/icons/fuel-type.svg"></div>
                                    <div class="advsrch_tabnm">Fuel</div>
                                    <div class="advimgtbs_slectd"></div>
                                    </li>

                                     <li><div class="advimgtbs_img"><img src="images/icons/drive.svg"></div>
                                    <div class="advsrch_tabnm">Drive</div>
                                    <div class="advimgtbs_slectd"></div>
                                    </li>

                                     <li>
                                    <div class="advimgtbs_img"><img src="images/icons/lifestyle.svg"></div>
                                    <div class="advsrch_tabnm">Lifestyle</div>
                                    <div class="advimgtbs_slectd"></div>
                                    </li>

                            </ul>
                        <div class="resp-tabs-container">

                             <div>
                            			<div class="adv_innrlinks">
                                        				<ul>
                                                                <li class="active"><a href="#">Body Type</a></li>
                                                                <li><a href="#">no. of seats</a></li>
                                                                <li><a href="#">no. of doors</a></li>
                                                        </ul>
                                        </div>

                                        <div class="adv_slctboxes">
                                        		<h4>Choose your ideal body type:</h4>

                                               <div class="adv_chkbxlist">

                                                        <div class="advany_shape">
                                                            <div class="advchkbx_lft">
                                                             <input id="toggle9" type="checkbox" checked>
                                                              <label for="toggle9">Any Body Shape</label>
                                                              </div>
                                                          </div>

                                                  <div class="advothr_shape">
                                                                    <div class="advchkbx_lft">
                                                                     <input id="toggle1" type="checkbox" checked>
                                                                      <label for="toggle1"><img src="images/icons/car-shape-city.svg" class="adv_unactiveimg"><img src="images/icons/city-car-red.svg" class="adv_activeimg"><h5>city car</h5></label>
                                                                      </div>
                                                                        <div class="advchkbx_lft">
                                                                      <input id="toggle2" type="checkbox">
                                                                      <label for="toggle2"><img src="images/icons/car-shape-hatchback.svg" class="adv_unactiveimg"><img src="images/icons/hatchback-red.svg" class="adv_activeimg"><h5>hatchback</h5></label>
                                                                    </div>
                                                                    <div class="advchkbx_lft">
                                                                      <input id="toggle3" type="checkbox">
                                                                      <label for="toggle3"><img src="images/icons/car-shape-saloon.svg" class="adv_unactiveimg"><img src="images/icons/saloon-red.svg" class="adv_activeimg"><h5>Saloon</h5></label>
                                                                     </div>
                                                                      <div class="advchkbx_lft">
                                                                      <input id="toggle4" type="checkbox">
                                                                      <label for="toggle4"><img src="images/icons/car-shape-estate.svg" class="adv_unactiveimg"><img src="images/icons/estate-red.svg" class="adv_activeimg"><h5>Estate</h5></label>
                                                                     </div>
                                                                      <div class="advchkbx_lft">
                                                                      <input id="toggle5" type="checkbox">
                                                                      <label for="toggle5"><img src="images/icons/car-shape-coupe.svg" class="adv_unactiveimg"><img src="images/icons/coupe-red.svg" class="adv_activeimg"><h5>coupé</h5></label>
                                                                     </div>
                                                                      <div class="advchkbx_lft">
                                                                      <input id="toggle6" type="checkbox">
                                                                      <label for="toggle6"><img src="images/icons/car-shape-convertible.svg" class="adv_unactiveimg"><img src="images/icons/convertible-red.svg" class="adv_activeimg"><h5>convertible</h5></label>
                                                                     </div>
                                                                      <div class="advchkbx_lft">
                                                                      <input id="toggle7" type="checkbox">
                                                                      <label for="toggle7"><img src="images/icons/car-shape-4x4.svg" class="adv_unactiveimg"><img src="images/icons/4x4-SUV-red.svg" class="adv_activeimg"><h5>4x4 / suv</h5></label>
                                                                     </div>
                                                                      <div class="advchkbx_lft">
                                                                      <input id="toggle8" type="checkbox">
                                                                      <label for="toggle8"><img src="images/icons/car-shape-people-carrier.svg" class="adv_unactiveimg"><img src="images/icons/people-carrier-red.svg" class="adv_activeimg"><h5>people
carrier</h5></label>
                                                                     </div>
                                                         </div>
                                               </div><!--adv_chkbxlist-->

                                               <div class="adv_colpsfiltr"><button>collapse filters</button></div>
                                        </div><!--adv_slctboxes-->
                            </div>

                             <div>
                            <p></p>
                            </div>

                             <div>
                            <p></p>
                            </div>


                             <div>
                            <p></p>
                            </div>

                             <div>
                            <p></p>
                            </div>
                        </div><!--resp-tabs-container-->
                </div><!--horizontalTab-->
        </div><!--advsrch_tabssectn-->



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

    <div class="adv_dealslist">
    			<!---------------------------------------------------------->
         <div class="adv_dealslistinfo">
         	<div class="row">
            	<div class="col-lg-1 col-md-1 col-sm-1">
                	<div class="adv_dlistimg">
                    		<figure>
                    			<img src="images/hm_vanofr.png">
                                <figcaption><i class="fa fa-star-o" aria-hidden="true"></i> In Stock</figcaption>
                              </figure>
                    </div>
                </div><!--col-lg-1-->

               <div class="col-lg-2 col-md-2 col-sm-2">
                	<div class="adv_dlistinam">
                    		<h3>Ford Transit Custom</h3>
                            <h5>2.0 TDCi 105ps High Roof Kombi Van</h5>
                            <div class="adv_namspofr">Special offer</div>
                    </div>
                </div><!--col-lg-2-->

                <div class="col-lg-3 col-md-3 col-sm-3">
                	<div class="adv_carspeci">
                    		<ul>
                            	<li>MPG<span>XXXmpg - XXXmpg</span></li>
                                <li>Co2<span>XXXg/km</span></li>
                                <li>Gearbox<span>Gearbox</span></li>
                                <li>Fuel<span>Diesel</span></li>
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
                    		<button type="submit" class="adv_viewbtn">View Vehicle</button>
                           <button type="submit" class="adv_addbtn"><img src="images/plus.png">Add to my showroom</button>
                    </div>
                </div><!--col-lg-4-->

            </div><!--row-->
         </div><!--adv_dealslistinfo-->

        <!---------------------------------------------------------->


        <!---------------------------------------------------------->
         <div class="adv_dealslistinfo">
         	<div class="row">
            	<div class="col-lg-1 col-md-1 col-sm-1">
                	<div class="adv_dlistimg">
                    		<figure>
                    			<img src="images/hm_vanofr.png">
                                <figcaption><i class="fa fa-star-o" aria-hidden="true"></i> In Stock</figcaption>
                              </figure>
                    </div>
                </div><!--col-lg-1-->

               <div class="col-lg-2 col-md-2 col-sm-2">
                	<div class="adv_dlistinam">
                    		<h3>Ford Transit Custom</h3>
                            <h5>2.0 TDCi 105ps High Roof Kombi Van</h5>
                            <div class="adv_namspofr">Special offer</div>
                    </div>
                </div><!--col-lg-2-->

                <div class="col-lg-3 col-md-3 col-sm-3">
                	<div class="adv_carspeci">
                    		<ul>
                            	<li>MPG<span>XXXmpg - XXXmpg</span></li>
                                <li>Co2<span>XXXg/km</span></li>
                                <li>Gearbox<span>Gearbox</span></li>
                                <li>Fuel<span>Diesel</span></li>
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
                    		<button type="submit" class="adv_viewbtn">View Vehicle</button>
                           <button type="submit" class="adv_addbtn"><img src="images/plus.png">Add to my showroom</button>
                    </div>
                </div><!--col-lg-4-->

            </div><!--row-->
         </div><!--adv_dealslistinfo-->

        <!---------------------------------------------------------->


        <!---------------------------------------------------------->
         <div class="adv_dealslistinfo">
         	<div class="row">
            	<div class="col-lg-1 col-md-1 col-sm-1">
                	<div class="adv_dlistimg">
                    		<figure>
                    			<img src="images/hm_vanofr.png">
                                <figcaption><i class="fa fa-star-o" aria-hidden="true"></i> In Stock</figcaption>
                              </figure>
                    </div>
                </div><!--col-lg-1-->

               <div class="col-lg-2 col-md-2 col-sm-2">
                	<div class="adv_dlistinam">
                    		<h3>Ford Transit Custom</h3>
                            <h5>2.0 TDCi 105ps High Roof Kombi Van</h5>
                            <div class="adv_namspofr">Special offer</div>
                    </div>
                </div><!--col-lg-2-->

                <div class="col-lg-3 col-md-3 col-sm-3">
                	<div class="adv_carspeci">
                    		<ul>
                            	<li>MPG<span>XXXmpg - XXXmpg</span></li>
                                <li>Co2<span>XXXg/km</span></li>
                                <li>Gearbox<span>Gearbox</span></li>
                                <li>Fuel<span>Diesel</span></li>
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
                    		<button type="submit" class="adv_viewbtn">View Vehicle</button>
                           <button type="submit" class="adv_addbtn"><img src="images/plus.png">Add to my showroom</button>
                    </div>
                </div><!--col-lg-4-->

            </div><!--row-->
         </div><!--adv_dealslistinfo-->

        <!---------------------------------------------------------->




        <!---------------------------------------------------------->
         <div class="adv_dealslistinfo">
         	<div class="row">
            	<div class="col-lg-1 col-md-1 col-sm-1">
                	<div class="adv_dlistimg">
                    		<figure>
                    			<img src="images/hm_vanofr.png">
                              </figure>
                    </div>
                </div><!--col-lg-1-->

               <div class="col-lg-2 col-md-2 col-sm-2">
                	<div class="adv_dlistinam">
                    		<h3>Ford Transit Custom</h3>
                            <h5>2.0 TDCi 105ps High Roof Kombi Van</h5>
                    </div>
                </div><!--col-lg-2-->

                <div class="col-lg-3 col-md-3 col-sm-3">
                	<div class="adv_carspeci">
                    		<ul>
                            	<li>MPG<span>XXXmpg - XXXmpg</span></li>
                                <li>Co2<span>XXXg/km</span></li>
                                <li>Gearbox<span>Gearbox</span></li>
                                <li>Fuel<span>Diesel</span></li>
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
                    		<button type="submit" class="adv_viewbtn">View Vehicle</button>
                           <button type="submit" class="adv_addbtn"><img src="images/plus.png">Add to my showroom</button>
                    </div>
                </div><!--col-lg-4-->

            </div><!--row-->
         </div><!--adv_dealslistinfo-->

        <!---------------------------------------------------------->



        <!---------------------------------------------------------->
         <div class="adv_dealslistinfo">
         	<div class="row">
            	<div class="col-lg-1 col-md-1 col-sm-1">
                	<div class="adv_dlistimg">
                    		<figure>
                    			<img src="images/hm_vanofr.png">
                              </figure>
                    </div>
                </div><!--col-lg-1-->

               <div class="col-lg-2 col-md-2 col-sm-2">
                	<div class="adv_dlistinam">
                    		<h3>Ford Transit Custom</h3>
                            <h5>2.0 TDCi 105ps High Roof Kombi Van</h5>
                    </div>
                </div><!--col-lg-2-->

                <div class="col-lg-3 col-md-3 col-sm-3">
                	<div class="adv_carspeci">
                    		<ul>
                            	<li>MPG<span>XXXmpg - XXXmpg</span></li>
                                <li>Co2<span>XXXg/km</span></li>
                                <li>Gearbox<span>Gearbox</span></li>
                                <li>Fuel<span>Diesel</span></li>
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
                    		<button type="submit" class="adv_viewbtn">View Vehicle</button>
                           <button type="submit" class="adv_addbtn"><img src="images/plus.png">Add to my showroom</button>
                    </div>
                </div><!--col-lg-4-->

            </div><!--row-->
         </div><!--adv_dealslistinfo-->

         <div class="adv_dealslistinfo">
         	<div class="row">
            	<div class="col-lg-1 col-md-1 col-sm-1">
                	<div class="adv_dlistimg">
                    		<figure>
                    			<img src="images/hm_vanofr.png">
                                <figcaption><i class="fa fa-star-o" aria-hidden="true"></i> In Stock</figcaption>
                              </figure>
                    </div>
                </div><!--col-lg-1-->

               <div class="col-lg-2 col-md-2 col-sm-2">
                	<div class="adv_dlistinam">
                    		<h3>Ford Transit Custom</h3>
                            <h5>2.0 TDCi 105ps High Roof Kombi Van</h5>
                            <div class="adv_namspofr">Special offer</div>
                    </div>
                </div><!--col-lg-2-->

                <div class="col-lg-3 col-md-3 col-sm-3">
                	<div class="adv_carspeci">
                    		<ul>
                            	<li>MPG<span>XXXmpg - XXXmpg</span></li>
                                <li>Co2<span>XXXg/km</span></li>
                                <li>Gearbox<span>Gearbox</span></li>
                                <li>Fuel<span>Diesel</span></li>
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
                    		<button type="submit" class="adv_viewbtn">View Vehicle</button>
                           <button type="submit" class="adv_addbtn"><img src="images/plus.png">Add to my showroom</button>
                    </div>
                </div><!--col-lg-4-->

            </div><!--row-->
         </div><!--adv_dealslistinfo-->

         <div class="advlistbtn_shwmor"><button type="submit">Show me more results</button></div>

        <!---------------------------------------------------------->
    </div><!--adv_dealslist-->


    </div>
</section>


<?php include(CONST_ROOTDIR.'/views/site/newsletter.php'); ?>
