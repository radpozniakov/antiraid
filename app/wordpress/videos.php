<?php
/*
Template Name: videos
*/
get_header();
?>

<main class="container-fluid news">
    <div class="container">
        <div class="title-page-with-a">
            <a href="<?php echo get_page_link(23); ?>" class="uppercase">фотоальбомы</a>
            <a href="<?php get_permalink(); ?>" class="uppercase active"><?php wp_title('')?></a>
        </div>

        <div class="video-list">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</main>


<?php  get_footer(); ?>


