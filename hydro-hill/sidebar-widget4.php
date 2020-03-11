<?php
    // The template for the Widget Area 4
?>

<?php
    if(is_active_sidebar( 'footer-bottom-widget-right' ) ) :
?>

<aside class="sidebar widget-area">
        <?php dynamic_sidebar('footer-bottom-widget-right');?>
</aside>

<?php endif;?>