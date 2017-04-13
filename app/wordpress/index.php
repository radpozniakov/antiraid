<?php
 get_header();
?>


<main class="container-fluid news">
    <div class="container">
        <div class="title-page">
            <h1><?php wp_title('');?></h1>
        </div>

        <div class="news-list">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="news-item">
                <div class="item-content white">
                    <span class="time uppercase"><?php echo the_time('j');?> <?php echo the_time('F');?> , <?php echo the_time('Y');?></span>
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
                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'large', true );
                $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
                ?>
               
                <div class="kartinka">
                    <a href="<?php the_permalink(); ?>">
                        <div style="background-image: url('<?php echo $thumbnail_url[0]; ?>')" class="img white"></div>
                    </a>
                </div>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>


        <div class="a-more">
            <a class="uppercase" href="#">загрузить еще</a>
        </div>
    </div>
</main>


<?php
 get_footer();
?>
