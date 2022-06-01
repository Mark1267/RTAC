<?php 
include('path.php');
include(ROOT_PATH . '/app/controllers/contacts.php');
$plans = selectAll('plans');

$title = 'Home';
?>
<!doctype html>
<html lang="en">
<?php include(ROOT_PATH . '/app/includes/link_open_top.php'); ?>

<body>
<?php include(ROOT_PATH . '/app/includes/header_open.php'); ?>
 
<!--Slider Main-->
<section class="rev_slider_wrapper">		
  <div id="rev_slider" class="rev_slider"  data-version="5.0">
    <ul>	
      <!-- SLIDE  -->
      <li data-transition="fade">
        <!-- MAIN IMAGE -->
        <img src="https://images.unsplash.com/photo-1490318134124-34dadea1b8b2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" data-bgposition="center center" data-bgfit="cover">							
        <!-- LAYER NR. 1 -->
        <h1 class="tp-caption tp-resizeme uppercase text-center" 														
          data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']" 
          data-y="['300','200','180','130']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  							 
          data-start="1000"><span class="white_t">Invest in a </span> <strong class="blue_t">Digital Future</strong>
        </h1>
        <div class="tp-caption tp-resizeme text-center" 							
          data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']" 
          data-y="['365','265','240','205']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  							 
          data-start="1300">
          <p class="white_t">A trusted authority on digital currency investing, Rocktera provides secure access and diversified exposure to 
          <br> the digital currency asset class.</p>
        </div>
        <div class="tp-caption tp-resizeme text-center" 							
          data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']" 
          data-y="['440','340','300','210']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 							 
          data-start="1600">
          <a href="<?php echo BASE_URL . '/services'; ?>" class="btn-border-white text-uppercase border_radius">our services</a> 
          <a href="<?php echo BASE_URL . '/signup'; ?>" class="text-uppercase border_radius btn-green">Sign Up Now</a>
        </div>
      </li>
      <li data-transition="fade">
        <img src="https://images.unsplash.com/photo-1599547693841-bd26b574910a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"  alt="" data-bgposition="center center" data-bgfit="cover">	
        <h1 class="tp-caption tp-resizeme uppercase text-center" 														
          data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']" 
          data-y="['300','200','180','130']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  							 
          data-start="1000"><span class="white_t">Invest in a </span> <strong class="blue_t">Digital Future</strong>
        </h1>
        <div class="tp-caption tp-resizeme text-center" 							
          data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']" 
          data-y="['365','265','240','205']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  							 
          data-start="1300"><p class="white_t">We offer the most complete house renovating services in the country, from kitchen 
          <br> design to bathroom remodeling.</p>
        </div>
        <div class="tp-caption tp-resizeme text-center" 							
          data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']" 
          data-y="['440','340','300','210']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 							 
          data-start="1600">
          <a href="<?php echo BASE_URL . '/services'; ?>" class="btn-border-white text-uppercase border_radius">our services</a> 
          <a href="<?php echo BASE_URL . '/contact'; ?>" class="text-uppercase border_radius btn-green">Get a quote</a>
        </div>
      </li>
      <li data-transition="fade">
        <!-- MAIN IMAGE -->
        <img src="https://images.unsplash.com/photo-1448932223592-d1fc686e76ea?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=749&q=80" alt="" data-bgposition="center center" data-bgfit="cover">							
        <!-- LAYER NR. 1 -->
        <h1 class="tp-caption tp-resizeme uppercase text-center" 														
          data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']" 
          data-y="['300','200','180','130']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  							 
          data-start="1000"><span class="white_t">Invest in a </span> <strong class="blue_t">Digital Future</strong>
        </h1>
        <div class="tp-caption tp-resizeme text-center" 							
          data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']" 
          data-y="['365','265','240','205']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  							 
          data-start="1300"><p class="white_t">A trusted authority on digital currency investing, Rocktera provides secure access and diversified exposure to 
          <br> the digital currency asset class.</p>
        </div>
        <div class="tp-caption tp-resizeme text-center" 							
          data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']" 
          data-y="['440','340','300','210']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 							 
          data-start="1600">
          <a href="<?php echo BASE_URL . '/signin'; ?>" class="btn-border-white text-uppercase border_radius">Sign In</a> 
          <a href="<?php echo BASE_URL . '/signup'; ?>" class="text-uppercase border_radius btn-green">Sign Up</a>
        </div>
      </li>
      <li data-transition="fade">
        <img src="https://images.unsplash.com/photo-1597733336794-12d05021d510?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80"  alt="" data-bgposition="center center" data-bgfit="cover">	
        <h1 class="tp-caption tp-resizeme uppercase text-center" 														
          data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']" 
          data-y="['300','200','180','130']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  							 
          data-start="1000"><span class="white_t">Invest in a </span> <strong class="blue_t">Digital Future</strong>
        </h1>
        <div class="tp-caption tp-resizeme text-center" 							
          data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']" 
          data-y="['365','265','240','205']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  							 
          data-start="1300"><p class="white_t">A trusted authority on digital currency investing, Rocktera provides secure access and diversified exposure to 
          <br> the digital currency asset class.</p>
        </div>
        <div class="tp-caption tp-resizeme text-center" 							
          data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']" 
          data-y="['440','340','300','210']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 							 
          data-start="1600">
          <a href="<?php echo BASE_URL . '/services'; ?>" class="btn-border-white text-uppercase border_radius">our services</a> 
          <a href="<?php echo BASE_URL . '/contact'; ?>" class="text-uppercase border_radius btn-green">Get a quote</a>
        </div>
      </li>
    </ul>				
  </div>
</section>

<!--Good Plan-->
<section id="plans" class="padding-to" style="padding-top: 20px;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center wow fadeInDown">
        <h2 class="text-capitalize bottom10">Who we <span class="blue_t">Are</span></h2>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 content_left top40">
        <figure> <img src="<?php echo BASE_URL . '/assets/open/images/plans.jpg'?>" alt="Good Plans" class="img-responsive"></figure>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 right top40">
<h4 class="bottom10">Rocktera Assets</h4>
        <!-- <span class="bottom20" style="margin-bottom: 40px !important;">An investment firm that offers a range of digital asset strategy solutions to institutional investors.</span><br> -->
        <p class="bottom20">We bring a unique perspective to the world of trading. We assess a variety of different markets and trading instruments to create maximum profitability for our community. We utilise unique intra-day and swing trading strategies to provide profitability for our community in the financial markets. Our strategies seemlessly flow through the Forex and Cryptocurrency Markets. 
Markets do not simply go up. We use this to our advantage.</p>
<h4 class="bottom10">No trading, we do the necessary earnings.</h4>
        <p class="bottom20">Simply sign up an account with us link your wallet address which is fully regulated and then fund it. We now take up the task of professional trading managements. With our industry leading trading signals and winning tactics, we are sure to turn your passive income into massive outcome with compounding reward of daily cashback profit on your deposit.</p>
        <a href="<?php echo BASE_URL . '/signin'; ?>" class="text-uppercase border_radius btn-green">read more</a>
      </div>
    </div>
  </div>
</section>
<!--Good Plans ends-->	

 <!--Three columns text Info-->
<section id="info" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-right wow fadeInDown" data-wow-delay="500ms">
        <div id="google_translate_element" style=" max-width: 100%; "></div>
      </div>
        
      <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
        <h2 class="text-capitalize bottom10">Three Easy <span class="blue_t">Steps</span></h2>
        <p>Its fast and easy to get started with us in three simple steps</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="text_box text-center top40 wow fadeIn" data-wow-delay="700ms">
          <span><i class="fa fa-user-plus"></i></span>
          <h4 class="bottom10">Create An Account</h4>
          <p>Simply click on the register button to create a free account for yourself. Its quick and easy.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="text_box text-center top40 wow fadeIn" data-wow-delay="900ms">
          <span><i class="fa fa-gift"></i></span>
          <h4 class="bottom10">Make Deposit</h4>
          <p>Pick a plan of your choice from our investment plans. Make a deposit to your personal wallet.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="text_box  text-center top40 wow fadeIn" data-wow-delay="1100ms">
          <span><i class="icon-bargraph"></i></span>
          <h4 class="bottom10">Financial Growth</h4>
          <p>Watch your daily earnings live. Be ready to place a withdrawal as soon as your investment is completed.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 number-counters text-center">
        <div class="text_box counters-item top40 wow fadeIn" data-wow-delay="700ms">
          <span><i class="fa fa-money"></i></span>
          <h4 class="bottom10 ">Total Deposit</h4>
          <h5 class="data"><b>$<b data-to="21">0</b>B +</b></h5>
        </div>
      </div>
      <div class="col-sm-4 number-counters text-center">
        <div class="text_box counters-item top40 wow fadeIn" data-wow-delay="900ms">
          <span><i class="fa fa-history"></i></span>
          <h4 class="bottom10">Proceeded Transactions</h4>
          <h5 class="data"><b>$<b data-to="5">0</b>B</b></h5>
        </div>
      </div>
      <div class="col-sm-4 number-counters text-center">
        <div class="text_box counters-item top40 wow fadeIn" data-wow-delay="1100ms">
          <span><i class="fa fa-usd"></i></i></span>
          <h4 class="bottom10">Total Withdrawal</h4>
          <h5 class="data"><b>$<b data-to="55">0</b>B</b></h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Info Text ends-->



<!--Three columns text Info-->
<section id="info" class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center wow fadeInDown">
        <h2 class="text-capitalize bottom10">Start <span class="blue_t">Investing</span></h2>
        <p class="heading_space">How to Start Investing with Rocktera</p>
      </div>
    </div>
    <div class="row info">
      <div class="col-sm-4 icon_box text-center first wow fadeIn"  data-wow-delay="500ms">
        <i class="icon-desktop bottom20"></i>
        <h4 class="bottom10">Contact Information</h4>
        <p>Fill in the required Contact Information.</p>
      </div>
      <div class="col-sm-4 icon_box text-center wow fadeIn"  data-wow-delay="600ms">
        <i class="icon-lightbulb bottom20"></i>
        <h4 class="bottom10">Investors Form</h4>
        <p>Complete the Qualified Investors Form.</p>
      </div>
      <div class="col-sm-4 icon_box text-center wow fadeIn"  data-wow-delay="700ms">
        <i class="icon-layers bottom20"></i>
        <h4 class="bottom10">Relevant Material</h4>
        <p>We will provide you with the Relevant Material.</p>
      </div>
      <div class="col-sm-4 icon_box text-center first wow fadeIn"  data-wow-delay="800ms">
      </div>
      <div class="col-sm-4 icon_box text-center wow fadeIn" style="border-right: 1px solid #e9e9e9"  data-wow-delay="800ms">
        <i class="icon-like bottom20"></i>
        <h4 class="bottom10">Investment Opportunity</h4>
        <p>Proceed to Investment Opportunity</p>
      </div>
    </div>
  </div>
</section>
<!--info text ends-->

<!--Facts Counter & Grid-->
<section id="facts" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="wow fadeInDown">
        <h2 class="bottom10 text-capitalize">We’ll help you to grow <span class="blue_t">your business</span></h2>
        <!-- <p class="tagline heading_space">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget tortor tempor, quis porta tellus dictum. Phasellus lorem enim luctus ut velit eget.</p> -->
        </div>
        <div class="number-counters">
          <div class="counters-item heading_space wow fadeIn"  data-wow-delay="500ms">
            <p class="data"><strong data-to="6">0</strong></p>
            <!-- Set Your Number here. i,e. data-to="56" -->
            <p>Years of Experience</p>
          </div>
          <div class="counters-item heading_space wow fadeIn"  data-wow-delay="600ms">
            <p class="data"><strong data-to="14">0</strong><sub>k</sub></p>
            <p>Happy Clients</p>
          </div>
          <div class="counters-item heading_space wow fadeIn"  data-wow-delay="700ms">
            <p class="data"><strong data-to="100">0</strong><sub>%</sub></p>
            <p>Satisfaction</p>
          </div>
        </div>
      </div>
    </div>
    <div id="grid_layout" class="cbp cbp-l-grid-mosaic-flat">
        <div class="cbp-item">
            <a href="images/grid1.jpg" class="cbp-lightbox">
              <img src="images/grid1.jpg" alt="">
                <div class="overlay">
                    <div class="overlay_inner">
                        <h4>Business Graph</h4>
                        <p>convallis egestas eros Sed ornare</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item">
            <a href="images/grid3.jpg" class="cbp-lightbox">
                    <img src="images/grid3.jpg" alt="">
                <div class="overlay">
                    <div class="overlay_inner">
                        <h4>Business Graph</h4>
                        <p>convallis egestas eros Sed ornare</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item">
            <a href="images/grid3.jpg" class="cbp-lightbox">
                    <img src="images/grid1.jpg" alt="">
                <div class="overlay">
                    <div class="overlay_inner">
                        <h4>Business Graph</h4>
                        <p>convallis egestas eros Sed ornare</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item">
            <a href="himages/grid3.jpg" class="cbp-lightbox">
                    <img src="images/grid1.jpg" alt="">
                <div class="overlay">
                    <div class="overlay_inner">
                        <h4>Business Graph</h4>
                        <p>convallis egestas eros Sed ornare</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item">
            <a href="images/grid3.jpg" class="cbp-lightbox">
                    <img src="images/grid1.jpg" alt="">
                <div class="overlay">
                    <div class="overlay_inner">
                        <h4>Business Graph</h4>
                        <p>convallis egestas eros Sed ornare</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
  </div>
</section>
<!--Facts & Counters-->
<!--
<section class="p-2 text-white" style="background: #73ae20; color: white;">
  <div class="row">
    <div class="col-12 text-center" style="padding: 20px;">
      <h2 class="mb-4">Get The Highlight of ROCKTERA ASSETS</h2><br>
      <h5 class=" border_radius" style="border: 2px solid white; padding: 10px; display: inline-block;"><i class="fa fa-download" aria-hidden="true"></i> Download Below</h5><br><br>
     <video width="100%" height="240" muted loop autoplay>
  <source src="https://rocktera-assets.com/rockteraassets.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
      <a  class="btn-white text-uppercase border_radius" href="./assets/open/pdf/"> <i class="fa fa-download" aria-hidden="true"></i> Get To Know Us More</a>
    </div>
  </div>
</section>
-->
<!-- Video -->
<section id="bg-video" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 video wow fadeInLeft"  data-wow-delay="500ms">
        <img src="<?php echo BASE_URL . '/assets/open/images/video2.jpg'?>" alt="video">
       <a href="<?php echo BASE_URL . '/signup'; ?>" 
        class=" video-btn" data-width="900" data-height="420" title="Rocktera Assets in partnership with.. ">
       </a> 
      </div>
      <div class="col-sm-6 right_content top40 bottom40 wow fadeInRight"  data-wow-delay="500ms">
        <h2 class="bottom30 text-capitalize">About  <span class="green_t">Rocktera Assets</span></h2>
        <p class="bottom30">Rocktera-assets investment company is fully licensed by UK Government to operate as UK stock Companies,
 the company is legally registered and certified by the UK Chamber of Commerce and specializes in helping clients achieve their goals through the provided investment network and your money is equally insured by your insurance policy.</p>
        <!-- <p class="bottom30"> All funds are designed with institutional clients in mind. We apply strict transparency and execution efficiency criteria across our solutions, with a commitment to maintain market-leading standards for the crypto industry.</p>
        --><a href="<?php echo BASE_URL . '/signin'; ?>" class="btn-white text-uppercase border_radius">get started</a>
      </div>
    </div>
  </div>
</section>
<!--Video ends--
-->
<section id="team" class="pricesection padding-top padding-bottom-half light">
        <div class="row">
            <div class="col-sm-12 text-center wow fadeInDown animated" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInDown;">
                <h2 class="bottom10 text-capitalize">Our Investment <span class="blue_t">Products</span></h2>
                <p class="heading_space">We are trusted by thousands of investors across the globe.</p>
            </div>
        </div>
        <div class="pricing pricing-palden ">
            <?php krsort($plans); ?>
            <?php foreach($plans as $plan): ?>
                <div class="pricing-item">
                    <div class="pricing-deco">
                                    <?php include(ROOT_PATH . '/assets/open/svg/pricing.svg'); ?>
                        <div class="pricing-price ">
                            <?php echo $plan['dailyPercent']; ?>%
                        </div>
                        <h3 class="pricing-title">Daily Profit</h3>
                        <h3 class="pricing-title"><?php echo $plan['name']; ?> </h3>
                    </div>
                    <ul class="pricing-feature-list " style="padding-top: -100px !important;">
                        <li class="pricing-feature">Min. Investment: $<?php echo $plan['min']; ?></li>
                        <li class="pricing-feature"> Max. Investment: $<?php echo $plan['max']; ?> </li>
                        <li class="pricing-feature"> ROI after <?php echo $plan['ROI']; ?> days</li>
                        <li class="pricing-feature">10% Referral Bonus</li>
                        <li class="pricing-feature">24/7 Customer Care</li>
                    </ul>
                    <button style="cursor: pointer;" onclick="window.location.href = 'signin'" class="pricing-action">Get Started</button>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

<!--News & Thoughts-->
<section id="news" class="padding light layout_third">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center wow fadeInDown">
        <h2 class="bottom10 text-capitalize">Our <span class="blue_t">Teams </span></h2>
        <h3 class="bottom10 text-capitalize">Led by bold and <span class="blue_t">innovative </span>thinkers</h3>
        <p class="bottom20" >Rocktera has been helping marketing teams optimize delivery of awesome customer experiences for <br>decades. With a team of trailblazers and innovators at the helm, Rocktera is <br>trusted by some of the world’s top companies across the globe.</p><br>
      </div>
    </div>
    <div class="row">
        <div class="owl-carousel bottom20" id="news_slider">
            <div class="item">
                <img src="https://www.sm-experts.com/uploads/images/59c4a_team.jpg" style="width: 100%; height: 240px" alt="video">
            </div>
            <div class="item">
                <img src="https://www.corporateeventnews.com/sites/default/files/styles/large/public/man-3365368_1280.jpg?itok=7yqoVSNK" style="width: 100%; height: 240px" alt="video">
            </div>
            <div class="item">
                <img src="https://ascs1.com/wp-content/uploads/team-of-workers.jpg" style="width: 100%; height: 240px" alt="video">
            </div>
            <div class="item">
                <img src="https://assets.entrepreneur.com/content/3x2/2000/20170731092357-business-businessteam-working-training.jpeg" style="width: 100%; height: 240px" alt="video">
            </div>
            <div class="item">
                <img src="<?php echo BASE_URL . '/assets/open/images/trust2.jpg'?>" style="width: 100%; height: 240px" alt="video">
            </div>
        </div>
    </div>
</div>
</section>

<!--Call Back Form-->
<section class="parallax_one padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
              {
                "width": "100%",
                "height": "500",
                "defaultColumn": "overview",
                "screener_type": "crypto_mkt",
                "displayCurrency": "USD",
                "colorTheme": "light",
                "locale": "en",
                "isTransparent": false
              }
            </script>
          </div>
          <!-- TradingView Widget END -->
      </div>
      <div class="col-sm-6">
        <div class="bg_call border_radius wow fadeInRight">
          <h2 class="bottom10 text-center">Request a <span class="blue_t">Call Back</span></h2>
          <p class="text-center bottom20">If you need to speak to us about a general query fill in the form below and we will call you back within the same working day.</p>
          <form class="callus">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="col-sm-6 form-group">
                <input type="tel" class="form-control" placeholder="Phone Number">
              </div>
              <div class="col-sm-12 form-group">
                <div class="select border_radius">
                    <select id="discuss">
                      <option selected>Discussions with Financial Experts</option>
                      <option>Discussions with Financial Experts</option>
                      <option>Discussions with Financial Experts</option>
                    </select>
                </div>
                <button type="submit" class="btn-green top10 border_radius text-uppercase">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Call Form ends-->

<?php include(ROOT_PATH . '/app/includes/testimonies.php'); ?>

<!--News & Thoughts-->
<section id="news" class="padding light layout_third">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center wow fadeInDown">
        <h2 class="bottom10 text-capitalize">News & <span class="blue_t">Thoughts </span></h2>
      </div>
    </div>
    <div class="row">
      <div id="news_slider1" class="owl-carousel">
        <?php $posts = selectAllLimits('posts', [], 0, 10); ?>
        <?php foreach($posts as $post): ?>
          <?php $user = selectOne('users', ['id' => $post['user_id']]); ?>
          <div class="item">
            <div class="news">
              <div class="image"><img width="100px" src="<?php echo BASE_URL . '/assets/dashboard/images/posts/' . $post['image']; ?>" alt="News"></div>
              <div class="news_text">
                <h4 class="bottom10"><a href="<?php echo BASE_URL . '/newsdetail.php?id=' . $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                <ul class="news_crumb">
                  <li><a href="#."><?php echo $user['firstname'] . ' ' . $user['lastname']; ?></a></li>
                  <li><a href="#."><?php echo date('F j, Y', strtotime($post['created_at'])); ?></a></li>
                </ul>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<!--News & Thought ends-->

<?php 
  include(ROOT_PATH . '/app/includes/clients.php'); 
  include(ROOT_PATH . '/app/includes/footer_open.php'); 
  include(ROOT_PATH . '/app/includes/link_open_bottom.php');
?>
</body>
</html>
