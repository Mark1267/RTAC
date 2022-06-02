
<!--Loader-->
<div class="loader">
  <div class="cssload-loader">
    <div class="cssload-inner cssload-one"></div>
    <div class="cssload-inner cssload-two"></div>
    <div class="cssload-inner cssload-three"></div>
  </div>
</div>
<!--Loader Ends -->


<header class="layout_fifth">
  <nav class="navbar navbar-default brand-center navbar-fixed white bootsnav">
    <div class="container">      
      <div class="row">
        <div class="col-sm-12">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="<?php echo BASE_URL . '/'; ?>">
            <img src="<?php echo BASE_URL . '/assets/open/';?>images/logo-home5.png" class="logo logo-display" alt="" style="width: 150px; margin-top: 15px;">
            <img src="<?php echo BASE_URL . '/assets/open/';?>images/logo-home5.png" class="logo logo-scrolled" alt="" style="width: 150px; margin-top: 15px;">
          </a>
        </div> <!-- End Header Navigation -->
      
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="nav navbar-nav" data-in="slideInUp" data-out="fadeOut">>
                 <li class="active">
                    <a href="<?php echo BASE_URL . '/'; ?>">Home</a>
                </li>                    
                <li><a href="<?php echo BASE_URL . '/about'; ?>">About Us</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle border" data-toggle="dropdown" >Portfolio</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL . '/services'; ?>">Services</a></li>
                        <li><a href="<?php echo BASE_URL . '/pricing.php'; ?>">Assets</a></li>
                    </ul>
                </li> 
                <li><a href="<?php echo BASE_URL . '/news'; ?>">Blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle border" data-toggle="dropdown" >Users</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL . '/signin'; ?>">Sign In</a></li>
                        <li><a href="<?php echo BASE_URL . '/signup'; ?>">Sign Up</a></li>
                        <li><a href="<?php echo BASE_URL . '/faq'; ?>">FAQs'</a></li>
                    </ul>
                </li> 
                <li><a href="<?php echo BASE_URL . '/contact'; ?>">Contact</a></li>
                <li><div id="google_translate_element" style=" max-width: 100%; "></div></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
      </div>
    </div>   
  </nav>
</header>