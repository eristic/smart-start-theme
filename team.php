<?php get_header(); ?>

	<header class="page-header">

		<h1 class="page-title align-left">Meet Our Team</h1>

		<hr />

		<h2 class="page-subdescription"><strong>Our success - people we employ.</strong> Consectetur adipisicing elit, ut labore et dolore magna aliqua. Praesent dapibus, neque id cursus faucibus, tortor neque egesaugue, eu vulputate magna eros eu erat.</h2>
		
	</header><!-- end .page-header -->

	<?php

		$args = array(
		'post_type' =>  'team'
		); 

		$query = new WP_Query($args); 

		if ( $query->have_posts() ) {
			
			while ( $query->have_posts() ) {
				$query->the_post();

			?>
	
	<div class="team-member one-fourth">

		<?php the_post_thumbnail('team-member', array('class' => 'photo'));?>

		<div class="content">

			<h4 class="name"><?php the_title();?></h4>

			<span class="job-title"><?php the_excerpt();?></span>

			<p><?php the_field('the_team_description');?></p>
			
		</div><!-- end .content -->
	
		<ul class="social-links">
			<li class="twitter"><a href="<?php the_field('team_twitter_link');?>">Twitter</a></li>
			<li class="facebook"><a href="<?php the_field('team_facebook_link');?>">Facebook</a></li>
			<li class="skype"><a href="<?php the_field('team_skype_link');?>">Skype</a></li>
			<li class="linkedin"><a href="<?php the_field('team_linkedin_link');?>">LinkedIn</a></li>
			<li class="googleplus"><a href="<?php the_field('team_googleplus_link');?>">Google+</a></li>
			<li class="email"><?php the_field('team_email_link');?>">Email</a></li>
		</ul><!-- end .social-links -->
		
	</div><!-- end .team-member.one-fourth -->


	<?php }

	wp_reset_postdata();
	} else {
	// no posts found
	}

	?>
	
	
<?php get_footer(); ?>