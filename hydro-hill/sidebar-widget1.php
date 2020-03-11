<?php
    // The template for the Widget Area 1
?>

<?php
    if(is_active_sidebar( 'footer-top-widget' ) ) :
?>
        <?php dynamic_sidebar('footer-top-widget');?>

<?php endif;?>