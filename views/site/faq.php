<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Further Answered Questions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
  <div class="col-md-12">
    <div class="page-title-dark">
      <h1> Frequently asked questions </h1>
    </div>
  </div>
</div>
<section class="faq_content">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 text-center faq_subtitle"><h3> Choose a category </h3></div>

      <div class="faq_nav">

          <div class="">

        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_left wow fadeIn">
          <a href="#about-leasing">
            <div class="faq_block">
            <img src="/images/icons/about_leasing.png"/> <span> About leasing </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
            </div>
          </a>
        </div>


        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_center wow fadeInLeft" data-wow-delay="0.2s">
          <a href="#choosing-the-right-option">
          <div class="faq_block">
            <img src="/images/icons/choosing_the_right_option.png"/> <span> Choosing the right leasing option </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
          </a>
        </div>

        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_right wow fadeInDown" data-wow-delay="0.4s">
          <a href="#delivery">
          <div class="faq_block">
            <img src="/images/icons/delivery.png"/> <span> Delivery </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
          </a>
        </div>
      </div>

      <div class="">
        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_left wow fadeInLeft" data-wow-delay="1.4s">
          <a href="#the-financials">
          <div class="faq_block">
            <img src="/images/icons/the_financials.png"/> <span> The financials </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
          </a>
        </div>
        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_center wow fadeIn" data-wow-delay="1.6s">
          <div class="faq_block">
            <a href="#warranty-and-breakdown">
            <img src="/images/icons/warranty_and_breakdown.png"/> <span> Warranty and breakdown </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
          </a>
        </div>

        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_right wow fadeInDown" data-wow-delay="0.6s">
          <a href="#mileage">
          <div class="faq_block">
            <img src="/images/icons/mileage.png"/> <span> Mileage </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
          </a>
      </div>
    </div>

    <div class="">
        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_left wow fadeInUp" data-wow-delay="1.2s">
          <a href="#tax-and-insurance">
          <div class="faq_block">
            <img src="/images/icons/tax_and_insurance.png"/> <span> Tax and insurance </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
          </a>
      </div>
        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_center wow fadeInLeft" data-wow-delay="1s">
          <a href="#maintenance-and-servicing">
          <div class="faq_block">
            <img src="/images/icons/maintenance_and_servicing.png"/> <span> Maintenance and servicing</span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
        </a>
      </div>
        <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 faq_right wow fadeInLeft" data-wow-delay="0.8s">
          <a href="#end-of-contract">
          <div class="faq_block">
            <img src="/images/icons/end_of_contract.png"/> <span> End of contract </span>
            <img src="/images/faq_arrowdown.png" class="hvr_arrow"/>
          </div>
        </a>
      </div>
    </div>

      </div>

    </div>
  </div>
</section>
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
      <ul class="nav-pills nav-stacked faq_pills affix-top" data-spy="affix" data-offset-top="980">
        <li class="faq_pill"><a href="#about-leasing">About Leasing</a></li>
        <li class="faq_pill"><a href="#choosing-the-right-option">Choosing the right leasing option</a> </li>
        <li class="faq_pill"><a href="#delivery">Delivery</a></li>
        <li class="faq_pill"><a href="#the-financials">The financials</a></li>
        <li class="faq_pill"><a href="#warranty-and-breakdown">Warranty and breakdown</a></li>
        <li class="faq_pill"><a href="#mileage">Mileage</a></li>
        <li class="faq_pill"><a href="#tax-and-insurance">Tax and insurance</a></li>
        <li class="faq_pill"><a href="#maintenance-and-servicing">Maintenance and servicing</a></li>
        <li class="faq_pill"><a href="#end-of-contract">End of contract</a></li>
      </ul>
    </nav>
    <div class="col-sm-9">

      <div id="about-leasing" class="faq_answer_item">
      <h2> About leasing </h2>


        <h3> What is leasing? </h3>
        <p> Leasing is an agreement between the funder and a customer which allows you to drive a brand-new car for a fixed term. You pay an agreed initial payment plus regular monthly payments at a set amount for the term of the contract. At the end of the contract, you simply return the car.  </p>

        <h3> Why would you lease instead of buying a car or van? </h3>
        <p>Leasing has always been a popular option for businesses to acquire vehicles. More recently we’ve seen the personal market leasing grow rapidly as people look to avoid depreciation and one-off large repair bills. Essentially leasing a car or van allows you to spread the cost effectively. People may also find it’s an affordable way to get a higher value vehicle than they could afford if they were to buy it outright. </p>

        <h3> Why should I lease from AMT Leasing? </h3>
        <p> We’ve been established for over 20 years and in that time, we have built up extensive knowledge of the marketplace and have developed strong relationships with manufacturers, dealerships and funding companies. Our financial standing and size give us buying power - we purchase stock vehicles and larger volumes of vehicles at very competitive prices which means we can offer low prices to our customers. We can also offer some in-house funding if credit is an issue – if you’ve just started a company for example and would struggle to get credit from a funder. </p>

        <h3> Who is the registered owner and keeper of the vehicle? </h3>
        <p> If you take out a contract hire agreement the finance company is the registered owner and keeper. </p>

      </div>

      <div id="choosing-the-right-option" class="faq_answer_item">
      <h2> Choosing the right option </h2>

        <h3> How long is the contract hire or lease period? </h3>
        <p> Our contracts range from 12 to 60 months depending on the vehicle and contract chosen. If you want to try a new car for a period before committing to a 12 month+ contract we can offer short term leasing from 1 month to 12 months, inclusive of maintenance, on immediately available vehicles from our wholly owned premium and specialist fleet. </p>


        <h3> What’s the difference between contract hire and leasing? </h3>
        <p> There isn’t really any difference between contract hire and leasing - essentially, they mean the same thing. Contract hire is generally the term used when describing a business leasing agreement. </p>


        <h3> Should I take out a personal leasing contract or business leasing? </h3>
        <p> Businesses don’t pay VAT on leasing contracts so this can be a good way to reduce your costs. However, if you have a limited company, depending on the company car tax implications, you may prefer to lease a car personally. If you’d like some advice on what’s best for your particular set of circumstances, just give us a call. </p>


        <h3> Can I take my chosen vehicle for a test drive? </h3>
        <p> As we don’t have a forecourt we can’t offer our customers the opportunity to have a test drive. We’d recommend you visit a local dealership, have a test drive of the vehicle you are interested in then come back to us to arrange your contract. </p>

        <h3> Will you part exchange my car? </h3>
        <p> We can offer a part exchange service. Just complete our <a href="/part-exchange"> online form </a> or alternatively speak to one of our account managers who will be able to help you. </p>



      </div>

      <div id="delivery" class="faq_answer_item">
      <h2> Delivery </h2>

        <h3> How soon can I get my car? </h3>
        <p> We have a range of vehicles in stock which can be delivered to you within 2 weeks. For other vehicles, we will go to our go to our dealers in the first instance, but if a factory order is necessary this can take up to 14 weeks to be delivered. </p>

        <h3> Who supplies the vehicles?  </h3>
        <p> All our vehicles are supplied through the relevant vehicle manufacturers UK dealer network. </p>

        <h3> Is delivery and collection included? </h3>
        <p> We offer free UK mainland delivery, where your vehicle will be driven to your required destination. Delivery can be made by transporter, but will incur a fee. Collection depends on the type of contract taken. </p>

        <h3> Can I specify a time I’d like for my vehicle to be delivered? </h3>
        <p> You can request a morning or afternoon delivery slot for your new vehicle to be delivered. If you need a specific time, do let us know and we’ll do our best to meet your request. </p>
      </div>

      <div id="the-financials" class="faq_answer_item">
      <h2> The Financials </h2>

        <h3> What is the initial deposit? </h3>
        <p> While a minimum one payment upfront is available, typically an initial deposit of 3 monthly payments is required. The larger the deposit you give, the lower your monthly payments will be. Our prices are advertised with 9 months deposit paid up front but you do have the functionality available to change the initial deposit and see how that effects your monthly payment.</p>

        <h3> When is the initial rental and monthly payments taken? </h3>
        <p> Dates for initial rental and monthly payments are dependent upon the finance provider. Some providers take the initial rental within 14 days of delivery of the vehicle, whilst others take payment before delivery is booked. Monthly payments are usually taken one month after delivery of the vehicle on a date set by the finance provider. </p>

        <h3> Who provides the funding for the car? </h3>
        <p> We have established long-term partnerships with 5 main funding companies out of a possible 12. They are Arval, Lex, FCA, ALD and Hitachi.  </p>

      </div>

      <div id="warranty-and-breakdown" class="faq_answer_item">
      <h2> Warranty and Breakdown </h2>

        <h3> Do vehicles have a warranty? </h3>
        <p> Yes, all our vehicles come with the full UK manufacturer’s warranty for your piece of mind. </p>

        <h3> What if I need a replacement vehicle? </h3>
        <p> If your contract included an optional relief vehicle then this can be arranged by calling the maintenance number provided by the finance company. Without a relief vehicle option a hire car can be arranged at preferential rates through our rental operation (see <a href="http://www.amtvehiclerental.com">www.amtvehiclerental.com </a>) </p>

        <h3> Is roadside assistance included? </h3>
        <p> Yes, all vehicles include either 12 months or 3 years breakdown recovery, depending on the manufacturer. </p>

        <h3> What happens in the event of a breakdown? </h3>
        <p> Within the car or van book pack there will be an emergency number to contact day or night. </p>
      </div>


      <div id="mileage" class="faq_answer_item">
      <h2> Mileage </h2>

        <h3> How many miles a year am I allowed to do in my vehicle? </h3>
        <p> We will agree an annual mileage limit with you before you take out the contract. The mileage bands can be from 5,000 up to 50,000 miles depending on the funder.  </p>

        <h3> What if I exceed the agreed mileage on the contract? </h3>
        <p> If you go over the agreed mileage limit you will incur an excess mileage charge. The price you will pay is outlined on your original quotation and official finance document. Any mileage over the contract is charged at the excess mileage rate charged in pence per mile. As an example, if the excess was 4 pence per mile then for 1000 miles over contract you would be charged £40. </p>

        <h3> Why does the price increase as the annual mileage increases?</h3>
        <p> The more miles you do in your car, the greater the depreciation which means the car will be worth less, just as you’d experience with a car you own. As a result, the funder charges more to cover the loss in vehicle value. </p>

      </div>
      <div id="tax-and-insurance" class="faq_answer_item">
      <h2> Tax and Insurance </h2>

        <h3> Will the contract include Road Fund Licence? </h3>
        <p> Yes, either for the duration of the contract or 12 months. This will depend the type of contract taken. </p>

                <h3> Is car insurance included in the lease? </h3>
                <p> The lease contract does not include insurance. However, we have a partner that we can refer you to who can offer you competitive rates. Please call 0800 840 1204 or click here to complete an online application. </p>

      </div>

      <div id="maintenance-and-servicing" class="faq_answer_item">
      <h2> Maintenance and Servicing </h2>

        <h3> Is maintenance included? </h3>
        <p> Maintenance is an optional cost and includes all servicing, tyres, brakes, exhaust, battery and labour. For further details please ask a member of the team. </p>

        <h3> What happens when I need a vehicle serviced or repaired? </h3>
        <p> If you included maintenance in the contract you will receive a maintenance contact number from the finance company from which you can book the vehicle into a local approved garage. Upon request you may also be able to request free vehicle collection and delivery. </p>

      </div>
      <div id="end-of-contract" class="faq_answer_item">
      <h2> End of Contract </h2>

        <h3> What are my options at the end of the contract? </h3>
        <p> This depends on the type of contract taken but usually you can either hand the car back, extend the contract, or purchase the vehicle from the finance company or third party (dependent upon the funder). </p>

        <h3> What happens at the end of the lease contract? </h3>
        <p> At the end of the lease you can either arrange for the vehicle to be collected or you can extend the contract on a month by month basis (dependent upon the funder). </p>

        <h3>What happens if I want to end the lease early? </h3>
        <p> Contact AMT to request an early termination quotation. </p>

        <h3> Can I buy the car at the end of the agreement? </h3>
        <p> This option is available on some of our finance options. One of our account managers can provide you with more information if this of interest to you. </p>
      </div>


        <div class="more_questions_faq">
        <h2 class="black">Have more questions?</h2>
        <p>Then give us a call to discuss, we're here to help!:</p>
        <h6><img src="/images/icons/phone.svg">0113 350 9776</h6>
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
