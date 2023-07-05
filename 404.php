<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Krolewska_kawa
 */

get_header();
?>

	<section class="error">
        <div class="wrapper">
            <div class="error__box">
                <h2>404</h2>
				<p>Ups... Ten błąd oznacza, że próbujesz przejść do adresu, który nie istnieje.</p>
				<a class="error__btn" href="/">Wróć do strony głównej</a>
            </div>
        </div>
    </section>

<?php
get_footer();
