<?php

/**
 *  Template Name: freeaudits
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
<?php if (get_field('freeaudits_banner_section_visibility')) { ?>
   <section class="container-fluid" id="hero">
    <div class="free-image">
        <img src="<?php echo get_field('freeaudits_banner_subimage'); ?>" class="img-fluid" alt="">
     </div>
    <div class="container">
  <div class="row">
  <?php  while (have_rows('freeaudits_banner_content')) : the_row();?>
  <div class="col-md-6 position-relative-audits mb-5">
    <div class="justify-content-center">
    <h4 class="">
    <?php echo get_sub_field('banner_title'); ?>
         </h4>
      </div>
   <div>
    <div class="audits-cards1 d-none d-sm-block">
        <h3 class="Step-heading"><?php echo get_sub_field('cards_heading'); ?></h3>
        <p class="audits-p"><?php echo get_sub_field('cards_description'); ?></p>
    </div>
</div>
 </div>
    <div class="col-md-6 mt-5">
    <div class="audits-image">
          <img src="<?php echo get_sub_field('banner_image'); ?>"  class="img-fluid" alt="banner-image">
     </div>
     <div class="audits-cards2 d-none d-sm-block">
        <h3 class="Step-heading"><?php echo get_sub_field('sub_cards__heading'); ?></h3>
        <p><?php echo get_sub_field('sub_cards__description'); ?></p>
    </div>
</div>
<?php  endwhile;?>
</div>
</section>
<?php }?>
<!--===== free-meeting-section===== -->
<?php if (get_field('freeaudits_banner_section_visibility')) { ?>
<section class="digital-marketing mb-5">
    <div class="container">
        <div class="text-center">
            <h3 class="text-white">Who are we?</h3>
            <div class="free-p">
            <p class="text-white">A growing team of digital marketing professionals, who most of us previously worked for the official Google Ads support team. We are certified and specialized in Google Ads, Merchant Center, Google Analytics, YouTube, and Display marketing.</p>
            <p  class="text-white">We are dedicated to giving companies cost-effective, high-quality marketing support that we know they need. Through our tailored digital marketing strategies, we help companies reach their business goals.</p>
           </div>
        </div>
    </div>
</section>
<?php }?>
<!--===== free-meeting-section-end===== -->

<section class="container">
    <div class="row marketing-contact">
      <div class="page-header5"></div>
    <div class="col-md-6">
        <div class="contact-margin">
            <h3 class="contact-font"> Let us discuss your
                marketing strategy!</h3>
                <div class="marketing-strategy">
                  <a href="#" class="address"> Org.nr: 559264-1871</a></div>   
<div class="marketing-strategy"><a href="#" class="address"> Lunar Holding LDA</a></div>   
 <div class="marketing-strategy"><a href="mailto:sales@dollarbirdinc.com" class="address">info@dapixel.io</a></div>
  <div class="marketing-strategy"><a href="tel:+1978-612-6344" class="address">i+467-20478390 </a></div>
  <div class="social-icon2">
    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook2.svg" class="social-icon2"  alt=""></a>  
    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tiwtter2.svg" class="social-icon2"  alt=""></a>   
    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/inc2.svg" class="social-icon2" alt=""></a>  
    <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/installgram2.svg"  class="social-icon2" alt=""></a>
   
        </div>
        <button type="button" class="btn book-button mt-3">Book a free consultation</button>
    </div>
    </div>
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
                <button type="submit" class="btn btn-info  btn-submit mt-3">Submit</button>
              </div>
             
            </form>
      </div>
</div>
</section>

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