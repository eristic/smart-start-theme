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
						<h5><?php echo the_title();?></h5>
				</div>
				
				<div class="slide-content">
						<h2><?php echo the_title();?></h2>
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

		<li>
			<a href="single-project.html">
				<img src="img/placeholders/portfolio-project-4th-1.jpg" alt="">
				<h5 class="title">Altered</h5>
				<span class="categories">illustration / design</span>
			</a>
		</li>

		<li>
			<a href="single-project.html">
				<img src="img/placeholders/portfolio-project-4th-2.jpg" alt="">
				<h5 class="title">Snow Tower</h5>
				<span class="categories">illustration / photography</span>
			</a>
		</li>

		<li>
			<a href="single-project.html">
				<img src="img/placeholders/portfolio-project-4th-3.jpg" alt="">
				<h5 class="title">Not the end</h5>
				<span class="categories">animation / illustration</span>
			</a>
		</li>

		<li>
			<a href="single-project.html">
				<img src="img/placeholders/portfolio-project-4th-4.jpg" alt="">
				<h5 class="title">Shift</h5>
				<span class="categories">web / animation</span>
			</a>
		</li>

		<li>
			<a href="single-project.html">
				<img src="img/placeholders/portfolio-project-4th-1.jpg" alt="">
				<h5 class="title">Synergy</h5>
				<span class="categories">illustration / photography</span>
			</a>
		</li>

		<li>
			<a href="single-project.html">
				<img src="img/placeholders/portfolio-project-4th-2.jpg" alt="">
				<h5 class="title">The Game</h5>
				<span class="categories">photography</span>
			</a>
		</li>

		<li>
			<a href="single-project.html">
				<img src="img/placeholders/portfolio-project-4th-3.jpg" alt="">
				<h5 class="title">Trantor</h5>
				<span class="categories">illustration / web / animation</span>
			</a>
		</li>

		<li>
			<a href="single-project.html">
				<img src="img/placeholders/portfolio-project-4th-4.jpg" alt="">
				<h5 class="title">Futurisk</h5>
				<span class="categories">illustration / design</span>
			</a>
		</li>

	</ul><!-- end .projects-carousel -->

	<h6 class="section-title">Latest stuff from our blog</h6>

	<ul class="post-carousel">

		<li>

			<a href="single-post.html">
				<img src="img/placeholders/blog-post-1.jpg" alt="" class="entry-image">
			</a>

			<div class="entry-meta">

				<a href="single-post.html">
					<span class="post-format">Permalink</span>
				</a>

				<span class="date">Sep 17 2011</span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">

				<a href="single-post.html">
					<h5 class="title">Bringing iMessage to the Desktop</h5>
				</a>

				<p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
					
			</div><!-- end .entry-body -->

		</li>
		
		<li>

			<a href="single-post.html">
				<img src="img/placeholders/blog-post-1.jpg" alt="" class="entry-image">
			</a>

			<div class="entry-meta">

				<a href="single-post.html">
					<span class="post-format">Permalink</span>
				</a>

				<span class="date">Sep 17 2011</span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">

				<a href="single-post.html">
					<h5 class="title">Bringing iMessage to the Desktop</h5>
				</a>

				<p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
					
			</div><!-- end .entry-body -->

		</li>
		
		<li>

			<a href="single-post.html">
				<img src="img/placeholders/blog-post-1.jpg" alt="" class="entry-image">
			</a>

			<div class="entry-meta">

				<a href="single-post.html">
					<span class="post-format">Permalink</span>
				</a>

				<span class="date">Sep 17 2011</span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">

				<a href="single-post.html">
					<h5 class="title">Bringing iMessage to the Desktop</h5>
				</a>

				<p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
					
			</div><!-- end .entry-body -->

		</li>
		
		<li>

			<a href="single-post.html">
				<img src="img/placeholders/blog-post-1.jpg" alt="" class="entry-image">
			</a>

			<div class="entry-meta">

				<a href="single-post.html">
					<span class="post-format">Permalink</span>
				</a>

				<span class="date">Sep 17 2011</span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">

				<a href="single-post.html">
					<h5 class="title">Bringing iMessage to the Desktop</h5>
				</a>

				<p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
					
			</div><!-- end .entry-body -->

		</li>

	</ul><!-- end .post-carousel -->

<?php get_footer(); ?>