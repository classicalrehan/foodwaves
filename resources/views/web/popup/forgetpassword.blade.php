<div class="popup1" style="display: none;">
<div class="newsletter-sign-box">
<div class="newsletter">
{!! Html::image('web/images/close-icon.png','close',array('onClick'=>'HideMe()','class'=>'x'))!!}
   {!! Form::open(array('url' => '/forgetpassword','method'=>'post')) !!}
        <h3>Forget Password</h3>
        <p>The password will be send into your email address!</p>
     <div class="newsletter-form">
        <div class="input-box">
           <input type="email"  title="Enter Email"  placeholder="Enter Email" autocomplete="on"  class="input-text" name="forgetPassword">        
           <button type="submit" title="Forget Password" class="button subscribe"><span>Submit</span></button>
        </div> <!--input-box-->
     </div> <!--newsletter-form-->
   {!! Form::close() !!}
</div> <!--newsletter-->

  </div> <!--newsletter-sign-box-->
</div>
<div id="fade" style="display: none;"></div> 