<?php get_header(); ?>

	<header class="page-header">
	
		<h1 class="page-title">Things we have done</h1>

		<ul id="portfolio-items-filter">

			<li>Showing</li>
			<li><a data-categories="*">All</a></li>
			<li><a data-categories="animation">Animation</a></li>
			<li><a data-categories="design">Design</a></li>
			<li><a data-categories="illustration">Illustration</a></li>
			<li><a data-categories="photography">Photography</a></li>
			<li><a data-categories="web">Web</a></li>

		</ul><!-- end #portfolio-items-filter -->
		
	</header><!-- end .page-header -->

	<section id="portfolio-items" class="clearfix">

		<?php 

		$args = array(
			'post_type' =>  'projects'
			); 
			
			$query = new WP_Query($args); 
			
			if ( $query->have_posts() ) {
				
				while ( $query->have_posts() ) {
					$query->the_post();

		 ?>

		<article class="one-third" data-categories="<?php wp_list_catetories();?>">

			<a href="<?php echo the_permalink();?>" class="single-image" title="<?php the_title();?>">
				<?php the_post_thumbnail();?>
			</a>

			<a href="single-portfolio.php" class="project-meta">
				<h5 class="title"><?php the_title();?></h5>
				<span class="categories"><?php wp_list_categories();?></span>
			</a>
			
		</article><!-- end .one-third-->

		<?php }

			wp_reset_postdata();
			} else {
			// no posts found
			}

			?>

	</section><!-- end #portfolio-items -->
	
<?php get_footer(); ?>