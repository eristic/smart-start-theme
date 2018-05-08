<?php get_header(); ?>

	<div class="container clearfix">

		<header class="page-header">
		
			<h1 class="page-title">We'd love to hear from you</h1>
			
		</header><!-- end .page-header -->

	</div><!-- end .container -->

	<section id="map">
		<p class="container">Something went wrong... Try to enable your JavaScript!</p>
	</section><!-- end #map -->

	<div class="container clearfix">
		
		<div class="one-fourth">

			<h3>Contact Info</h3>

			<p>30 South Park Avenue<br/>
			San Francisco, CA 94108<br/>
			USA</p>

				<p>Phone: (123) 456-7890<br/>
				Fax: +08 (123) 456-7890<br/>
				Email: contact@companyname.com<br/>
				Web: companyname.com</p>
			
		</div><!-- end .one-fourth -->
		
		<div class="three-fourth last">

			<h3>Let's keep in touch</h3>

			<?php do_shortcode('[contact-form-7 id="1" title="Contact form 1" html_id="contact-form-1"]'); ?>

		</div><!-- end .three-fourth.last -->

	</div><!-- end .container -->
		
<?php get_footer(); ?>