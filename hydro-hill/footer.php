<?php
/* footer.php template */

?>
    <!-- This goes in the footer.php file -->
    <aside class="row map-section map"><!-- START OF FOOTER ROW -->
        <div class="container">
            <div class="map-row">
                <?php get_sidebar('widget1'); ?>
            </div>
        </div>
    </aside>
    <footer class="row footer-bottom">
        <div class="container mt-6"> <!-- START OF FOOTER CONTAINER -->
            <div class="row"> <!-- START OF FOOTER ROW -->
                <div class="col-sm-12 col-md-6 col-lg-6 footer-widget-padding">
                    <?php get_sidebar('widget2'); ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-2 footer-widget-padding">
                <?php get_sidebar('widget3'); ?>
                </div>
                <div class="col-sm-12 col-lg-4 footer-widget-padding">
                    <?php get_sidebar('widget4'); ?>
                </div>

            </div> <!-- END OF FOOTER ROW -->
        </div> <!-- END OF FOOTER CONTAINER -->
    </footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php wp_footer();?>
</body>
</html>
