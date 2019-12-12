<!-- SKILL 1 -->
<div class="skill">
    <h2><?php the_field('s_heading_title'); ?></h2>
</div>
    <div class="flex-container flex-container-wrap flex-container-justify">
    <?php
        if(have_rows('s_skill_repeater')):
            while(have_rows('s_skill_repeater')):
                the_row();
                ?>
                <div class="mainskill">
                <h3><?php the_sub_field('skill_name'); ?></h3>
                <!-- Pagrindinis teksto ir bloko konteineris -->
                   
                   <?php
                    if(have_rows('skill_description_repeater')):
                        while(have_rows('skill_description_repeater')):
                            the_row();
                            ?>
                            <div class="mainskill-container">
                            <!-- Tekstas ir skaiciai -->
                                <div class="flex-container flex-container-wrap flex-container-justify">
                                    <!-- Tekstas -->
                                    <div class="title">
                                    <h4><?php the_sub_field('skill_category'); ?></h4>
                                    </div>
                                    <!-- Procentai -->
                                    <div class="percent">
                                        <h4><?php the_sub_field('percentage'); ?></h4>
                                    </div>
                                </div>
                                    <!-- Baltas konteineris -->
                                    <div class="whitebox">
                                        <!-- Vidiniai blokai (zalias ir pilkas) -->
                                        <div class="percentline">
                                            <div class="percentlineInside"></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        endwhile;  
                    endif;
                    ?>      
                </div>
            <?php
        endwhile;  
    endif;
    ?>  
</div>