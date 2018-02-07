<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Contact us';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="contact_col">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="contact_col_des">
					<h1 class="wow fadeInUp">Contact us</h1>
					<p class="wow fadeInUp" data-wow-delay"0.2s">AMT Leasing provide a highly competitive car leasing service, coupled with a range of finance options to suit your every need. If you have any questions regarding our services, please fill in the enquiry form below or call the general switch board number.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contact-cont container">
	<div class="row">
		<div class="col-md-7 col-sm-7 col-xs-12 ct-border-right wow fadeInLeft">
			<h2> Send us a message </h2>
			<form action="" type="">
				<input type="text" name="name" placeholder="Your Name*" required/>
				<input type="phone" name="phone" placeholder= "Telephone*" required/>
				<input type="email" name="email" placeholder="Email Address*" required/>
				<textarea type="text" name="message" rows="5" placeholder="Tell us a bit more about your enquiry and we will answer when we reply..." ></textarea>

				<div class="col-lg-12">
						<div class="checkbox">
							<input id="checkbox1" type="checkbox">
							<label for="checkbox1"> Marketing Communications Agreement<br />
								<span class="ct-agreement">By entering your details above you are consenting to receive emails and SMS containing offers and informational updates from AMT Contract Hire and Leasing. To opt-out from any marketing communications, please tick this box. Your details will not be shared with any third parties. For more information please read our<a href="#"> Privacy Policy </a>for further details.</span> </label>
						</div>
				</div>
				<button type="submit" class="btn btn-ct btn-default pull-right">SUBMIT ENQUIRY <img src="images/hmright_arrow.png"></img></button>
			</form>
		</div>
		<div class="col-md-5 col-sm-7 col-xs-12 ct-more-info wow fadeInRight">
			<h2> Want to talk? </h2>

			<h4> Our details </h4>

			<div class="ct-group">
				<p><span class="contact-icon"><img src="images/icons/phone.svg"/> <strong> 0113 350 5979 </strong> </span></p>
			</div>

			<div class="ct-group">
				<p><span class="contact-icon"><img src="images/icons/email.svg"/> <strong> Leasing sales enquiries: </strong> <a href="mailto:newenq@amtleasing.co.uk"> newenq@amtleasing.co.uk </a> </span></p>
				<p><span class="contact-icon"><img class="no-visibility" src="images/icons/email.svg"/> <strong> Administration team: </strong> <a href="mailto:admin@amtleasing.co.uk"> admin@amtleasing.co.uk </a> </span></p>
				<p><span class="contact-icon"><img class="no-visibility" src="images/icons/email.svg"/> <strong> Accounts: </strong> <a href="mailto:accounts@amtleasing.co.uk"> accounts@amtleasing.co.uk </a> </span></p>
			</div>

			<div class="ct-group">
				<p><span class="contact-icon"><img class="" src="images/icons/email.svg"/> <strong> Mon-Fri </strong> 9am - 5.30pm</span></p>
				<p><span class="contact-icon"><img class="no-visibility" src="images/icons/email.svg"/> <strong> Sat-Sun </strong> Closed</span></p>
			</div>

			<img src="images/cpost_tabsap.png" class="img-responsive ct-spacer" alt="AMT Spacer with fade">

			<h4> Connect with us </h4>

			<div class="demopadding">
				<div class="ct icon social fb"><i class="fa fa-facebook"></i></div>
				<div class="ct icon social tw"><i class="fa fa-twitter"></i></div>
				<div class="ct icon social in"><i class="fa fa-youtube"></i></div>
			</div>

			<img src="images/cpost_tabsap.png" class="img-responsive ct-spacer" alt="AMT Spacer with fade">

			<h4> Complaints? </h4>

			<div class="ct-group">
				<p> If you have a complaint please <a href=""> click here </a> to view our complaints procedure.</p>
			</div>
		</div>
	</div>
</section>

<section class="ct-gmap wow fadeInUp">
	<div class="container-fluid">
		<div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9425.77130472142!2d-1.5814143!3d53.7994036!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a4772d02e024b28!2sAMT+Group+UK!5e0!3m2!1sen!2suk!4v1515517476452" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</section>


<section class="ct-vacancies">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
					<img src="images/fleet_management.png" class="img-responsive" alt="Fleet Management with AMT" style="padding:30px">
			</div>

			<div class="col-md-6 col-sm-6 col-xs-12 van-leasing-benefits wow fadeInRight">
					<h2>Vacancies</h2>
					<p>If you wish to be considered for any vacancies at AMT Leasing, please contact Dominic James on the number above or e-mail a copy of an up to date CV with a cover letter to:
					</p>
					<p><a href="mailto:hr@amtgroupuk.com"> hr@amtgroupuk.com </a></p>
			</div>

		</div>
	</div>


</section>
<?php include(CONST_ROOTDIR.'/views/site/newsletter.php'); ?>
