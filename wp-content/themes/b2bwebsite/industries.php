
<?php

/**
 *  Template Name: industries
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
<?php if (get_field('industries_banner_section_visibility')) { ?>
   <section class="container-fluid" id="hero">
    <div class="container">
  <div class="row">
  <?php  while (have_rows('industries_banner_content')) : the_row();?>
  <div class="col-md-6 position-relative mb-5">
    <div class="justify-content-center">
    <h4 class="">
    <?php echo get_sub_field('banner_title'); ?>
    </h4>
      <p class="p-font-industries"><?php echo get_sub_field('banner_description'); ?></p>
    </div>
    </div>
    <div class="col-md-6 mt-5">
    <div>
          <img src="<?php echo get_sub_field('banner_image'); ?>"  class="img-fluid" alt="banner-image">
     </div>
</div>
<?php  endwhile;?>
</div>
</section>
<?php }?>
<!--======================= Banner section End========================-->
<!-- ====Our industries & expertise===== -->

<section class="mb-5">
  <div class="container">
    <div class="row">
    <?php  while (have_rows('cards_section')) : the_row();?>
    <div class="col-md-4">
      <div class="card cards-indus border-0">
        <div class="card-body text-center industries-card">
          <img src="<?php echo get_sub_field('cards_image'); ?>" width="100" hight="100"alt="">
          <h5 class="card-title"><?php echo get_sub_field('cards_title'); ?></h5>
          <p class="card-text"><?php echo get_sub_field('cards_description'); ?></p>
       
        </div>
      </div>
    </div>
    <?php endwhile;?>
  </div>
  </div>
</section>
<!-- ====Our industries & expertise end===== -->
<!-- =========digital marketing consultation Section==== -->
<?php if (get_field('market_consolution_section_visibility')) { ?>
<section class="digital-marketing">
  <div class="container">
    <div class="text-center market-consolution">
      <h3 class="digital-h"><?php echo get_field('market_consolution_title'); ?></h3>
      <p class="text-center px-md-5 digital-p">
      <?php echo get_field('market_consolution_description'); ?>
      </p>
        <div class="form-group">
        <input type="text" class="form-control2 mt-4 text-center" id="exampleInputEmail1" placeholder="Yes, I would like some advice" aria-describedby="emailHelp">
       </div>
       </div>
    </div>
    </div>
  </div>
</section>
<?php }?>
<!-- =========digital marketing consultation Section==== -->
<!-- ================our-testimonial========== -->
<?php if (get_field('our_testimonials_section_visibility')) { ?>
    <?php  while (have_rows('our_testimonials_content')) : the_row();?>
<section class="mt-5 work-section">
  <h4 class="testimonial"><?php echo get_field('our_testimonials_section_title');?></h4>
  <div class="page-header4"></div>
  
<div class="mt-5">
  <div class="container carouseles">
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-touch="false" data-interval="false">
  <div class="carousel-inner">
  <?php  while (have_rows('our_testimonials')) : the_row();?>
    <div class="carousel-item active testimonial-cards">
      <div class="d-flex">
      <img src="<?php echo get_sub_field('our_testimonials_image');?>" class="img2" alt="">
      <p class="p-testiomiall"><?php echo get_sub_field('our_testimonials_description');?>
        <span class="gola1"><?php echo get_sub_field('our_testimonials_title');?></span>
      </p>
    </div>
</div>
  <?php endwhile;?>
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
  <!-- ================our-testimonial-end========== -->
   <!-- ================social-media-growth-section========== -->
   <?php if (get_field('social_media_growth_section_visibility')) { ?>
  <section class="growth-section mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div>
            <img src="<?php echo get_field('growth_section_image');?>" class="img-fluid" alt="saasgrowth-img">
          </div>
        </div>
        <div class="col-md-6">
          <div class="growth">
            <h3 class="growth-h"><?php echo get_field('growth_section_title');?></h3>
            <p class="growth-p"><?php echo get_field('growth_section_description');?></p>
            <button type="button" class="btn growth-button"><?php echo get_field('growth_section_button');?></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php }?>
  
  <!-- ================social-media-growth-section-end========== -->

<!-- =========Contact Section==== -->
<?php if (get_field('contact_section_visibility')) {?>

<section class="container">
<div class="row marketing-contact">
      <div class="page-header5"></div>
    <div class="col-md-6">
    <?php while (have_rows('contact_section_content')) : the_row();?>
        <div class="contact-margin">
            <h3 class="contact-font">
            <?php echo get_sub_field('contact_title'); ?></h3>
                <div class="marketing-strategy">
                  <a href="#" class="address"> <?php echo get_sub_field('orgnr'); ?></a></div>   
<div class="marketing-strategy"><a href="#" class="address"> <?php echo get_sub_field('lunar_holding_lda'); ?></a></div>   
 <div class="marketing-strategy"><a href="mailto:<?php echo get_sub_field('email');?>" class="address"><?php echo get_sub_field('email'); ?></a></div>
  <div class="marketing-strategy"><a href="tel:<?php echo get_sub_field('phone_number');?>" class="address"><?php echo get_sub_field('phone_number'); ?> </a></div>
  <div class="social-icon2">
    <a href="#"><img src="<?php echo get_sub_field('icon1'); ?>" class="social-icon2"  alt=""></a>  
    <a href="#"><img src="<?php echo get_sub_field('icon2'); ?>" class="social-icon2"  alt=""></a>   
    <a href="#"><img src="<?php echo get_sub_field('icon3'); ?>" class="social-icon2" alt=""></a>  
    <a href="#"> <img src="<?php echo get_sub_field('icon4'); ?>"  class="social-icon2" alt=""></a>
   
        </div>
        <button type="button" class="btn book-button mt-3">Book a free consultation</button>
    </div>
    </div>
    <?php  endwhile;?>
    <div class="col-md-6">
      <div class="contact-margin">
        <h3>Or you can also contact us here</h3>
       
       
          <div>
            <form class="formValidation">
              <div class="form-group">
              <input
                  type="text"
                  class="form-control contact-style"
                  name="fname"
                  placeholder="First name"
                  required
                  data-bv-notempty-message="Please enter name"
                />
              </div>
              <div class="form-group">
             
                <input
                  type="email"
                  class="form-control contact-style"
                  iplaceholder="name@example.com"
                  name="email"
                  placeholder="email"
                  required
                  data-bv-notempty-message="Please enter Email"
                />
              </div>
              <div class="form-group">
               
                <input
                  class="form-control contact-style  mb-3"
                  type="text"
                  name="Subject"
                  placeholder="Subject"
                  required
                  data-bv-notempty-message="Please enter subject"
                >
                </div>
              <div class="form-group">
               
                <textarea
                  class="form-control contact-style"
                  rows="5" maxlength="250"
                  name="textarea"
                  placeholder="text-area"
                  required
                  data-bv-notempty-message="Please enter Description"
                ></textarea>
              </div>
                          
              <div class="form-group">
                <button type="submit" class="btn btn-info  btn-submit mt-3 has-spinner wpcf7-submit">Submit</button>
              </div>
              
              <div class="wpcf7-response-output" aria-hidden="true"><span class="spinner"></span></div>
       </form>
</div>
    </div>
</div>
<?php //echo do_shortcode('[contact-form-7 id="242" title="Contact"]');
?>
</section>
<?php }?>
 <!-- ================Trusted by companies around the world-start========== -->
 <section class="companies">
  <div class="mb-30 mb-md-5">
    <h3 class="text-center companies-p"><?php echo get_field('companies_title'); ?></h3>
  </div>
  <div class="container">
  <div class="row justify-content-between align-items-center">
  <?php    while (have_rows('industry_image')) : the_row();?>
    <div class="col-6  col-md-2">
      <div> <img src="<?php echo get_sub_field('industry_image'); ?>"  class="mx-auto img-fluid" alt=""></div>
    
    </div>
    <?php endwhile;?>
  </div>
</div>
 </section>
 <!-- ================Trusted by companies around the world-end========== -->
  

 <?php get_footer();?>

    
 
 <script>
if ($(".formValidation").length) {
  $(".formValidation")
    .bootstrapValidator({
      feedbackIcons: {
        valid: "glyphicon glyphicon-ok",
        invalid: "form-remove",
        validating: "glyphicon glyphicon-refresh",
      },
    })
    .on("success.form.bv", function (e) {
      e.preventDefault();
      var oForm = $(e.target);
      oForms.submitForm(e, oForm);
    });
}
    </script>
</body>
</html>