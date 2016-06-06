<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">

<div class="carousel js-flickity">
  <div class="carousel-cell">
    	
    	 	<?php $image1 = get_field('flickity1'); ?>
        <img src="<?php echo $image1['sizes']['large'] ?> " alt="">
    	 

  </div>
  <div class="carousel-cell">
  	<img src="http://unsplash.it/900/350/" alt="">

  	 
  </div>
  
</div>


  <div class="container">

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    			<?php $image2 = get_field('home_photo'); ?>
    		    <img src="<?php echo $image2['sizes']['large'] ?> " alt="">
    		<?php $moreInfo = get_field(more_home_info); ?>
    		<p> <?php echo $moreInfo ?></p>

    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>