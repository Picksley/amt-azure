<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Initial Disclosure';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
  <div class="col-md-12">
    <div class="page-title-dark">
      <h1> Initial Disclosure </h1>
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
        <li class="legal_pill"><a href="/treating-customers-fairly">Treating Customers Fairly</a></li>
        <li class="legal_pill legal_active"><a href="/initial-disclosure">Initial Disclosure</a></li>
        <li class="legal_pill"><a href="/privacy-policy">Privacy Policy</a></li>
      </ul>
    </nav>
    <div class="col-sm-9">

      <div id="terms-and-conditions" class="terms_and_conditions_item">

        <p> AMT Contract Hire & Leasing Ltd are authorised and regulated by the Financial Conduct Authority. </p>

        <p> AMT Contract Hire & Leasing Ltd is a credit broker and not a lender. </p>


        <p> You can verify this by checking the FCA Register on the website: <a href="http://www.fca.ordg.uk/register/"> http://www.fca.ordg.uk/register/ </a> or contacting them on: 0300 500 8082. </p>


        <p> FCA Registration No: FRN308831 </p>
        <p> VAT No: GB820808738 </p>
        <p> BVRLA Membership No: 1559 </p>
        <p> Data Protection Registration No: ZA120651 </p>
        <p> Company Registration No: 04504282 </p>

        <h2> What services do we provide? </h2>

        <p> We will provide you with either comparable details of firms most appropriate to your lending, purchase requirements or general information for finance products. You will be proposed to a limited panel of funders whereby a commission may be paid for doing so, this will be paid to AMT Contract Hire & Leasing Ltd by the relevant funder after delivery of the vehicle has taken place. In assessing your requirements we may seek such information about your personal circumstances and objectives as might be relevant in order to enable us to identify you needs. It is important that you provide us with accurate and relevant information. You will not receive advice, or a recommendation from us, but we may ask questions to narrow down the selection of firms offered, from which you can more easily make your own choice if you so wish.</p>

        <h2> Our main selected Panel of Lenders </h2>

        <table class="table amt-table table-striped">
          <thead>
            <tr class="text-center" style="background-color:#33414E;color:#fff;text-align:center">
              <th> Lender: </th>
              <th> Address </th>
              <th> FCA No: </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>ALD Automotive Ltd</td>
              <td>Oakwood Park, Lodge Causeway, Fishponds, Bristol, BS16 3JA</td>
              <td>571068</td>
            </tr>
            <tr>
              <td>Arval UK Ltd</td>
              <td>Arval centre, Windmill Hill, Swindon, SN5 6PE</td>
              <td>660751</td>
            </tr>
            <tr>
              <td>Hitachi Capital vehicle Solutions Ltd</td>
              <td>Kiln house, 54a Kiln Road, Newbury, Berkshire, RG14 2NU</td>
              <td>488110</td>
            </tr>
            <tr>
              <td>Lex Autolease Ltd</td>
              <td>Blake House, 2 Hatchford Way, Birmingham, B26 3RZ</td>
              <td>414465</td>
            </tr>
            <tr>
              <td>Leasys UK Ltd</td>
              <td>240 Bath Road, Slough, Berkshire, SL1 4DX</td>
              <td>312683</td>
            </tr>
          </tbody>
        </table>

        <h2> Feedback </h2>

        <p> AMT Contract Hire & Leasing Ltd always welcomes feedback from our customers, if you would like to offer any suggestions or have any concerns please contact us directly on <a href="mailto:admin@amtleasing.co.uk"> admin@AMTleasing.co.uk </a> </p>


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
