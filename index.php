<?php get_header(); ?>

	<header class="page-header">
	
		<h1 class="page-title">Welcome to our blog</h1>
		
	</header><!-- end .page-header -->
	
	<section id="main">

	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article class="entry clearfix">

			<a href="<?php the_permalink();?>" title="<?php the_title();?>">
				<?php the_post_thumbnail('blog-post', array('class' => 'entry-image'));?>
			</a>

			<div class="entry-body">

				<a href="<?php the_permalink();?>">
					<h1 class="title"><?php the_title();?></h1>
				</a>

				<p><?php the_excerpt();?></p>
			</div><!-- end .entry-body -->

			<div class="entry-meta">

				<ul>
					<li><a href="<?php the_permalink();?>"><span class="post-format ">Permalink</span></a></li>
					<li><span class="title">Posted:</span> <a href="#"><?php the_date('M d Y');?></a></li>
					<li><span class="title">Tags:</span> 
					<?php $tags = get_the_tags(); 
					if( $tags ) foreach( $tags as $tag ) { ?>
					<a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
					<?php } else {
					// Nothing
					}?>
					<li><span class="title">Comments:</span> <a href="<?php comments_link();?>"><?php comments_number();?></a></li>
				</ul>

			</div><!-- end .entry-meta -->
			
		</article><!-- end .entry -->

		<?php endwhile; endif; ?>
		
	</section><!-- end #main -->

	<?php wp_pagenavi(); ?>

	<?php get_sidebar('right_1'); ?>
	
<?php get_footer(); ?>