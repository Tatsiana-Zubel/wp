<!-- CONTACT 
	================================================== -->
	<section class="last_block email-form">
		<div class="map-container">
			<h2 id="contact-us"><?php the_field('hc_section_title'); ?></h2>
			<div method="post">
				<?php echo do_shortcode(get_field('hc_contact_form_shortcode')); ?>
			</div>
		</div>
	</section>
</section>