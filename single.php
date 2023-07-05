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
<?php get_footer();?>