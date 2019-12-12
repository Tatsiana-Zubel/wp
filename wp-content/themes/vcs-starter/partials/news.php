<!-- LATEST NEWS 
================================================== -->
<section class="last_block latest-news-block">
	<div class="container">
		<h2 id="blog"><?php the_field('hn_section_heading'); ?></h2>
		<div class="newscontainer flex-container flex-container-wrap flex-container-justify">
		<?php
			$args = [
				'cat' => get_field('hn_category'),
				'posts_per_page' => get_field('hn_limit')
			];  

			$result = new WP_Query($args);

			if($result->have_posts()):
				while($result->have_posts()):
					$result->the_post();
					?>
					<div class="news">
						<img src="<?php the_post_thumbnail_url('homepage-posts'); ?>" alt="<?php the_title(); ?>">
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
							<a href="<?php the_permalink();?>">
								Read more
							</a>
						</button>
					</div>
					<?php
				endwhile;
			endif;
		wp_reset_postdata();
		?>
	</div>
</div>
