<?php $options = get_option( 'theme_settings' ); ?>

<footer class="container-fluid">
    <div class="container">
        <div class="top-footer">
            <div class="about-us">
                <p class="foot-logo-title">
                    <?php bloginfo( 'name' ); ?>
                </p>
                <p class="foot-logo-description">
                    <?php echo $options['footer_description'] ?>
                </p>
            </div>
            <div class="meta-foot">

                <ul class="media">
                    <?php if(isset($options['facebook_link']) AND $options['facebook_link']!=''):?>
                        <li><a href="<?php echo $options['facebook_link'] ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <?php endif;?>

                    <?php if(isset($options['vk_link']) AND $options['vk_link']!=''):?>
                        <li><a href="<?php echo $options['vk_link'] ?>"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                    <?php endif;?>

                    <?php if(isset($options['tw_link']) AND $options['tw_link']!=''):?>
                        <li><a href="<?php echo $options['tw_link'] ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <?php endif;?>
                </ul>

                <p><i class="fa fa-phone" aria-hidden="true"></i><?php echo $options['custom_email'] ?></p>
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $options['custom_phone'] ?></p>
            </div>
        </div>
        <nav class="navigation-bottom">
                <?php  $defaults = array('theme_location'  => 'footer-menu', 'menu_class'  => '', 'menu_id'  => '', 'container_id' => '', 'container_class' => 'container', 'container' => 'ul');
                wp_nav_menu( $defaults ); ?>
        </nav>
    </div>
    <div class="from">
        <p>© <? echo strftime("%Y"); ?> <?php echo tStr('country_name');?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
