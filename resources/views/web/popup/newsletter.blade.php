<div class="popup1" style="display: none;">
<div class="newsletter-sign-box">
<div class="newsletter">
{!! Html::image('web/images/close-icon.png','close',array('onClick'=>'HideMe()','class'=>'x'))!!}
<div class="newsletter_img">
{!! Html::image('web/images/newsletter_img.png','newsletter')!!}
</div>
    <form method="post" id="popup-newsletter" name="popup-newsletter" class="email-form">
        <h3>Enter Your Current Location</h3>
        
        <h4>enter your current location for fast delievery and be the first to hear of special offers.</h4>
     <div class="newsletter-form">
        <div class="input-box">
           <input type="text" id="searchTextField"  title="Enter a location"  placeholder="Enter a location" autocomplete="on"  class="input-text">        
           <button type="submit" title="Subscribe" class="button subscribe"><span>Submit</span></button>
         
        </div> <!--input-box-->
     </div> <!--newsletter-form-->
    </form>
</div> <!--newsletter-->

  </div> <!--newsletter-sign-box-->
</div>
<div id="fade" style="display: none;"></div> 