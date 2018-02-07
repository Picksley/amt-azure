<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Complaints Procedure';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
  <div class="col-md-12">
    <div class="page-title-dark">
      <h1> Complaints Procedure </h1>
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
        <li class="legal_pill legal_active"><a href="/complaints-procedure">Complaints Procedure</a> </li>
        <li class="legal_pill"><a href="/treating-customers-fairly">Treating Customers Fairly</a></li>
        <li class="legal_pill"><a href="/initial-disclosure">Initial Disclosure</a></li>
        <li class="legal_pill"><a href="/privacy-policy">Privacy Policy</a></li>
      </ul>
    </nav>
    <div class="col-sm-9">

      <div id="terms-and-conditions" class="terms_and_conditions_item">

        <p> It is the mission of AMT Contract Hire & Leasing Ltd to provide a very high standard of service to our customers. If for any reason you feel we have not lived up to your expectations or you are not entirely satisfied with any aspect of our service we would like to hear from you. </p>


        <p> To register a complaint you can contact us by: </p>
        <ul>
          <li> Email: <a href="mailto:admin@amtleasing.co.uk"> amt@leasing.co.uk </a></li>
          <li> Telephone: 0113 3874241 </li>
          <li> Post: Customer Service Manager, AMT Group Limited, AMT House, 174 Armley Road, Leeds, LS12 2QH </li>
        </ul>


        <p> We will acknowledge receipt of your complaint within 24 working hours of receipt (weekends and Bank Holidays excluded), we will endeavour to resolve your complaint quickly and efficiently and where possible within 3 working days, we will confirm the resolution to you in writing, but if we are unable to resolve your complaint within this time period, we will: </p>

        <ul>
          <li> Contact you to inform you of our progress and who is investigating your complaint along with their contact details.</li>
          <li> Keep you informed of the progress of our investigation until your complaint is resolved.</li>
        </ul>

        <p> Once resolved we will issue you with a final response to your complaint detailing the conclusion and our resolution.</p>
        <p> To help us investigate and try to resolve your concern, we will need you to provide the following information:</p>

        <ul>
          <li> Your name & address </li>
          <li> Your order number or registration number </li>
          <li> Details of how we can contact you </li>
          <li> A clear description of your concern or complaint </li>
          <li> Details of what you would like us to do to rectify the situation and your expected outcome </li>
          <li> If appropriate, copies of any relevant supporting documentation </li>
        </ul>

        <p> If we are unable to issue a final response within eight weeks from the date of your complaint we will put in writing an explanation as to why we are not in a position to do so. If we have provided you with our final response and you are dissatisfied with this, you may be entitled to refer your complaint to either of the below governing bodies: </p>

        <h2> BVRLA </h2>

        <ul>
          <li> Email: <a href="mailto:complaints@bvrla.co.uk"> complaints@bvrla.co.uk </a> </li>
          <li> Post: British Vehicle Rental & Leasing Association, River Lodge, Badminton Court, Amersham, HP7 0DD  </li>
        </ul>

        <p> The BVRLA will aim to resolve the matter using the information presented by both parties to the dispute. Any information requested from the member should be sent to the BVRLA within five working days. Based on the information available, the BVRLA will provide both parties with its findings and recommendations. The BVRLA aims to resolve complaints through the Conciliation Service within 30 days. Member must comply to the Conciliation Services findings. </p>

        <p> The Financial Ombudsman Service </p>
        <ul>
          <li> Website: <a href="http://www.financial-ombudsman.org.uk"> www.financial-ombudsman.org.uk </a>  </li>
          <li> Telephone: 0300 1239123 </li>
          <li> Post: The Financial Ombudsman Service, Exchange Tower, London, E14 9SR </li>
        </ul>

        <p> Please note that any complaint referred to the FCA must be submitted within six months of the date of our final response. </p>

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
