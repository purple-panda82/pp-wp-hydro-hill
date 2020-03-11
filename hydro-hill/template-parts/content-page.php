<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hydro_Hill
 */

?>
<div class="content-bg-white"><!-- START OF MAIN CONTENT ROW -->
	<div class="entry-content">
		<?php
		
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hydro-hill' ),
			'after'  => '</div>',
		) );
		?>
    </div> <!-- END OF MAIN CONTENT CONTAINER -->
</div>
