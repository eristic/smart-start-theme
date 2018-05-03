<?php get_header(); ?>

	<h2 class="slogan align-center">We are a group of experienced designers and developers.<br />
	We set new standards in user experience &amp; make future happen.</h2>

<section id="features-slider" class="ss-slider">
<?php

	$count = 1;
	$args = array(
	'post_type' =>  'projects',
	'category_name' => 'featured'
	); 
	
	$query = new WP_Query($args); 
	
	if ( $query->have_posts() ) {
		
		while ( $query->have_posts() ) {
			$query->the_post();

		 ?>
			
			<article class="slide">
		
				<?php the_post_thumbnail('project-size', array('class' => 'slide-bg-image'));?>
					
				<div class="slide-button">
						<span class="dropcap">
						<?php echo $count++ ?>
						</span>
						<h5><?php the_title();?></h5>
				</div>
				
				<div class="slide-content">
						<h2><?php the_title();?></h2>
						<p><?php the_excerpt();?></p>
						<p><a class="button" href="<?php echo the_permalink();?>">Read More</a></p>
				</div>
					
			</article><!-- end .slide (Responsive Layout) -->
		
		
		
		<?php }

		wp_reset_postdata();
	} else {
		// no posts found
	}
	
	?>

	</section><!-- end #features-slider -->

	<h6 class="section-title">Latest Projects</h6>

	<ul class="projects-carousel clearfix">

	<?php


	$args = array(
	'post_type' =>  'projects',
	'offset' => 5
	); 

	$query = new WP_Query($args); 

	if ( $query->have_posts() ) {
	
	while ( $query->have_posts() ) {
		$query->the_post();

	 ?>
		
		<li>

			<a href="single-project.html">
				<?php the_post_thumbnail('latest-project');?>
				<h5 class="title"><?php the_title();?></h5>
				<span class="categories">
				<?php 
					$taxonomies = get_taxonomies(); 
					foreach ( $taxonomies as $taxonomy ) {
						echo  $taxonomy;
					}
				?>
				</span>
			</a>

		</li>
	
		<?php }

		wp_reset_postdata();
	} else {
		// no posts found
	}

	?>


	<h6 class="section-title">Latest stuff from our blog</h6>

	<ul class="post-carousel">

	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<li>

			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('blog-post-front', array('class' => 'entry-image'));?>
			</a>

			<div class="entry-meta">

				<a href="<?php the_permalink();?>">
					<span class="post-format">Permalink</span>
				</a>

				<span class="date"><?php the_date('M d Y');?></span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">

				<a href="<?php the_permalink();?>">
					<h5 class="title"><?php the_title();?></h5>
				</a>

				<p><?php the_excerpt();?></p>
					
			</div><!-- end .entry-body -->

		</li>
		
		<?php endwhile; endif; ?> 

	</ul><!-- end .post-carousel -->

<?php get_footer(); ?>