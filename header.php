<?php
/**
 * The header
 */

?>
<!DOCTYPE html>
<!-- Dynamically grabs the language thats published-->
<html html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--Add bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- Add custom css-->
	<link rel="stylesheet" href="<?php echo esc_url(home_url("wp-content/themes/jinal/assets/css/custom-style.css"))?>"/>

	<!-- Add google fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
	<!-- grabs the header template files uses in other documents -->
</head>


<body <?php body_class(); ?>>
<!-- Grabs and assigns class upon the page it loads-->

<header>
	<article class="col">
	<a href="<?php echo esc_url(home_url());?>">
	<img class="logo" src="<?php echo esc_url(home_url('wp-content/uploads/2021/logo.png'));?>" alt="logo">
	</a>
	</article>
	
	<nav>
	<?php 
	wp_nav_menu(array('menu'=>'navigation',//named "navigation" to menu
						'theme_location'=>'',
						'depth'=>2,//setting drop down layer
						'fallback_cb'=> false));
	?>
	</nav>
</header>