<?php include 'header.php' ?>

<section class="row">
	<!-- slider -->
</section>
<!--  -->

<section class="row">
<section class="container">
   <section class="col-md-8">
   	<div>
   	  <h1>
          <font style="font-size: 36px;">Share your experience with us</font>
        </h1>
                <p>Contact us about anything related to our company or services.</p>
                <p>We'll do our best to get back to you as soon as possible.</p>
              </div>
            </div>
            <div>
      <form action="/website_form/" method="post" data-model_name="crm.lead" data-success_page="/page/website_crm.contactus_thanks" class="s_website_form form-horizontal container-fluid mt32" enctype="multipart/form-data">
        <div class="form-group form-field o_website_form_required_custom">
          <label class="col-md-3 col-sm-4 control-label" for="contact_name">Your Name</label>
          <div class="col-md-7 col-sm-8">
            <input type="text" class="form-control o_website_form_input" name="contact_name" required="" value=""/>
          </div>
        </div>
        <div class="form-group form-field">
          <label class="col-md-3 col-sm-4 control-label" for="phone">Phone Number</label>
          <div class="col-md-7 col-sm-8">
            <input type="text" class="form-control o_website_form_input" name="phone" value=""/>
          </div>
        </div>
        <div class="form-group form-field o_website_form_required_custom">
          <label class="col-md-3 col-sm-4 control-label" for="email_from">Email</label>
          <div class="col-md-7 col-sm-8">
            <input type="text" class="form-control o_website_form_input" name="email_from" required="" value=""/>
          </div>
        </div>
       <div class="form-group form-field o_website_form_required_custom">
          <label class="col-md-3 col-sm-4 control-label" for="description">Your Comment</label>
          <div class="col-md-7 col-sm-8">
            <textarea class="form-control o_website_form_input" name="description" required="">
              
            </textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-offset-3 col-sm-offset-4 col-sm-8 col-md-7">
            <span class="btn btn-primary btn-lg o_website_form_send">Send</span>
            <span id="o_website_form_result"></span>
          </div>
        </div>
      </form>
   </section>

   <section class="col-md-4" style="margin-top: 7%">
   	
   	      <div itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
            <div>
                <i class="fa fa-map-marker"></i> <span itemprop="streetAddress">France / Ghana</span>
            </div>
            
            <div><i class="fa fa-phone"></i> <span itemprop="telephone">+33 62 513 0416 / +233 26 632 8115</span></div>
            
            
            
            <div><i class="fa fa-envelope"></i> <span itemprop="email">info@kamalconsult.org</span></div>
        </div>
    </address>
</div>
        
            <span class="fa fa-map-marker fa-fw mt16"></span> <a target="_BLANK" href="https://maps.google.com/maps?q=%2C++%2C+France&amp;z=8"> Google Maps</a>
        
   </section>
</section>
</section>


<?php include 'footer.php' ?>