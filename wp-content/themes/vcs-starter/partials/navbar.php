<!-- NAVBAR
================================================= -->
<?php
$image = get_field('personal_photo', 'option');
?>

<?php
$menu = get_field('n_menu_repeater', 'option');
?>

<header class="top-nav">
    <div class="container flex-container">
        <div class="personalphoto">
            <img src="<?php echo $image['sizes'] ['personal_photo']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <nav class="main-nav flex-container">
            <ul class="flex-container">
            <?php
                if(have_rows('n_menu_repeater','option')):
                    while(have_rows('n_menu_repeater', 'option')):
                        the_row();
                        ?>
                        <li>
                            <a href="#about-me">
                                <?php the_sub_field('icons'); ?>
                                <h3><?php the_sub_field('text');?></h3>
                            </a>
                        </li>
                        <?php
                        endwhile;  
                    endif;
                    ?>  
                </ul> 
            </nav>
        <button class="burger"> <i class="fas fa-bars"></i> </button>
    </div>
</header>