<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hydro_Hill
 */

?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">

        <!-- The Front-Page Specific Content Section -->
        <section class="row">
                    <?php 
                        // Start the loop
                        if(have_posts()) :
                            while (have_posts()) :
                                the_post(  );
                                    the_content( );
                            endwhile;
                        endif;
                    ?>
        </section>

</main><!-- #main -->
</div><!-- #primary -->