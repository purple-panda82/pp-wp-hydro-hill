<?php
/* The main template file */

get_header();
?>

	<div id="primary" class="content-area post-background">
		<main id="main" class="site-main">

        <!-- The Front-Page Specific Content Section -->
        <section class="row">
            <div class="container">
                <div class="row mt-6 mb-6">
                <div class="col-12">
                    <?php 
                        // Start the loop
                        if(have_posts()) :
                            while (have_posts()) :
                                the_post(  );
                    ?>
                    <h1 class="text-uppercase mt-4 mb-3 text-green post-title"><?php the_title(); ?></h1>
                    <div class="post-content"><?php
                                    the_content( );
                    ?></div>
                    <?php
                            endwhile;
                            else : 
                    ?>
                    <p>
                        <?php 
                            _e('Sorry, no posts matched your criteria.');
                        ?>
                    </p>
                    <?php
                        endif;
                    ?>
                </div>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>