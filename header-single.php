<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php wp_title("", true); ?></title>
</head>
<body>
    <header class="header">
        <div class="wrapper">
            <div class="header__box">
                <a class="logo" href="/">
                    <img class="logo__img" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Krolewska kawa">
                </a>
                <nav class="menu">
                    <a href="#" class="menu__btn">
                        <span class="menu__btn--element"></span>
                    </a>
                    <ul class="menu__list">
                        <li class="menu__list__items">
                            <a class="menu__link" href="<?php echo get_page_link(36)?>">Menu</a>
                        </li>
                        <li class="menu__list__items">
                            <a class="menu__link <?php if ( is_page_template('page-story.php')) { echo 'menu__link--active'; }?>" href="<?php echo get_page_link(80)?>">Podsumowania historyczne</a>
                        </li>
                        <li class="menu__list__items">
                            <a class="menu__link" href="<?php echo get_page_link(60)?>">Akcje</a>
                        </li>
                        <li class="menu__list__items">
                            <a class="menu__link" href="<?php echo get_page_link(74)?>">Kontakty</a>
                        </li>
                        <li class="menu__list__items menu__list__items--mobile">
                            <a class="header__btn__link" href="#">Zaloguj się</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__btn">
                    <a class="header__btn__link" href="#">Zaloguj się</a>
                </div>
            </div>
        </div>
    </header>
