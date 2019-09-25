<?php 

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action('wp_footer', 'script_theme');
add_action( 'after_setup_theme', 'theme_register_nav_menu');
add_action( 'widgets_init', 'register_my_widgets');
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function register_my_widgets() {
	register_sidebar(array(
			'name'          => ( 'First-Sidebar' ),
			'id'            => 'sidebar',
			'description'   => 'Blog-sidebar',
			'before_widget' => '<div  class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widgettitle">',
			'after_title'   => '</h5>'
		)
	 );	
}


function style_theme (){
	wp_enqueue_style('style', get_stylesheet_uri());

	wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css');
	
	wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css');

	wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
}

function script_theme() {
	wp_deregister_script( 'jquery-core' );

	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('doubletap', get_template_directory_uri(). '/assets/js/doubletaptogo.js');

	wp_enqueue_script('flexslider', get_template_directory_uri(). '/assets/js/jquery.flexslider.js');

	wp_enqueue_script('init', get_template_directory_uri(). '/assets/js/init.js');

}

function theme_register_nav_menu() {
	register_nav_menu( 'top', 'top_menu' );
	register_nav_menu( 'footer', 'down_menu' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails', array( 'post', 'portfolio' ) );
	add_theme_support( 'post-formats', array( 'aside', 'video' ) );
	add_image_size( 'post-thumb', '1300', '500', true );
	add_image_size( 'portfolio-thumb', '600', '626', true );
}

function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
} 

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('portfolio', array(
		'label'              => null,
		'labels'             => array(
			'name'               => 'Portfolio', // Основное название типа записи
			'singular_name'      => 'Portfolio', // отдельное название записи типа Book
			'add_new'            => 'Add New ',
			'add_new_item'       => 'Add New Work',
			'edit_item'          => 'Edit Work',
			'new_item'           => 'New Work',
			'view_item'          => 'View Work',
			'search_items'       => 'Search Work',
			'not_found'          =>  'Work is not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Portfolio'

		  ),
		'description'         => 'This is Portfolio',
		'public'              => true,
		'exclude_from_search' => false,
		'menu_icon' 	      => 'dashicons-format-gallery',
		'menu_position'		  => 4,
		'supports'            => ['title', 'editor', 'author ', 'excerpt', 'thumbnail' ,'post-formats', 'page-attributes' ],
		'taxonomies'          => ['skills']
	) );
}

add_filter( 'excerpt_length', function(){
	return 20;
} );

// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy( 'skills', [ 'portfolio' ], [ 
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Навыки',
			'singular_name'     => 'Навык',
			'search_items'      => 'Найти навыки',
			'all_items'         => 'Все навыки',
			'view_item '        => 'Смотреть навык',
			'parent_item'       => 'Родительський навык',
			'parent_item_colon' => 'Родительський навык:',
			'edit_item'         => 'Создать навык',
			'update_item'       => 'Обновить навык',
			'add_new_item'      => 'добавить новый навык',
			'new_item_name'     => 'Новое имя навыка',
			'menu_name'         => 'Навыки',
		],
		'description'           => 'Навыки которые используються при создании работ', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'hierarchical'          => false,
	] );
}

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    
    function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
} 









