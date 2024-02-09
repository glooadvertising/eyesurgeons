<?php
	/*
		Template Name: Home Page
	*/
?>

<?php get_header(); ?>

<!--home slider-->
<div id="imgslider">
	<?php echo do_shortcode( "[metaslider id=4]" ); ?>
</div>
<!--end home slider-->

<div id="pageContainer">
	<div id="page">
		<div id="contentHome">
			<?php the_post(); ?>
			<?php the_content(); ?>
		</div>
	</div>
</div>    

<?php get_footer(); ?>
