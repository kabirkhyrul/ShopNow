 @include('layouts.header')

 <section id="content">

        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				
        				<div class="row slider-position">
                            <div class="md-margin"></div><!-- space -->

                            <div class="col-md-3 col-sm-4 col-xs-12 sidebar">

                                <div class="widget reversebg">
                                    <h3>Categories</h3>
                                    
                                    <div class="list-group list-group-brand list-group-accordion">
                                        <a href="#" class="list-group-item">Fashion
                                            <span class="filter-icon filter-icon-fashion"></span>
                                        </a>
                                        <a href="#" class="list-group-item">Furniture
                                            <span class="filter-icon filter-icon-furniture"></span>
                                        </a>
                                        <a href="#" class="list-group-item">Electronics
                                            <span class="filter-icon filter-icon-electronics"></span>
                                        </a>
                                        <a href="#" class="list-group-item">Gifts
                                            <span class="filter-icon filter-icon-gifts"></span>
                                        </a>
                                        <a href="#" class="list-group-item">Books
                                            <span class="filter-icon filter-icon-books"></span>
                                        </a>
                                        <a href="#" class="list-group-item">Music
                                            <span class="filter-icon filter-icon-music"></span>
                                        </a>
                                        <a href="#" class="list-group-item">Sport &amp; Tourism
                                            <span class="filter-icon filter-icon-sport"></span>
                                        </a>
                                        <a href="#" class="list-group-item">Games
                                            <span class="filter-icon filter-icon-games"></span>
                                        </a>
                                    </div><!-- End .list-group -->
                                </div>

                                <div class="widget reversebg">
                                    <h3>Brands</h3>
                                    
                                    <div class="list-group list-group-brand">
                                        <a href="#" class="list-group-item">Armani</a>
                                        <a href="#" class="list-group-item">Bulgari</a>
                                        <a href="#" class="list-group-item">Christion Dior</a>
                                        <a href="#" class="list-group-item">Dolce &amp; Gabbana</a>
                                        <a href="#" class="list-group-item">Fendi</a>
                                        <a href="#" class="list-group-item">Givenchy</a>
                                        <a href="#" class="list-group-item">Donna Karan</a>
                                    </div><!-- End .list-group -->
                                </div>

                                <div class="widget subscribe">
                                    <h3>BE THE FIRST TO KNOW</h3>
                                    <p> Get all the latest information on Events, Sales and Offers. Sign up for the Venedor store newsletter today.</p>
                                    <form action="#" id="subscribe-form">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email address">
                                        </div>
                                        <input type="submit" value="SUBMIT" class="btn btn-custom">
                                    </form>
                                </div>

                                <div class="widget testimonials">
                                    <h3>Testimonials</h3>
                                    
                                    <div class="testimonials-slider flexslider sidebarslider">
                                        <ul class="testimonials-list clearfix">
                                            <li>
                                                <div class="testimonial-details">
                                                <header>Best Service!</header>
                                                Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti. 
                                                </div><!-- End .testimonial-details -->
                                                <figure class="clearfix">
                                                <img src="{{asset('frontend/images/testimonials/anna.jpg')}}" alt="Computer Ceo">
                                                    <figcaption>
                                                        <a href="#">Anna Retallic</a>
                                                        <span>12.05.2013</span>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <div class="testimonial-details">
                                                <header>Cool Style!</header>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt iure quisquam necessitatibus fugit! Nisi tempora reiciendis omnis error sapiente ipsam maiores dolorem maxime.
                                                </div><!-- End .testimonial-details -->
                                                <figure class="clearfix">
                                                    <img src="{{asset('frontend/images/testimonials/jake.jpg')}}" alt="Computer Ceo">
                                                    <figcaption>
                                                        <a href="#">Jake Suasoo</a>
                                                        <span>17.05.2013</span>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                        </ul>
                                    </div><!-- End .testimonials-slider -->
                                </div><!-- End .widget -->

                                <div class="widget popular">
                                    <h3>Popular</h3>
                                    
                                    <div class="related-slider flexslider sidebarslider">
                                        <ul class="related-list clearfix">
                                            <li>
                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{asset('frontend/images/products/thumbnails/item1.jpg')}}" alt="item1">
                                                    </figure>
                                                    <h5><a href="#">Jacket Suiting Blazer</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <div class="related-price">$40</div><!-- End .related-price -->
                                                </div><!-- End .related-product -->
                                                
                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{asset('frontend/images/products/thumbnails/item2.jpg')}}" alt="item2">
                                                    </figure>
                                                    <h5><a href="#">Gap Graphic Cuffed</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <div class="related-price">$17</div><!-- End .related-price -->
                                                </div><!-- End .related-product -->
                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{asset('frontend/images/products/thumbnails/item2.jpg')}}" alt="item2">
                                                    </figure>
                                                    <h5><a href="#">Gap Graphic Cuffed</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <div class="related-price">18$</div><!-- End .related-price -->
                                                </div><!-- End .related-product -->
                                                
                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{asset('frontend/images/products/thumbnails/item3.jpg')}}" alt="item3">
                                                    </figure>
                                                    <h5><a href="#">Women's Lauren Dress</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <div class="related-price">$30</div><!-- End .related-price -->
                                                </div><!-- End .related-product -->
                                            </li>
                                            <li>
                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{asset('frontend/images/products/thumbnails/item4.jpg')}}" alt="item4">
                                                    </figure>
                                                    <h5><a href="#">Swiss Mobile Phone</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="64"></div>
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <div class="related-price">$39</div><!-- End .related-price -->
                                                </div><!-- End .related-product -->
                                                
                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{asset('frontend/images/products/thumbnails/item5.jpg')}}" alt="item5">
                                                    </figure>
                                                    <h5><a href="#">Zwinzed HeadPhones</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="94"></div>
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <div class="related-price">$18.99</div><!-- End .related-price -->
                                                </div><!-- End .related-product -->

                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{asset('frontend/images/products/thumbnails/item1.jpg')}}" alt="item1">
                                                    </figure>
                                                    <h5><a href="#">Jacket Suiting Blazer</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <div class="related-price">$40</div><!-- End .related-price -->
                                                </div><!-- End .related-product -->
                                                
                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{asset('frontend/images/products/thumbnails/item6.jpg')}}" alt="item6">
                                                    </figure>
                                                    <h5><a href="#">Kless Man Suit</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="74"></div>
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <div class="related-price">$99</div><!-- End .related-price -->
                                                </div><!-- End .related-product -->
                                            </li>
                                            <li>
                                                
                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{asset('frontend/images/products/thumbnails/item2.jpg')}}" alt="item2">
                                                    </figure>
                                                    <h5><a href="#">Gap Graphic Cuffed</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <div class="related-price">$17</div><!-- End .related-price -->
                                                </div><!-- End .related-product -->
                                                
                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{asset('frontend/images/products/thumbnails/item4.jpg')}}" alt="item4">
                                                    </figure>
                                                    <h5><a href="#">Women's Lauren Dress</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <div class="related-price">$30</div><!-- End .related-price -->
                                                </div><!-- End .related-product -->
                                            </li>
                                        </ul>
                                    </div><!-- End .related-slider -->
                                </div>
                                
                                <div class="widget latest-posts">
                                    <h3>Recent Posts</h3>
                                    
                                    <div class="latest-posts-slider flexslider sidebarslider">
                                        <ul class="latest-posts-list clearfix">
                                            <li>
                                                <a href="single.html">
                                                    <figure class="latest-posts-media-container">
                                                        <img class="img-responsive" src="{{asset('frontend/images/blog/post1-small.jpg')}}" alt="lats post">
                                                    </figure>
                                                </a>
                                                <h4><a href="single.html">35% Discount on second purchase!</a></h4>
                                                <p>Sed blandit nulla nec nunc ullamcorper tristique. Mauris adipiscing cursus ante ultricies dictum sed lobortis.</p>
                                                <div class="latest-posts-meta-container clearfix">
                                                    <div class="pull-left">
                                                        <a href="#">Read More...</a>
                                                    </div><!-- End .pull-left -->
                                                    <div class="pull-right">
                                                        12.05.2013
                                                    </div><!-- End .pull-right -->
                                                </div><!-- End .latest-posts-meta-container -->
                                            </li>
                                            
                                            <li>
                                                <a href="single.html">
                                                    <figure class="latest-posts-media-container">
                                                        <img class="img-responsive" src="{{asset('frontend/images/blog/post2-small.jpg')}}" alt="lats post">
                                                    </figure>
                                                </a>
                                                <h4><a href="single.html">Free shipping for regular customers.</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque fuga officia in molestiae easint..</p>
                                                <div class="latest-posts-meta-container clearfix">
                                                    <div class="pull-left">
                                                        <a href="#">Read More...</a>
                                                    </div><!-- End .pull-left -->
                                                    <div class="pull-right">
                                                        10.05.2013
                                                    </div><!-- End .pull-right -->
                                                </div><!-- End .latest-posts-meta-container -->
                                            </li>
                                            
                                            <li>
                                                <a href="single.html">
                                                    <figure class="latest-posts-media-container">
                                                        <img class="img-responsive" src="{{asset('frontend/images/blog/post3-small.jpg')}}" alt="lats post">
                                                    </figure>
                                                </a>
                                                <h4><a href="#">New jeans on sales!</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque fuga officia in molestiae easint..</p>
                                                <div class="latest-posts-meta-container clearfix">
                                                    <div class="pull-left">
                                                        <a href="#">Read More...</a>
                                                    </div><!-- End .pull-left -->
                                                    <div class="pull-right">
                                                        8.05.2013
                                                    </div><!-- End .pull-right -->
                                                </div><!-- End .latest-posts-meta-container -->
                                            </li>
                                            
                                        </ul>
                                    </div><!-- End .latest-posts-slider -->
                                </div><!-- End .widget -->
                                
                                <div class="widget banner-slider-container">
                                    <div class="banner-slider flexslider">
                                        <ul class="banner-slider-list clearfix">
                                            <li><a href="#"><img src="{{asset('frontend/images/banner1.jpg')}}" alt="Banner 1"></a></li>
                                            <li><a href="#"><img src="{{asset('frontend/images/banner2.jpg')}}" alt="Banner 2"></a></li>
                                            <li><a href="#"><img src="{{asset('frontend/images/banner3.jpg')}}" alt="Banner 3"></a></li>
                                        </ul>
                                    </div>
                                </div><!-- End .widget -->
                                
                            </div><!-- End .col-md-3 -->
        					
        					<div class="col-md-9 col-sm-8 col-xs-12 main-content ">
                                <div id="slider-rev-container">
                                    <div id="slider-rev">
                                        <ul>
                                            <li data-transition="random"  data-saveperformance="on"  data-title="Easy to Customize">
                                                <img src="{{asset('frontend/images/revslider/dummy.png')}}"  alt="slidebg1" data-lazyload="{{asset('frontend/images/homeslider/slide1.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                                <div class="tp-caption rev-title lft ltt" data-x="530" data-y="140" data-speed="1100" data-start="300" data-endspeed="350">Enjoy Wide  Venedor <br>Posibilities
                                                </div>
                                                <div class="tp-caption lfr ltr" data-x="530" data-y="250" data-speed="1500" data-start="450"  data-endspeed="100" data-easing="Power3.easeIn">
                                                    <img src="{{asset('frontend/images/homeslider/bullet.png')}}" alt="bullet">
                                                </div>
                                                <div class="tp-caption rev-list lfr ltr" data-x="575" data-y="246" data-speed="1500" data-start="550" 
                                                data-easing="Power3.easeIn" data-endspeed="150">
                                                Easy to use &amp; customize
                                                </div>

                                                <div class="tp-caption lfr ltr" data-x="530" data-y="290" data-speed="1500" data-start="650"  data-endspeed="180" data-easing="Power3.easeIn">
                                                    <img src="{{asset('frontend/images/homeslider/bullet.png')}}" alt="bullet">
                                                </div>

                                                <div class="tp-caption rev-list lfr ltr" data-x="575" data-y="286" data-speed="1500" data-start="800" 
                                                data-easing="Power3.easeIn" data-endspeed="230">
                                                Responsive Layout
                                                </div>

                                                <div class="tp-caption lfr ltr" data-x="530" data-y="330" data-speed="1500" data-start="950"  data-endspeed="260" data-easing="Power3.easeIn">
                                                    <img src="{{asset('frontend/images/homeslider/bullet.png')}}" alt="bullet">
                                                </div>

                                                <div class="tp-caption rev-list lfr ltr" data-x="575" data-y="326" data-speed="1500" data-start="1100" 
                                                data-easing="Power3.easeIn" data-endspeed="290">
                                                Unlimited Color Skins
                                                </div>

                                                <div class="tp-caption lfr ltr" data-x="530" data-y="370" data-speed="1500" data-start="1200"  data-endspeed="320" data-easing="Power3.easeIn">
                                                    <img src="{{asset('frontend/images/homeslider/bullet.png')}}" alt="bullet">
                                                </div>

                                                <div class="tp-caption rev-list lfr ltr" data-x="575" data-y="366" data-speed="1500" data-start="1350" 
                                                data-easing="Power3.easeIn" data-endspeed="350">
                                                Retina Ready
                                                </div>
                                            </li>
 
                                            <li data-transition="random"  data-saveperformance="on"  data-title="The Next Big Thing">
                                                <img src="{{asset('frontend/images/revslider/dummy.png')}}"  alt="slidebg2" data-lazyload="{{asset('frontend/images/homeslider/slide2.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                                                <div class="tp-caption customin customout rev-price randomrotate randomrotateout" data-x="118" data-y="35" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="1500" data-endspeed="400">
                                                    $1150
                                                </div>

                                                <div class="tp-caption lfr ltr" data-x="-140" data-y="30" data-speed="1200" data-start="600" data-easing="Expo.easeOut">
                                                    <a href="#"><img src="{{asset('frontend/images/homeslider/slide2_2.png')}}" alt="slide1_1"></a>
                                                </div>

                                                <div class="tp-caption lfl ltl" data-x="220" data-y="40" data-speed="1200" data-start="600" data-easing="Expo.easeOut">
                                                    <a href="#"><img src="{{asset('frontend/images/homeslider/slide2_1.png')}}" alt="slide1_1"></a>
                                                </div>

                                                <div class="tp-caption rev-title2 skewfromleft stt" data-x="530" data-y="170" data-speed="800" data-start="900" 
                                                data-easing="Power3.easeIn" data-endspeed="300">The next big Thing...</div>
                                                 
                                                <div class="tp-caption rev-text sfl stl" data-x="530" data-y="215" data-speed="800" data-start="1300" data-easing="Power3.easeIn"
                                                data-endspeed="300">Take, view and share photos with<br> the 13MP camera and stunning <br> 5" display.</div>
                                                
                                                <div class="tp-caption sfb stb" data-x="530" data-y="315" data-speed="900" data-start="1600" data-easing="Power3.easeIn" data-endspeed="300">
                                                    <a href="#" class="btn btn-sm btn-custom-2">Learn More</a>
                                                </div>
                                            </li>

                                            <li data-transition="random"  data-saveperformance="on"  data-title="Powerful Template">
                                                
                                                <img src="{{asset('frontend/images/revslider/dummy.png')}}"  alt="slidebg3" data-lazyload="{{asset('frontend/images/homeslider/slide3.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                                <div class="tp-caption rev-title lfl ltl" data-x="40" data-y="140" data-speed="800" data-start="300" data-endspeed="350">Venedor Extremely <br>Powerful Template
                                                </div>

                                                <div class="tp-caption sfr stl" data-x="40" data-y="240" data-speed="1000" data-start="500"  data-endspeed="100">
                                                    <img src="{{asset('frontend/images/homeslider/bullet-reverse.png')}}" alt="bullet">
                                                </div>

                                                <div class="tp-caption rev-list sfr stl" data-x="85" data-y="236" data-speed="1000" data-start="650" 
                                                data-endspeed="150">
                                                9 Homepage Layout
                                                </div>

                                                <div class="tp-caption sfr stl" data-x="40" data-y="282" data-speed="1000" data-start="750"  data-endspeed="180">
                                                    <img src="{{asset('frontend/images/homeslider/bullet-reverse.png')}}" alt="bullet">
                                                </div>

                                                <div class="tp-caption rev-list sfr stl" data-x="85" data-y="278" data-speed="1000" data-start="900" 
                                                data-endspeed="230">
                                                Revolution Slider
                                                </div>

                                                <div class="tp-caption sfr stl" data-x="40" data-y="324" data-speed="1000" data-start="1000"  data-endspeed="260">
                                                    <img src="{{asset('frontend/images/homeslider/bullet-reverse.png')}}" alt="bullet">
                                                </div>

                                                <div class="tp-caption rev-list sfr stl" data-x="85" data-y="320" data-speed="1000" data-start="1150" 
                                                data-endspeed="290">
                                                Isotope Plugin
                                                </div>

                                                <div class="tp-caption sfr stl" data-x="40" data-y="366" data-speed="1000" data-start="1250"  data-endspeed="320">
                                                    <img src="{{asset('frontend/images/homeslider/bullet-reverse.png')}}" alt="bullet">
                                                </div>

                                                <div class="tp-caption rev-list sfr stl" data-x="85" data-y="362" data-speed="1000" data-start="1400" 
                                                data-endspeed="350">
                                                Unlimited Colors &amp; Fonts
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div><!-- End #slider-rev -->
                                </div><!-- End #slider-rev-container -->

                                <div class="md-margin"></div><!-- Space -->

                                <div class="row home-banners">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <a href="#"><img src="{{asset('frontend/images/middle-banner-1.png')}}" alt="Home Big Banner 1" class="img-responsive"></a>
                                    </div><!-- End .col-md-6 -->
                                    
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <a href="#"><img src="{{asset('frontend/images/middle-banner-2.png')}}" alt="Home Big Banner 2" class="img-responsive"></a>
                                    </div><!-- End .col-md-4 -->

                                </div><!-- End .home-banners -->

                                <div class="md-margin"></div><!-- space -->

        						<div class="main-tab-container carousel-wrapper">
                                    <ul id="products-tabs-list" class="tab-style-2 clearfix">
                                        <li class="active"><a href="#latest" data-toggle="tab">Latest</a></li>
                                        <li><a href="#featured" data-toggle="tab">Featured</a></li>
                                        <li><a href="#bestsellers" data-toggle="tab">Bestsellers</a></li>
                                        <li><a href="#special" data-toggle="tab">Special</a></li>
                                    </ul>
                                    
                                    <div id="products-tabs-content" class="tab-content row">
                                        <div class="tab-pane active tab-carousel-wrapper" id="latest">

                                            <div class="carousel-controls">
                                                <div id="latest-tab-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                                <div id="latest-tab-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                            </div><!-- End .carousel-controllers -->

                                            <div class="latest-tab-slider owl-carousel">
                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item2.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item2-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item1.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item1-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$120</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="86"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    7 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item4.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item4-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="old-price">$200</span>
                                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                            <span class="discount-rect">-20%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$200</span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="90"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    1 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item5.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item5-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="20"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item8.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item8-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$80</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="50"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item2.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item2-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$200</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="discount-rect">-10%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="74"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    9 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->
                                            </div><!-- End .latest-tab-slider -->
                                        
                                        </div><!-- End .tab-pane -->
                                        
                                        <div class="tab-pane tab-carousel-wrapper" id="featured">

                                            <div class="carousel-controls">
                                                <div id="featured-tab-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                                <div id="featured-tab-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                            </div><!-- End .carousel-controllers -->

                                            <div class="featured-tab-slider owl-carousel">
                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item7.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item7-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$80<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="55"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item6.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item6-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$50</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="86"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item5.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item5-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="old-price">$150</span>
                                                                <span class="item-price">$80<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            
                                                            <span class="discount-rect">-10%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item4.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item4-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$500</span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="60"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    4 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="20"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item10.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item10-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$80</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="50"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item2.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item2-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$200</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="discount-rect">-10%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="74"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    9 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->
                                            </div><!-- End .featured-tab-slider -->
                                        
                                        </div><!-- End .tab-pane -->

                                        <div class="tab-pane tab-carousel-wrapper" id="bestsellers">

                                            <div class="carousel-controls">
                                                <div id="bestsellers-tab-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                                <div id="bestsellers-tab-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                            </div><!-- End .carousel-controllers -->

                                            <div class="bestsellers-tab-slider owl-carousel">
                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item2.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item2-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$120</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="86"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    7 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item8.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item8-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="old-price">$200</span>
                                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                            <span class="discount-rect">-20%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item2.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item2-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$200</span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="90"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    1 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item9.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item9-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="20"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item8.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item8-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$80</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="50"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item2.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item2-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$200</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="discount-rect">-10%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="74"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    9 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->
                                            </div><!-- End .bestsellers-tab-slider -->
                                        
                                        </div><!-- End .tab-pane -->

                                        <div class="tab-pane tab-carousel-wrapper" id="special">

                                            <div class="carousel-controls">
                                                <div id="special-tab-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                                <div id="special-tab-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                            </div><!-- End .carousel-controllers -->

                                            <div class="special-tab-slider owl-carousel">
                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item6.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item6-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$80<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="55"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item4.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item4-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$50</span>
                                                            </div><!-- End .item-price-container -->
                                                            
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="86"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item1.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item1-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="old-price">$150</span>
                                                                <span class="item-price">$80<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            
                                                            <span class="discount-rect">-10%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item4.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item4-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$500</span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="60"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    4 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="20"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item10.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item10-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$80</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="50"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item2.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item2-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$200</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="discount-rect">-10%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="74"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    9 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->
                                            </div><!-- End .special-tab-slider -->
                                        
                                        </div><!-- End .tab-pane -->

                                        
                                    </div><!-- End #products-tabs-content -->

                                </div><!-- End .main-tab-container -->

                                <div class="xs-margin"></div><!-- Space -->

                                <div class="banner-hero">
                                    <h2>Lookbook</h2>
                                    <h3>Spring-Summer 2014</h3>
                                    <p>Praesent arcu urna, cursus sit amet condimentum id, dapibus mauris. Sed ante massa pellentesque luctus, magna.</p>
                                    <a href="#" class="btn btn-custom-2">Take Look</a>
                                </div><!-- End .banner-hero -->
        						
        						<div class="lg-margin2x"></div><!-- Space -->
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12">
                                        <header class="content-title">
                                            <h2 class="title">Who We Are?</h2>
                                        </header>
                                        <div class="xs-margin"></div><!-- Space -->
                                        <p>Venedor is a fully responsive PSD theme designed for all types WooCommerce, Magento, OpenCart, PrestaShop and other. 12 column 1200px responsive grid Template. Great looks on mobiles. Sed interdum magna sit amet orci tristique blandit. quam viverra elementum. </p>
										<p>Sed ac magna sed massa rhoncus elementum et ac augue.Pellentesque habitant morbi tristique senectus. Lorem ipsum consectetur adipiscing elit. Vivamus tempor dictum ornare.Ut ligula ornare bibendum. Aliquam ac sagittis metus. Suspendise varius libero, eleifend. <a href="#">Buy Venedor Theme!</a></p>
									</div><!-- End .col-md-6 -->
									<div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="sm-margin visible-xs"></div><!-- space -->
										<img src="{{asset('frontend/images/team.jpg')}}" alt="Our Team" class="img-responsive">
									</div><!-- End .col-md-6 -->
								</div><!-- End .row -->
        						<div class="xlg-margin"></div><!-- Space -->

                                <div id="services-slider-container" class="carousel-wrapper">
                                    <header class="content-title">
                                        <div class="title-bg">
                                            <h2 class="title">Our Services</h2>
                                        </div><!-- End .title-bg -->
                                    </header>
                                        <div class="carousel-controls">
                                            <div id="services-slider-prev" class="carousel-btn carousel-btn-prev">
                                            </div><!-- End .carousel-prev -->
                                            <div id="services-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                                            </div><!-- End .carousel-next -->
                                        </div><!-- End .carousel-controllers -->
                                        <div class="sm-margin"></div><!-- space -->
                                        <div class="row">
                                            <div class="services-slider owl-carousel">
                                                <div class="services-box">
                                                    <div class="service-icon service-icon-development"></div>  
                                                    <h3>
                                                        <a href="#">Development</a>
                                                        <span class="small-bottom-border"></span>
                                                    </h3>
                                                    <p>Quisque ac quam id quam ullam lorem corper dignissim ullamcorper nisi. Cras ullamcorper ullamcorperultrices. Etiam diam est, adipiscing vitae nibh in, rhoncus laoreet nunc nulla facilisi.</p>
                                                </div><!-- End .services-box -->

                                                <div class="services-box">
                                                    <div class="service-icon service-icon-branding"></div>  
                                                    <h3>
                                                        <a href="#">Branding</a>
                                                        <span class="small-bottom-border"></span>
                                                    </h3>
                                                    <p>Proin eget sodales magna. Proin acest convallis, interdum odio vel, luctus nibh. Fusce iaculis sollicitudin metus, sed aliquet erat fringilla et. Nulla vel metus mattis odio porttitor dapibus vestibulum.</p>
                                                </div><!-- End .services-box -->

                                                <div class="services-box">
                                                    <div class="service-icon service-icon-marketing"></div>  
                                                    <h3>
                                                        <a href="#">Marketing</a>
                                                        <span class="small-bottom-border"></span>
                                                    </h3>
                                                    <p>Praesent gravida malesuada fabus.Etiam vehicula massa eget nislante, posuere, vel bibendum nisl elementum. Donec laoreet placerat nibh eget vulputate dui. Pellentesqu tincidunt convallis tempor.</p>
                                                </div><!-- End .services-box -->
                                                    
                                                <div class="services-box">
                                                    <div class="service-icon service-icon-design"></div>  
                                                    <h3>
                                                        <a href="#">Design</a>
                                                        <span class="small-bottom-border"></span>
                                                    </h3>
                                                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit. Proin tincidunt aliquet sapien at commodo. Aliquam erat volutpat. Proin ligula justo, placerat Cras consectetur in tortor sed, vehicula  venenatis erat.</p>
                                                </div><!-- End .services-box -->

                                            </div><!-- End .services-slider -->
                                        </div><!-- End .row -->
                                    </div><!-- End .services-slider-container -->
        						  
                                  <div class="md-margin2x"></div><!-- space -->

        						<div id="latestnews-slider-container" class="carousel-wrapper">
                                    <header class="content-title">
                                        <div class="title-bg">
                                            <h2 class="title">Latest News</h2>
                                        </div><!-- End .title-bg -->
                                    </header>
                                        <div class="carousel-controls">
                                            <div id="latestnews-slider-prev" class="carousel-btn carousel-btn-prev">
                                            </div><!-- End .carousel-prev -->
                                            <div id="latestnews-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                                            </div><!-- End .carousel-next -->
                                        </div><!-- End .carousel-controllers -->
                                        <div class="sm-margin"></div><!-- space -->
                                        <div class="row">
                                            <ul class="latestnews-slider owl-carousel">
                                                <li>
                                                    <a href="single.html">
                                                        <figure class="latestnews-media-container">
                                                            <img src="{{asset('frontend/images/blog/post6-small.jpg')}}" alt="lats post" class="img-responsive">
                                                        </figure>
                                                    </a>
                                                    <h3><a href="single.html">35% Discount on second purchase!</a></h3>
                                                    <p>Sed blandit nulla nec nunc ullamcorper tristique. Maurisadipiscing cursus ante ultricies dictum sed lobortis. Nulla iaculis auctor libero, varius adipiscing sapien bibendum vel. In placerat arcu.</p>
                                                    <div class="latestnews-meta-container clearfix">
                                                        <div class="pull-left">
                                                            <a href="#">Read More...</a>
                                                        </div><!-- End .pull-left -->
                                                        <div class="pull-right">
                                                            12.05.2013
                                                        </div><!-- End .pull-right -->
                                                    </div><!-- End .latest-posts-meta-container -->
                                                </li>
                                                <li>
                                                    <a href="single.html">
                                                        <figure class="latestnews-media-container">
                                                            <img src="{{asset('frontend/images/blog/post7-small.jpg')}}" alt="lats post" class="img-responsive">
                                                        </figure>
                                                    </a>
                                                    <h3><a href="single.html">New Arrivals.</a></h3>
                                                    <p>Aiquam mauris libero, suscipit sed ornare ac, suscipit non felis. Fusce sit amet orci justo, a ultrices urna cursus. Suspendisse mauris nibh, tristique eget consectetur a fermentum.</p>
                                                    <div class="latestnews-meta-container clearfix">
                                                        <div class="pull-left">
                                                            <a href="#">Read More...</a>
                                                        </div><!-- End .pull-left -->
                                                        <div class="pull-right">
                                                            10.05.2013
                                                        </div><!-- End .pull-right -->
                                                    </div><!-- End .latest-posts-meta-container -->
                                                </li>
                                                        
                                                <li>
                                                    <a href="single.html">
                                                        <figure class="latestnews-media-container">
                                                            <img src="{{asset('frontend/images/blog/post8-small.jpg')}}" alt="lats post" class="img-responsive">
                                                        </figure>
                                                    </a>
                                                    <h3><a href="#">LookBook Spring-Summer 2013</a></h3>
                                                    <p>Nec interdum auctor, sem velit porttitor est, id iaculis mi elit id mi. Etiam dapibus mattis sapien, blandit molestie nunc venenatis ut. Phasellus imperdiet laciniaest, nec convallis dolor aliquet ac. </p>
                                                    <div class="latestnews-meta-container clearfix">
                                                        <div class="pull-left">
                                                            <a href="#">Read More...</a>
                                                        </div><!-- End .pull-left -->
                                                        <div class="pull-right">
                                                            8.05.2013
                                                        </div><!-- End .pull-right -->
                                                    </div><!-- End .latest-posts-meta-container -->
                                                </li>
                                                <li>
                                                    <a href="single.html">
                                                        <figure class="latestnews-media-container">
                                                            <img src="{{asset('frontend/images/blog/post6-small.jpg')}}" alt="lats post" class="img-responsive">
                                                        </figure>
                                                    </a>
                                                    <h3><a href="#">New jeans on sales!</a></h3>
                                                    <p>Sed blandit nulla nec nunc ullamcorper tristique. Maurisadipiscing cursus ante ultricies dictum sed lobortis. Nulla iaculis auctor libero, varius adipiscing sapien bibendum vel. In placerat arcu.</p>
                                                    <div class="latestnews-meta-container clearfix">
                                                        <div class="pull-left">
                                                            <a href="#">Read More...</a>
                                                        </div><!-- End .pull-left -->
                                                        <div class="pull-right">
                                                            8.05.2013
                                                        </div><!-- End .pull-right -->
                                                    </div><!-- End .latest-posts-meta-container -->
                                                </li>
                                            </ul>
                                        </div><!-- End .row -->
                                    </div><!-- End .latestnews-slider-container -->

        						<div class="md-margin2x"></div><!-- Space -->
        					</div><!-- End .col-md-9 -->
        					
        				</div><!-- End .row -->

        			</div><!-- End .col-md-12 -->
        		</div><!-- End .row -->
			</div><!-- End .container -->
        
        </section><!-- End #content -->
        @include('layouts.footer')