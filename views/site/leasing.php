<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Leasing';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
  <div class="col-md-12">
    <div class="page-title-dark">
      <h1 class="wow fadeInUp">Leasing</h1>
      <p class="wow fadeInUp" data-wow-delay="0.2s">We want to make the process of leasing from AMT as easy as possible and we're here to provide you with a one-stop shop for acquiring vehicles and a value packes service to boot. We've got over 20 years' experience, access to the eneitr car and van market, a range of funders to choose from to get you the best possible lease deal, and a dedicated account team ready to take your enquiry today.</p>
    </div>
  </div>
</div>
</header>
<section class="hm_carvanofrlease">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInLeft">
                <div class="hm_cvofferleaseinfo">
                    <figure class="ofr_lease"><img class="img-responsive" src="images/hm_carofr.png"></figure>
                    <h2>Personal Leasing</h2>
                    <p>The personal leasing market continues to grow at a pace and people realise the numerous benefits of leasing as opposed to purchasing a vehicle. If you're new to leasing and want to know more, you're seeking advice on what type of vehicle to go for, or you're simply looking for the best deal, you've come to the right place.</p>
                     <button type="submit" class="hm_redbtns">More about personal leasing <img src="images/hmright_arrow.png"> </button>
                </div>
            </div><!--col-lg-6-->
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp">
                <div class="hm_cvofferleaseinfo">
                    <figure class="ofr_lease"><img class="img-responsive" src="images/hm_carofr2.png"></figure>
                   <div class="seperator_css">
                    <h2>Business Leasing</h2>
                    <p>Business contract hire (business leasing) is a cost-effective, low risk means of acquiring a brand-new vehicle or fleet of vehicles for your business. The upfront costs of purchasing vehicles outright can remove investable capital from your business and add a depreciating asset to your balance sheet, whereas business leasing provides you with a lower risk alternative with all the benefits and more of ownership.</p>
                     <button type="submit" class="hm_redbtns">More about business leasing <img src="images/hmright_arrow.png"> </button>
                      </div>
                </div>
            </div><!--col-lg-6-->
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInRight">
                <div class="hm_cvofferleaseinfo">
                    <figure class="ofr_lease"><img class="img-responsive" src="images/hm_vanofr.png"></figure>

                    <h2>Van Leasing</h2>
                    <p>We don't simply lease cars, we lease vans too and have access to all manufacturers and models. If you're looking for your next van then use our website search facility or give us a call to discuss your needs.</p>
                     <button type="submit" class="hm_redbtns">More about van leasing <img src="images/hmright_arrow.png"> </button>

                </div>
            </div><!--col-lg-6-->
        </div><!--row-->
    </div><!--container-->
</section>
<section class="special-offers-include">
<div class="container">
<div class="col-md-12">
<div class="title2">
<h2 class="wow fadeInUp">Special Offers</h2>
<p class="wow fadeInUp"> We have a number of special offers available every month across a range of vehicles to suit all tastes and budgets. You'll need to hurry though as stock is limited so if you see a vehicle you're interested in, don't delay, give us a call today. </p>
</div>


<?php include(CONST_ROOTDIR.'/views/site/includes/special_offers_include.php'); ?>

<div class="text-center center-block">
 <button type="submit" class="hm_redbtns">VIEW SPECIAL OFFERS <img src="images/hmright_arrow.png"> </button>

</div>
</div>
</div>
</section>


<?php include(CONST_ROOTDIR.'/views/site/newsletter.php'); ?>
