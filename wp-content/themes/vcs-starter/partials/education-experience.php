<!-- EDUCATION-SKILL-SERVICE
================================================== -->
<section class="main_block">
	<div class="container">
		<!-- EDUCATION -->
		<h2 id="resume"><?php the_field('e_heading'); ?></h2>
		<div class="managecontainer flex-container flex-container-wrap flex-container-justify">
			<?php
			if(have_rows('e_text_block_repeater')):
				while(have_rows('e_text_block_repeater')):
					the_row();
					?>
					<div class="themengraph">
						<div>
							<h3><?php the_sub_field('heading'); ?></h3>
							<span class="dateparagraph"><?php the_sub_field('paragraph'); ?></span>
							<p><?php the_sub_field('text'); ?></p>
							</div>
						</div>				
					<?php
				endwhile;  
			endif;
			?>
		</div>
				