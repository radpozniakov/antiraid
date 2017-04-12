<?php $options = get_option( 'theme_settings' ); ?>

<div class="social-foot">
    <ul>
        <?php if(isset($options['tw_link']) AND $options['tw_link']!=''):?>
            <li><a href="<?php echo $options['tw_link'] ?>"><i class="fa fa-twitter" aria-hidden="true"></i> <?php echo $options['tw_link'] ?></a></li>
        <?php endif;?>
        <?php if(isset($options['facebook_link']) AND $options['facebook_link']!=''):?>
            <li><a href="<?php echo $options['facebook_link'] ?>"><i class="fa fa-facebook" aria-hidden="true"></i> <?php echo $options['facebook_link'] ?></a></li>
        <?php endif;?>
        <?php if(isset($options['vk_link']) AND $options['vk_link']!=''):?>
            <li><a href="<?php echo $options['vk_link'] ?>"><i class="fa fa-vk" aria-hidden="true"></i> <?php echo $options['vk_link'] ?></a></li>
        <?php endif;?>
    </ul>
</div>

