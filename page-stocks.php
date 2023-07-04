<?php
/**
  * Template Name: Akcje
*/
?>
<?php get_header();?>
    <section class="stocks">
        <div class="wrapper">
            <div class="stocks__box">
                <?php 
                    if( have_rows('stocks') ):?>
                <?php
                        $item = 1;
                        while ( have_rows('stocks') ) : the_row();?>
                            <div class="stocks__box__items <?php if($item == 3): echo 'stocks__box__items--full'; $item = 1; endif;?>">
                                <div class="stocks__box__inner">
                                    <img src="<?php echo the_sub_field('stocks-img'); ?>" alt="<?php echo the_sub_field('stocks-title'); ?>">
                                    <div class="stocks__box__inner__info">
                                        <h2><?php echo the_sub_field('stocks-title'); ?></h2>
                                        <?php echo wpautop(get_sub_field('stocks-desc'));?>
                                    </div>
                                </div>
                            </div>                                   
                <?php   
                        $item++;
                        endwhile;
                    else: ?><div class="stocks__box__items">Strona w przygotowaniu</div><?;
                    endif;
                ?>
            </div>
        </div>
    </section>
<?php get_footer();?>