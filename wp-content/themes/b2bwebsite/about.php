<?php

/**
 *  Template Name: about
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

<?php get_header();?>
  <body>
   <header class="header">
    <?php include_once('inc/nav.php');?>
   </header>

<!--======================= Banner section ========================-->
<?php if (get_field('about_banner_section_visibility')) { ?>
   <section class="container-fluid" id="hero">
    <div class="container">
  <div class="row">
  <?php  while (have_rows('about_banner_content')) : the_row();?>
  <div class="col-md-6 position-relative mb-5">
    <div class="justify-content-center">
    <h4 class="">
    <?php echo get_sub_field('banner_title'); ?>
</h4>
      <p class="p-font"><?php echo get_sub_field('banner_description'); ?></p>
    </div>
    <!-- <div> -->
      <!-- <img src="assets/images/Group.png" class="img" alt=""> -->
      <!-- <img src="assets/images/si-image.png"class="img"  alt=""> -->
      <!-- <img src="assets/images/Fiverr-Pro.png" class="img" alt=""> -->
      <!-- </div> -->
      <!-- <button type="button" class="btn btn-color btn-font">Contact Us</button> -->
    </div>
    <div class="col-md-6 mt-5">
    <div>
          <img src="<?php echo get_sub_field('banner_image'); ?>"  class="img-fluid" alt="banner-image">
     </div>
</div>
<?php endwhile;?>
</div>
</section>
<?php } ?>
<!-- ====Make a Difference For Your Business!===== -->
<?php if (get_field('business_section__visibility')) { ?>
<section class="container">
<div><h3 class="text-center"><?php echo get_field('business_section_title');?></h3></div>
 
    <?php 
 while(have_rows('business_section')) : the_row(); 
 $type = get_sub_field('type');
  echo $type;
  $text_div_class="";
  $text_2div_class="";
   $image_div_class="";
   $image_2div_class="";
  
  


   
   switch ($type) {
    case "text-image":
       $text_div_class="businesmake";
        $image_div_class="img-fluid";
            
       break;
    case "image-text":
        
        $image_div_class="img-fluid";
       
        $text_div_class="businesmake";
     
         break;
  
          case "only-image":
             $image_div_class="img-fluid";
            $text_div_class="businesmake d-none";
           
 
 case "only-text": 
  
    $text_div_class="businesmake";
 $image_2div_class="img-fluid d-none";
 break;
        
        
          
          default:
          $image_div_class="col-md-6";
     
          $image_2div_class="";
          $text_div_class="";
          $text_2div_class="";



  }
 ?>
   <div class="row">
        <div class="col-md-6">
           <div class="<?php echo  $text_div_class;?>"> <?php echo get_sub_field('business_section_description'); ?>
         </div>
      </div>
        <div class="col-md-6">
        <img src="<?php echo get_sub_field('business_section_image'); ?>"  class=" img-fluid<?php echo  $image_div_class; ?>" alt=""> 
        </div>
          </div>
      
        <!-- <div class="col-md-6 mt-3">  -->
             <!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/productrelease.png"  class="img-fluid" alt=""> </div> -->
        <!-- <div class="col-md-6"> -->
            <!-- <div class="businesmake">  -->
        <!-- <p>We understand that not every company has an in-house department that is always updated and tracks the algorithms, trends, and changes within digital marketing, but we strongly believe every company should have somebody to do so!</p> -->
        <!-- <p>Therefore, we started Lunar Strategy digital marketing agency – to offer companies solutions that are compl -->
        <!-- <p>We tailor high-performing marketing strategies intended to serve and benefit your company long term.</p>  -->
        <!-- <p>  Lunar Strategy is a professional digital marketing agency with a highly motivated team.</p>   -->
        <!-- </div> -->
    <!-- </div> -->
</div>
<?php  endwhile;?>
   
</section>
<?php } ?>



<!-- =========Contact Section==== -->
<?php if (get_field('contact_section_visibility')) {?>

<section class="container">
    <div class="row marketing-contact">

    <div class="col-md-6">
    <?php    while (have_rows('contact_section_content')) : the_row();?>
        <div class="contact-margin">
            <h3 class="contact-font"> 
            <?php echo get_sub_field('contact_title'); ?></h3>
                <div class="marketing-strategy">
                  <a href="#" class="address"><?php echo get_sub_field('orgnr'); ?></a></div>   
<div class="marketing-strategy"><a href="#" class="address"><?php echo get_sub_field('lunar_holding_lda'); ?></a></div>   
 <div class="marketing-strategy"><a href="mailto:<?php echo get_sub_field('email');?>" class="address"><?php echo get_sub_field('email'); ?></a></div>
  <div class="marketing-strategy"><a href="tel:<?php echo get_sub_field('phone_number');?>" class="address"><?php echo get_sub_field('phone_number'); ?> </a></div>
  <div class="social-icon2">
    <a href="#"><img src="<?php echo get_sub_field('icon1'); ?>" class="social-icon2"  alt=""></a>  
    <a href="#"><img src="<?php echo get_sub_field('icon2'); ?>" class="social-icon2"  alt=""></a>   
    <a href="#"><img src="<?php echo get_sub_field('icon3'); ?>" class="social-icon2" alt=""></a>  
    <a href="#"> <img src="<?php echo get_sub_field('icon4'); ?>"  class="social-icon2" alt=""></a>
   
        </div>
        <button type="button" class="btn book-button mt-3"><?php echo get_sub_field('button'); ?></button>
    </div>
    </div>
    <?php  endwhile;?>
    <div class="col-md-6">
      <div class="contact-margin">
        <h3>Or you can also contact us here</h3>
       
       
          <div>
          <div role="form" class="wpcf7" id="wpcf7-f242-o1" lang="en-US" dir="ltr">
   <div class="screen-reader-response">
      <p role="status" aria-live="polite" aria-atomic="true"></p>
      <ul></ul>
   </div>
            <!-- <form class="formValidation"> -->
            <form action="" method="post" class="wpcf7-form init formValidation" novalidate="novalidate"  data-toggle=
   <div style="display: none;">
      <input type="hidden" name="_wpcf7" value="242">
      <input type="hidden" name="_wpcf7_version" value="5.6.3">
      <input type="hidden" name="_wpcf7_locale" value="en_US">
      <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f242-o1">
      <input type="hidden" name="_wpcf7_container_post" value="0">
      <input type="hidden" name="_wpcf7_posted_data_hash" value="">
   </div>
              <div class="form-group">
              <input
                  type="text"
                  class="form-control contact-style"
                  name="your-name"
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
                  name="your-email"
                  placeholder="email"
                  required
                  data-bv-notempty-message="Please enter Email"
                />
              </div>
              <div class="form-group">
               
                <input
                  class="form-control contact-style  mb-3"
                  type="text"
                  name="your-subject"
                  placeholder="Subject"
                  required
                  data-bv-notempty-message="Please enter subject"
                >
                </div>
              <div class="form-group">
               
                <textarea
                  class="form-control contact-style"
                  rows="5" maxlength="250"
                  name="your-message"
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
<?php } ?>
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