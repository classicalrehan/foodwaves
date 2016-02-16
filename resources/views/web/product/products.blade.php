@include('web.common.header')
  <div class="page-heading">
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul>
              <li class="home"> <a href="{!! url('') !!}" title="Go to Home Page">Home</a>  </li>
              <li class="category1599">{!! ($categorySelection['parent']!=''? '<span>—› </span>'.$categorySelection['parent']:'') !!} </li>
              <li class="category1601"> <strong>{!! ($categorySelection['child']!=''? '<span>—› </span>'.$categorySelection['child']:'') !!} </strong> </li>
            </ul>
          </div>
          <!--col-xs-12--> 
        </div>
        <!--row--> 
      </div>
      <!--container--> 
    </div>
    <div class="page-title">
      <h2>{!! ($categorySelection['child']!=''?$categorySelection['child']:'Products') !!}</h2>
    </div>
  </div>	

    <!-- BEGIN Main Container col2-left -->                 
    <section class="main-container col2-left-layout bounceInUp animated"> 
  <!-- For version 1, 2, 3, 8 --> 
  <!-- For version 1, 2, 3 -->
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-9 col-sm-push-3 product-grid">
      <div class="pro-coloumn">
        <article class="col-main">
          <div class="toolbar">
            <div class="sorter">
				<div class="view-mode"> 
					<span title="Grid" class="button button-active button-grid" onClick="return showProductInGrid();">&nbsp;</span>
					<span title="List" class="button button-list" onClick="return showProductInList();">&nbsp;</span>
				</div>
            </div>
            <div id="sort-by">
              <label class="left">Sort By: </label>
              <ul class="productSort">
                <li ><a><span class="activeSortText">Name</span><span class="right-arrow"></span></a>
                  <ul>
                    <li sort-key="name"><a>Name</a></li>
                    <li sort-key="price"><a>Price</a></li>
                    <li sort-key="id"><a>Date</a></li>
                  </ul>
                </li>
              </ul>
              <a class="sortByOrder button-desc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
            <div class="pager">
              <div id="limiter">
                <label>View: </label>
                <ul class="productLimit">
                  <li><a href="#"><span class="activeSortLimit">10</span><span class="right-arrow"></span></a>
                    <ul>
                      <li data-limit="10"><a>10</a></li>
                      <li data-limit="20"><a>20</a></li>
                      <li data-limit="30"><a>30</a></li>
                      <li data-limit="40"><a>40</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <!-- <div class="pages">
                <label>Page:</label>
                <ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div> -->
            </div>
          </div>
		  <form method="post">
          <div class="category-products">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <ul class="products-grid" >
			
              @foreach($product as $pro)
			  <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6" id="{!! $pro['id'] !!}">
			   <div class="item-inner">
				  <div class="item-img">
					<div class="item-img-info"><a href="{!! url('product/details/'.$pro['id']) !!}" title="Retis lapen casen" class="product-image">
					{!! Html::image('imageupload/server/product/files/'.$pro['image']) !!}</a>
					
					  <div class="item-box-hover">
						<div class="box-inner">
						  <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
						  <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
						  
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
						  <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">{!! $pro['price'] !!}</span> </span> </div>
						</div>
            <h4 onClick="showSupplierInfo()">
              Restaurant Info
            </h4>
            <div class="pull-left">
                <div class="custom pull-left">
                 
                 <button onClick="return decreaseQty({{ $pro['id'] }},'qty-')" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                  <input type="text" name="qty" id="qty-{{ $pro['id'] }}"  value="1" title="Quantity:" class="input-text qty" style="width:40px;">
                   <button onClick="return increaseQty({{ $pro['id'] }},'qty-')" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                </div>
              </div>

						<div class="add_cart">
							<button class="button btn-cart" type="button" onClick="return addToCart({!! $pro['id'] !!},{!! $pro['price'] !!});"><span>Add to Cart</span></button>
						  </div>
					  </div>
					</div>
				  </div>
				</div>
              </li>
              @endforeach
            </ul>
          
		  
			<ol class="products-list" id="products-list" style="display:none;">
				<?php 
					$count=1;
					$length=count($product);
				?>
			   @foreach($product as $pro)
				<li class="item <?php echo ($count==1 ? "first":"");?> <?php echo ($count==$length ? "last":"");?> <?php echo ($count %2==0? "odd":"even");?>">
				<div class="product-image"> <a href="product-detail.html" title="HTC Rhyme Sense"> 
				
				{!! Html::image('imageupload/server/product/files/'.$pro['image'],'',array('class'=>'small-image')) !!}</a> </div>
				<div class="product-shop">
				  <h2 class="product-name"><a href="{!! url('product/details/'.$pro['id']) !!}" title="HTC Rhyme Sense">{!! $pro['name'] !!}</a></h2>
				  <div class="ratings">
					<div class="rating-box">
					  <div style="width:50%" class="rating"></div>
					</div>
					<p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
				  </div>
				  <div class="desc std">
					<p>Sed volutpat ac massa eget 
					  lacinia.  
					  Aenean volutpat lacus at dolor blandit </p>
					<p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
					  tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="#">Learn More</a> </p>
				  </div>
				  <div class="price-box">
					<p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> RS.{!! $pro['price'] !!}</span> </p>
				  </div>
          <h4 onClick="showSupplierInfo()">
              Restaurant Info
            </h4>
            <div class="pull-left">
                <div class="custom pull-left">
                 
                 <button onClick="return decreaseQty({{ $pro['id'] }},'qty1-')" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                  <input type="text" name="qty" id="qty1-{{ $pro['id'] }}"  value="1" title="Quantity:" class="input-text qty" style="width:40px;">
                   <button onClick="return increaseQty({{ $pro['id'] }},'qty1-')" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                </div>
              </div>

				  <div class="actions">
					<button onClick="return addToCart({!! $pro['id'] !!},{!! $pro['price'] !!});" class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
					<span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> </span> </div>
				</div>
			  </li>	
			  <?php $count++;?>
			   @endforeach
			  
			</ol>
		  </div>
		  </form>
        </article>
        </div>
        <!--	///*///======    End article  ========= //*/// --> 
      </div>
      <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated"> 

        <!--side-nav-categories-->
        <div class="block block-layered-nav">
          <div class="block-title"> Shop By </div>
          <div class="block-content">
            <p class="block-subtitle">Shopping Options</p>
            <dl id="narrow-by-list">
              <dt class="odd">Category</dt>
              <dd class="odd">
                <ol>
                  @foreach($shoppingOptions as $sp)
                    <li> <a href="{!! url('products/?parent-cat='.$sp->ParentSlug.'&child-cat='.$sp->ChildSlug) !!}"> {!! $sp->ChildName !!} <span class="count">({!! $sp->TotalProduct !!})</span> </a> </li>
                  @endforeach
                </ol>
              </dd>
              <dt class="last odd">Price</dt>
              <dd class="last odd">
                <ol>
                  <input id="range_1" type="text" name="range_1" value="">
                </ol>
              </dd>
            </dl>
          </div>
        </div>
        <div class="custom-slider">
          <div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active">
				{!! Html::image('web/images/slide3.jpg') !!}
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="product-detail.html">50% OFF</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a class="link" href="#">Buy Now</a></div>
                </div>
                <div class="item">{!! Html::image('web/images/slide2.jpg') !!}
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="product-detail.html">Hot collection</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="item">{!! Html::image('web/images/slide1.jpg') !!}
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="product-detail.html">Summer collection</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="sr-only">Next</span> </a></div>
          </div>
        </div>
       <?php 
        if(count($cart)>0){
       ?>
        <div class="block block-list block-cart">
          <div class="block-title"> My Cart </div>
          <div class="block-content">
            <div class="summary">
              <p class="amount">There is <a href="#">{!! $cart['cartItems'] !!} item</a> in your cart.</p>
              <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">RS.{!! $cart['totalPrice'] !!}</span> </p>
            </div>
            <div class="ajax-checkout">
              <button type="button" title="Checkout" class="button button-checkout" onClick="#"> <span>Checkout</span> </button>
            </div>
            <p class="block-subtitle">Recently added item(s)</p>
            <ul id="cart-sidebar" class="mini-products-list">
              @foreach($cart['cartItem'] as $cart)
                <li class="item" id="{!! $cart['cart_id'] !!}">
                <div class="item-inner"> <a href="#" class="product-image">
                {!! Html::image($cart['image'],$cart['name'],array('width'=>'80')) !!}

                </a>
                  <div class="product-details">
                    <div class="access"> <a class="btn-remove1" onClick="return removeItemFromCart({!! $cart['cart_id'] !!});">Remove</a> 
                    <a href="" title="Edit item" class="btn-edit">
                    <i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                    <!--access--> 
                    <p class="product-name"><a href="#">{!! $cart['name'] !!}</a></p>
                    <strong>{!! $cart['qty'] !!}</strong> x <span class="price">
                  RS.{!! $cart['price'] !!}</span>
                    
                  </div>
                  <!--product-details-bottoms--> 
                </div>
              </li>
              @endforeach
              
              
            </ul>
          </div>
        </div>
        <?php } ?>
        
        <div class="block block-poll">
          <div class="block-title"> Community Poll </div>
          <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
            <div class="block-content">
              <p class="block-subtitle">What is your favorite color</p>
              <ul id="poll-answers">
                <li class="odd">
                  <input type="radio" name="vote" class="radio poll_vote" id="vote_1" value="1">
                  <span class="label">
                  <label for="vote_1">Green</label>
                  </span> </li>
                <li class="even">
                  <input type="radio" name="vote" class="radio poll_vote" id="vote_2" value="2">
                  <span class="label">
                  <label for="vote_2">Red</label>
                  </span> </li>
                <li class="odd">
                  <input type="radio" name="vote" class="radio poll_vote" id="vote_3" value="3">
                  <span class="label">
                  <label for="vote_3">Black</label>
                  </span> </li>
                <li class="last even">
                  <input type="radio" name="vote" class="radio poll_vote" id="vote_4" value="4">
                  <span class="label">
                  <label for="vote_4">Magenta</label>
                  </span> </li>
              </ul>              
              <div class="actions">
                <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
              </div>
            </div>
          </form>
        </div>
       <div class="hot-banner">{!! Html::image('web/images/hot-trends-banner.jpg','') !!}
	  </div>  
      </aside>
      <!--col-right sidebar--> 
    </div>
    <!--row--> 
  </div>
  <!--container--> 
</section>
<!--main-container col2-left-layout--> 


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
@include('web.popup.addToCartResponse')
@include('web.popup.newsletter')
@include('web.popup.supplier')
       

<!-- JavaScript -->
{!! Html::script('web/js/jquery.min.js') !!}

{!! Html::script('web/js/bootstrap.min.js') !!}
{!! Html::script('web/js/parallax.js') !!}
{!! Html::script('web/js/revslider.js') !!}
{!! Html::script('web/js/common.js') !!}
{!! Html::script('web/js/function.js') !!}
{!! Html::script('web/js/jquery.bxslider.min.js') !!}
{!! Html::script('web/js/owl.carousel.min.js') !!}
{!! Html::script('web/js/jquery.mobile-menu.min.js') !!}
{!! Html::script('admintheme/plugins/ionslider/ion.rangeSlider.min.js') !!}
{!! Html::script('admintheme/plugins/bootstrap-slider/bootstrap-slider.js') !!}


<script type="text/javascript">
        jQuery(document).ready(function(){
			/*
			*	Magic With local Storage Start
 			*	Store Initial product data into local storage for further filter
			*/
			var product = JSON.stringify(<?php echo json_encode($product);?>);
			localStorage.setItem("product",product);
			
			var localData = JSON.parse(localStorage.getItem('product'));
			
			
			function sortResults(prop, asc, length){
				people = localData.sort(function(a, b) {
					if (asc) return (a[prop] > b[prop]) ? 1 : ((a[prop] < b[prop]) ? -1 : 0);
					else return (b[prop] > a[prop]) ? 1 : ((b[prop] < a[prop]) ? -1 : 0);
				});
				showResults(length);
			}
			function showResults(length){
				var html ="";
				var count=0;
				for(var x in localData){
					if(count<length){
						if (jQuery(".button-grid").hasClass( "button-active" )){
							html +='<li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6" id='+localData[x].id+'><div class="item-inner"><div class="item-img"><div class="item-img-info"><a href="{!! url('/product/details/') !!}/'+localData[x].id+'" title="Retis lapen casen" class="product-image"><img src="http://localhost/foodwaves/imageupload/server/product/files/'+localData[x].image+'"></a><div class="item-box-hover"><div class="box-inner"><div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div><div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div></div></div></div></div><div class="item-info"><div class="info-inner"><div class="item-title"><a href="{!! url('/product/details/') !!}/'+localData[x].id+'" title="Retis lapen casen">'+localData[x].name+'</a></div><div class="item-content"><div class="rating"><div class="ratings"><div class="rating-box"><div class="rating" style="width:80%"></div></div><p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p></div></div><div class="item-price"><div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">'+localData[x].price+'</span> </span> </div></div><div class="add_cart"><button class="button btn-cart" type="button" onClick="return addToCart('+localData[x].id+','+localData[x].price+');"><span>Add to Cart</span></button></div></div></div></div></div></li>';
						}else{
							html +='<li class="item"><div class="product-image"> <a href="{!! url('/product/details/') !!}/'+localData[x].id+'" title="HTC Rhyme Sense"><img src="http://localhost/foodwaves/imageupload/server/product/files/'+localData
							[x].image+'" class="small-image" alt=""></a> </div><div class="product-shop"><h2 class="product-name"><a href="{!! url('/product/details/') !!}/'+localData[x].id+'" title="HTC Rhyme Sense">'+localData[x].name+'</a></h2><div class="ratings"><div class="rating-box"><div style="width:50%" class="rating"></div></div><p class="rating-links"><a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p></div><div class="desc std">'+localData[x].short_description+'</div><div class="price-box"><p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> RS.'+localData[x].price+'</span> </p></div><div class="actions"><button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button><span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div></div></li>';
						}
					}
					count++;
				}
				if (jQuery(".button-grid").hasClass( "button-active" )){
					jQuery(".products-grid").html(html);	
				}else{
					jQuery(".products-list").html(html);
				}
				
			}
			
			jQuery(".productSort ul li").click(function(){
				var sortLi = jQuery(this).attr("sort-key");
				jQuery('.activeSortText').html(sortLi);
				if (jQuery('.sortByOrder').hasClass("button-desc" )){
					var sortOrder =false;	
				}else{
					var sortOrder =true;
				}
				var length =10;
				sortResults(sortLi, sortOrder, length);
				
			});
			
			jQuery('.sortByOrder').click(function(){
				var sortLi = jQuery(".productSort ul li").attr("sort-key");
				if (jQuery('.sortByOrder').hasClass( "button-desc" )){
					var sortOrder =false;	
				}else{
					var sortOrder =true;
				}
				var length =10;
				sortResults(sortLi, sortOrder, length);
			});
			
			jQuery('.productLimit ul li').click(function(){
				var sortLi = jQuery(".activeSortText").text();
				var sortBy = sortLi.toLowerCase();
				if (jQuery('.sortByOrder').hasClass( "button-desc" )){
					var sortOrder =false;	
				}else{
					var sortOrder =true;
				}
				var length = jQuery(this).attr("data-limit");
				
				jQuery('.activeSortLimit').html(length);
				sortResults(sortBy, sortOrder, length);
			})
			/*
			*	End 
			*/
			
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
/* ION SLIDER */
        jQuery("#range_1").ionRangeSlider({
          min: 1,
          max: 5000,
          from: 1,
          to: 1000,
          type: 'double',
          step: 1,
          prefix: "Rs.",
          prettify: false,
          hasGrid: false,
          onStart: function (data) {
              //console.log("onStart");
          },
          onChange: function (data) {
              //console.log("onChange");
          },
          onFinish: function (data) {
              console.log("onFinish");
              var priceRange = jQuery('#range_1').val(),
                  priceRangeSplit= priceRange.split(";"); 

              console.log(priceRangeSplit);
          },
          onUpdate: function (data) {
              //console.log("onUpdate");
          }
        });
        });
        </script>

</body>
</html>
