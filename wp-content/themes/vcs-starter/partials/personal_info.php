<!-- PERSONAL INFORMATION
    ================================================== -->
<section  ass="information">
	<div class="container flex-container flex-container-wrap flex-container-justify">
		<div class="about-me">
			<h2 id="about-me"><?php the_field('p_heading_about'); ?></h2>
			<p><?php the_field('p_heading_paragraph'); ?></p>
		</div>
		<div class="personal-info">
			<h2><?php the_field('p_heading_info'); ?></h2>
			<div class="flex-container personal-data">
				<ul class="category">
					<?php
					if(have_rows('heading_categories_repeater')):
						while(have_rows('heading_categories_repeater')):
							the_row();
							?>
							<li><?php the_sub_field('category'); ?></li>
						<?php
						endwhile;  
					endif;
					?> 
				</ul>
				<ul class="data">
				<?php
				if(have_rows('heading_categories_repeater')):
					while(have_rows('heading_categories_repeater')):
						the_row();
						?>
						<li><?php the_sub_field('data'); ?></li>
						<?php
						endwhile;  
					endif;
					?> 
				</ul>
			</div>
		</div>
		<div class="instagram-gallery">
			<h2><?php the_field('p_heading_instagram'); ?></h2>
			<div class="gallery">
				<ul class="flex-container owl-carousel">
					<?php
					$image = get_field('p_instagram_gallery_repeater');
					if(have_rows('p_instagram_gallery_repeater')):
						while(have_rows('p_instagram_gallery_repeater')):
							the_row();
							foreach($image as $imagevalue):
							$imageoneitem = $imagevalue['image'];
								?>
								<li>
								<img src="<?php echo $imageoneitem['url']; ?>" alt="<?php the_title(); ?>">
								</li>
								<?php
							endforeach;
						endwhile;  
					endif;
					?> 
				</ul>
			</div>
		</div>
	</div>
</section>