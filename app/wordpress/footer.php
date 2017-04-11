<footer class="container-fluid">
    <div class="container">
        <div class="top-footer">
            <div class="about-us">
                <p class="foot-logo-title">
                    <?php bloginfo( 'name' ); ?>
                </p>
                <p class="foot-logo-description">
                    <?php bloginfo( 'description' ); ?>
                </p>
            </div>
            <div class="meta-foot">
                <ul class="media">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                </ul>
                <p><i class="fa fa-phone" aria-hidden="true"></i>  info@antiraid.com.ua</p>
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> 0-800-503-200</p>
            </div>
        </div>
        <nav class="navigation-bottom">
            <ul>
                <?php  $defaults = array('theme_location'  => 'footer-menu', 'menu_class'  => '', 'menu_id'  => '', 'container_id' => '', 'container_class' => 'container', 'container' => 'ul');
                wp_nav_menu( $defaults ); ?>

            </ul>
        </nav>
    </div>
    <div class="from">
        <p>© <? echo strftime("%Y"); ?> УКРАИНА</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
