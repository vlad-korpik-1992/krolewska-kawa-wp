<?php
/**
  * Template Name: Menu
*/
?>
<?php get_header();?>
    <section class="catalog">
        <img class="catalog__absolute" src="<?php bloginfo('template_url'); ?>/assets/img/catalog__box--absolute.png" alt="">
        <div class="wrapper">
            <div class="catalog__tabs">
                <ul class="catalog__tabs__list">
                    <li class="catalog__tabs__list__items">
                        <a class="catalog__link catalog__link--active" href="#" id="zimne">Zimne napoje</a>
                    </li>
                    <li class="catalog__tabs__list__items">
                        <a class="catalog__link" href="#" id="gorace">Gorące napoje</a>
                    </li>
                    <li class="catalog__tabs__list__items">
                        <a class="catalog__link" href="#" id="sniadania">Śniadania</a>
                    </li>
                    <li class="catalog__tabs__list__items">
                        <a class="catalog__link" href="#" id="salatki">Sałatki</a>
                    </li>
                    <li class="catalog__tabs__list__items">
                        <a class="catalog__link" href="#" id="przekaski">Przekąski</a>
                    </li>
                    <li class="catalog__tabs__list__items">
                        <a class="catalog__link" href="#" id="glowny">Główny</a>
                    </li>
                </ul>
            </div>
            <div class="catalog__box catalog__box--active" id="1zimne">
                <div class="catalog__box__items">
                    <img src="<?php echo the_field('zimne-picture');?>" alt="Zimne napoje">
                </div>
                <div class="catalog__box__items">
                    <h2>Zimne napoje</h2>
                    <ul class="catalog__list">
                        <?php 
                            if( have_rows('zimne-menu') ):?>
                        <?php
                                while ( have_rows('zimne-menu') ) : the_row();?>
                                    
                                    <li class="catalog__list__items"><?php echo the_sub_field('zimne-menu-tittle'); ?> <span><?php echo the_sub_field('zimne-menu-price'); ?> PLN</span></li>
                        <?php
                                endwhile;
                                else: 'Sekcja menu jest wypełniana';
                            endif;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="catalog__box" id="1gorace">
                <div class="catalog__box__items">
                    <img src="<?php echo the_field('gorace-picture');?>" alt="Gorące napoje">
                </div>
                <div class="catalog__box__items">
                    <h2>Gorące napoje</h2>
                    <ul class="catalog__list">
                        <?php 
                            if( have_rows('gorace-menu') ):?>
                        <?php
                                while ( have_rows('gorace-menu') ) : the_row();?>
                                    
                                    <li class="catalog__list__items"><?php echo the_sub_field('gorace-menu-tittle'); ?> <span><?php echo the_sub_field('gorace-menu-price'); ?> PLN</span></li>
                        <?php
                                endwhile;
                                else: 'Sekcja menu jest wypełniana';
                            endif;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="catalog__box" id="1sniadania">
                <div class="catalog__box__items">
                    <img src="<?php echo the_field('sniadania-picture');?>" alt="Śniadania">
                </div>
                <div class="catalog__box__items">
                    <h2>Śniadania</h2>
                    <ul class="catalog__list">
                        <?php 
                            if( have_rows('sniadania-menu') ):?>
                        <?php
                                while ( have_rows('sniadania-menu') ) : the_row();?>
                                    
                                    <li class="catalog__list__items"><?php echo the_sub_field('sniadania-menu-tittle'); ?> <span><?php echo the_sub_field('sniadania-menu-price'); ?> PLN</span></li>
                        <?php
                                endwhile;
                                else: 'Sekcja menu jest wypełniana';
                            endif;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="catalog__box" id="1salatki">
                <div class="catalog__box__items">
                    <img src="<?php echo the_field('salatki-picture');?>" alt="Sałatki">
                </div>
                <div class="catalog__box__items">
                    <h2>Sałatki</h2>
                    <ul class="catalog__list">
                        <?php 
                            if( have_rows('salatki-menu') ):?>
                        <?php
                                while ( have_rows('salatki-menu') ) : the_row();?>
                                    
                                    <li class="catalog__list__items"><?php echo the_sub_field('salatki-menu-tittle'); ?> <span><?php echo the_sub_field('salatki-menu-price'); ?> PLN</span></li>
                        <?php
                                endwhile;
                                else: 'Sekcja menu jest wypełniana';
                            endif;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="catalog__box" id="1przekaski">
                <div class="catalog__box__items">
                    <img src="<?php echo the_field('przekaski-picture');?>" alt="Przekąski">
                </div>
                <div class="catalog__box__items">
                    <h2>Przekąski</h2>
                    <ul class="catalog__list">
                        <?php 
                            if( have_rows('przekaski-menu') ):?>
                        <?php
                                while ( have_rows('przekaski-menu') ) : the_row();?>
                                    
                                    <li class="catalog__list__items"><?php echo the_sub_field('przekaski-menu-tittle'); ?> <span><?php echo the_sub_field('przekaski-menu-price'); ?> PLN</span></li>
                        <?php
                                endwhile;
                                else: 'Sekcja menu jest wypełniana';
                            endif;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="catalog__box" id="1glowny">
                <div class="catalog__box__items">
                    <img src="<?php echo the_field('glowny-picture');?>" alt="Główny">
                </div>
                <div class="catalog__box__items">
                    <h2>Główny</h2>
                    <ul class="catalog__list">
                        <?php 
                            if( have_rows('glowny-menu') ):?>
                        <?php
                                while ( have_rows('glowny-menu') ) : the_row();?>
                                    
                                    <li class="catalog__list__items"><?php echo the_sub_field('glowny-menu-tittle'); ?> <span><?php echo the_sub_field('glowny-menu-price'); ?> PLN</span></li>
                        <?php
                                endwhile;
                                else: 'Sekcja menu jest wypełniana';
                            endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>