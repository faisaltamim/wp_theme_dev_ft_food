<?php
/**
 * ft_food functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ft_food
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ft_food_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ft_food_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ft_food, use a find and replace
		 * to change 'ft_food' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ft_food');

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary_menu' => 'Primary Menus',
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ft_food_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ft_food_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ft_food_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ft_food_content_width', 640 );
}
add_action( 'after_setup_theme', 'ft_food_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function ft_food_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'ft_food' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'ft_food' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'ft_food_widgets_init' );



//my side bar
function sidebar_widget() {
	//about us sidebar
	register_sidebar(
		array(
			'name'          => esc_html__( 'About us sidebar', 'ft_food' ),
			'id'            => 'mysidebar1',
			'description'   => esc_html__( 'add widget here.', 'ft_food' ),
			'before_widget' => '<div class="widget wid-about">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="wid-header"><h5>',
			'after_title'   => '</h5></div>',
		)
	);

	//Tag side bar
	register_sidebar(
		array(
			'name'          => esc_html__( 'Tag Side Bar', 'ft_food' ),
			'id'            => 'mysidebar3',
			'description'   => esc_html__( 'All of your tag here', 'ft_food' ),
			'before_widget' => '<div class="widget wid-tag">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="wid-header"><h5>',
			'after_title'   => '</h5></div>',
		)
	);


	//gallery side bar
	register_sidebar(
		array(
			'name'          => esc_html__( 'Gallery Side Bar', 'ft_food' ),
			'id'            => 'mysidebar4',
			'description'   => esc_html__( 'Your Gallery', 'ft_food' ),
			'before_widget' => '<div class="widget wid-gallery">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="wid-header"><h5>',
			'after_title'   => '</h5></div>',
		)
	);


	//latest food side bar
	register_sidebar(
		array(
			'name'          => esc_html__( 'Latest Food Side Bar', 'ft_food' ),
			'id'            => 'mysidebar2',
			'description'   => esc_html__( 'add your latest food here.', 'ft_food' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_widget('my_latest_food');//here you can use any kind of name what you want

}
add_action( 'widgets_init', 'sidebar_widget' );

//completely show widget in widget option
class my_latest_food extends WP_Widget{

	//this function name __construct is setup from wordpress. so must remember it.		
	public function __construct(){
		parent::__construct('my_latest_food','Latest Food',array(

			'description'	=>	'This is latest food widget area',

		));
	}
	//this function name widget is setup from wordpress. so must remember it.	
	public function widget($one,$two){ //end php here ?> 


		<!-- here will be design part -->
		<div class="widget wid-post">
			<div class="wid-header">
				<h5>Latest Food</h5>
			</div>
			<div class="wid-content">
				<?php 
				$latestfood = new WP_Query([

					'post_type'	=>	'latest_food_sidebar',

				]);
				while($latestfood->have_posts()):
					$latestfood->the_post();
				 ?>
					<div class="post">
						<a href="#">
							<img src="

							<?php 
								$img = get_field('food_image');
								echo $img['url'];
							?>

							">
						</a>
						<div class="wrapper">
						  <h5><a href="#"><?php the_title(); ?></a></h5>
						   <span><?php the_field('food_price'); ?></span>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
		<!-- here will be design part -->


	<?php } //start php here
	//this function name form is setup from wordpress. so must remember it.
	public function form($two){}

}


/**
 * Enqueue scripts and styles.
 */
function ft_food_scripts() {
	//css file linked in as follows
	//zerogrid
	wp_enqueue_style( 'zerogrid', get_theme_file_uri().'/css/zerogrid.css', null, false, 'all' );
	//style
	wp_enqueue_style( 'style', get_theme_file_uri().'/css/style.css', null, false, 'all' );
	//slide
	wp_enqueue_style( 'slide', get_theme_file_uri().'/css/slide.css', null, false, 'all' );
	//menu
	wp_enqueue_style( 'menu', get_theme_file_uri().'/css/menu.css', null, false, 'all' );
	//fontawesome
	wp_enqueue_style( 'font-awesome', get_theme_file_uri().'/font-awesome/css/font-awesome.min.css', null, false, 'all' );
	//Main
	wp_enqueue_style( 'Main', get_stylesheet_uri() );
	//css file linked end
	//js file linked in here
	wp_enqueue_script('classie', get_theme_file_uri().'/js/classie.js', null, true, true);
	wp_enqueue_script('demo', get_theme_file_uri().'/js/demo.js', null, true, true);
	wp_enqueue_script('Theme-Jquery', get_theme_file_uri().'/js/jquery-1.11.3.min.js', null, true, true);
	wp_enqueue_script('responsiveslides', get_theme_file_uri().'/js/responsiveslides.min.js', array('Theme-Jquery'), true, true);
	wp_enqueue_script('search', get_theme_file_uri().'/js/search.js', null, true, true);



	// <script src="js/classie.js"></script>
	// <script src="js/demo.js"></script>


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ft_food_scripts' );

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// short code practice start == ek kothay eta mukhostor moto korte hobe
function ftwebtech($one,$two){ 

	$myAllAttrs = shortcode_atts( array(

		'mycolor'	=> NULL,
		'padding'	=> NULL,
		'bg'	=> NULL,

	), $one,'ft' );

	ob_start();
	?>
	<h1 style="color:<?php echo $myAllAttrs['mycolor'] ?>;padding:<?php echo $myAllAttrs['padding']?>;background-color: <?php echo $myAllAttrs['bg']?>">Hi Iam Faisal Tamim</h1>

<?php 
	return ob_get_clean();
} 
add_shortcode( "ft", "ftwebtech" );
// short code practice end

//external shortcode file add 
include_once('shortcode/staff.shortcode.php');
include_once('shortcode/contact_box.shortcode.php');
include_once('shortcode/reservation.shortcode.php');
include_once('shortcode/reservationform.shortcode.php');
include_once('shortcode/food_menu.shortcode.php');



// Reservation form data cought
if(isset($_POST['submit'])){

 	$name 		=	$_REQUEST['name'];
 	$email 		=	$_REQUEST['email'];//eta user email
 	$adminEmail =	$_REQUEST['adminEmail'];//eta dynamic korar jonno dewa hoise
 	$subject 	=	$_REQUEST['subject'];
 	$date 		=	$_REQUEST['date'];
 	$time 		=	$_REQUEST['time'];
 	$message 	=	$_REQUEST['message'];
 	$fullMsg	=	$name.'<br>'.$date.'<br>'.$time.'<br>'.$message;

 	wp_mail( 'mdf41401@gmail.com', $subject, $fullMsg);


 } 
// Reservation form data cought 