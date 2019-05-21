<footer class="footer inner">
	<section class="footer-info">
		<h4>Clinical Excellence, Sophisticated Solutions, Outstanding Patient Care.</h4>
		<div class="black-underline"></div>

		<div class="logo-footer">
			
			</div>

		<div class="links ">
		
			<div class="address">
			<a href="<?php echo home_url() ?>">
			<img class="logo ead" src="<?php bloginfo('template_directory'); ?>/img/logo.svg" border="0" alt="">
			</a>
				<p>54 Longbrook Street,
					Exeter<br>
					EX4 6AH,
					01392 202007
				</p>
			</div>

			<div class="guidelines">
				<p class='footer-p'>All our dentists adhere to the guidelines governing the profession which can be viewed on the GDC website</p>
				<?php wp_nav_menu(array('theme_location' => 'privacy')); ?>
			</div>

			<div class="social">
				<div class="icon">
				<a href="https://www.facebook.com/exeteradvanced/" target="_blank"><img class="footer-socials" src="<?php bloginfo('template_directory'); ?>/img/fb.svg" border="0" alt=""></a>

				<a href="https://twitter.com/exeteradvanced" target="_blank"><img class="footer-socials" src="<?php bloginfo('template_directory'); ?>/img/twitter.svg" border="0" alt=""></a>
				
				<a href="https://www.instagram.com/exeteradvanceddentistry/" target="_blank"><img class="footer-socials" src="<?php bloginfo('template_directory'); ?>/img/insta.svg" border="0" alt=""></a>

				</div>
				<img class="logo ex-liv" src="<?php bloginfo('template_directory'); ?>/img/exeterliving.jpg" border="0" alt="">
				

			</div>



		</div>
		<div class="riangle">
		<p>©<?php echo date( 'Y' ); ?> Exeter Advanced Dentistry all rights reserved. <a href='https://www.dirty-martini.com/' target='_blank'>Website designed by Dirty Martini Marketing</p>
		</div>

	</section>




</footer>
<?php wp_footer(); ?>

</body>
</html>
