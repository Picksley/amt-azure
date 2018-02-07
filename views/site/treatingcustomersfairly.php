<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Treating Customers Fairly';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
  <div class="col-md-12">
    <div class="page-title-dark">
      <h1> Treating Customers Fairly </h1>
    </div>
  </div>
</div>
<style>
/* Note: Try to remove the following lines to see the effect of CSS positioning */
.affix {
    top: 20px;
    z-index: 9999 !important;
    position:relative;
}
</style>
<section class="faq_answers">
  <div class="container">
  <div class="row">
    <nav class="col-sm-3">
      <ul class="nav-pills nav-stacked legal_pills affix-top" data-spy="affix" data-offset-top="980">
        <li class="legal_pill "><a href="/terms-and-conditions">Terms and Conditions</a></li>
        <li class="legal_pill"><a href="/complaints-procedure">Complaints Procedure</a> </li>
        <li class="legal_pill legal_active"><a href="/treating-customers-fairly">Treating Customers Fairly</a></li>
        <li class="legal_pill"><a href="/initial-disclosure">Initial Disclosure</a></li>
        <li class="legal_pill"><a href="/privacy-policy">Privacy Policy</a></li>
      </ul>
    </nav>
    <div class="col-sm-9">

      <div id="terms-and-conditions" class="terms_and_conditions_item">

        <p> AMT Contract Hire & Leasing Limited is fully committed to providing customers with an excellent level of service and treating customers fairly this has been at the core of our business philosophy for many years. </p>

        <p> Treating Customers Fairly (TCF) is one of the cornerstone principles laid down by the Financial Conduct Authority. This guiding principle is sub-divided into six key elements which dictate the way in which we deal with our customers in terms of communication, expectations, level of service and the products and services we offer. </p>

        <p> The six guiding principle elements are: </p>
          <ul>
            <li> Consumers are confident that they are dealing with firms where the fair treatment of customers is central to the corporate culture.</li>
            <li> Products and services marketed and sold in the retail market place are designed to meet the needs of identified consumer groups and are targeted accordingly.</li>
            <li> Consumers are provided with clear information and are kept appropriately informed before, during and after the point of sale.</li>
            <li> Where consumers receive advice, the advice is suitable and takes account of their needs and circumstances.</li>
            <li> Consumers are provided with products that perform as firms have led them to expect, and the associated service is of an acceptable standard and as they have been led to expect.</li>
            <li> Consumers do not face unreasonable post-sale barriers imposed by firms to change product, switch provider, submit claims or make a complaint.</li>
          </ul>

          <p> In practical terms we adhere to the above principle by: </p>
            <ul>
              <li> Listening to our customers to understand their needs.</li>
              <li> Offering only market products which are appropriately targeted, clear, and unambiguous, highlight the risks and conditions as well as the key features and benefits.</li>
              <li> Ensuring Customers understand any risks associated with products and services.</li>
              <li> Ensuring services are delivered to customers openly, with clarity and transparency and do not contain hidden conditions or complex definitions.</li>
              <li> When, in the event of providing advice, that the advice given takes into account the customers’ needs and circumstances.</li>
              <li> Taking the customers privacy seriously and ensuring that members of staff are trained to follow the rules in relation to data protection and to keep customers details secure and confidential.  </li>
              <li> Taking complaints seriously and dealing with them promptly, learning from them and modifying operations and processes where necessary. </li>
            </ul>



      </div>


        <div class="more_questions_faq">
        <h2 class="black">Have more questions?</h2>
        <p>Then give us a call to discuss, we're here to help!:</p>
        <h6><img src="images/icons/phone.svg">0113 350 9776</h6>
        </div>




    </div>




  </div>
</div>

</section>



<section class="customers-col">
<div class="container">
<div class="col-md-12">
<div class="title2">
<h1> Your Recently Viewed Vehicles </h1>
</div>
</div>
</div>

<?php include(CONST_ROOTDIR.'/views/site/recently_viewed_vehicles.php'); ?>
</section>


<?php include(CONST_ROOTDIR.'/views/site/newsletter.php'); ?>
