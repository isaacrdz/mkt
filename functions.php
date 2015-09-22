<?php require_once('wp_bootstrap_navwalker.php'); ?>
<?php 
require_once('wp_bootstrap_navwalker.php');
	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
));
	add_theme_support( 'post-thumbnails' );
	add_image_size('blog-img',1024, 615, true);
	add_image_size('slider-img',1440, 500, true);
	

	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">',
		'after_widget' => '</section">',
		'before_title' => '<h2">',
		'after_title' => '</div">',
		));



?>