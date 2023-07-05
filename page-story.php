<?php
/**
  * Template Name: Podsumowanie historyczne
*/
?>
<?php get_header('single');?>
    <section class="article">
        <div class="wrapper">
            <div class="article__box">
                <h1><?php single_post_title(); ?></h1>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/single-head.png" alt="<?php single_post_title(); ?>">
                <?php echo wpautop(the_content());?>
                <img class="article__box__img" src="<?php bloginfo('template_url'); ?>/assets/img/single-footer.png" alt="<?php single_post_title(); ?>">
            </div>
        </div>
    </section>
    <section class="related">
        <div class="wrapper">
            <h2>Możesz być zainteresowany historią innych potraw</h2>
            <?php
                $args = array (
                    'post_type' => 'page',
                    'numberpost' => 1,
                    'post__not_in' => array (get_the_ID()),
                    'orderby'  => 'rand',
                    'post_status' => 'publish',
                    'meta_query' => array( 
                        array(
                            'key'   => '_wp_page_template', 
                            'value' => 'page-story.php'
                        )
                    )
                );
                $query = new WP_Query( $args );
            ?>
            <div class="related__box">
                <?php
                    if ( $query->have_posts()) :
                        while ( $query->have_posts() ) : $query->the_post();?>
                        <div class="related__box__items">
                            <a class="related__box__items__link" href="<? echo get_permalink($posts['ID'])?>">
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $posts['ID'] ) ); ?>" alt="<? echo the_title($posts['ID']);?>">
                                <h3><? echo the_title($posts['ID']);?></h3>
                            </a>
                        </div>
                <?php
                        endwhile; wp_reset_postdata();
                    endif;
                ?>
            </div>
        </div>
    </section>
<?php get_footer();?>