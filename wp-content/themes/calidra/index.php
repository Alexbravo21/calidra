<?php
/**
 * The main template file
 */

get_header();
?>

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
			}

		}
		?>

<?php
get_footer();