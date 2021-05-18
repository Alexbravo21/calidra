<?php
/**
 * The main template file
 */

get_header();
?>
<p>holo</p>
<p>holo</p>

		<?php
            echo '<p>holaaaa</p>';
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
			}

		}
		?>

<?php
get_footer();