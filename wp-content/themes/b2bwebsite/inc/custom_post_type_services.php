<?php 
// Product Custom Post Type
function create_custom_post_type_services() {
    // set up product labels
    $labels = array(
        'name' => 'Services',
        'singular_name' => 'Services',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Services',
        'edit_item' => 'Edit Services',
        'new_item' => 'New Services',
        'all_items' => 'All Services',
        'view_item' => 'View Services',
        'search_items' => 'Search Services',
        'not_found' =>  'No services Found',
        'not_found_in_trash' => 'No services found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Services',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'services'),
        'query_var' => true,
        'taxonomies' => array('post_tag','post'),
        'menu_icon' => 'dashicons-dashboard',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'services', $args );
    
    $labels = array(
        'name'              => _x( 'services Categories', 'phoronesis' ),
        'singular_name'     => _x( 'services Category', 'phoronesis' ),
        'search_items'      => __( 'Search Category', 'phoronesis' ),
        'all_items'         => __( 'All Category', 'phoronesis' ),
        'parent_item'       => __( 'Parent Category', 'phoronesis' ),
        'parent_item_colon' => __( 'Parent Category:', 'phoronesis' ),
        'edit_item'         => __( 'Edit Category', 'phoronesis' ),
        'update_item'       => __( 'Update Category', 'phoronesis' ),
        'add_new_item'      => __( 'Add New Category', 'phoronesis' ),
        'new_item_name'     => __( 'New Category Name', 'phoronesis' ),
        'menu_name'         => __( 'Category', 'phoronesis' ),
    );
    
    $rewrite = array(
        'slug'                       => 'services-category',
        'with_front'                 => true,
        'hierarchical'               => false,
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'query_var' => true,
        'rewrite'                    => $rewrite,
    );
    
    register_taxonomy( 'services-category', array( 'services' ) , $args );

   }
add_action( 'init', 'create_custom_post_type_services' );

add_action('wp_ajax_load_posts_by_ajax_services', 'load_posts_by_ajax_services_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax_services', 'load_posts_by_ajax_services_callback');
add_filter('wpdocs_hack_wp_title_for_home', 'wp_title');
function load_posts_by_ajax_services_callback(){
    $page=$_POST['page'];
    $cat = isset($_POST['cat'])?$_POST['cat']:"";
    if($cat=='all' || $cat=="" ){
    $args = array(
        'post_type'      => 'services',
        'post_status' => 'publish',
        'posts_per_page' =>6,
        'offset'=>($page-1)*6+1
        // 'tax_query' => array(
        // 	array(
        // 		'taxonomy' => 'services-category',
        // 		'field'    => 'name',
        // 		'terms'    => array('market','business'),
        // 	))
    );
}else{
    $args = array(
        'post_type'      => 'services',
        'post_status' => 'publish',
        'posts_per_page' =>6,
        'offset'=>($page-1)*6+1,
        'tax_query' => array(
        	array(
        		'taxonomy' => 'services-category',
        		'field'    => 'slug',
        		'terms'    => $cat,
        	))
    );
}
    $query = new WP_Query($args);
    echo "##" . $count =  $query ->found_posts . "##";
    while ( $query->have_posts() ) {
        $query->the_post();
        $trimTitle = wp_trim_words(get_the_title(), $num_words = 15);
        $shordescription = wp_trim_words(get_the_content(), $num_words = 30);
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'Services-thumbnail');
        ?>

<div class=" col-md-4 my-3">
          
          <div class="card Services-card m-0">
            <a href="<?php the_permalink() ?>" class="card-link"></a>
            <img src="<?php echo $image[0];?>" class="img img-fluid card-img-top"  alt="..." />
            <div class="card-body">
                <h6>
                <?php echo $trimTitle ?>
                </h6>
                <span><?php the_author(); ?>, <?php the_modified_date(); ?></span>
         
                <p class="card-text d-none d-md-block">
                <?php echo $shordescription ?>
                </p>
            </div>
        </div>
        
    </div>
          <?php 
        
    }
    wp_reset_query();
}
?>