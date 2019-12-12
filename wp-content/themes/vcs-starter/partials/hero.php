<!-- HERO
================================================== -->   
<?php
$image = get_field('h_background'); 
?> 

<section class="hero" style="background-image: url(<?php echo $image ['sizes']['1536x1536']; ?>);">
    <div class="overlay">  
        <div class="container flex-container">
            <div class= "hero-content">
                <h1><?php the_field('h_hero_heading'); ?></h1> 
                <section><?php the_field('h_description'); ?></section>
                <div class="socialmedia">
                    <!-- Social Media Links -->
                    <ul>  
                        <?php
                        if(have_rows('h_icons_repeater')):
                            while(have_rows('h_icons_repeater')):
                                the_row();
                                ?>
                                <li>
                                    <a rel="nofollow" href="<?php the_sub_field('link'); ?>" target="_blank">
                                        <?php the_sub_field('icon'); ?> 
                                    </a>
                                </li>
                                <?php
                            endwhile;  
                        endif;
                        ?> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>