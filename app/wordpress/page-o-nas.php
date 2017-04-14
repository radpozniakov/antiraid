<?php
/*
Template Name: page-o-nas
*/
get_header(); ?>

    <main class="container-fluid about">
        <div class="container">
            <div class="title-page">
                <h1><?php wp_title(''); ?></h1>
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
                    <h2>— <?php echo tStr('o_nas_team_title');?> —</h2>

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
                <h2>— <?php echo tStr('o_nas_partners_title');?> —</h2>
                <div class="sponsors-carousel">
                    <div class="owl-carousel owl-theme " id='test'>
                    <?php
                        $args = array(
                            'post_type' => 'partners',
                        );
                        $the_query = new WP_Query( $args );
                        ?>

                        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                             <?php
                                $thumbnail_id = get_post_thumbnail_id();
                                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'medium', true );

                                ?>
                        <a href="<?php the_field('url'); ?>"><div class="item" style="background-image: url('<?php echo $thumbnail_url[0]; ?>')"></div></a>

                         <?php endwhile; endif; ?>
                    </div>
                </div>

            </div>

            <?php get_template_part( 'social-foot' ); ?>

        </div>
    </main>

<?php get_footer(); ?>