@include('web.common.header')

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
            <div class="page-title">
                <h2>Checkout</h2>
            </div>
        </div>
    </div>
</div>
</div>

<!-- BEGIN Main Container col2-right --> 
<div class="main-container col2-right-layout">  

  <div class="main container">
    <div class="row">    
      <section class="col-main col-sm-9 wow bounceInUp animated animated" style="visibility: visible;">      


        <ol class="one-page-checkout" id="checkoutSteps">
             @if(!Auth::user())
            <li id="opc-login" class="section allow active">
                <div class="step-title"> 
                             
                    <h3 class="one_page_heading" onClick="shoppingCart.checkoutMethodHeading();">  Checkout Method</h3>
                </div>
                <div id="checkout-step-login" class="step a-item">

                    <div class="col2-set">
                        <div class="col-1">
                            <h3>Checkout as a Guest or Register</h3>

                            <p>Register with us for future convenience:</p>
                            <ul class="form-list">
                                <li class="control">
                                    <input type="radio" name="checkout_method" id="login:guest" value="guest" class="radio" checked><label for="login:guest">Checkout as Guest</label>
                                </li>
                                <li class="">
                                    <input type="radio" name="checkout_method" id="login:register" value="register" class="radio"><label for="login:register">Register</label>
                                </li>
                            </ul>
                            <h4>Register and save time!</h4>
                            <p>Register with us for future convenience:</p>
                            <ul class="ul">
                                <li>Fast and easy check out</li>
                                <li>Easy access to your order history and status</li>
                            </ul>

                            <div class="buttons-set1">
                                <p class="required">&nbsp;</p>
                                <button id="onepage-guest-register-button" type="button" class="button continue" onClick="shoppingCart.checkoutMethodButton();"><span><span>Continue</span></span></button>
                            </div>



                        </div>
                        <div class="col-2">
                            <h3>Login</h3>

                            {!! Form::open(array('url' => '/customer/login','method'=>'post','id'=>'login-form', 'files'=>true)) !!}
                                <fieldset>
                                    <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
                                    <h4>Already registered?</h4>
                                    <p>Please log in below:</p>
                                    <ul class="form-list">
                                     <li>
                                        <div class="input-box">
                                            <label for="login-email">Email Address<em class="required">*</em></label>
                                            <br>
                                            <input type="email" class="input-text required-entry validate-email" id="login-email" name="email" value="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-box">
                                            <label for="login-password">Password<em class="required">*</em></label>
                                            <br>
                                            <input type="password" class="input-text required-entry" id="login-password" name="password">
                                        </div>
                                    </li>
                                </ul>
                                <input name="context" type="hidden" value="checkout">
                            </fieldset>
                        


                        <div class="buttons-set">
                            <p class="required">* Required Fields</p>
                            <button type="submit" class="button login"><span><span>Login</span></span></button>

                            <a href="#" class="f-right">Forgot your password?</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </li>
            @endif
            {!! Form::open(array('url' => '/order/store','method'=>'post', 'files'=>true)) !!}
                <li id="opc-shipping" class="section">
                    <div class="step-title"> 
                        <h3 class="one_page_heading" onClick="shoppingCart.shippingInformationHeading();">  Shipping Information</h3>
                    </div>
                    <?php 
                     $class = "";
                    if(!Auth::user()){
                        $class = "hide-container";
                    }else{
                        //$class = "style='display:none;'";
                    }
                     ?>
                    <div id="checkout-step-shipping" class="step a-item <?php echo $class;?>" >
                            <ul class="">
                                <li id="shipping-new-address-form">
                                    <fieldset class="group-select">
                                        <input type="hidden" name="shipping[amount]" value="" id="">
                                        <input type="hidden" name="shipping[tax]" value="" id="">
                                        <ul>
                                            <li class="fields">
                                                <div class="customer-name">
                                                    <div class="input-box name-firstname">
                                                        <label for="shipping:firstname">First Name<span class="required">*</span></label>
                                                        <div class="input-box1">
                                                            <input type="text" id="shipping:firstname" name="shipping[firstname]" value="" title="First Name" maxlength="255" class="input-text required-entry" onChange="shipping.setSameAsBilling(false)">
                                                        </div>
                                                    </div>
                                                    <div class="input-box name-lastname">
                                                        <label for="shipping:lastname">Last Name<span class="required">*</span></label>
                                                        <div class="input-box1">
                                                            <input type="text" id="shipping:lastname" name="shipping[lastname]" value="" title="Last Name" maxlength="255" class="input-text required-entry" onChange="shipping.setSameAsBilling(false)">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fields">
                                                    
                                                    <div class="input-box">
                                                        <label for="shipping:telephone">Email<span class="required">*</span></label>

                                                        <input type="email" name="shipping[telephone]" value="" title="Telephone" class="input-text  required-entry" id="shipping:telephone" onChange="shipping.setSameAsBilling(false);">

                                                    </div>
                                                    <div class="input-box">
                                                        <label for="shipping:telephone">Mobile<em class="required">*</em></label>

                                                        <input type="text" name="shipping[mobile]" value="" title="Telephone" class="input-text  required-entry" id="shipping:telephone" onChange="shipping.setSameAsBilling(false);">

                                                    </div>
                                                </li>
                                            <li class="wide">
                                                <label for="shipping:street1">Address<em class="required">*</em></label><br>

                                                <input type="text" title="Street Address" name="shipping[address]" id="shipping:street1" value="" class="input-text  required-entry" onChange="shipping.setSameAsBilling(false);">

                                            </li>
                                            
                                            <li class="fields">
                                                <div class="input-box">
                                                    <label for="shipping:city">City<em class="required">*</em></label>

                                                    <input type="text" title="City" name="shipping[city]" value="" class="input-text  required-entry" id="shipping:city" onChange="shipping.setSameAsBilling(false);">

                                                </div>
                                                <div class="input-box">
                                                        <label for="shipping:postcode">Zip/Postal Code<em class="required">*</em></label>

                                                        <input type="text" title="Zip/Postal Code" name="shipping[zip]" id="shipping:postcode" value="" class="input-text validate-zip-international  required-entry" onChange="shipping.setSameAsBilling(false);">

                                                    </div>
                                                </li>
                                               
                                               
                                            </ul>
                                        </fieldset>
                                    </li>
                                </ul>
                                <div class="buttons-set1">
                                    <p class="required">&nbsp;</p>
                                    <button id="onepage-guest-register-button" type="button" class="button continue" onClick="shoppingCart.shippingInformationButton();"><span><span>Continue</span></span></button>
                                </div>
                            </div>

                        </li>
                        <li id="opc-shipping_method" class="section">
                            <div class="step-title"> 
       
                                <h3 class="one_page_heading" onClick="shoppingCart.shippingMethodHeading();">  Shipping Method</h3>
                            </div>
                            <div id="checkout-step-shipping_method" class="step a-item <?php echo $class;?>">
                                <div id="checkout-shipping-method-load">
                                    <h6 class="one_page_heading"> Free Shipping</h6>
                                       <ul>
                                           <li> 
                                            <input  type="radio" name="shipping[shippingCharge]" id="shipping:same_as_billing" value="0" title="Use Billing Address"  class="checkbox" checked> <label for="shipping:same_as_billing">Free Rs.0.00</label>
                                            </li>
                                            <li> 
                                            <input  type="radio" name="shipping[shippingCharge]" id="shipping:same_as_billing" value="50" title="Use Billing Address"  class="checkbox"> <label for="shipping:same_as_billing">Flat Rs.50.00</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="buttons-set1">
                                        <p class="required">&nbsp;</p>
                                        <button id="onepage-guest-register-button" type="button" class="button continue" onClick="shoppingCart.shippingMethodButton();"><span><span>Continue</span></span></button>
                                    </div>
                                </div>
                            </li> 
                            <li id="opc-payment" class="section">
                                <div class="step-title"> 
         
                                    <h3 class="one_page_heading" onClick="shoppingCart.paymentInformationHeading();">  Payment Information</h3>
                                </div>
                                <div id="checkout-step-payment" class="step a-item <?php echo $class;?>" >

                                    <fieldset>
                                        <dl class="sp-methods" id="checkout-payment-method-load">
                                            <ul>
                                               <li> 
                                                <input  type="radio" name="shipping[paymentMethod]" id="shipping:same_as_billing" value="paypal" title="Use Billing Address"  class="checkbox" checked> <label for="shipping:same_as_billing"> Paypal</label>
                                                </li>
                                                <li> 
                                                <input  type="radio" name="shipping[paymentMethod]" id="shipping:same_as_billing" value="cod" title="Use Billing Address"  class="checkbox"> <label for="shipping:same_as_billing"> COD</label>
                                                </li>
                                            </ul>
                                         </dl>
                                     </fieldset>
                                     <div class="buttons-set1">
                                        <p class="required">&nbsp;</p>
                                        <button id="onepage-guest-register-button" type="button" class="button continue" onClick="shoppingCart.paymentInformationButton();"><span><span>Continue</span></span></button>
                                    </div>
                                </div>
                            </li>
                            <li id="opc-review" class="section">
                                <div class="step-title"> 
         
                                    <h3 class="one_page_heading" onClick="shoppingCart.orderOverviewHeading();">  Order Review</h3>
                                </div>
                                <div id="checkout-step-review" class="step a-item <?php echo $class;?>" >
                                    <div class="order-review" id="checkout-review-load">
                                       <div class="recent-orders">
                
                                            <div class="table-responsive">
                                              <table class="data-table table-striped" id="my-orders-table">
                                                <colgroup>
                                                <col width="">
                                                <col width="">
                                                <col>
                                                <col width="1">
                                                <col width="1">
                                                <col width="20%">
                                                </colgroup>
                                                <thead>
                                                  <tr class="first last">
                                                    <th>Product </th>
                                                    <th>Price</th>
                                                    <th>Qty</th>
                                                    <th><span class="nobr">Sub Total</span></th>
                                                  </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr class="even" >
                                                      <td></td>
                                                      <td></td>
                                                      <td>Sub Total</td>
                                                      <td><span class="price">RS.{!! $cart['totalPrice'] !!}</span></td>
                                                    </tr> 
                                                    <tr class="even" >
                                                      <td></td>
                                                      <td></td>
                                                      <td>Shipping & Handling (Flat Rate - Fixed)</td>
                                                      <td><span class="price">RS.0.00</span></td>
                                                    </tr> 
                                                    <tr class="even" >
                                                      <td></td>
                                                      <td></td>
                                                      <td>Grand Total</td>
                                                      <td><span class="price">RS.{!! $cart['totalPrice'] !!}</span></td>
                                                    </tr> 
                                                </tfoot>
                                                <tbody>
                                                 <?php 
                                                    if(count($cart['cartItem'])>0){
                                                 ?>   
                                                 @foreach($cart['cartItem'] as $cart)
                                                    <tr class="even" id="{!! $cart['cart_id'] !!}">
                                                      <td>{!! $cart['name'] !!}</td>
                                                      <td><span class="nobr">RS.{!! $cart['price'] !!}</span></td>
                                                      <td>{!! $cart['qty'] !!}</td>
                                                      <td><span class="price">RS.{!! $cart['qty'] * $cart['price'] !!}</span></td>
                                                    </tr>
                                                  @endforeach
                                                  
                                                  <?php 
                                                    }
                                                  ?>
                                                </tbody>
                                              </table>
                                            </div>
                                            <!--table-responsive-->                 
                                          </div>
                                    </div>
                                    <div class="buttons-set" id="payment-buttons-container">
                                    <button type="submit" class="button continue"><span>Place Order</span></button>
                                    </div>
                                </div>
                            </li>
                            
                            {!! Form::close() !!}
                        </ol>

                        <br>    
                    </section>    
                    <aside class="col-right sidebar col-sm-3 wow bounceInUp animated animated" style="visibility: visible;">      
                        <div id="checkout-progress-wrapper"><div class="block block-progress">
                            <div class="block-title">
                                Your Checkout    </div>
                                <div class="block-content">
                                    <dl>
                                        
                                            <div id="shipping-progress-opcheckout">
                                                <dt>
                                                    Shipping Address</dt>

                                                </div>

                                                <div id="shipping_method-progress-opcheckout">
                                                    <dt>
                                                        Shipping Method</dt>

                                                    </div>

                                                    <div id="payment-progress-opcheckout">
                                                        <dt>
                                                            Payment Method</dt>

                                                        </div>
                                                        <div id="payment-progress-opcheckout">
                                                        <dt>
                                                            Order Review</dt>

                                                        </div>
                                                    </dl>
                                                </div>
                                            </div></div>                 
                                        </aside> <!--col-right sidebar-->           
                                    </div><!--row-->   
                                </div><!--main-container-inner-->
                            </div> <!--main-container col2-left-layout-->      


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

        @include('web.common.footer')
        {!! Html::script('web/js/cart.js') !!}