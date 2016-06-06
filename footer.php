<footer>
  <div class="container">
  	<h5>FOLLOW ON INSTAGRAM</h5>
  	<div class="footerImages">
  		<?php $image = get_field('flickity1'); ?>
        <img src="<?php echo $image['sizes']['thumbnail'] ?> " alt="">
  		<?php $image = get_field('flickity1'); ?>
  		        <img src="<?php echo $image['sizes']['thumbnail'] ?> " alt="">
  		<?php $image = get_field('flickity1'); ?>
  		        <img src="<?php echo $image['sizes']['thumbnail'] ?> " alt="">
  		<?php $image = get_field('flickity1'); ?>
  		        <img src="<?php echo $image['sizes']['thumbnail'] ?> " alt="">
  		<?php $image = get_field('flickity1'); ?>
  		        <img src="<?php echo $image['sizes']['thumbnail'] ?> " alt="">
  		<?php $image = get_field('flickity1'); ?>
  		        <img src="<?php echo $image['sizes']['thumbnail'] ?> " alt="">
  		<?php $image = get_field('flickity1'); ?>
  		        <img src="<?php echo $image['sizes']['thumbnail'] ?> " alt="">
  		<?php $image = get_field('flickity1'); ?>
  		        <img src="<?php echo $image['sizes']['thumbnail'] ?> " alt="">	
  	</div>
    <div class="footer-bottom">
	    <p>&copy; <?php echo date('Y'); ?>  All rights reserved</p>
	    <div class="footerSocial">
	    	<?php wp_nav_menu( array(
	        'container' => false,
	        'theme_location' => 'social'
	      )); ?>
	    </div>
    </div>
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>