@include('web.common.header')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
     <div class="page-title">
     <h2>Order Placed Successfully</h2>
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
          
           
			<div class="col-1 registered-users" style="width:100%">
                       
                <div class="content" style="text-align:center;">
                  <h1>YOUR ORDER HAS BEEN RECEIVED.</h1>             
                   <h2>THANK YOU FOR YOUR PURCHASE!</h2>  
                   <p>Your order # is: @if(Session::has('id'))
                       {{Session::get('id')}}
                    @endif.</p>
                   <p>You will receive an order confirmation email with details of your order and a link to track its progress.</p>
                    <p>Click here to <a href="{!! url('order/print/9') !!}" target="_blank">print</a> a copy of your order confirmation.</p> 
                    
                   
                    
						</div> <!--content-->                               
					</div> <!--col-2 registered-users-->
				
		
            
        </fieldset> <!--col2-set-->
   
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