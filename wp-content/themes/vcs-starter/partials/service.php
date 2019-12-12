<!-- SERVICE -->
<div class="servicename">
	<h2>My service</h2>
</div>
	<div class="container flex-container flex-container-wrap flex-container-justify">
		<?php
			if(have_rows('se_service description_repeater')):
				while(have_rows('se_service description_repeater')):
					the_row();
					?>
					<div class="service">
					<span class="iconbox">
					<a rel="nofollow" href="<?php the_sub_field('link'); ?>" target="_blank">
						<?php the_sub_field('icon'); ?>
					</a>
					</span>
					<h3><?php the_sub_field('heading'); ?></h3>
					<p><?php the_sub_field('description'); ?></p>
					</div>
					<?php
				endwhile;  
			endif;
			?> 
		</div>
	</div>
</section>





					

