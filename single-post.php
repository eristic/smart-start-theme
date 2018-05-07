<?php get_header(); ?>

	<header class="page-header">
	
		<h1 class="page-title"><?php the_title();?></h1>
		
	</header><!-- end .page-header -->

	<section id="main">

		<article class="entry single clearfix">

			<a href="<?php the_permalink();?>" title="">
				<?php the_post_thumbnail('blog-post', array('class' => 'entry-image'));?>
			</a>

			<div class="entry-body">

				<a href="<?php the_permalink();?>">
					<h1 class="title"><?php the_title();?></h1>
				</a>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
				
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
				} ?>
				
				<li><span class="title">Comments:</span> <a href="<?php comments_link();?>"><?php comments_number();?></a></li>
			</ul>		

	</div><!-- end .entry-meta -->
			
		</article><!-- end .entry -->

		<section id="comments">

			<h6 class="section-title"><?php comments_number();?></h6>

		

					<ol class="comment-list">

						<?php

						// The Query
						$comments_query = new WP_Comment_Query;
						$comments = $comments_query->query($arg);

						// Comment Loop
						foreach ( $comments as $comment ) {
							echo '<li class="comment">';
							echo '<article>';
							echo get_avatar( $comment, 50 );
							echo '<div class=""comment-meta">';
							echo '<h5 class="author"';
								echo '<a href="' . $comment->comment_url . '">' . $comment->comment_author . '</a>';
								echo ' - ';
								comment_reply_link();
							echo '</h5>';

							echo '<p class="date">' . comment_date('F d, Y') . '</p>';
								'</div>';
							echo '<p>' . $comment->comment_content . '</p>';
							echo '</article>';
							echo '</li>';
						} 
						
						?>
						 
					</ol><!-- .comment-list -->

				<?php comment_form(); ?>
			
		</section>

		<section id="respond">

			<h6 class="section-title">Leave a Comment</h6>

			<form method="post" class="comments-form">
			
				<p class="input-block">
					<label for="comment-name"><strong>Name</strong> (required)</label>
					<input type="text" name="name" value="" id="comment-name" required>
				</p>

				<p class="input-block">
					<label for="comment-email"><strong>Email</strong> (required)</label>
					<input type="email" name="email" value="" id="comment-email" required>
				</p>
				
				<p class="input-block">
					<label for="comment-url"><strong>Website</strong></label>
					<input type="url" name="url" value="" id="comment-url">
				</p>

				<p class="textarea-block">
					<label for="comment-message"><strong>Your Comment</strong> (required)</label>
					<textarea name="message" id="comment-message" cols="88" rows="6" required></textarea>
				</p>
			
				<input type="submit" value="Submit">

				<div class="clear"></div>

			</form>
			
		</section>
		
	</section><!-- end #main -->

	<?php get_sidebar(); ?>
	
<?php get_footer(); ?>