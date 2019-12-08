<?php

$args = [
	'parametras' => 'reiksme',
	'parametras_2' => 'reiksme'
];

$result = new WP_Query($params);

if($result->have_posts()):
	while($result->have_posts()):
		$result->the_post();
		?>
		<!-- HTML kuris kartojasi kiekvienam irasui -->
		<?php
	endwhile;
endif;
wp_reset_postdata(); //Atstato SQL uzklausa i pradine busena
?>