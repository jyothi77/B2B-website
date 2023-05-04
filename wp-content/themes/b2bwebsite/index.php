<?php

/**
 *  Template Name: home
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>

<!doctype html>
<html lang="en">
  <head>
    
<?php get_header(); ?>
 </head>
  <body>
   <header class="header">
  <?php include_once('inc/nav.php');?>
</header>

<!--======================= Banner section ========================-->
<?php if (get_field('home_banner_section_visibility')) { ?>
   <section class="container-fluid" id="hero">
    <div class="container">
  <div class="row">
 <?php  while (have_rows('home__banner_content')) : the_row();?>
  <div class="col-md-6 position-relative mb-5">
    <div class="justify-content-center">
    <h4 class=""><?php echo get_sub_field('banner_title'); ?>
      <span class="conversion-font"><?php echo get_sub_field('banner_subtitle'); ?></span> </h4>
      <p class="p-font"><?php echo get_sub_field('banner_description'); ?></p>
    </div>
    <div>
      <img src="<?php echo get_sub_field('icons1'); ?>" class="img" alt="">
      <img src="<?php echo get_sub_field('icons2'); ?>"class="img"  alt="">
      <img src="<?php echo get_sub_field('icons3'); ?>" class="img" alt="">
      </div>
      <button type="button" class="btn btn-color btn-font"><?php echo get_sub_field('contact'); ?></button>
    </div>
    <div class="col-md-6 mt-5">
    <div>
          <img src="<?php echo get_sub_field('banner_image'); ?>"  class="img-fluid" alt="banner-image">
     </div>
</div>
<?php  endwhile;?>
</div>
</section>
<?php
} ?>


<!-- ============How It Workes Section================= -->
<?php if (get_field('how_it_works_section_visibility')) { ?>
<section class="container work-section">
  <div class="page-header">
    <p class="p-style">How it works</p>
   </div>
  </div>
  <div class="container">
  <div class="row mt-5">
  <?php  while (have_rows('works_section')) : the_row();?>
    <div class="col-md-8 offset-md-0 left mt-5">
      <div class="sr-number"><?php echo get_sub_field('sr_number1'); ?></div>
      <div class="d-flex">
      <div class="goal-image"> 
        <img src="<?php echo get_sub_field('works_section_image'); ?>" class="img" alt="">
      </div>
      <div class="goal-text">
        <span class="gola">
        <?php echo get_sub_field('works_section_title'); ?>
        </span>
        <div class="page-header2"></div>
        <p class="p-top"><?php echo get_sub_field('works_section_description'); ?></p>
      </div>
    </div>
    </div>
    <div class="col-md-8 offset-md-4 right mt-5">
      <div class="sr-number2"><?php echo get_sub_field('sr_number2'); ?></div>
      <div class="d-flex">
      <div class="goal-image">
        <img src="<?php echo get_sub_field('works_section_subimage'); ?>" class="img" alt="">
      </div>
      <div class="goal-text">
        <span class="gola">
        <?php echo get_sub_field('works_section_subtitle'); ?>
        </span>
        <div class="page-header2"></div>
        <p class="p-top"><?php echo get_sub_field('works_section_subdescription'); ?></p>
      </div>
      </div>
    </div>
    <?php endwhile;?>
    <!-- <div class="col-md-8 offset-md-0 left mt-5"> -->
      <!-- <div class="sr-number">03</div> -->
      <!-- <div class="d-flex"> -->
      <!-- <div class="goal-image"> -->
      <!-- <img src="<?php//echo get_template_directory_uri(); ?>/assets/images/Testimonial.png" class="img" alt=""> -->
    <!-- </div> -->
    <!-- <div class="goal-text"> -->
      <!-- <span class="gola"> -->
           <!-- Goals -->
      <!-- </span> -->
      <!-- <div class="page-header2"></div> -->
      <!-- <p class="p-top">To help your company grow, we want to understand your goals. With that, we can provide you with a complete road map towards achieving them.</p> -->
    <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->
    <!-- <div class="col-md-8 offset-md-4 right mt-5"> -->
      <!-- <div class="sr-number2">04</div> -->
      <!-- <div class="d-flex"> -->
      <!-- <div class="goal-image"> -->
      <!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/Testimonial.png" class="img" alt=""> -->
    <!-- </div> -->
    <!-- <div class="goal-text"> -->
      <!-- <span class="gola"> -->
           <!-- Goals -->
      <!-- </span> -->
      <!-- <div class="page-header2"></div> -->
      <!-- <p class="p-top">To help your company grow, we want to understand your goals. With that, we can provide you with a complete road map towards achieving them.</p> -->
    <!-- </div> -->
    <!-- </div> -->
  </div>
  </div>
</div>
</section>
<?php }?>
<!-- =============Free Meeting Section================ -->
<!-- <section class="marketing">
  <div class="container">
    <div class="row">
      
      <div class="col-md-6 position-relative2">
        <div class="page-header3"></div>
        <p class="p-font2">Book A Free Digital Marketing Consultation</p>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Email" aria-describedby="emailHelp">
       <input type="text" class="form-control2" id="exampleInputEmail2" placeholder="Book my free meeting" aria-describedby="emailHelp">
        </div>
    </div>
    
  </div>
</section> -->
<!-- Book A Free Digital Marketing Consultation -->
<section class="digital-marketing">
  <div class="free-Digital-sec">
    <div class="row no-gutters">
      <div class="col-md-6">
         <div class="digital-sec">
        <div class="page-header3"></div>
        <p class="p-font2"><?php echo get_field('digital_marketing_title');?></p> 
     </div>
 </div> 
      <div class="col-md-6">
        <div class="form-group">
          
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Email" aria-describedby="emailHelp">
         <input type="text" class="form-control2 mt-4 text-center" id="exampleInputEmail2" placeholder="Book my free meeting" aria-describedby="emailHelp">
          </div>
       
      </div>
    </div>
      </div>
    </div>
  </div>
</section>
<!-- <section>
  <h4 class="testimonial">Our Testimonials</h4>
  <div class="row">
    <div class="col-md-8 offset-md-2 left">
  
      <div class="d-flex">
      <div class="goal-image"> 
        <img src="assets/images/Image.png" class="img2" alt="">
      </div>
     <p class="p-top1">Lunar Strategy helped us with our digital marketing for 4 months now and still helps us. Great service and highly recommended.
      <span class="gola1">— Kimmo Hakonen - Skrum Master at DaGear AB</span>
        </p>
        
      </div>
    </div>
    
    </div>
  </div>
</section> -->
<?php if (get_field('our_testimonials_section_visibility')) {
  while (have_rows('our_testimonials_content')) : the_row();  ?>
<section class="mt-5 work-section">
  <h4 class="testimonial">Our Testimonials</h4>
  <div class="page-header4"></div>
  
<div class="mt-5">
  <div class="container carouseles">
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-touch="false" data-interval="false">
  <div class="carousel-inner">
 <?php while (have_rows('our_testimonials')) : the_row();  ?>
    <div class="carousel-item active testimonial-cards">
      <div class="d-flex">
      <img src="<?php echo get_sub_field('our_testimonials_image');?>" class="img2" alt="">
      <p class="p-testiomiall"><?php echo get_sub_field('our_testimonials_description');?>
        <span class="gola1"><?php echo get_sub_field('our_testimonials_title');?></span>
      </p>
    </div>
    </div>
   
    <!-- <div class="carousel-item testimonial-cards"> -->
      <!-- <div class="d-flex"> -->
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Image.png" class="img2" alt=""> -->
      <!-- <p class="p-testiomiall">Lunar Strategy helped us with our digital marketing for 4 months now and still helps us. Great service and highly recommended. -->
        <!-- <span class="gola1">— Kimmo Hakonen - Skrum Master at DaGear AB</span> -->
      <!-- </p> -->
    <!-- </div> -->
    <!-- </div> -->

    <!-- <div class="carousel-item testimonial-cards"> -->
      <!-- <div class="d-flex"> -->
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Image.png" class="img2" alt=""> -->
      <!-- <p class="p-testiomiall">Lunar Strategy helped us with our digital marketing for 4 months now and still helps us. Great service and highly recommended. -->
        <!-- <span class="gola1">— Kimmo Hakonen - Skrum Master at DaGear AB</span> -->
      <!-- </p> -->
      <!-- </div> -->
    <!-- </div> -->
    <?php endwhile;?>
  </div>
 
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleControlsNoTouching" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControlsNoTouching" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>

</div>
</div>
</div>
</section>
<?php endwhile; }?>



<?php if (get_field('digital_marketing_articles_visibility')) {
  while (have_rows('digital_marketing_articles_content')) : the_row();  ?>
<section class="digital-marketing">
  <div class="free-Digital-sec container">
    <div class="row no-gutters">
 
      <div class="col-md-4">
            <div class="digital-mar">
           <div class="page-header3"></div>
           <p class="p-font4"><?php echo get_field('digital_marketing_title');?></p> 
           </div>
      </div>
    
      <?php  while (have_rows('digital_marketing')) : the_row();  ?>
      <div class="col-md-4">
        <div class="card ml-3 busines-card">
          <div class="card-body">
            <h2 class="card-title text-white"><?php echo get_sub_field('cards_title');?>
             </h2>
            <p class="card-text text-white"><?php echo get_sub_field('cards_description');?></p>
            <a href="#" class="btn btn-path">Read More <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Path.svg" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
      <?php endwhile;?>
      <!-- <div class="col-md-4"> -->
        <!-- <div class="card ml-3 busines-card"> -->
          <!-- <div class="card-body"> -->
            <!-- <h2 class="card-title text-white">Top 5 SaaS Businesses – -->
              <!-- August 2021</h2> -->
            <!-- <p class="card-text text-white">Are you currently using one of the top SaaS businesses, according to the team at Lunar Strategy? Check out this list of our top SaaS</p> -->
            <!-- <a href="#" class="btn btn-path">Read More <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Path.svg" class="img-fluid" alt=""></a> -->
          <!-- </div> -->
        <!-- </div> -->
      <!-- </div> -->
    </div>
</div>
</section>
<?php endwhile; }?>


 <!-- <section class="treatment">
  <div class="container">
  <div class="row">
    <div class="col-md-4 position-relative3 mt-3">
     
        <div class="page-header3"></div>
        <p class="p-font2">Book A Free Digital Marketing Consultation</p>
      
    </div>
    <div class="col-md-4 treatment-card mb-3">
      <div class="card treatment-cards">
        <div class="card-body card-width">
          <h5 class="card-title text-white">Top 5 SaaS Businesses –
            August 2021</h5>
          <p class="card-text text-white p-card">Lead conversion is an essential goal for any business. Be it converting site visitors into members, increasing their email subscription list, or converting members into</p>
          <a href="#" class="btn treatment-cards-button">Read More <img src="assets/images/Path.svg" alt="img-fluid"></a>
        </div>
      </div>
    </div>
    <div class="col-md-4 treatment-card mb-3">
      <div class="card treatment-cards">
        <div class="card-body card-width">
          <h5 class="card-title text-white">Top 5 SaaS Businesses –
            August 2021</h5>
          <p class="card-text text-white p-card">Lead conversion is an essential goal for any business. Be it converting site visitors into members, increasing their email subscription list, or converting members into</p>
          <a href="#" class="btn treatment-cards-button">Read More <img src="assets/images/Path.svg" alt="img-fluid"></a>
        </div>
      </div>
    </div>
  </div>
</div>
</section> -->



 <!-- <section class="mt-5"> -->
  <!-- <div class="row"> -->
    <!-- <div class="col-md-7"> -->
      <!-- <div class="dapixel-sec"> -->
        <!-- <div class="container"> -->
      <!-- <h4>Why DaPixel?</h4> -->
      <!-- <p>To get customers, it's imperative to be seen by the mass. Every successful company is unique and needs contrasting digital marketing strategies. Book a meeting with us and we will help you find the correct strategy for your company.</p> -->
      <!-- <button type="button" class="btn btn-color btn-font">Contact Us</button> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- <div class="col-md-5"> -->
      <!-- <div> -->
        <!-- <img src="assets/images/Marketing 1.png"  class="img-fluid" alt="banner-image"> -->
   <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->
<!-- </section>  -->
<!-- <div class="row"> -->
  <!-- <div class="col-md-6"> -->
    <!-- <div class="card dapixel-sec p-0"> -->
      <!-- <div class="card-body"> -->
        <!-- <h5 class="card-title">Special title treatment</h5> -->
        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->
  <!-- <div class="col-md-6"> -->
     <!-- <div class="card"> -->
    <!-- <img src="assets/images/Marketing 1.png" class="card-img" alt="..."> -->
  <!-- </div> -->
<!--  -->
<!--  -->
<!--  -->
  <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->
<!-- </div> -->

<?php get_footer();?>
</body>
</html>