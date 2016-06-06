<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://use.fontawesome.com/d6171cf1d3.js"></script>
  <link rel="stylesheet" href="https://npmcdn.com/flickity@1.2/dist/flickity.min.css">
  <script src="https://npmcdn.com/flickity@1.2/dist/flickity.pkgd.min.js"></script>

  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
    
    <div class="navWrapper">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'social'
      )); ?>

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </div>
  </div> <!-- /.container -->
</header><!--/.header-->

