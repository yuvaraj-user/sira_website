<?php include('partials/top_head.php') ?>

<style>
.progress {
  height: 20px;
    border-radius:20px;
    background-color: #ebe2e2;

}

.progress .skill .val {
  float: right;
  font-style: normal;
  margin: 0 20px 0 0;
}

.progress-bar {
  text-align: left;

  border-radius:20px;
  transition-duration: 3s;
}

    </style>

     <style type="text/css">
          .featuredPropBox ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            list-style: outside none none;
            padding: 0;
        }
        
        .featuredPropBox ul li {
            background-color: #eeeeee;
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            display: block;
            height: 250px;
            margin: 5px;
            width: 100%;
            position: relative;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .featuredPropBox ul li:after {
            position: absolute;
            content: "";
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
/*            background-color: rgba(22, 22, 22, 0.6);*/
            transition: all 0.3s;
        }
        
        .featuredPropBox ul li .fplogo {
            left: 50%;
            position: absolute;
            /*top: 50%;*/
            transform: translate(-50%, -50%);
            width: 100%;
            z-index: 1;
            transition: all 0.3s;
            bottom: 0;
        }
        
        .featuredPropBox ul li .fplogo img {
            width: 100%;
        }
        
        .featuredPropBox ul li .fptext {
            display: none;
            font-size: 16px;
            left: 50%;
            position: absolute;
            text-align: center;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: all 0.3s ease 0s;
            width: 65%;
            z-index: 1;
        }
        
        .featuredPropBox ul li .fptext p {
            color: #fff;
            margin: 0px;
        }
        
        .featuredPropBox ul li:hover {
/*            box-shadow: 0 0 0 25px rgba(0, 0, 0, 0.2) inset;*/

            box-shadow: 0 0 0 15px rgba(0, 0, 0, 0.2) inset;

                background: rgb(10 85 160) !important;
        }
        
        .featuredPropBox ul li:hover:after {
            background-color: rgba(22, 22, 22, 0.3);
        }
        
        .featuredPropBox ul li:hover .fplogo {
            display: none;
        }
        
        .featuredPropBox ul li:hover .fptext {
            display: block;
        }

        .fptext p {
            display: list-item;
            list-style: disc;
        }
    </style>
    
<?php include('partials/header.php') ?>

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section class="jarallax relative v-center">
                <img src="images/rasi/Homepage Cow 2000x1335_final.jpg" class="jarallax-img" alt="">
                <div class="container z-2">
                  <div class="row">
                    <div class="col-lg-7">
                        <div class="spacer-double d-lg-none d-sm-block"></div>
                          <div class="me-lg-3">
                              <!-- <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Outdoor Elegance</div> -->
                              <h1 class="text-uppercase wow fadeInUp f-57" data-wow-delay=".2s">
                                <span class="font-bolder site-blue banner-caption_1">Sira</span>
                                <span class="font-lighter site-green banner-caption_2">Seeds</span>
                                </h1>
                                <!-- <span class="id-color-2 f-30">Our Expertise</span> -->
                              <div class="row g-4 align-items-center">
                                  <div class="col-md-7" id="banner-text-content" data-section="sira">
                                      <p class="lead mb-0 wow fadeInUp text-justify p-3" data-wow-delay=".4s"><span class="fw-bold">Sira Seeds</span> was established in December 2017 as a brand of
                                    <span class="fw-bold"><a class="rasi-hyperlink" href="https://www.rasiseeds.com">Rasi Seeds (P) Ltd.,</a></span> which was established in the year 1973 and
                                    currently serving around 4.5 million Indian farmers. Our main focus
                                    is on delivering high quality seeds of fodder crops to the farmers for
                                    improving productivity of cattle and quality of milk.</p>

                                  </div>
                              </div>
                          </div>
                    </div>
                  </div>
                  
                </div>
                <img src="images/rasi/subs 2.png" class="banner-additon-img" alt="">

            </section>
<!-- 
            <section class="relative z-2" data-wow-delay=".2s" style="padding:120px 0 120px 0;">
                <div class="container">
                    <h1 class="text-uppercase wow fadeInUp f-57 text-center" data-wow-delay=".2s">
                        <span class="font-bolder site-blue">Sira</span>
                        <span class="font-lighter site-green">Crops</span>
                    </h1>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color text-light padding30 border-round crop-card1">
                                <h4 class="crop-head text-center">Forage Sorghum</h4>

                                <div class="crop-card-content">
                                    <h4 class="crop-card-h4">Forage Sorghum</h4>
                                    <p class="mb-0 text-dark text-center">High biomass and healthy fodder</p>
                                    <p class="mb-0 text-dark text-center">Sweet and Juicy stalks</p>
                                    <p class="mb-0 text-dark text-center">Low HCN</p>
                                    </div>
                                </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color text-light padding30 border-round crop-card2">
                                <h4 class="crop-head text-center">Forage <br>Millet</h4>

                                <div class="crop-card-content">
                                    <h4 class="crop-card-h4">Forage Millet</h4>
                                    <p class="mb-0 text-dark text-center">Improve Milk Fat %</p>
                                <p class="mb-0 text-dark text-center">Fast Vegetative growth</p><p class="mb-0 text-dark text-center">Rich in energy</p></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color text-light padding30 border-round crop-card3">
                                <h4 class="crop-head text-center">Forage <br>Corn</h4>

                                <div class="crop-card-content">
                                    <h4 class="crop-card-h4">Forage Corn</h4>
                                <p class="mb-0 text-dark text-center">High quality fiber content</p>
                                <p class="mb-0 text-dark text-center">Good for silage preparation</p>
                                <p class="mb-0 text-dark text-center">Dual purpose corn</p>
                            </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color text-light padding30 border-round crop-card4">
                                <h4 class="crop-head text-center">Forage Berseem</h4>

                                <div class="crop-card-content">
                                    <h4 class="crop-card-h4">Forage Berseem</h4>
                                    <p class="mb-0 text-dark text-center">It is a new generation variety</p>
                                <p class="mb-0 text-dark text-center">Excellent digestibility</p>
                                <p class="mb-0 text-dark text-center">High protein</p>
                            </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color text-light padding30 border-round crop-card5">
                                <h4 class="crop-head text-center">Forage Lucerne</h4>

                                <div class="crop-card-content">
                                    <h4 class="crop-card-h4">Forage Lucerne</h4>
                                    <p class="mb-0 text-dark text-center">Availability of green fodder</p>
                                <p class="mb-0 text-dark text-center">High Quality</p>
                                <p class="mb-0 text-dark text-center">Nutritious fodder</p></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color text-light padding30 border-round crop-card6">
                                <h4 class="crop-head text-center">Rye <br>Grass</h4>

                                <div class="crop-card-content">
                                    <h4 class="crop-card-h4">Rye Grass</h4>
                                    <p class="mb-0 text-dark text-center">High nutritional value</p>
                                <p class="mb-0 text-dark text-center">Thin, Slender and Smooth leaves</p>
                                <p class="mb-0 text-dark text-center">High digestibility</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


            <section>
                <div class="container">
                    <h1 class="text-uppercase wow fadeInUp f-57 text-center" data-wow-delay=".2s">
                        <span class="font-bolder site-blue">Sira</span>
                        <span class="font-lighter site-green">Crops</span>
                    </h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="featuredPropBox">
                                <ul>
                                    <div class="col-md-4 col-12 p-2">
                                        <li class="crop-card1"> 
                                            <a href="#">
                                             <div class="fplogo">
                                                    <div class="abs z-2 bottom-0 w-100 hover-op-0" style="background-size: cover; background-repeat: no-repeat;">
                                                        <div class="bg-blur d-flex p-3 px-4 rounded-1 justify-content-center align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                                                            <div class="d-flex" style="background-size: cover; background-repeat: no-repeat;">
                                                                <h4 class="crop-head1 text-center text-white">Forage Sorghum</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                             <div class="fptext">
                                                    <p class="mb-0 text-start">High biomass and healthy fodder</p>
                                                    <p class="mb-0 text-start">Sweet and Juicy stalks</p>
                                            </div>
                                             </a> 
                                        </li>
                                    </div>
                                    <div class="col-md-4 col-12 p-2">                                
                                        <li class="crop-card2"> 
                                            <a href="#">
                                             <div class="fplogo">
                                                    <div class="abs z-2 bottom-0 w-100 hover-op-0" style="background-size: cover; background-repeat: no-repeat;">
                                                        <div class="bg-blur d-flex p-3 px-4 rounded-1 justify-content-center align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                                                            <div class="d-flex" style="background-size: cover; background-repeat: no-repeat;">
                                                                <h4 class="crop-head1 text-center text-white">Forage Millet</h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                             <div class="fptext">
                                                <p class="mb-0 text-start">Improve Milk Fat %</p>
                                                <p class="mb-0 text-start">Fast Vegetative growth</p>
                                                <p class="mb-0 text-start">Rich in energy</p>
                                            </div>
                                             </a> 
                                        </li>
                                    </div>
                                    <div class="col-md-4 col-12 p-2">                                                                
                                        <li class="crop-card3"> 
                                            <a href="#">
                                             <div class="fplogo">
                                                    <div class="abs z-2 bottom-0 w-100 hover-op-0" style="background-size: cover; background-repeat: no-repeat;">
                                                        <div class="bg-blur d-flex p-3 px-4 rounded-1 justify-content-center align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                                                            <div class="d-flex" style="background-size: cover; background-repeat: no-repeat;">
                                                                <h4 class="crop-head1 text-center text-white">Forage Corn</h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                             <div class="fptext">
                                                <p class="mb-0 text-start">High quality fiber</p>
                                                <p class="mb-0 text-start">Good for silage preparation</p>
                                            </div>
                                             </a> 
                                        </li>
                                    </div>
                                    <div class="col-md-4 col-12 p-2">        
                                        <li class="crop-card4"> 
                                            <a href="#">
                                             <div class="fplogo">
                                                    <div class="abs z-2 bottom-0 w-100 hover-op-0" style="background-size: cover; background-repeat: no-repeat;">
                                                        <div class="bg-blur d-flex p-3 px-4 rounded-1 justify-content-center align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                                                            <div class="d-flex" style="background-size: cover; background-repeat: no-repeat;">
                                                                <h4 class="crop-head1 text-center text-white">Forage Berseem</h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                             <div class="fptext">
                                                <p class="mb-0 text-start">It is a new generation variety</p>
                                                <p class="mb-0 text-start">Excellent digestibility</p>
                                                <p class="mb-0 text-start">High protein</p>
                                            </div>
                                             </a> 
                                        </li>
                                    </div>
                                    <div class="col-md-4 col-12 p-2">        
                                        <li class="crop-card5"> 
                                        <a href="#">
                                         <div class="fplogo">
                                                <div class="abs z-2 bottom-0 w-100 hover-op-0" style="background-size: cover; background-repeat: no-repeat;">
                                                    <div class="bg-blur d-flex p-3 px-4 rounded-1 justify-content-center align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                                                        <div class="d-flex" style="background-size: cover; background-repeat: no-repeat;">
                                                            <h4 class="crop-head1 text-center text-white">Forage Lucerne</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                         <div class="fptext">
                                            <p class="mb-0 text-start">Availability of green fodder</p>
                                            <p class="mb-0 text-start">High Quality</p>
                                            <p class="mb-0 text-start">Nutritious fodder</p>
                                        </div>
                                         </a> 
                                        </li>
                                    </div>
                                    <div class="col-md-4 col-12 p-2">        
                                        <li class="crop-card6"> 
                                        <a href="#">
                                         <div class="fplogo">
                                                <div class="abs z-2 bottom-0 w-100 hover-op-0" style="background-size: cover; background-repeat: no-repeat;">
                                                    <div class="bg-blur d-flex p-3 px-4 rounded-1 justify-content-center align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                                                        <div class="d-flex" style="background-size: cover; background-repeat: no-repeat;">
                                                            <h4 class="crop-head1 text-center text-white">Rye Grass</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                         <div class="fptext">
                                            <p class="mb-0 text-start">High nutritional value</p>
                                            <p class="mb-0 text-start">Thin, Slender and Smooth leaves</p>
                                        </div>
                                         </a> 
                                        </li>
                                    </div>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>                
            </section>


            <section class="bg-light overflow-hidden field-service-section">
                <div class="container">
                    <div class="row g-4 mb-4">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-center">
                                <h4 class="crop-head field-service-head text-center text-white pb-4 waves"  data-word="Our Field Activities">Our Field Activities</h4>
                            </div>

                            <div class="owl-custom-nav menu-" data-target="#new-arrivals-carousel">

                                <div id="new-arrivals-carousel" class="owl-carousel owl-4-cols">
                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <a>
                                                    <img class="atr__image-main" src="images/rasi/Fieldphotos/site/1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <a>
                                                    <img class="atr__image-main" src="images/rasi/Fieldphotos/site/2.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <a>
                                                    <img class="atr__image-main" src="images/rasi/Fieldphotos/site/3.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <a>
                                                    <img class="atr__image-main" src="images/rasi/Fieldphotos/site/4.jpeg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->


                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <a>
                                                    <img class="atr__image-main" src="images/rasi/Fieldphotos/site/5.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <a>
                                                    <img class="atr__image-main" src="images/rasi/Fieldphotos/site/6.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->


                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <a>
                                                    <img class="atr__image-main" src="images/rasi/Fieldphotos/site/7.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <a>
                                                    <img class="atr__image-main" src="images/rasi/Fieldphotos/site/8.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <a>
                                                    <img class="atr__image-main" src="images/rasi/Fieldphotos/site/9.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item begin -->
                                    <div class="item">
                                        <div class="de__pcard text-center">
                                            <div class="atr__images">
                                                <a>
                                                    <img class="atr__image-main" src="images/rasi/Fieldphotos/site/10.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                </div>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </section>

            <section class="no-top no-bottom">
                    <div class="container-fluid">
                            <img src="images/rasi/Key drivers 3.png" class="w-100 rounded-1 wow zoomIn" alt="">
                    </div>
            </section>

            <section class="jarallax">
                <img src="images/rasi/testimonials.jpg" class="jarallax-img" alt="">
                <div class="container-fluid position-relative half-fluid" style="background-size: cover; background-repeat: no-repeat;">
                <h1 class="text-uppercase wow fadeInUp f-57 animated text-center" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <span class="font-bolder site-blue">Sira</span>
                        <span class="font-lighter site-green f-48">Videos</span>
                </h1>
                    
                    <div class="owl-single-dots owl-carousel owl-theme">
                    
                        <div class="item">
                            <div class="container" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="row" style="background-size: cover; background-repeat: no-repeat;">
                                  <!-- Image -->
                                  <div class="col-lg-6 position-lg-absolute left-half h-100" style="background-size: cover; background-repeat: no-repeat;">
                                    
                                    <iframe style="width: 100%;height: 100%;" src="https://www.youtube.com/embed/KHfoi8V1m0g?si=9AMXDcmlWcUSpVuM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                  </div>
                                  <!-- Text -->
                                  <div class="col-lg-6 offset-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="spacer-single sm-hide" style="background-size: cover; background-repeat: no-repeat;"></div>
                                        <div class="spacer-double" style="background-size: cover; background-repeat: no-repeat;"></div>
                                        <div class="ps-lg-5" style="background-size: cover; background-repeat: no-repeat;">
                                            <h2 class="text-uppercase wow fadeInUp animated testimonial-heading" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;font-size: 30px;">
                                                <span class="id-color-2">Farmer's testimonial( Punjabi)</span></h2>
                                            <p class="wow fadeInUp animated testimonial-desc" style="visibility: visible; animation-name: fadeInUp;">
                                                Forage seed<br><br>
                                                Forage Sorghum<br><br>
                                                SSV 402

                                            </p>
                                      
                                            
                                        </div>
                                        <div class="spacer-single sm-hide" style="background-size: cover; background-repeat: no-repeat;"></div>
                                        <div class="spacer-double" style="background-size: cover; background-repeat: no-repeat;"></div>
                                  </div>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="container" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="row" style="background-size: cover; background-repeat: no-repeat;">
                                  <!-- Image -->
                                  <div class="col-lg-6 position-lg-absolute left-half h-100" style="background-size: cover; background-repeat: no-repeat;">
                                    
                              
                                   <iframe style="width: 100%;height: 140%;" src="https://www.youtube.com/embed/1DIm3uxkHEk?si=2iPIIaU7AbqbaQyn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                  </div>
                                  <!-- Text -->
                                  <div class="col-lg-6 offset-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="spacer-single sm-hide" style="background-size: cover; background-repeat: no-repeat;"></div>
                                        <div class="spacer-double" style="background-size: cover; background-repeat: no-repeat;"></div>
                                        <div class="ps-lg-5" style="background-size: cover; background-repeat: no-repeat;">
                                            <!-- <div class="subtitle wow fadeInUp mb-3 animated" style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">Testimonials</div> -->
                                            <h2 class="text-uppercase wow fadeInUp animated testimonial-heading" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;font-size: 30px;">
                                                <span class="id-color-2">Farmer success stories in forage farming</span></h2>
                                            <p class="wow fadeInUp animated testimonial-desc" style="visibility: visible; animation-name: fadeInUp;">
                                                Forage Seeds (SSH 400) 
                                            </p>
                                      
                                            
                                        </div>
                                        <div class="spacer-single sm-hide" style="background-size: cover; background-repeat: no-repeat;"></div>
                                        <div class="spacer-double" style="background-size: cover; background-repeat: no-repeat;"></div>
                                  </div>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="container" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="row" style="background-size: cover; background-repeat: no-repeat;">
                                  <!-- Image -->
                                  <div class="col-lg-6 position-lg-absolute left-half h-100" style="background-size: cover; background-repeat: no-repeat;">
                              
                                    <iframe style="width: 100%;height: 140%;" src="https://www.youtube.com/embed/aahBLR2wq2w?si=M2BYCVmDkYkZhCLt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                                  </div>
                                  <!-- Text -->
                                  <div class="col-lg-6 offset-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="spacer-single sm-hide" style="background-size: cover; background-repeat: no-repeat;"></div>
                                        <div class="spacer-double" style="background-size: cover; background-repeat: no-repeat;"></div>
                                        <div class="ps-lg-5" style="background-size: cover; background-repeat: no-repeat;">
                                            <!-- <div class="subtitle wow fadeInUp mb-3 animated" style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">Testimonials</div> -->
                                            <h2 class="text-uppercase wow fadeInUp animated testimonial-heading" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;font-size: 30px;">
                                                <span class="id-color-2">High Protein Fodder Crops</span></h2>
                                            <p class="wow fadeInUp animated testimonial-desc" style="visibility: visible; animation-name: fadeInUp;">
                                               Forage Sorghum SSV 402
                                            </p>
                                      
                                            
                                        </div>
                                        <div class="spacer-single sm-hide" style="background-size: cover; background-repeat: no-repeat;"></div>
                                        <div class="spacer-double" style="background-size: cover; background-repeat: no-repeat;"></div>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="container" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="row" style="background-size: cover; background-repeat: no-repeat;">
                                  <!-- Image -->
                                  <div class="col-lg-6 position-lg-absolute left-half h-100" style="background-size: cover; background-repeat: no-repeat;">
                              
                                    <iframe style="width: 100%;height: 140%;" src="https://www.youtube.com/embed/EX_bOmRWGN4?si=U44fb2bleuMhv4GH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                                  </div>
                                  <!-- Text -->
                                  <div class="col-lg-6 offset-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="spacer-single sm-hide" style="background-size: cover; background-repeat: no-repeat;"></div>
                                        <div class="spacer-double" style="background-size: cover; background-repeat: no-repeat;"></div>
                                        <div class="ps-lg-5" style="background-size: cover; background-repeat: no-repeat;">
                                            <!-- <div class="subtitle wow fadeInUp mb-3 animated" style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">Testimonials</div> -->
                                            <h2 class="text-uppercase wow fadeInUp animated testimonial-heading" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;font-size: 30px;">
                                                <span class="id-color-2">Drought Tolerant Forage Crop</span></h2>
                                            <p class="wow fadeInUp animated testimonial-desc" style="visibility: visible; animation-name: fadeInUp;">
                                                Forage Sweet Sorghum SSH 401
                                            </p>
                                      
                                            
                                        </div>
                                        <div class="spacer-single sm-hide" style="background-size: cover; background-repeat: no-repeat;"></div>
                                        <div class="spacer-double" style="background-size: cover; background-repeat: no-repeat;"></div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="px-4">
                <div class="container-fluid">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-lg-8 text-center">
                            <!-- <div class="subtitle wow fadeInUp">Our Works</div> -->
                                <h1 class="text-uppercase wow fadeInUp f-48" data-wow-delay=".2s">
                                    <span class="font-bolder site-blue">Indian Dairy Industry - </span>
                                    <span class="font-lighter site-green">statistics</span>
                                </h1>
                        </div>               
                                 
                    </div>

                    <div class="row g-4">

                        <div class="col-lg-6">
                            <div class="hover rounded-1 overflow-hidden relative text-light wow fadeInRight" data-wow-delay=".3s">
                                <!-- <a href="project-single.html" class="abs w-100 h-100 z-5"></a> -->
                                <img src="images/rasi/Dairy 2.png" class="hover-scale-1-1 w-100" alt="">
                                <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
                            </div>
                        </div>

                        <div class="col-lg-6">

                                <div class="row wow fadeInRight" data-wow-delay=".3s">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row mb-4 justify-content-center align-items-center border-bottom pb-2">
                                                <div class="col-lg-3 col-3 hover hover-scale-1-1 site-blue-bg ind-diary-img">
                                                    <img src="images/rasi/ind-diary/cow-silhouette.png" class="hover-scale-1-1 w-100" alt="">
                                                </div>

                                                <div class="col-lg-9 col-9 text-end">

                                                    <div class="row justify-content-center align-items-center">
                                                        <div class="col-lg-9 col-9 diary-img-section">
                                                            <div class="progress skill-bar ">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100">
                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 text-start col-12 diary-percent-section">      
                                                            <h4>Cattle</h4>
                                                            <h4>36%</h4>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row mb-4 justify-content-center align-items-center border-bottom pb-2">
                                                <div class="col-lg-3 col-3 hover site-blue-bg ind-diary-img">
                                                    <img src="images/rasi/ind-diary/goat.png" class="hover-scale-1-1 w-100" alt="">
                                                </div>

                                                <div class="col-lg-9 col-9 text-end">
                                                    <div class="row justify-content-center align-items-center">
                                                        <div class="col-lg-9 col-9 diary-img-section">
                                                            <div class="progress skill-bar ">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">
                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 text-start col-12 diary-percent-section">      
                                                            <h4>Goat</h4>
                                                            <h4>28%</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-4 justify-content-center align-items-center border-bottom pb-2">
                                                <div class="col-lg-3 col-3 hover site-blue-bg ind-diary-img">
                                                    <img src="images/rasi/ind-diary/buffalo.png" class="hover-scale-1-1 w-100" alt="">
                                                </div>

                                                <div class="col-lg-9 col-9 text-end">

                                                    <div class="row justify-content-center align-items-center">
                                                        <div class="col-lg-9 col-9 diary-img-section">
                                                            <div class="progress skill-bar ">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 text-start col-12 diary-percent-section">      
                                                            <h4>Buffalo</h4>
                                                            <h4>20%</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-4 justify-content-center align-items-center border-bottom pb-2">
                                                <div class="col-lg-3 col-3 hover site-blue-bg ind-diary-img">
                                                    <img src="images/rasi/ind-diary/sheep.png" class="hover-scale-1-1 w-100" alt="">
                                                </div>

                                                <div class="col-lg-9 col-9 text-end">
                                                    <div class="row justify-content-center align-items-center">
                                                        <div class="col-lg-9 col-9 diary-img-section">
                                                            <div class="progress skill-bar ">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">
                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 text-start col-12 diary-percent-section">      
                                                            <h4>Sheep</h4>
                                                            <h4>14%</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-lg-3 col-3 hover site-blue-bg ind-diary-img">
                                                    <img src="images/rasi/ind-diary/pig.png" class="hover-scale-1-1 w-100" alt="">
                                                </div>

                                                <div class="col-lg-9 col-9 text-end">

                                                    <div class="row justify-content-center align-items-center">
                                                        <div class="col-lg-9 col-9 diary-img-section">
                                                            <div class="progress skill-bar ">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100">
                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 text-start col-12 diary-percent-section">      
                                                            <h4>Swine</h4>
                                                            <h4>2%</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            <!-- </div> -->

                        </div>

                        <div class="spacer-20"></div>

                      <!--  <div class="col-lg-12 text-center">
                            <a class="btn-main wow fadeInUp" href="projects.html">View All Projects</a>
                        </div> -->

                    </div>
                </div>
            </section>

        <!-- </div> -->
        <!-- content end -->
        
    <?php include('partials/footer.php') ?>

    </div>



    <?php include('partials/bottom_script.php') ?>


<script>
     $(document).ready(function() {
      $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
        )
    });
</script>
</body>

</html>