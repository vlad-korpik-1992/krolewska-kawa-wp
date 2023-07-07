<?php
/**
  * Template Name: Strona domowa
*/
?>
<?php
    if( isset( $_GET['logout'] ) ) wp_logout();
?>
<?php get_header('home');?>
    <section class="hero" data-0="transform:translateX(0%);" data-1000="transform:translateX(-300%)">
        <div class="hero__box">
            <img class="hero__box__fog" src="<?php echo the_field('hero-img-fog');?>" alt="<?php single_post_title(); ?>">
            <img class="hero__box__castle" src="<?php echo the_field('hero-img');?>" alt="<?php single_post_title(); ?>">
            <div class="wrapper">
                <div class="hero__box__circle">
                    <div class="hero__box__circle__items">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/hero-circle-left.svg" alt="<?php single_post_title(); ?>" class="hero__box__circle--left">
                    </div>
                    <div class="hero__box__circle__items">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/hero-circle-right.svg" alt="<?php single_post_title(); ?>" class="hero__box__circle--right">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__box">
            <div class="wrapper wrapper--about">
                <div class="hero__box__gallery">
                    <div class="hero__box__gallery__items">
                        <div class="hero__box__gallery__inner">
                            <div class="hero__box__gallery__inner__items">
                                <img src="<?php echo the_field('gallery-img-01');?>" alt="" class="gallery__img">
                            </div>
                            <div class="hero__box__gallery__inner__items">
                                <img src="<?php echo the_field('gallery-img-02');?>" alt="" class="gallery__img">
                            </div>
                            <div class="hero__box__gallery__inner__items">
                                <img src="<?php echo the_field('gallery-img-03');?>" alt="" class="gallery__img">
                            </div>
                            <div class="hero__box__gallery__inner__items">
                                <img src="<?php echo the_field('gallery-img-04');?>" alt="" class="gallery__img">
                                <img src="<?php echo the_field('gallery-img-05');?>" alt="" class="gallery__img">
                            </div>
                            <div class="hero__box__gallery__inner__items">
                                <img src="<?php echo the_field('gallery-img-06');?>" alt="" class="gallery__img">
                            </div>
                            <div class="hero__box__gallery__inner__items">
                                <img src="<?php echo the_field('gallery-img-07');?>" alt="" class="gallery__img">
                            </div>
                            <div class="hero__box__gallery__inner__items">
                                <img src="<?php echo the_field('gallery-img-08');?>" alt="" class="gallery__img">
                            </div>
                            <div class="hero__box__gallery__inner__items">
                                <img src="<?php echo the_field('gallery-img-09');?>" alt="" class="gallery__img">
                            </div>
                        </div>
                    </div>
                    <div class="hero__box__gallery__content">
                        <?php echo wpautop(the_content());?>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__box">
            <div class="wrapper wrapper--about wrapper--about--tablet">
                <div class="hero__box__title">
                    <h2><?php echo the_field('about-title');?></h2>
                </div>
                <div class="hero__box__about hero__box__about--between">
                    <div class="hero__box__about__items">
                        <div class="hero__box__about__inner">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/hero__box__about_01.svg" alt="">
                            <?php echo wpautop(the_field('about-content-01'));?>
                        </div>
                    </div>
                    <div class="hero__box__about__items">
                        <div class="hero__box__about__inner hero__box__about__inner--end">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/hero__box__about_02.svg" alt="">
                            <?php echo wpautop(the_field('about-content-02'));?>
                        </div>
                    </div>
                </div>
                <div class="hero__box__about hero__box__about--center">
                    <div class="hero__box__about__items">
                        <div class="hero__box__about__inner">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/hero__box__about_03.svg" alt="">
                            <?php echo wpautop(the_field('about-content-03'));?>
                        </div>
                    </div>
                </div>
                <div class="hero__box__about hero__box__about--between">
                    <div class="hero__box__about__items">
                        <div class="hero__box__about__inner">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/hero__box__about_04.svg" alt="">
                            <?php echo wpautop(the_field('about-content-04'));?>
                        </div>
                    </div>
                    <div class="hero__box__about__items">
                        <div class="hero__box__about__inner hero__box__about__inner--end">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/hero__box__about_05.svg" alt="">
                            <?php echo wpautop(the_field('about-content-05'));?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__box">
            <div class="wrapper wrapper--about">
                <div class="hero__box__slider">
                    <?php
                        $args = array (
                            'post_type' => 'page',
                            'numberpost' => 1,
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
                        if ( $query->have_posts()) :
                            while ( $query->have_posts() ) : $query->the_post();?>
                            <div class="hero__box__slider__items">
                                <div class="hero__box__slider__img">
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $posts['ID'] ) ); ?>" alt="<? echo the_title($posts['ID']);?>" alt="">
                                </div>
                                <div class="hero__box__slider__content">
                                    <a href="<? echo get_permalink($posts['ID'])?>"><? echo the_title($posts['ID']);?></a>
                                    <?php echo wpautop(the_field('desc-story', $posts['ID']));?>
                                </div>
                            </div>
                    <?php
                            endwhile; wp_reset_postdata();
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>