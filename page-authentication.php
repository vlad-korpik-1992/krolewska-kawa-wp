<?php
/**
  * Template Name: Аutoryzacja
*/
?>
<?php

if ( is_user_logged_in() ) {
    $location = get_page_link(163);
	wp_safe_redirect( $location, 302 );
	exit;
}
else {}

get_header();
?>

    <section class="user">
        <div class="wrapper">
            <div class="user__box user__box--account">
                <div class="user__box__items">
                    <h2>Rejestracja</h2>
                    <form class="user__form" action="" method="POST">
                        <?php wp_nonce_field( 'registration', 'registration_nonce' ) ?>
                        <div class="user__form__items">
                            <label class="user__form__label" for="user_login">Nazwisko</label>
                            <input class="user__form__text" type="text" name="username" required="required"/>
                        </div>
                        <div class="user__form__items">
                            <label class="user__form__label" for="user_login">Email</label>
                            <input class="user__form__text" type="email" name="email" required="required"/>
                        </div>
                        <div class="user__form__items--full">
                            <label class="user__form__label" for="user_login">Hasło</label>
                            <input class="user__form__text" type="password" name="password" required="required"/>
                        </div>
                        <div class="user__form__items">
                            <input type="submit" class="user__form__send" value="Rejestracja">
                        </div>
                    </form>
                </div>
                <div class="user__box__items">
                    <h2>Autoryzacja</h2>
                    <?php $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0; 
                    if ( $login === "failed" ) {  
                        echo '<p class="auth-error">ERROR. Nieprawidłowa nazwa użytkownika lub hasło</p>';
                    }?>
                    
                    <form class="user__form" name="loginform" id="loginform" action="<? echo site_url();?>/wp-login.php" method="post">
                        <div class="user__form__items--full">
                            <label class="user__form__label" for="user_login">Nazwa użytkownika lub adres e-mail</label>
                            <input class="user__form__text" type="text" name="log" id="user" required="required"/>
                        </div>
                        <div class="user__form__items--full">
                            <label class="user__form__label" for="user_login">Hasło</label>
                            <input class="user__form__text" type="password" name="pwd" id="pass" required="required"/>
                        </div>
                        <div class="user__form__items">
                            <input type="hidden" name="redirect_to" value="<?php echo get_page_link(163)?>" />
                            <input type="submit" name="wp-submit" id="wp-submit" class="user__form__send" value="Zaloguj">
                        </div>   
                    </form> 
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>