<?php
// Product Custom Post Type
function create_custom_post_type_blogs()
{
    // set up product labels
    $labels = array(
        'name' => 'Blogs',
        'singular_name' => 'Blog',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Blog',
        'edit_item' => 'Edit Blog',
        'new_item' => 'New Blog',
        'all_items' => 'All Blog',
        'view_item' => 'View Blog',
        'search_items' => 'Search Blog',
        'not_found' =>  'No Blogs Found',
        'not_found_in_trash' => 'No Blogs found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Blogs',
    );

    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'blogs'),
        'query_var' => true,
        'taxonomies' => array('post_tag', 'post'),
        'menu_icon' => 'dashicons-welcome-add-page',
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
    register_post_type('blogs', $args);

    $labels = array(
        'name'              => _x('Blogs Categories', 'phoronesis'),
        'singular_name'     => _x('Blogs Category', 'phoronesis'),
        'search_items'      => __('Search Category', 'phoronesis'),
        'all_items'         => __('All Category', 'phoronesis'),
        'parent_item'       => __('Parent Category', 'phoronesis'),
        'parent_item_colon' => __('Parent Category:', 'phoronesis'),
        'edit_item'         => __('Edit Category', 'phoronesis'),
        'update_item'       => __('Update Category', 'phoronesis'),
        'add_new_item'      => __('Add New Category', 'phoronesis'),
        'new_item_name'     => __('New Category Name', 'phoronesis'),
        'menu_name'         => __('Category', 'phoronesis'),
    );

    $rewrite = array(
        'slug'                       => 'blogs-category',
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

    register_taxonomy('blogs-category', array('blogs'), $args);
}
add_action('init', 'create_custom_post_type_blogs');
add_action('wp_ajax_load_posts_by_ajax_blogs', 'load_posts_by_ajax_blogs_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax_blogs', 'load_posts_by_ajax_blogs_callback');

function load_posts_by_ajax_blogs_callback()
{
    $page = (isset($_POST['page'])) ? $_POST['page'] : 0;
    $cat = isset($_POST['cat']) ? $_POST['cat'] : "";
    // check_ajax_referer('load_more_posts', 'security');
    check_ajax_referer('load_more_posts', 'security');


    if (isset($_GET['cat'])) {
        $args = array(
            'post_type' => 'blogs',
            'post_status' => 'publish',

            'tax_query' => array(
                array(
                    'taxonomy' => 'blogs-category',
                    'field'    => 'slug',
                    'terms'    => $_GET['cat'],
                ),
            ),

            'posts_per_page' => 3,
            'paged' => $page,
            'offset' => ($page - 1) * 3 + 16,
        );
    } else {
        $args = array(
            'post_type' => 'blogs',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'paged' => $page,
            'offset' => ($page - 1) * 3 + 16,
        );
    }

    $the_query = new WP_Query($args);
    echo "##" . $count = $the_query->found_posts . "##";




    while ($the_query->have_posts()) {
        $the_query->the_post();
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
        $trimTitle = wp_trim_words(get_the_title(), $num_words = 15);
        $shortdescription = wp_trim_words(get_the_content(), $num_words = 18);
        $terms = get_the_terms($post->ID, 'blogs-category');
        // $nameTerm = $terms[0]->name;
    }
?>

        <?php
        $mycontent = $post->post_content; // wordpress users only
        $word = str_word_count(strip_tags($mycontent));
        $m = ceil($word / 200);
        $s = ceil($word % 200 / (200 / 60));
        $est = $m . ' minute'
        ?>
        <div class="col-md-4 blogs-grid-col">
            <div class="card blogs-card">
                <div class="blogs_img">
                    <img src="<?php echo $image[0]; ?>" class="img img-fluid" alt="image">
                </div>
                <div class="card-content">
                    <div class="card-title ">
                        <h3><?php echo $trimTitle; ?></h3>
                        <span> <?php the_modified_date('j F Y'); ?>
                            ,<?php echo $est; ?> read</span>
                    </div>
                    <div class="card-description my-3">
                        <p class="card_description"><?php echo $shortdescription; ?></p>
                    </div>
                    <div class="blogs-btn">
                        <a href="<?php the_permalink(); ?>" class="read-more-btn">Read more</a>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
    wp_reset_query();

?>