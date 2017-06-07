<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );


 
   $query_args = array(
		'family' => 'Open+Sans|Oswald|Dosis|Roboto+Slab|Roboto:100|Raleway|Biryani:200|Work+Sans:200|Rajdhani:400',
		'subset' => 'latin,latin-ext',
	);
	
	
	wp_enqueue_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
	wp_enqueue_style( 'fontscom',  "//fast.fonts.net/cssapi/996199d0-ca5a-4ed0-97ce-87cc0efa7e8b.css" ,array(), null ); 
    

}

function get_wp_gallery_ids($post_content) {
	
			 //$post_content = $post->post_content;
			 preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
}


function title_header ($titletype){
	
$thepostcounter = get_post_meta(get_the_ID(),'incr_number',true);
$thesubheader = get_post_meta(get_the_ID(),'infobartitle',true);
$testvar = 'Nup';
if (!$titletype) { 
	$titletype = 1;
	$testvar = 'Yup';
	
}
if ($titletype == 1) {
	?>
	<span class="keyline"></span>
		    		<span class="navmnth">0</span>
		    		<span class="nav-point">.</span>
		    		<span id="article-number" class="navyr"><?php if ($thepostcounter) { echo $thepostcounter;} else { echo '00';}?></span>
					<span class="keyline"></span>
		    		<span class="sub-article">
		    			<span id="post-title" class="subarticle"><?php the_title(); ?></span><span class="sub-article-wrap"><?php ?><span class="sub-subarticle sub"></br></span></span>
		    		</span>
		 <?php
			 }
			 else
			 {?>
				 	
		    		<span class="sub-article">
		    			<span id="post-title" class="subarticle"><?php the_title(); ?></span><span class="sub-article-wrap"><?php  ?><span class="sub-subarticle sub"></br></span></span>
		    		</span>
		    		<?php
			 }
			 
}

function digidol_site_title($titletype) {
    do_action('digidol_site_title', $titletype);
} // end digidol_site_title

add_action('digidol_site_title','title_header', 10, 1);


// this is the function to only output the post number


function title_post_number (){
	
$thepostcounter = get_post_meta(get_the_ID(),'incr_number',true);
	?>
	<span class="keyline"></span>
		    		<span class="navmnth">0</span>
		    		<span class="nav-point">.</span>
		    		<span id="article-number" class="navyr"><?php if ($thepostcounter) { echo $thepostcounter;} else { echo '00';}?></span>
							 <?php
}

function digidol_site_title_post_only() {
    do_action('digidol_site_title_post_only');
} // end digidol_site_title

add_action('digidol_site_title_post_only','title_post_number');



function digidol_hero() {
    do_action('digidol_hero');
} // end digidol_hero
// my gallery function, add options to turn on or off caption. // add option to turn on cover text page fed from the post_content.
function digidol_gallery_carousel() {
/*
	global $post;
	$the_content =  $post->post_content;
	$the_content = preg_replace("~(?:\[/?)[^/\]]+/?\]~s", '', $the_content);  # strip shortcodes, keep shortcode content
	//remove_shortcode( 'gallery' );
	//$new_content = apply_filters('the_content',$the_content);
	//echo $new_content;  

	
	
	
	preg_match('/\[gallery.*ids=.(.*).\]/', $post->post_content, $ids);
	if ($ids) {
	$attachments = explode(",", $ids[1]);
*/
	
	$args = array('post_type' => 'slideshow', 'numberposts' => -1); 
			$attachments = get_posts($args);
			
	?>
	
	
	<div class="wrapper" id="wrapper-hero">
	<div class="container-fluid" id="hero-slides">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="5000">
		<div class="wrapper" id="month-wrap">
			<div class="container">
				<div class="monthind hidden-md-down">
		<div class="month"><?php echo date('m'); ?></div>
		<div class="counterkeyline"></div>
		<div class="yearicon"><?php echo date('y');?></div>
	</div>
			</div>
		</div>
		<div class="carousel-inner" role="listbox">	
			
			<?php
				
		$loopcount = 1;		
	if ($attachments) {
		foreach ( $attachments as $attachment ) {
		
		$imagethumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($attachment->ID ), 'homepage');
		$imag_alt = get_post_meta($attachment, '_wp_attachment_image_alt', true);
		$post_id = $attachment;
		$article = get_post_meta($attachment->ID,'article',true);
		$incrnumber = get_post_meta($article,'incr_number',true);
		?>
	
				
					<div class="carousel-item <?php if ($loopcount == 1) { echo 'active'; }; ?>" data-id=<?php echo $loopcount ?>>			
						
							<img src="<?php echo $imagethumbnail[0]; ?>" alt="<?php echo $imag_alt;?>" />
							<div id="postincr-<?php echo $loopcount ;?>" class="invisible incr_num"><?php echo $incrnumber;   ?></div>
							<div id="slideposttitle" class="invisible slideposttitle"><?php echo get_the_title( $attachment ); ?></div>
						
					</div>		
					
							
						<?php $loopcount++;
		}
	}
						?>
										</div>


			</div>
		</div>
		
	</div>
						<?php
	
	}


add_action('digidol_hero','digidol_gallery_carousel');


function child_theme_setup() {
	
	
	add_theme_support( 'infinite-scroll', array(
    'container' => 'main',
    'render'    => 'digidol_infinite_scroll_render',
    'footer' => 'page',
    'posts_per_page' => '16'
) );


	// Make sure featured images are enabled
	
		
	// Add other useful image sizes for use through Add Media modal
	add_image_size( 'folio-image', 1110 );
	add_image_size( 'homepage', 1500 );
	add_image_size( 'grid-image', 890,500, true );
	add_image_size('archive-thumb',208,116, true);
	add_image_size('featured_preview', 55, 55, true);
	
	
	// Register the three useful image sizes for use in Add Media modal
	add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
	function wpshout_custom_sizes( $sizes ) {
	    return array_merge( $sizes, array(
	        'folio-image' => __( 'Folio Image 1110' ),
	    ) );
	}
}
add_action( 'after_setup_theme', 'child_theme_setup', 11 );

// Add the Month motif function
function digidol_infinite_scroll_render() {
	if ( is_front_page() && is_home() ) :
    while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'loop-templates/content', 'search' );
		else :
			get_template_part( 'loop-templates/content', 'grid' );
		endif;
	}
	endif;
}

function month_motif(){
	
if (is_single()){
?>
	
	<div class="monthind">
		<div class="month"><?php echo the_date('m'); ?></div>
		<div class="counterkeyline"></div>
		<div class="yearicon"><?php echo the_time('y');?></div>
	</div>
<?php	}
else
{
?>
	<div class="wrapper-fluid monthmotif">
	<div class="container monthind">
		<div class="month"><?php echo date('m'); ?></div>
		<div class="counterkeyline"></div>
		<div class="yearicon"><?php echo date('y'); ?></div>
	</div>
	</div>
<?php
}
}

function insert_month_motif(){
	do_action('insert_month_motif');
}// insert month motif

add_action('insert_month_motif','month_motif');

function updateNumbers() {
/* numbering the published posts: preparation: create an array with the ID in sequence of publication date, /
/ save the number in custom field 'incr_number' of post with ID /
/ to show in post (within the loop) use <?php echo get_post_meta($post->ID,'incr_number',true); ?>
/ alchymyth 2010 */
global $wpdb;
$querystr = "SELECT $wpdb->posts.* FROM $wpdb->posts WHERE $wpdb->posts.post_status = 'publish' AND $wpdb->posts.post_type = 'post' ";
$pageposts = $wpdb->get_results($querystr, OBJECT);
$counts = 0 ;
if ($pageposts):
foreach ($pageposts as $post):
setup_postdata($post);
$counts++;
add_post_meta($post->ID, 'incr_number', $counts, true);
update_post_meta($post->ID, 'incr_number', $counts);
endforeach;
endif;
}
add_action ( 'publish_post', 'updateNumbers' );
add_action ( 'deleted_post', 'updateNumbers' );
add_action ( 'edit_post', 'updateNumbers' );

//adding custom function to show thumbnails on slide admin page

// GET FEATURED IMAGE
function ST4_get_featured_image($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_preview');
        return $post_thumbnail_img[0];
    }
}
// ADD NEW COLUMN
function ST4_columns_head_only_slideshow($defaults) {
    $defaults['featured_image'] = 'Featured Image';
    return $defaults;
}

// SHOW THE FEATURED IMAGE
function ST4_columns_content_only_slideshow($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
	   
        $post_featured_image = ST4_get_featured_image($post_ID);
        if ($post_featured_image) {
            echo '<img src="' . $post_featured_image . '" />';
        }
        else {
            // NO FEATURED IMAGE, SHOW THE DEFAULT ONE
            echo '<img src="' . get_bloginfo( 'template_url' ) . '/images/default.jpg" />';
        }
    }

  
}

// ONLY MOVIE CUSTOM TYPE POSTS
add_filter('manage_slideshow_posts_columns', 'ST4_columns_head_only_slideshow', 10);
add_action('manage_slideshow_posts_custom_column', 'ST4_columns_content_only_slideshow', 10, 2);
 
// CREATE TWO FUNCTIONS TO HANDLE THE COLUMN

function cptui_register_my_cpts_slideshow() {

	/**
	 * Post Type: slides.
	 */

	$labels = array(
		"name" => __( 'slides', 'understrap-child' ),
		"singular_name" => __( 'slide', 'understrap-child' ),
	);

	$args = array(
		"label" => __( 'slides', 'understrap-child' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "slideshow", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "slideshow", $args );
}

add_action( 'init', 'cptui_register_my_cpts_slideshow' );

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_slideshow',
		'title' => 'Slideshow',
		'fields' => array (
			array (
				'key' => 'field_591b521d6d73b',
				'label' => 'Article',
				'name' => 'article',
				'type' => 'post_object',
				'required' => 1,
				'post_type' => array (
					0 => 'post',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_591b52836d73c',
				'label' => 'Post Home Page title',
				'name' => 'post_home_page_title',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_591b52b46d73d',
				'label' => '',
				'name' => '',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'slideshow',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

