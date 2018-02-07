<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Leasing Guide | Finance Options';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container">
  <div class="col-md-12">
    <div class="page-title-dark">
      <h1> Personal finance options </h1>
    </div>
  </div>
</div>

<style>
/* Note: Try to remove the following lines to see the effect of CSS positioning */
.affix {
    top: 20px;
    z-index: 9999 !important;
    position:fixed;
}
</style>
<section class="faq_answers">
  <div class="container">
  <div class="row">
    <nav class="col-sm-3">
      <ul class="nav-pills nav-stacked faq_pills" data-spy="affix" data-offset-top="980">
        <li class="faq_pill"><a href="#personal-contract-hire"> Personal Contract Hire (PCH)</a></li>
        <li class="faq_pill"><a href="#hire-purchase"> Hire Purchase (HP)</a> </li>
        <li class="faq_pill"><a href="#personal-contract-purchase"> Personal Contract Purchase (PCP)</a></li>
        <li class="faq_pill"><a href="#lease-purchase">Lease Purchase</a></li>
      </ul>
    </nav>
    <div class="col-sm-9">
      <div id="personal-contract-hire" class="faq_answer_item">
      <h2> Personal Contract Hire (PCH) </h2>
        <p> Personal contract hire (PCH) is an effective way to get instant access to a new car without having to worry about a large cash outlay. This simple arrangement allows your car of choice to be leased at an affordable monthly cost without having to worry about the effect that depreciation has on your vehicle.</p>

        <h3> How personal contract hire works  </h3>
        <p> You pay a monthly rental to lease a car over a set period of time, typically between 24 - 60 months, with a flexible initial payment structure of either 1, 3, 6, 9 or 12 months which is paid after delivery. The vehicle is then returned at the end of the term. This arrangement gives all the benefits of driving a new vehicle, but at a much lower monthly cost. </p>
        <p> Annual mileage requirements, servicing and maintenance options can be customised and included within your monthly payment. At the end of the term the car will be picked up so there's no hassle with selling it privately or to a garage. </p>


        <h3> Advantages of personal contract hire </h3>
        <p> TABLE HERE </p>

        <h3> Disadvantages of personal contract hire </h3>
        <p> TABLE HERE </p>
      </div>

      <div id="hire-purchase" class="faq_answer_item">
      <h2> Hire Purchase (HP)</h2>
        <p> A hire purchase (HP) plan is a very popular and flexible way for people to acquire the vehicle they want immediately and to take ownership of them once the value has been fully repaid. Hire purchase is similar to a bank loan that is secured against the value of the car, as ownership of the vehicle is assumed once the repayments have been completed. </p>

        <h3> How hire purchase works </h3>
        <p> You pay a monthly rental to lease a car over a set period of time, typically between 24 - 60 months, with a flexible initial payment structure of either 1, 3, 6, 9, or 12 months which is paid after delivery. The vehicle is then returned at the end of the term. This arrangement gives all the benefits of driving a new vehicle, but at a much lower monthly cost.</p>
        <p> Annual mileage requirements, servicing and maintenance options can be customised and included within your monthly payment. At the end of the term the car will be picked up so there's no hassle with selling it privately or to a garage. </p>

        <h3> Advantages of hire purchase </h3>
        <p> TABLE HERE </p>

        <h3> Disadvantages of hire purchase </h3>
        <p> TABLE HERE </p>
      </div>

      <div id="personal-contract-purchase" class="faq_answer_item">
      <h2> Personal Contract Purchase (PCP) </h2>
        <p> A personal contract purchase provides all the benefits associated with personal contract hire, but gives you various options to choose from at the end fo the contract. You can choose to pay a sum to purchase the vehicle (known as a "balloon payment" which is a large final payment), return the vehicle as you do with a contract hire agreement or terminate the agreement and take out a new PCP agreement for a new vehicle. </p>

        <h3> How personal contract hire works </h3>
        <p> A fixed monthly fee to lease the selected vehicle is paid over a set period of time, with the choice at the end of the agreement whether or not to meet a final payment to cover the car's outstanding value. If this option is taken, the ownership of the vehicle will be transferred to the individual. However, the vehicle can also be returned at the end of the term. </p>

                <h3> Advantages of personal contract purchase </h3>
                <p> TABLE HERE </p>

                <h3> Disadvantages of personal contract purchase </h3>
                <p> TABLE HERE </p>

      </div>

      <div id="lease-purchase" class="faq_answer_item">
      <h2> Lease Purchase (LP) </h2>

        <p> Lease purchase can be a good option for people who would like to own a vehicle but do not necessarily have the money to buy one immediately. Once you've made called a "balloon payment" (a large final payment) at the end of the contract you take ownership of the vehicle. The monthly payments cover the difference between the value of the car at the start and end of the agreement.</p>
        <h3> How lease purchase works </h3>
        <p> When the lease purchase ends you have two options: either you can make the balloon payment and then take ownership of the vehicle, or you can choose to part exchange your vehicle - you make the balloon payment then lease a newer car. </p>
        <h3> Advantages of personal contract purchase </h3>
        <p> TABLE HERE </p>

        <h3> Disadvantages of personal contract purchase </h3>
        <p> TABLE HERE </p>

      </div>
    </div>
  </div>
</div>

</section>

<div class="container">
  <div class="more_questions">
  <h2 class="black">Have more questions?</h2>
  <p>Then give us a call to discuss, we're here to help!:</p>
  <h6><img src="images/icons/phone.svg">0113 350 9776</h6>
  </div>
</div>

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
