@include('web.common.header')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
     <div class="page-title">
     <h2>Login or Create an Account</h2>
  </div>
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>
    
       
<!-- BEGIN Main Container -->  
          
       <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">     
              
	       <div class="main">                     
                            <div class="account-login container">
  <!--page-title-->
		
       
        <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
        <fieldset class="col2-set">
          @if(Session::has('error'))
                      <section class="content-header">  
                        <div class="alert alert-danger alert-dismissable">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                          {{Session::get('error')}}
                        </div>
                      </section>

                    @endif
                    @if(Session::has('sucess'))
                      <section class="content-header">
                        <div class="callout callout-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Sucess!</h4>
                          {{Session::get('sucess')}}
                        </div>  
                      </section>
                    @endif
            {!! Form::open(array('url' => '/customer/login','method'=>'post','id'=>'login-form', 'files'=>true)) !!}
			<div class="col-2 registered-users">
             <strong>Registered Customers</strong>             
                <div class="content">
                    
                    <p>If you have an account with us, please log in.</p>
                    <ul class="form-list">
                        <li>
                             <label for="email">Email Address<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="text" name="email" value="" id="email" class="input-text required-entry validate-email" title="Email Address">
                            </div>
                        </li>
                        <li>
                            <label for="pass">Password<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="password" name="password" class="input-text required-entry validate-password" id="pass" title="Password">
                            </div>
                        </li>
                    </ul>
                    <div class="remember-me-popup">
						<div class="remember-me-popup-head" style="display:none">
							<h3 id="text2">What's this?</h3>
							<a href="#" class="remember-me-popup-close" onClick="showDiv()" title="Close">Close</a>
						</div>
						<div class="remember-me-popup-body" style="display:none">
							<p id="text1">Checking "Remember Me" will let you access your shopping cart on this computer when you are logged out</p>
							<div class="remember-me-popup-close-button a-right">
								<a href="#" class="remember-me-popup-close button" title="Close" onClick="
								showDiv()"><span>Close</span></a>
							</div>
						</div>
					</div>

					<p class="required">* Required Fields</p>



                     <div class="buttons-set">
                  
                    <button type="submit" class="button login" title="Login" name="send" id="send2"><span>Login</span></button>

                      <a href="#" class="forgot-word">Forgot Your Password?</a>
					</div> <!--buttons-set-->
						</div> <!--content-->                               
					</div> <!--col-2 registered-users-->
					{!! Form::close() !!}
					{!! Form::open(array('url' => '/customer/registration','method'=>'post','id'=>'login-form', 'files'=>true)) !!}
				    <div class="col-2 new-users"> 

                  <strong>New Customers</strong>    
                <div class="content">
                   
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                    
                    <ul class="form-list">
                        <li>
                            <label for="email">First Name<em class="required">*</em></label>
							<div class="input-box">
								<input type="text" name="firstName" required value="" id="email" class="input-text required-entry" title="First Name">
							</div>
                        </li>
						<li>
                            <label for="email">Last Name<em class="required">*</em></label>
							<div class="input-box">
								<input type="text" name="lastName" required value="" id="email" class="input-text required-entry" title="Last Name">
							</div>
                        </li>
						
						<li>
               <label for="email">Email Address<em class="required">*</em></label>
              <div class="input-box">
                  <input type="email" required name="email" value="" id="email" class="input-text required-entry validate-email" title="Email Address">
              </div>
          </li>
          <li>
              <label for="pass">Password<em class="required">*</em></label>
              <div class="input-box">
                  <input type="password" required name="password" class="input-text required-entry validate-password" id="pass" title="Password">
              </div>
                        </li>
						<li>
                             <label for="email">Mobile<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="text" name="mobile" value="" id="email" class="input-text required-entry validate-mobile" title="Mobile">
                            </div>
                        </li>
                    </ul>
					<div class="buttons-set">
						<button type="submit" title="Create an Account" class="button create-account" onClick=""><span><span>Create an Account</span></span></button>
					</div>
                </div>
            </div>
			{!! Form::close() !!}
            
                   </fieldset> <!--col2-set-->
    </form>
   
</div> <!--account-login-->
         
	       </div><!--main-container-->
          
          </div> <!--col1-layout-->
          

  
 
   <div class="our-features-box wow bounceInUp animated animated">
    <div class="container">
      <ul>
        <li>
          <div class="feature-box free-shipping">
            <div class="icon-truck"></div>
            <div class="content">FREE SHIPPING on order over $99</div>
          </div>
        </li>
        <li>
          <div class="feature-box need-help">
            <div class="icon-support"></div>
            <div class="content">Need Help +1 800 123 1234</div>
          </div>
        </li>
        <li>
          <div class="feature-box money-back">
            <div class="icon-money"></div>
            <div class="content">Money Back Guarantee</div>
          </div>
        </li>
        <li class="last">
          <div class="feature-box return-policy">
            <div class="icon-return"></div>
            <div class="content">30 days return Service</div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- For version 1,2,3,4,6 -->
  
@include('web.common.footer');