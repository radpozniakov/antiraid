<?php get_header();
/*
Template Name: Media
*/
?>

<main class="container-fluid news">
    <div class="container">
        <div class="title-page-with-a">
            <a href="<?php echo get_page_link(23); ?>" class="uppercase active"><?php echo tStr('media_photoalbums');?></a>
            <a href="<?php echo get_page_link(25); ?>" class="uppercase "><?php echo tStr('media_videos');?></a>
        </div>

        <div class="photo-albums-list">

            <?php
            $args = array(
                'post_type' => 'photoalbums',
            );
            $the_query = new WP_Query( $args );
            ?>
            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
            ?>

            <div class="photo-album-item white">

                <div class="logo" style="background-image: url('<?php echo $thumb_url[0]; ?>')">
                    <div class="filter">
                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    </div>
                </div>
                <div class="time">
                    <p><?php echo the_time('j');?> <?php echo the_time('F');?> , <?php echo the_time('Y');?></p>
                </div>
                <a href="<?php the_permalink(); ?>" class="hack"></a>
            </div>

            <?php endwhile; endif; ?>

        </div>

    </div>
</main>

<?php get_footer(); ?>


