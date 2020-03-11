<?php
    // The template for the Widget Area 3
?>

<?php
    if(is_active_sidebar( 'footer-bottom-widget-centre' ) ) :
?>

<aside class="sidebar widget-area">
        <?php dynamic_sidebar('footer-bottom-widget-centre');?>
</aside>

<?php endif;?>