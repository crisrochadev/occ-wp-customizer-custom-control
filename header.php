<?php
/**
 * 
 * @package Vidaay 
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

 <header>
	<nav class="navbar navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
	      <?php bloginfo( 'name' ); ?>
	    </a>
	  </div>
	</nav>
</header>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>