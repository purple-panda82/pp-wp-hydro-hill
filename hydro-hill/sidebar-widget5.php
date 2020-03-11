<?php
    // The template for the Widget Area 5
?>

<?php
    if(is_active_sidebar( 'header-social-media-widget' ) ) :
?>

<nav class="flex-end sidebar widget-area col-12">
    <?php dynamic_sidebar('header-social-media-widget');?>
</nav>

<?php endif;?>