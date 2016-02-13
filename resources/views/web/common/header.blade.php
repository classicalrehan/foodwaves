<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Foodwaves</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
<meta name="description" content="Default Description">
<meta name="keywords" content="fashion, store, E-commerce">
<meta name="author" content="*">
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">
<!-- CSS Style -->

<!-- CSS Style -->
{!! Html::style('web/stylesheet/bootstrap.min.css') !!}
{!! Html::style('web/stylesheet/font-awesome.css') !!}
{!! Html::style('web/stylesheet/revslider.css') !!}
{!! Html::style('web/stylesheet/owl.carousel.css') !!}
{!! Html::style('web/stylesheet/owl.theme.css') !!}
{!! Html::style('web/stylesheet/jquery.bxslider.css') !!}
{!! Html::style('web/stylesheet/jquery.mobile-menu.css') !!}
{!! Html::style('web/stylesheet/style.css') !!}
{!! Html::style('web/stylesheet/responsive.css') !!}
{!! Html::style('web/stylesheet/flexslider.css') !!}

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="page">
  <header>
  <div class="header-banner">
    <div class="assetBlock">
      <div style="height: 20px; overflow: hidden;" id="slideshow">
        <p style="display: block;">HOT DAYS! - <span>50%</span> GET READY FOR SUMMER! &gt;</p>
        <p style="display: none;">SALE UP TO <span>40%</span> HURRY LIMITED OFFER! &gt;</p>
      </div>
     </div>
  </div>
  <div id="header">
    <div class="header-container container">
   <div class="row">
      <div class="logo"> <a href="{!! url('/') !!}" title="Foodwaves">
        <div>
		{!! Html::image('web/images/logo.png','Foodwaves')!!}
		</div>
        </a> </div>
      <div class="fl-nav-menu">
       
          <nav>
            <div class="mm-toggle-wrap">
              <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
            </div>
            <div class="nav-inner">
              <!-- BEGIN NAV -->
              <ul id="nav" class="hidden-xs">
                <li id="nav-home" class="level0 parent drop-menu">
					<a class="level-top active" href="{!! url('/') !!}"><span>Home</span></a>
                </li>

                <li class="mega-menu"> <a class="level-top" href="#"><span>Breakfast</span></a>
                  <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                    <div class="container">
                      <div class="level0-wrapper2">
                        <div class="col-1">
                          <div class="nav-block nav-block-center">
                            <!--mega menu-->
                            <ul class="level0">
                              <li class="level3 nav-6-1 parent item"> <a href="{!! url('products/?parent-cat=breakfast&child-cat=paratha') !!}"><span>Paratha</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="{!! url('products/?parent-cat=breakfast&child-cat=paratha&product=aaloo-paratha') !!}"><span>Aaloo Paratha
</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="{!! url('products/?parent-cat=breakfast&child-cat=paratha&product=aaloo-pyaj-paratha') !!}"><span>Aaloo Pyaj Paratha</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="{!! url('products/?parent-cat=breakfast&child-cat=paratha&product=mix-paratha') !!}"><span>Mix Paratha</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="{!! url('products/?parent-cat=breakfast&child-cat=paratha&product=onion-paratha') !!}"><span>Onion Paratha</span></a> </li>
                                  <li class="level2 nav-6-1-1"> <a href="{!! url('products/?parent-cat=breakfast&child-cat=paratha&product=moooli-paratha') !!}"><span>Mooli Partah</span></a> </li>
                                  <li class="level2 nav-6-1-1"> <a href="{!! url('products/?parent-cat=breakfast&child-cat=paratha&product=gobi-paratha') !!}"><span>Gobhi Partha</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="{!! url('products/?parent-cat=breakfast&child-cat=sandwiche') !!}"><span>Sandwich</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Potaoto Sandwich</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Cheese Sandwich</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Veg Grilled Sandwich</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                             
                            </ul>
                            <!--level0-->
                          </div>
                          <!--nav-block nav-block-center-->
                        </div>
                        <!--col-1-->
                        <div class="col-2">
                          <div class="menu_image"><a title="" href="grid.html">
              						  {!! Html::image('web/images/menu-bag.png','menu_image')!!}
              						 </a></div>
                         
                        </div>
                        <!--col-2-->
                      </div>
                      <!--level0-wrapper2-->
                    </div>
                    <!--container-->
                  </div>
                  <!--level0-wrapper dropdown-6col-->
                  <!--mega menu-->
                </li>
                <li class="mega-menu"> <a class="level-top" href="grid.html"><span>Lunch</span></a>
                  <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                    <div class="container">
                      <div class="level0-wrapper2">
                        <div class="nav-block nav-block-center">
                          <!--mega menu-->
                          <ul class="level0">
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Dal</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Yellow Dal Fry</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dal Makhani</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dal Tadka</span></a> </li>
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Rice</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Plane Rice</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Zera Rice</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fired Rice</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Veg Pulao</span></a> </li>
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Veg Biryani</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Vegitable Soups</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>French Onion Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Leek Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Minestrone</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Spring Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Bean Soups</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bouneschlupp</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Jókai Bean Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Kwati Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Senate bean</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Bread Soups</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Tomato Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Manchow Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sweet Corn Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Shorba Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Chinese Soups</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Hot & Sour</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Noodle Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Corn Crab Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sago Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                          </ul>
                          <!--level0-->
                        </div>
                        <!--nav-block nav-block-center-->
                        <div class="nav-add">
                          <div class="push_item">
                            <div class="push_img"><a href="#">
							{!! Html::image('web/images/menu-img2.jpg','menu_image')!!}
							</a></div>
                           
                          </div>
                          <div class="push_item">
                           <div class="push_img"><a href="#">
						   {!! Html::image('web/images/menu-img2.jpg','menu_image')!!}
						   </a></div>
                           
                          </div>
                          <div class="push_item">
                           <div class="push_img"><a href="#">
						   {!! Html::image('web/images/menu-img3.jpg','menu_image')!!}
						   </a></div>
                     
                          </div>
                          <div class="push_item push_item_last">
                          <div class="push_img"><a href="#">
						  {!! Html::image('web/images/menu-img4.jpg','menu_image')!!}
						  </a></div>
                      
                          </div>
                        </div>
                      </div>
                      <!--level0-wrapper2-->
                    </div>
                    <!--container-->
                  </div>
                  <!--level0-wrapper dropdown-6col-->
                  <!--mega menu-->
                </li>
                <li class="mega-menu"> <a class="level-top" href="grid.html"><span>Dinner</span></a>
                  <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                    <div class="container">
                      <div class="level0-wrapper2">
                        <div class="nav-block nav-block-center">
                          <!--mega menu-->
                          
                          <ul class="level0">
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Dal</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Yellow Dal Fry</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dal Makhani</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dal Tadka</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Rice</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Plane Rice</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Zera Rice</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fired Rice</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Veg Pulao</span></a> </li>
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Veg Biryani</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                           
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Panner</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Shahi Panner</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span> Palak Panner</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Panner Pasanda</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Panner Lavabdar</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                          </ul>
                          <!--level0-->
                        </div>
                        <!--nav-block nav-block-center-->
                      </div>
                      <!--level0-wrapper2-->
                    </div>
                    <!--container-->
                  </div>
                  <!--level0-wrapper dropdown-6col-->
                  <!--mega menu-->
                </li>                
                <li class="mega-menu"> <a class="level-top" href="grid.html"><span>Snacks</span></a> 
                  <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                    <div class="container">
                      <div class="level0-wrapper2">
                        <div class="nav-block nav-block-center">
                          <!--mega menu-->
                          
                          <ul class="level0">
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Paties</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Yellow Dal Fry</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dal Makhani</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dal Tadka</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Kulche</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Plane Rice</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Zera Rice</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fired Rice</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Veg Pulao</span></a> </li>
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Veg Biryani</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                           
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Pakora</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Shahi Panner</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span> Palak Panner</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Panner Pasanda</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Panner Lavabdar</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Samosha</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Shahi Panner</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span> Palak Panner</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Panner Pasanda</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Panner Lavabdar</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Kachori</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Shahi Panner</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span> Palak Panner</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Panner Pasanda</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Panner Lavabdar</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Pakora</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Shahi Panner</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span> Palak Panner</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Panner Pasanda</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Panner Lavabdar</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li> 
                            <!--level3 nav-6-1 parent item-->
                          </ul>
                          <!--level0-->
                        </div>
                        <!--nav-block nav-block-center-->
                      </div>
                      <!--level0-wrapper2-->
                    </div>
                    <!--container-->
                  </div>
                  <!--level0-wrapper dropdown-6col-->
                  <!--mega menu-->
                </li>
                <li class="level0 parent drop-menu"><a href="#"><span>Chinese</span> </a> 
                <!--sub sub category-->
                  <ul class="level1">
                  <li class="level1 first"><a href="grid.html"><span>Product Grid</span></a></li>
                  <li class="level1 nav-10-2"> <a href="list.html"> <span>Product List</span> </a> </li>
                  <li class="level1 nav-10-3"> <a href="product-detail.html"> <span>Product Detail</span> </a> </li>
                  <li class="level1 nav-10-4"> <a href="shopping-cart.html"> <span>Cart Page</span> </a> </li>
                  <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a> 
                  <!--sub sub category-->
                  <ul class="level2 right-sub">
                    <li class="level2 nav-2-1-1 first"><a href="checkout-method.html"><span>Method</span></a></li>
                    <li class="level2 nav-2-1-5 last"><a href="checkout-billing-info.html"><span>Billing Info</span></a></li>
                  </ul>
                  <!--sub sub category--> 
                  </li>
                  <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                  <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                  <li class="level1"> <a href="multiple-addresses.html"> <span>Multiple Addresses</span> </a> </li>
                  <li class="level1"> <a href="about-us.html"> <span>About us</span> </a> </li>
                  <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a> 
                  <!--sub sub category-->
                  <ul class="level2 right-sub">
                    <li class="level2 nav-2-1-1 first"><a href="blog-detail.html"><span>Blog Detail</span></a></li>
                  </ul>
                  <!--sub sub category--> 
                  </li>
                  <li class="level1"><a href="contact-us.html"><span>Contact us</span></a> </li>
                  <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                  <li class="level1"><a href="login.html"><span>Login Page</span></a> </li>
                  <li class="level1"><a href="quickview.html"><span>Quick View</span></a> </li>
                  <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>                  
                  </ul>
                </li>
                <li class="fl-custom-tabmenulink mega-menu"> <a href="#" class="level-top"> <span>Soups</span> </a>
                  <div class="level0-wrapper fl-custom-tabmenu" style="left: 0px; display: none;">
                    <div class="container">
                      <div class="header-nav-dropdown-wrapper clearer">
                        <div class="grid12-3">
                         
                          <div>
						  {!! Html::image('web/images/custom-img1.jpg','Flavours Store')!!}
						  </div>
                           <h4 class="heading">SALE UP TO 30% OFF</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="grid12-3">
                         
                          <div>
						  {!! Html::image('web/images/custom-img3.jpg','Flavours Store')!!}
						  </div>
                           <h4 class="heading">SALE UP TO 30% OFF</h4>
                          <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                        </div>
                        <div class="grid12-3">
                          <div>
						  {!! Html::image('web/images/custom-img3.jpg','Flavours Store')!!}
						  </div>
                           <h4 class="heading">SALE UP TO 30% OFF</h4>
                          <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                        </div>
                        <div class="grid12-3">
                          <div>
						  {!! Html::image('web/images/custom-img4.jpg','Flavours Store')!!}
						  </div>
                          <h4 class="heading">SALE UP TO 30% OFF</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="fl-custom-tabmenulink mega-menu"> <a href="#" class="level-top"> <span>Sweets</span> </a>
                  <div class="level0-wrapper fl-custom-tabmenu" style="left: 0px; display: none;">
                    <div class="container">
                      <div class="header-nav-dropdown-wrapper clearer">
                        <div class="grid12-3">
                         
                          <div>
              {!! Html::image('web/images/custom-img1.jpg','Flavours Store')!!}
              </div>
                           <h4 class="heading">SALE UP TO 30% OFF</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="grid12-3">
                         
                          <div>
              {!! Html::image('web/images/custom-img3.jpg','Flavours Store')!!}
              </div>
                           <h4 class="heading">SALE UP TO 30% OFF</h4>
                          <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                        </div>
                        <div class="grid12-3">
                          <div>
              {!! Html::image('web/images/custom-img3.jpg','Flavours Store')!!}
              </div>
                           <h4 class="heading">SALE UP TO 30% OFF</h4>
                          <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                        </div>
                        <div class="grid12-3">
                          <div>
              {!! Html::image('web/images/custom-img4.jpg','Flavours Store')!!}
              </div>
                          <h4 class="heading">SALE UP TO 30% OFF</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <!--nav-->
              </div>
              </nav>
        </div>
        <!--row-->
      </div>
      <div class="fl-header-right">
        <div class="fl-links">
          <div class="no-js"> <a title="Company" class="clicker"></a>
            <div class="fl-nav-links">
              <div class="language-currency">
                <div class="fl-language">
                  <!--<ul class="lang">
                    <li><a href="#"> 
					{!! Html::image('web/images/francais.png"','French')!!}
					<img src="images/english.png" alt="English"> <span>English</span> </a></li>
                    <li><a href="#"> <img src="images/francais.png" alt="French"> <span>French</span> </a></li>
                    <li><a href="#"> <img src="images/german.png" alt="German"> <span>German</span> </a></li>
                  </ul>-->
                </div>
                <!--fl-language-->
                <!-- END For version 1,2,3,4,6 -->
                <!-- For version 1,2,3,4,6 -->
                <!--<div class="fl-currency">
                  <ul class="currencies_list">
                    <li><a href="#" title="EGP"> £</a></li>
                    <li><a href="#" title="EUR"> €</a></li>
                    <li><a href="#" title="USD"> $</a></li>
                  </ul>
                </div>-->
                <!--fl-currency-->
                <!-- END For version 1,2,3,4,6 -->
              </div>
              <ul class="links">
                <li><a href="dashboard.html" title="My Account">My Account</a></li>
                <li><a href="wishlist.html" title="Wishlist">Wishlist</a></li>
                <li><a href="{!! url('/checkout') !!}" title="Checkout">Checkout</a></li>
                <!-- <li><a href="blog.html" title="Blog"><span>Blog</span></a></li> -->
                @if(!Auth::user())
                <li class="last"><a href="{!! url('/customer/login') !!}" title="Login"><span>Login</span></a></li>
                <li class="last"><a href="{!! url('/customer/registration') !!}" title="Login"><span>Registration</span></a></li>
                @else
                <li class="last"><a href="{!! url('/logout') !!}" title="Login"><span>Logout</span></a></li>
                @endif
              </ul>
            </div>
          </div>
        </div>
        <div class="fl-cart-contain">
          <div class="mini-cart">
            <div class="basket"> <a href="{!! url('checkout') !!}"><span id="cartItemTotal"> {!! $cart['cartItemCount'] !!} </span></a> </div>
            <div class="fl-mini-cart-content" style="display: none;">
              <div class="block-subtitle" >
                <div class="top-subtotal" style="float:none;">{!! $cart['cartItems'] !!} items, <span class="price">RS.{!! $cart['totalPrice'] !!} </span> </div>
                <!--top-subtotal-->
                <!--pull-right-->
              </div>
              <!--block-subtitle-->
              <ul class="mini-products-list" id="cart-sidebar">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                @foreach($cart['cartItem'] as $cart)
					<li class="item first" id="{!! $cart['cart_id'] !!}">
					  <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l">

            <img src="{!! url('imageupload/server/product/files/') !!}{!! $cart['image'] !!}"/>
					  </a>
						<div class="product-details">
						  <div class="access"><a class="btn-remove1" onClick="return removeItemFromCart({!! $cart['cart_id'] !!});" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
						  <!--access-->
						  <p class="product-name"><a href="{!! url('product/details/'.$cart['id']) !!}">{!! $cart['name'] !!}</a></p>
              <strong>{!! $cart['qty'] !!}</strong> x <span class="price">RS.{!! $cart['price'] !!}</span>
						  
						</div>
					  </div>
					</li>
				@endforeach
              </ul>
              <?php

                if(@$cart['qty']>0){
                  ?>
                  <div class="actions">
                    <button class="btn-checkout" title="Checkout" type="button" onClick="window.location='{!! url('checkout') !!}';"><span>Checkout</span></button>
                  </div>
                  <?php
                }else{
                  ?>
                  <div class="actions">no items in cart!</div>
                  <?php
                }
              ?>
              
              <!--actions-->
            </div>
            <!--fl-mini-cart-content-->
          </div>
        </div>
        <!--mini-cart-->
        <div class="collapse navbar-collapse">
              <form class="navbar-form" role="search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <span class="input-group-btn">
                  <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span class="sr-only">Search</span> </span> </button>
                  </span> </div>
              </form>
            </div>
        <!--links-->
      </div>
    </div>
  </div>  
  </header>