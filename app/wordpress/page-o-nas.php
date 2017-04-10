<?php get_header(); ?>

    <main class="container-fluid about">
        <div class="container">
            <div class="title-page">
                <h1>О нас</h1>
            </div>
            <div class="main-content">



                <div class="our-help white">

                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php the_content(); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>


                <div class="our-comand white">
                    <h2>— Команда —</h2>

                    <ul>
                        <?php
                        $args = array(
                            'post_type' => 'team',
                        );
                        $the_query = new WP_Query( $args );
                        ?>
                        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <li>
                            <?php
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true);
                            ?>

                            <div class="logo"><img src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>"></div>
                            <h5><?php the_title(); ?></h5>

                            <p class="uppercase"><?php the_field('profile'); ?></p>
                            <p><?php the_field('email'); ?></p>
                        </li>

                        <?php endwhile; endif; ?>

                    </ul>
                </div>

            </div>
            <div class="our-sponsors white">
                <h2>— Партнеры —</h2>
                <div class="sponsors-carousel">
                    <div class="owl-carousel owl-theme " id='test'>
                        <a href="#"><div class="item"></div></a>
                        <a href="#"><div class="item"></div></a>
                        <a href="#"><div class="item"></div></a>
                        <a href="#"><div class="item"></div></a>
                        <a href="#"><div class="item"></div></a>
                        <a href="#"><div class="item"></div></a>
                    </div>
                </div>

            </div>
            <div class="social-foot">
                <ul>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> tw.com/AntiRaiders/</a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> facebook.com/AntiRaiders/</a></li>
                    <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i> vk.com/AntiRaiders/</a></li>
                </ul>
            </div>
        </div>
    </main>

<?php get_footer(); ?>