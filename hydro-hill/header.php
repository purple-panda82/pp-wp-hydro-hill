<?php
/* header.php template */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes"> -->

    <title><?php wp_title(''); ?></title>
    
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <!-- This goes in the header.php file -->
    
    <div class="jumbotron header-dimensions header-background"><!-- START OF HEADER ROW -->
		<img class="header-image-z-index" alt="" src="<?php header_image(); ?>" width="100%" height="100%">

        <div class="container"> <!-- START OF CONTENT CONTAINER -->
            <header class="row"> <!-- START OF TOP HEADING SECTION -->
                <div class="col-md-12 col-lg-3 offset-lg-1 brand-container"> <!-- LOGO/BRAND COL -->
                    <a class="link-img" href="<?php echo esc_url( home_url() ); ?>">
                        <?php
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                        ?>
                    </a>
                </div>
                <div class="col-md-12 col-lg-8 header-menus"> <!-- SOCIAL MEDIA & PRIMARY NAVBAR MENUS COL -->
                <div>
                    <?php get_sidebar('widget5'); ?>
                </div>
                <div class="topnav">
                    <nav id="mobile-layout" class="col-12">
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div id="primary-menu">
                            <?php 
                                wp_nav_menu($arg = array(
                                    'menu_class' => 'nav-link text-uppercase text-white primary-menu',
                                    'theme_location' => 'Primary',
                                ));
                            ?>
                        </div>
                    </nav>
                </div>
                </div>

            </header> <!-- END OF TOP HEADING SECTION -->
        </div> <!-- END OF CONTENT CONTAINER -->

        <div class="container mt-6 mb-6"> <!-- START OF CONTENT CONTAINER -->
            <section class="row"> <!-- START OF JUMBOTRON ROW -->
                <div class="col-12 pb-3">
                    <p class="welcome-message text-center text-uppercase text-white">
                        <?php the_field('welcome_message'); ?>
                    </p>
                    <?php the_field('jumbotron_hr'); ?>
                </div>
                <div class="col-12 text-center">
                    <p class="marketing-message text-white sub-title-width">
                    <?php the_field('marketing_message'); ?>
                    </p>
                </div>
            </section> <!-- END OF JUMBOTRON ROW -->
        </div> <!-- END OF CONTENT CONTAINER -->
        <div class="row row-cta">
            <?php the_field('cta_message'); ?>
        </div>
    </div>

    <script>
function myFunction() {
  var x = document.getElementById("primary-menu");
  if (x.style.display === "flex") {
    x.style.display = "none";
  } else {
    x.style.display = "flex";
  }
}
</script>