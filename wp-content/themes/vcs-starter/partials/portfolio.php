
	<!-- PORTFOLIO
================================================== -->
<section class="last_block">
	<div class="container">
		<h2 id="portfolio">Portfolio</h2>
		<div class="myBtnContainer flex-container flex-container-wrap">
			<button class="button" data-filter="allWorks">All works</button>
			<button class="button" data-filter="<?php echo get_cat_ID('Graphics design');?>">Graphics design</button>
			<button class="button" data-filter="<?php echo get_cat_ID('Web design');?>">Web design</button>
			<button class="button" data-filter="<?php echo get_cat_ID('Web development');?>">Web development</button>
		</div>
		<div class="portfolio-photo flex-container flex-container-wrap">
		<?php
			$portfolioImage = get_field('portf_image_category_repeater');
				if(have_rows('portf_image_category_repeater')):
					the_row();
					foreach($portfolioImage as $imagevalue):
					$imageoneitem = $imagevalue['image'];
						?>
						<div data-category="<?php echo $imagevalue['category'];?>">
						<a data-fancybox="portfolio" href="<?php echo $imageoneitem['url']; ?>" data-caption="Image 1">
						<img src="<?php echo $imageoneitem['sizes'] ['portfolio_photo']; ?>" alt="<?php the_title(); ?>">
						</a>
						</div>
					<?php
				endforeach; 
			endif;
			?> 
		</div>
	</div>
</section>