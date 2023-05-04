<nav class="navbar navbar-expand-lg navbar-light nav-font1">
    <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-B6.svg" width="100" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav  nav-font2 ml-auto nav-font">
    <?php  while (have_rows('menu_section', 11)) : the_row(); ?>
        <li class="nav-item active">
          <a class="nav-link nav-padding  nav-font3" href="<?php echo get_sub_field('services_link', 11);?>"><?php echo get_sub_field('services', 11);?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-padding nav-font3" href="<?php echo get_sub_field('industries_link', 11);?>"><?php echo get_sub_field('industries', 11);?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-padding nav-font3" href="<?php echo get_sub_field('about_link', 11);?>"><?php echo get_sub_field('about_us', 11);?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-padding nav-font3" href="<?php echo get_sub_field('blog', 11);?>" role="button" data-toggle="dropdown" aria-expanded="false">
          <?php echo get_sub_field('blog');?>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <button type="button" class="btn  contact-button nav-padding nav-font"> <?php echo get_sub_field('contact_us', 11);?></button>
      </ul>
      <?php endwhile;?>
    </div>
    </div>
  </nav>