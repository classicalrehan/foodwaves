
@include('web.common.header')
  <!--container-->
  <div class="content">
  <div id="thm-mart-slideshow" class="thm-mart-slideshow">
    <div class="container">
      <div id='thm_slider_wrapper' class='thm_slider_wrapper fullwidthbanner-container' >
        <div id='thm-rev-slider' class='rev_slider fullwidthabanner'>
          <ul>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{!! url("web/images/slide-img1.jpg")!!}'><img src='{!! url("web/images/slide-img2.jpg")!!}'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image1" />
              <div class="info">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='210'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Get 50% off</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Simply delicious</span></div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='550'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a></div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Little things make a big difference</div>
              </div>
            </li>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{!! url("web/images/slide-img2.jpg")!!}'><img src='{!! url("web/images/slide-img1.jpg") !!}'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image2"  />
              <div class="info">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='210'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Fresh Look</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>100% Refreshing</span></div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='550'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a></div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Farm Fresh Produce Right to Your Door</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  <div id="top">
  <div class="container">
  <div class="row">
    <ul>
      <li>
        <div>
        <a href="#" data-scroll-goto="1">
		{!! Html::image('web/images/speakers.png','menu_image')!!}
          
        </a>
        </div>
      </li>
      <li>
       <div>
        <a href="#" data-scroll-goto="2">
		{!! Html::image('web/images/schedule.png','menu_image')!!}
          
        </a>
        </div>
      </li>
      <li>
       <div>
        <a href="#" data-scroll-goto="3">
		{!! Html::image('web/images/details.png','menu_image')!!}
          
        </a>
        </div>
      </li>
      <li>
       <div>
        <a href="#" data-scroll-goto="4">
		{!! Html::image('web/images/sponsors.png','menu_image')!!}
          
        </a>
		</div>
      </li>
      <li>
       <div>
        <a href="#" data-scroll-goto="5">
		{!! Html::image('web/images/team.png','menu_image')!!}
          
        </a>
        </div>
      </li>
      <li>
       <div>
        <a href="/register">
		{!! Html::image('web/images/register.png','menu_image')!!}
          
        </a>
        </div>
      </li>
    </ul>
	</div>
	</div>
  </div>
  
  <!--Category slider Start-->
  <div class="top-cate">
  <div class="featured-pro container">
    <div class="row">
      <div class="slider-items-products">
        <div class="new_title">
          <h2>Top Categories</h2>
		 
        </div> 
        <div id="top-categories" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col4 products-grid">
            
			@foreach($category as $cat)
				<div class="item" id="{!! $cat['id'] !!}">
				  <div class="pro-img">
					{!! Html::image('imageupload/server/category/files/'.$cat['image'],'menu_image')!!}
					<div class="pro-info"><a href="{!! url('products/')!!}?parent={!! $cat['slug']!!}">{!! $cat['name'] !!}</a></div>
				  </div>
				</div>

			@endforeach
			
            
			
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <!--Category silder End--> 
  

  
  
   <!-- best Pro Slider -->
  <section class=" wow bounceInUp animated">
    <div class="best-pro slider-items-products container">
      <div class="new_title">
        <h2>Hot Items</h2>
      </div>
      <!---<div class="cate-banner-img">
	  {!! Html::image('web/images/category-banner.jpg','Retis lapen casen')!!}
	  </div>---->
      <div id="best-seller" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4 products-grid">
         
		  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		  @foreach($product as $pro)
		  <div class="item">
			<div class="item-inner">
			  <div class="item-img">
				<div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image">
				{!! Html::image('imageupload/server/product/files/'.$pro['image']) !!}</a>
				  <div class="new-label new-top-left">New</div>
				  <div class="item-box-hover">
					<div class="box-inner">
					  <div class="product-detail-bnt"><a class="button detail-bnt" title="Quick View"><span>Quick View</span></a></div>
					  <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> 
            </span> </div>
					  
					</div>
				  </div>
				</div>
			  </div>
			  <div class="item-info">
				<div class="info-inner">
				  <div class="item-title"><a href="{!! url('product/details/'.$pro['id']) !!}" title="Retis lapen casen">{!! $pro['name'] !!}</a> </div>
				  <div class="item-content">
					<div class="rating">
					  <div class="ratings">
						<div class="rating-box">
						  <div class="rating" style="width:80%"></div>
						</div>
						<p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
					  </div>
					</div>
					<div class="item-price">
					  <div class="price-box"><span class="regular-price" ><span class="price"><i class="fa fa-inr"></i>Rs.{!! $pro['price'] !!}</span> </span> </div>
					</div>
					<div class="slimScrollDiv" ><ul class="menu" >
					  <li><!-- start message -->
						<div>
							
							  <div class="pull-left">
								{!! Html::Image('admintheme/dist/img/user2-160x160.jpg','User Image',array('onClick'=>'showSupplierInfo()', 'class'=>'img-circle','height'=>'50px'))!!}
							  </div>
							  <h4 onClick="showSupplierInfo()">
								Restaurant Info
							  </h4>
							  <!-- <p>Why not buy a new awesome theme?</p> -->
							
						</div>
						<div>
							<div class="pull-left">
								<div class="custom pull-left">
								 
								 <button onClick="return decreaseQty({{ $pro['id'] }}, 'qty-')" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
								  <input type="text" name="qty" id="qty-{{ $pro['id'] }}"  value="1" title="Quantity:" class="input-text qty" style="width:40px;">
								   <button onClick="return increaseQty({{ $pro['id'] }},'qty-')" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
								</div>
							</div>
							<!---<div class="input-group" style="width:130px;">
								<span class="input-group-btn">
									<button type="button" class="btn btn-default bg-custom" data-value="decrease" data-target="#spinner" data-toggle="spinner">
										<span class="glyphicon glyphicon-minus"></span>
									</button>
								</span>
								<input type="text" data-ride="spinner" name="qty" id="spinner" class="form-control input-number" value="1">
								<span class="input-group-btn">
									<button type="button" class="btn btn-default bg-custom" data-value="increase" data-target="#spinner" data-toggle="spinner">
										<span class="glyphicon glyphicon-plus"></span>
									</button>
								</span>
							</div>-->
						</div>
						
					  </li><!-- end message -->
					  
					</ul>
					</div>
						
					<div class="add_cart">
						<button class="button btn-cart" type="button" onClick="return addToCart({!! $pro['id'] !!},{!! $pro['price'] !!});"><span>Add to Cart</span></button>
					  </div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
          @endforeach
		
        </div>
      </div>
    </div>
  </section>
  
   
 
  <!-- Home Lastest Blog Block -->
  <div class="latest-blog wow bounceInUp animated animated container">
    <!--exclude For version 6 -->
      <div class="new_title">
        <h2>Latest Blog</h2>
      </div>
      <!--blog-title-->
      <!--For version 1,2,3,4,5,6,8 -->
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
          <div class="blog_inner">
            <div class="blog-img"> <a href="blog-detail.html"> 
			{!! Html::image('web/images/blog-img1.jpg','blog image')!!}
			
			</a>
              <div class="mask"> <a class="info" href="blog-detail.html">Read More</a> </div>
            </div>
            <!--blog-img-->
			<div class="blog-info">
			<div class="post-date">
              <time class="entry-date" datetime="2015-05-11T11:07:27+00:00">14 <br> April</time>
              </div>
            <h3><a href="blog-detail.html">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada ...</p>
            <a class="readmore" href="blog-detail.html">Read More</a> </div>
			</div>
          <!--blog_inner-->
        </div>
        <!--col-lg-4 col-md-4 col-xs-12 col-sm-4-->
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
          <div class="blog_inner">
            <div class="blog-img"> <a href="blog-detail.html"> 
			{!! Html::image('web/images/blog-img2.jpg','blog image')!!}
			</a>
              <div class="mask"> <a class="info" href="blog-detail.html">Read More</a> </div>
            </div>
            <!--blog-img-->
			<div class="blog-info">
			<div class="post-date">
              <time class="entry-date" datetime="2015-05-11T11:07:27+00:00">14 <br> April</time>
              </div>
            <h3><a href="blog-detail.html">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>
           
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada ...</p>
            <a class="readmore" href="blog-detail.html">Read More</a> </div>
			</div>
          <!--blog_inner-->
        </div>
		
        <!--col-lg-4 col-md-4 col-xs-12 col-sm-4-->
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
          <div class="blog_inner">
            <div class="blog-img"> <a href="blog-detail.html"> 
			{!! Html::image('web/images/blog-img3.jpg','blog image')!!}
			 </a>
              <div class="mask"> <a class="info" href="blog-detail.html">Read More</a> </div>
            </div>
            <!--blog-img-->
			<div class="blog-info">
			<div class="post-date">
              <time class="entry-date" datetime="2015-05-11T11:07:27+00:00">14 <br> April</time>
              </div>
            <h3><a href="blog-detail.html">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>
           
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada ...</p>
            <a class="readmore" href="blog-detail.html">Read More</a> </div>
			</div>
          <!--blog_inner-->
        </div>
        <!--col-lg-4 col-md-4 col-xs-12 col-sm-4-->

      <!--END For version 1,2,3,4,5,6,8 -->
      <!--exclude For version 6 -->
    <!--container-->
  </div>
  
   <!-- Logo Brand Block -->
  <div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="row">
      <div class="logo-brand col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="new_title">
        <h2>Brand Logo</h2>
      </div>
        <div class="slider-items-products">
          <div id="brand-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col6">
              <!-- Item -->
              <div class="item">
              <div class="logo-item"><a href="#">
			  {!! Html::image('web/images/b-logo7.png','blog image')!!}
			  </a></div>
               <div class="logo-item"><a href="#">
			   {!! Html::image('web/images/b-logo2.png','blog image')!!}
				</a></div>
               </div>
              <!-- End Item -->
              <!-- Item -->
               <div class="item">
              <div class="logo-item"><a href="#">
			  {!! Html::image('web/images/b-logo1.png','blog image')!!}
			  </a></div>
               <div class="logo-item"><a href="#">
			   {!! Html::image('web/images/b-logo4.png','blog image')!!}
			   </a></div>
               </div>
              <!-- End Item -->
              <!-- Item -->
             <div class="item">
              <div class="logo-item"><a href="#">
			  {!! Html::image('web/images/b-logo5.png','blog image')!!}
			  </a></div>
               <div class="logo-item"><a href="#">
			   {!! Html::image('web/images/b-logo6.png','blog image')!!}
			   </a></div>
               </div>
              <!-- End Item -->
              <!-- Item -->
              <div class="item">
              <div class="logo-item"><a href="#">
			  {!! Html::image('web/images/b-logo3.png','blog image')!!}
			  </a></div>
               <div class="logo-item"><a href="#">
			   {!! Html::image('web/images/b-logo2.png','blog image')!!}
			   </a></div>
               </div>
              <!-- End Item -->
              <!-- Item -->
             <div class="item">
              <div class="logo-item"><a href="#">
			  {!! Html::image('web/images/b-logo1.png','blog image')!!}
			  </a></div>
               <div class="logo-item"><a href="#">
			   {!! Html::image('web/images/b-logo4.png','blog image')!!}
			   </a></div>
               </div>
              <!-- End Item -->
              <!-- Item -->
             <div class="item">
              <div class="logo-item"><a href="#">
			  {!! Html::image('web/images/b-logo5.png','blog image')!!}
			  </a></div>
               <div class="logo-item"><a href="#">
			   {!! Html::image('web/images/b-logo6.png','blog image')!!}
			   </a></div>
               </div>
              <!-- End Item -->
              
            </div>
          </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 testimonials-section">
        <div class="offer-slider parallax parallax-2">
      <ul class="bxslider">
        <li>
		<div class="avatar">
		{!! Html::image('web/images/photo.jpg','blog image')!!}
		</div>
		<div class="testimonials">"Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer."</div>
		<div class="clients_author">	Smith John	<span>Happy Customer</span>	</div>
		</li>
         <li>
		<div class="avatar">
		{!! Html::image('web/images/photo1.jpg','blog image')!!}
		</div>
		<div class="testimonials">"Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer."</div>
		<div class="clients_author">	Karla Anderson	<span>Happy Customer</span>	</div>
		</li>
          <li>
		<div class="avatar">
		{!! Html::image('web/images/photo.jpg','blog image')!!}
		</div>
		<div class="testimonials">"Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer."</div>
		<div class="clients_author">	Smith John	<span>Happy Customer</span>	</div>
		</li>
          
       </ul>
       </div>
        </div>
      </div>
    </div>
  </div>
  </div>

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
  
</div>
<!--page-->
@include('web.common.mobileMenu')
@include('web.popup.supplier')
@include('web.popup.newsletter')
@include('web.popup.addToCartResponse')

<!-- JavaScript -->
{!! Html::script('web/js/jquery.min.js') !!}

{!! Html::script('web/js/bootstrap.min.js') !!}
{!! Html::script('web/js/parallax.js') !!}
{!! Html::script('web/js/revslider.js') !!}
{!! Html::script('web/js/common.js') !!}
{!! Html::script('web/js/jquery.bxslider.min.js') !!}
{!! Html::script('web/js/owl.carousel.min.js') !!}
{!! Html::script('web/js/jquery.mobile-menu.min.js') !!}
{!! Html::script('web/js/bootstrap-spinner.js') !!}
{!! Html::script('web/js/function.js') !!}
{!! Html::script('web/js/jquery.flexslider.js') !!}
{!! Html::script('web/js/cloud-zoom.js') !!}
{!! Html::script('web/js/owl.carousel.min.js') !!}

<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
<script type="text/javascript">
	   function initialize() {
			   var input = document.getElementById('searchTextField');
			   var autocomplete = new google.maps.places.Autocomplete(input);
	   }
	   google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#thm-rev-slider').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 0,
                startheight:900,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'on',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'on',
                forceFullWidth: 'off',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>	

</body>
</html>
