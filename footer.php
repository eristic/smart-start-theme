</section><!-- end #content -->

<footer id="footer" class="clearfix">

	<div class="container">

		<div class="three-fourth">

			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_id' => 'footer-nav' , 'container' => 'nav' ) ); ?>

			<!-- end footer nav -->

			<ul class="contact-info">
				<li class="address">012 Some Street. New York, NY, 12345. USA</li>
				<li class="phone">(123) 456-7890</li>
				<li class="email"><a href="mailto:contact@companyname.com">contact@companyname.com</a></li>
			</ul><!-- end .contact-info -->
			
		</div><!-- end .three-fourth -->

		<div class="one-fourth last">

			<span class="title">Stay connected</span>

			<ul class="social-links">
				<li class="twitter"><a href="#">Twitter</a></li>
				<li class="facebook"><a href="#">Facebook</a></li>
				<li class="digg"><a href="#">Digg</a></li>
				<li class="vimeo"><a href="#">Vimeo</a></li>
				<li class="youtube"><a href="#">YouTube</a></li>
				<li class="skype"><a href="#">Skype</a></li>
			</ul><!-- end .social-links -->

		</div><!-- end .one-fourth.last -->
		
	</div><!-- end .container -->

</footer><!-- end #footer -->

<footer id="footer-bottom" class="clearfix">

	<div class="container">

		<ul>
			<li>SmartStart &copy; <?php echo date('Y');?></li>
			<li><a href="#">Legal Notice</a></li>
			<li><a href="#">Terms</a></li>
		</ul>

	</div><!-- end .container -->

</footer><!-- end #footer-bottom -->
<?php wp_footer(); ?>
</body>
</html>