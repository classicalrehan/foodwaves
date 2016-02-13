
@include('web.common.header')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
<h2>Order Details</h2>
</div>
        </div>
      </div>
    </div>
  </div>  
  
  <!-- BEGIN Main Container col2-right -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">
          <div class="my-account">
            
            <!--page-title--> 
            <!-- BEGIN DASHBOARD-->
            <div class="dashboard">
              <div class="welcome-msg">
                <p class="hello"><strong> 
                ORDER #{!! $orders[0]->id !!} - {!! $orders[0]->status !!}
              </strong></p>
              </div>
              <div class="recent-orders">
                <h2>About This Order: Order Information</h2>
                <hr/>
                <h4>ORDER DATE: FEBRUARY 4, 2016</h4>
                <div class="table-responsive">
                  <table class="data-table table-striped" id="my-orders-table">
                    <colgroup>
                    
                    <col width="20%">
                    <col width="50%">
                    <col width="30%">
                    </colgroup>
                   
                    <tbody>
                        <tr>
                          <td>SHIPPING ADDRESS</td>
                          <td>mohd rihan ansari
                              Naukri
                              D-92
                              Delhi, Delhi, 110096
                              India
                              T: 1234567890</td>
                          <td>SHIPPING METHOD

Flat Rate - Fixed</td>
                        </tr>
                    </tbody>
                  </table>
                  </div>   
               </div> 
              <div class="recent-orders">
                <h2>Items Ordered</h2>
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
                          if(count($orderDetails)>0){
                       ?>   
                       @foreach($orderDetails as $orderDetail)
                          <tr class="even" id="">
                            <td>{!! $orderDetail->name !!}</td>
                            <td><span class="nobr">RS.{!! $orderDetail->price !!}</span></td>
                            <td>{!! $orderDetail->qty !!}</td>
                            <td><span class="price">RS.{!! $orderDetail->qty * $orderDetail->price !!}</span></td>
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
                <!--table-responsive-->                 
              </div>
              
          </div>
        </section>
        <!--col-main col-sm-9 wow bounceInUp animated-->
        <aside class="col-right sidebar col-sm-3 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">
          <div class="block block-account">
            <div class="block-title"> My Account </div>
            <div class="block-content">
              <ul>
                <li class="current"><a>Account Dashboard</a></li>
                <li><a href="{!! url('order/history') !!}"><span> My Orders</span></a></li>
              </ul>
            </div>
            <!--block-content--> 
          </div>
          <!--block block-account-->
          
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
                    {!! Html::image('web/images/slide3.jpg','slide',array('id'=>'slide3'))!!}
                    
                    <div class="carousel-caption">
                      <h3><a title=" Sample Product" href="#">50% OFF</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      <a class="link" href="#">Buy Now</a></div>
                  </div>
                  <div class="item">
                    {!! Html::image('web/images/slide1.jpg','slide',array('id'=>'slide1'))!!}
                    
                    <div class="carousel-caption">
                      <h3><a title=" Sample Product" href="#">Hot collection</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    {!! Html::image('web/images/slide2.jpg','slide',array('id'=>'slide2'))!!}
                    
                    <div class="carousel-caption">
                      <h3><a title=" Sample Product" href="#">Summer collection</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#" data-slide="next"> <span class="sr-only">Next</span> </a></div>
            </div>
          </div>
        </aside>
        <!--col-right sidebar col-sm-3 wow bounceInUp animated--> 
      </div>
      <!--row--> 
    </div>
    <!--main container--> 
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
@include('web.common.footer');