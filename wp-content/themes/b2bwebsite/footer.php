<!-- ==================Book free marketing================= -->
<section class="bookfree-sec">
  <div class="container free-marketing-sec">
    <div class="row no-gutters">
      <div class="col-md-6 align-self-center order-1 order-md-0">
        <div class="">
        <h3><?php echo get_field('customers_imperative_section_title' , 13);?></h3>
        <p><?php echo get_field('customers_imperative_section_description' , 13);?></p>
        <button type="button" class="btn btn-color btn-font"><?php echo get_field('customers_contact_button' , 13);?></button>
      </div>
      </div>
      <div class="col-md-6">
        <div><img src="<?php echo get_field('customers_section_image' , 13);?>"  class="img-fluid" alt="banner-image"></div>
      </div>
    </div>
  </div>
</section>

<footer class="footer-sec">
  <div class="container footer-section">
  <div class="row">
    <div class="col-md-6">
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-B6.svg"  alt="">
      <div class="footer-location mt-3"><?php echo get_field('');?></div> 
      <?php  while (have_rows('contact_address', 13)) : the_row(); ?>
       <div class="footer-location"><a href="#" class="address"><?php echo get_sub_field('orgnr');?></a></div>    
       <div class="footer-location"><a href="#" class="address"> <?php echo get_sub_field('holding_lda');?></a></div>   
        <div class="footer-location"><a href="mailto:<?php echo get_sub_field('email');?>" class="address"><?php echo get_sub_field('email');?></a></div>
         <div class="footer-location"><a href="tel:<?php echo get_sub_field('phone_number');?>" class="address"> <?php echo get_sub_field('phone_number');?></a></div>
         <?php endwhile;?>
         <div class="social-icon">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" class="social-icon"  alt=""></a>  
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tiwtter.svg" class="social-icon"  alt=""></a>   
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/in.svg" class="social-icon" alt=""></a>  
        <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/installgram.svg"  class="social-icon" alt=""></a>
         </div>
            

      </div>
    </div>
    <div class="col-md-3">
           <h4>Company</h4>
           <?php  while (have_rows('company', 13)) : the_row(); ?>
            <div class="footer-location mt-3">
              <a href="<?php echo get_sub_field('home_link' , 13);?>" class="address"><?php echo get_sub_field('home', 13);?></a>
            </div>
            <div class="footer-location">
              <a href="<?php echo get_sub_field('about_us_link' , 13);?>" class="address"><?php echo get_sub_field('about_us', 13);?></a>
            </div>
            <div class="footer-location">
              <a href="<?php echo get_sub_field('lunar_blog_link' , 13);?>" class="address"><?php echo get_sub_field('lunar_blog', 13);?></a>
            </div>
            <div class="footer-location">
              <a href="<?php echo get_sub_field('our_specialists_link' , 13);?>" class="address"><?php echo get_sub_field('our_specialists', 13);?></a>
            </div>
            <div class="footer-location">
              <a href="<?php echo get_sub_field('contact_us_link' , 13);?>" class="address"><?php echo get_sub_field('contact_us', 13);?></a>
            </div>
            <div class="footer-location">
              <a href="<?php echo get_sub_field('privacy_&_policy_link', 13);?>" class="address"><?php echo get_sub_field('privacy_&_policy', 13);?></a>
            </div>
            <?php endwhile;?>
    </div>
    <div class="col-md-3">
      <h4>Services</h4>
      <?php $cat = get_terms('services-category');
	foreach ($cat as $catVal) {
		$args = array(
			'post_type' => 'services',
			'post_status' => 'publish',
			'tax_query' => array(
				array(
					'taxonomy' => 'services-category',
					'field'    => 'slug',
					'terms'    =>$catVal->slug,
				),
			)
		);
		$the_query = new WP_Query($args);
	?>
      <div class="footer-location">
        <a href="#" class="address"><?php echo $catVal->name ?></a>
      </div>
  <?php }
wp_reset_query();
	?>
      <!-- <div class="footer-location"> -->
        <!-- <a href="#" class="address">Free Audit</a> -->
      <!-- </div> -->
      <!-- <div class="footer-location"> -->
        <!-- <a href="#" class="address">Google Ads</a> -->
      <!-- </div> -->
      <!-- <div class="footer-location"> -->
        <!-- <a href="#" class="address">Cryptocurrency Marketing</a> -->
      <!-- </div> -->
      <!-- <div class="footer-location"> -->
        <!-- <a href="#" class="address">SEO </a> -->
      <!-- </div> -->
      <!-- <div class="footer-location"> -->
        <!-- <a href="#" class="address">SAAS Marketing</a> -->
      <!-- </div> -->
      <!-- <div class="footer-location"> -->
        <!-- <a href="#" class="address">Website & SEO</a> -->
      <!-- </div> -->
   


    </div>
  </div>
</div>
</footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/asstes/js/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/asstes/js/custom.js"></script>
   

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrapValidator.min.js"></script>

    <?php wp_footer(); ?>