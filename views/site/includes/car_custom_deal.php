<div class="carp_customizdeals">
    <div class="sm_carpersbus car_postleas">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="sm_carperlft">
                    <h4>Personal leasing</h4>
                    <h5>Per month, inc. VAT</h5>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="sm_carperrgt">
                    <h3><?php if (count($pricing) !== count($pricing, COUNT_RECURSIVE))
                            Yii::$app->language='en-GB';
{ echo Yii::$app->formatter->asCurrency(($pricing[0]["Derivative_Monthly_Rental_Price"])*CONST_VAT);}?></h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="sm_carperlft">
                    <h4>Business leasing</h4>
                    <h5>Per month, excl. VAT</h5>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="sm_carperrgt">
                    <h3>£XXX.XX</h3>
                </div>
            </div>
        </div><!--row-->

    </div><!--sm_carpersbus-->

    <div class="carp_customizform">
        <h4>Customise your deal:</h4>

        <div class="advpg_sortby">
            <form>
                <div class="form-group">
                    <label for="">Contract Type:</label>
                    <select class="form-control modal-select">
                        <option>Personal Leasing</option>
                        <option>Personal Leasing 2</option>
                        <option>Personal Leasing 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Initial Payment:</label>
                    <select class="form-control modal-select">
                        <option>9 months</option>
                        <option>6 months</option>
                        <option>3 months</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Contract Length:</label>
                    <select class="form-control modal-select">
                        <option>4 years</option>
                        <option>5 years</option>
                        <option>7 years</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Annual Mileage:</label>
                    <select class="form-control modal-select">
                        <option>8,000 miles</option>
                        <option>9000 miles</option>
                        <option>10,000 miles</option>
                    </select>
                </div>

                <div class="form-group cpost_addvehcl">
                    <div class="checkbox">
                        <input id="checkbox2" type="checkbox">
                        <label for="checkbox2"> Add Vehicle Maintenance?<br>
                        </label> <span><img src="/images/cpost_fmoreicon.png">
                                         <b> <a href="#">Click here</a> to find out more</b></span>
                    </div>

                </div>
            </form>
        </div>

        <div class="carpost_summry">
            <h4>Your Summary:</h4>
            <ul>
                <li>Processing Fee:<span>£XXX.XX Inc VAT</span></li>
                <li>Initial Payment:<span> £XXX.XX inc VAT </span></li>
                <li>48 Monthly Rentals: <span>£XXX.XX inc VAT</span></li>
                <li>Excess mileage charge:<span>TBC</span></li>
            </ul>
        </div>

        <div class="cpost_foundvcl">
            <h4>Found your vehicle?</h4>
            <button type="submit" class="hm_redbtns">request a quote <i class="fa fa-envelope-o" aria-hidden="true"></i> </button>
            <button class="cpost_ordrbtn" type="submit">Order vehicle online</button>
        </div>

        <div class="cpost_ndhlp">
            <p>Need help? <span>Request a call back</span></p><p> or call us on <span>0113 350278</span>4</p>
        </div>

    </div><!--carp_customizform-->
</div><!--carp_customizdeals-->
