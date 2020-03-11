<?php
    // The template for the Widget Area 2
?>

<?php
    if(is_active_sidebar( 'footer-bottom-widget-left' ) ) :
?>

<aside class="sidebar widget-area">
        <?php dynamic_sidebar('footer-bottom-widget-left');?>
</aside>

<?php endif;?>