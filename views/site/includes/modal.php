

<!-- Opens the Request a quote modal box -->
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#request_a_quote_box">Open Modal</button>






<!-- Modal -->
<div id="request_a_quote_box" class="modal fade" role="dialog">
   <div class="vertical-alignment-helper">
<div class="container w-1100 center-block contact-cont vertical-align-center request_quote">
    <!-- Modal content-->
    <div class="modal-content quote_box" >
      <div class="modal-body">

          <h2 class="" style=""> Request a quote </h2>

          <div class="col-md-7 quote_form">

            <form action="" type="POST" id="request_quote">
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
      				<button type="submit" class="btn btn-qt btn-default pull-right">SUBMIT ENQUIRY <img src="images/hmright_arrow.png"></img></button>
      			</form>

          </div>
          <div class="col-md-5  hidden-md hidden-sm hidden-xs quote_information">
            <h3> Why lease with us </h3>

          <p><img src="/images/icons/email.svg"><strong> Dedicated, experienced support </strong></p>
          <p><img src="/images/icons/email.svg"><strong> Flexible terms </strong></p>
          <p><img src="/images/icons/email.svg"><strong> Great value </strong></p>
          <p><img src="/images/icons/email.svg"><strong> Free delivery (UK mainland only) </strong></p>
          <p><img src="/images/icons/email.svg"><strong> Road tax included </strong></p>

          <p> Read more about our team and history to discover why AMT is the right choice for you. </p>

          <button type="submit" class="btn btn-qt-sm btn-default center-block">FIND OUT MORE ABOUT AMT <img src="images/hmright_arrow.png"></img></button>
          </div>



      </div>

    </div>

  </div>
</div>
</div>

<style>

</style>
