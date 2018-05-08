<?php get_header(); ?>

	<article class="single-project">

		<header class="page-header">

			<h1 class="page-title align-left">Things we have done</h1>

			<hr />

			<h2 class="project-title"><?php the_title();?></h2>

			<ul class="portfolio-pagination">
				<li class="prev"><a href="#" class="button medium no-bg"><span class="arrow left">&raquo;</span> Previous</a></li>
				<li class="next"><a href="#" class="button medium no-bg">Next <span class="arrow">&raquo;</span></a></li>
			</ul><!-- end .portfolio-pagination -->
			
		</header><!-- end .page-header -->

		<div id="main">
		
			<div class="image-gallery-slider">


				<ul>

					<li>
						<a href="<?php echo wp_upload_dir()?>/2018/05/single-project-1.jpg" class="single-image" title="Altered - Something abstract." rel="single-project">
							<img src="<?php echo wp_upload_dir()?>/2018/05/single-project-1.jpg" alt="Altered">
						</a>
					</li>

					<li>
						<a href="<?php echo wp_upload_dir()?>/2018/05/single-project-2.jpg" class="single-image" title="Altered - Something abstract." rel="single-project">
							<img src="<?php echo wp_upload_dir()?>/2018/05/single-project-2.jpg" alt="Altered">
						</a>
					</li>

					<li>
						<a href="<?php echo wp_upload_dir()?>/2018/05/single-project-3.jpg" class="single-image" title="Altered - Something abstract." rel="single-project">
							<img src="<?php echo wp_upload_dir()?>/2018/05/single-project-3.jpg" alt="Altered">
						</a>
					</li>

				</ul>
				
			</div><!-- end .image-gallery-slider -->
		
		</div><!-- end #main -->

		<div id="sidebar">

			<?php get_sidebar('portfolio_1'); ?>

		</div><!-- end #sidebar -->
		
	</article><!-- end .single-project -->
	
<?php get_footer(); ?>