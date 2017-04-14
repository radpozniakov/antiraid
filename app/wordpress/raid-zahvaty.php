<?php
/*
Template Name: zahvaty
*/
get_header(); ?>
    <main class="container-fluid news">
        <div class="container">
            <div class="title-page">
                <h1><?php wp_title(''); ?></h1>
            </div>

            <div class="news-list">


                <?php

                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

                $custom_args = array(
                    'post_type' => 'post',
                    'cat' => 8,
                    'posts_per_page' => 7,
                    'paged' => $paged
                );

                $custom_query = new WP_Query( $custom_args ); ?>

                <?php if ( $custom_query->have_posts() ) : ?>

                    <!-- the loop -->
                    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>



                        <div class="news-item">
                            <div class="item-content white">
                                <span class="time uppercase"><?php echo the_time('j'); ?> <?php echo the_time('F');?> , <?php echo the_time('Y');?></span>
                                <a href="<?php the_permalink(); ?>">
                                    <h2 class="item-card"><?php the_title(); ?></h2>
                                </a>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_excerpt(); ?>
                                </a>

                                <?php the_tags('<i class="fa fa-tags"></i> <span class="tag-for-news">','<span> ',''); ?>

                            </div>

                            <?php
                            $thumbnail_id = get_post_thumbnail_id();
                            $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                            $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
                            ?>

                            <div class="kartinka">
                                <a href="<?php the_permalink(); ?>">
                                    <div style="background-image: url('<?php echo $thumbnail_url[0]; ?>')" class="img white"></div>
                                </a>
                            </div>
                        </div>


                    <?php endwhile; ?>
                    <!-- end of the loop -->
                    <!-- pagination here -->
                    <?php
                    if (function_exists(custom_pagination)) {
                        custom_pagination($custom_query->max_num_pages,"",$paged);
                    }
                    ?>

                    <?php wp_reset_postdata(); ?>

                <?php else:  ?>
                    <p><?php _e( 'Записей нет' ); ?></p>
                <?php endif; ?>

            </div>

        </div>
    </main>


<?php
get_footer();
?>