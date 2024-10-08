<!--Contact Info-->
<div class="container bg_contact bg_one border_radius wow bounceInUp">
  <div class="row">
    <div class="col-sm-3">
      <div class="contact_inner">
        <i class="icon-phone4"></i>
        <h5><strong><a href="https://api.whatsapp.com/send?phone=447787212553&text=Hello%2C%20I%20want%20to%20invest%20in%20Rocktera%20Assets"><?= PHONE ?></a></strong></h5>
        <a href="mailto:info@rocktera-assets.net">info@rocktera-assets.net</a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="contact_inner">
        <i class="icon-icons20"></i>
        <h5><strong>Mon - Sat 8.00 - 17.00</strong></h5>
        <h5>Sunday Closed</h5>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="contact_inner">
        <i class="icon-location"></i>
        <h5><strong>Dalton House, 60 Windsor Ave,</strong></h5>
        <h5>London, UK SW19 2RR</h5>
      </div>
    </div>
  </div>
</div>
<!--Contact info ends-->
<!--Footer-->
<footer class="footer_top padding-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 footer_panel heading_space">
        <a href="<?php echo BASE_URL . '/'; ?>"  class="footer_logo bottom30 light" style="padding: 5px; border-radius: 3px;"><img src="<?php echo BASE_URL . '/assets/open/';?>images/logo-home5.png" style="width: 140px;" alt="rocktera"></a>
        <p class="bottom30">Rocktera-assets investment company is fully licensed by UK Government to operate as UK stock Companies, the company is legally registered and certified by the UK Chamber of Commerce and specializes in helping clients achieve their goals through the provided investment network and your money is equally insured by your insurance policy.</p>
        <ul class="social_icon">
          <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
        </ul>
      </div>
      <div class="col-sm-4 footer_panel heading_space">
      <h3 class="heading bottom30">Useful <span class="green_t">Links</span></h3>
        <ul class="links">
          <li><a href="<?php echo BASE_URL . '/'; ?>"><i class="icon-chevron-small-right"></i>Home</a></li>
          <li><a href="<?php echo BASE_URL . '/services'; ?>"><i class="icon-chevron-small-right"></i>Services</a></li>
          <!-- <li><a href="<?php //echo BASE_URL . '/team.php'; ?>"><i class="icon-chevron-small-right"></i>Our Team</a></li> -->
          <li><a href="<?php echo BASE_URL . '/about'; ?>"><i class="icon-chevron-small-right"></i>Company History</a></li>
          <li><a href="<?php echo BASE_URL . '/contact'; ?>"><i class="icon-chevron-small-right"></i>Contact Us</a></li>
          <li><a href="<?php echo BASE_URL . '/news'; ?>"><i class="icon-chevron-small-right"></i>Blog</a></li>
        </ul>
      </div>
      <div class="col-sm-4 footer_panel heading_space">
       <h3 class="bottom30 heading"> Recent <span class="green_t">Posts</span></h3>
       <?php $posts = selectAllLimits('posts', [], 0, 3); 
            foreach($posts as $post): ?>
            <div class="media">
                <div class="media-left">
                  <a href="<?php echo BASE_URL . '/newsdetail.php?id=' . $post['id']; ?>"><img class="media-object" src="<?php echo BASE_URL . '/assets/dashboard/images/posts/' . $post['image']; ?>" width="40px" alt="<?php echo $post['title']; ?>"></a>
                </div>
                <div class="media-body">
                  <p><a href="<?php echo BASE_URL . '/newsdetail.php?id=' . $post['id']; ?>"><?php echo $post['title']; ?></a></p>
                  <span><i class="icon-calendar"></i><?php echo date('F j, Y h:i:s a', strtotime($post['created_at'])); ?></span>
                </div>
            </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; <?php echo date('Y'); ?> <a href="#.">RockTera</a>. all rights reserved.</p>
      </div>
    </div>
  </div>
</div>
