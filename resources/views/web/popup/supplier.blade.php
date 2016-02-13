<!---Supplier Quick View---------->
<div id="fade2" style="display: none;"></div>  
<div class="popup2" style="display: none;">
 
  <div class="quick-view-box">


{!! Html::Image('web/images/close-icon.png','close',array('onClick'=>'HideMe()','class'=>'x'))!!}

   <div class="product-view product-essential container">
    <div class="row">
      
      <form action="" method="post" id="product_addtocart_form">
      <!--End For version 1, 2, 6 -->
      <!-- For version 3 -->
      <div class="product-img-box col-sm-6 col-xs-12">
        <div class="new-label new-top-left"> New </div>
        <div class="product-image">
        <div class="large-image"> <a href="{!! url() !!}/products-images/p15.jpg" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> 
        {!! Html::Image('web/products-images/p15.jpg')!!}
         </a> </div>
        
        </div>
        <!-- end: more-images -->
      </div>
      <!--End For version 1,2,6-->
      <!-- For version 3 -->
      <div class="product-shop col-sm-6 col-xs-12">
      
        <div class="product-name">
        <h1 itemprop="name">RETIS LAPEN CASEN</h1>
        </div>
        <!--product-name-->
        <span itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
        <div class="rating">
        <div class="ratings">
          <div class="rating-box">
          <div class="rating" style="width:50%"></div>
          </div>
          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
        </div>
        </div>
        </span>
        
        <!--price-block-->
        <div class="short-description">
        <h2>Quick Overview</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.  </p>
        </div>
       
        <!--add-to-box-->
        <!-- thm-mart Social Share-->
        <div class="social">
        <ul class="link">
          <li class="fb"> <a href="http://www.facebook.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
          <li class="linkedin"> <a href="http://www.linkedin.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
          <li class="tw"> <a href="http://twitter.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
          <li class="pintrest"> <a href="http://pinterest.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
          <li class="googleplus"> <a href="https://plus.google.com/" rel="nofollow" target="_blank" style="text-decoration:none;"> </a> </li>
        </ul>
        </div>
        <!-- thm-mart Social Share Close-->
      </div>
      <!--product-shop-->
      <!--Detail page static block for version 3-->
      </form>
    </div>
    </div> 
  </div> 
</div>