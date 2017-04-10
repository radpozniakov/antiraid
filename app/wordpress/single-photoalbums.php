<?php
/*
Template Name: single-photoalbum
*/
get_header(); ?>

<main class="container-fluid news">
    <div class="container">
        <div class="title-page-with-a">
            <a href="<?php echo get_page_link(23); ?>" class="uppercase">альбомы</a>
            <a href="#" class="uppercase active"><?php wp_title(''); ?></a>
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="info-block white">
            <p><?php the_field('photo-description') ?></p>
        </div>

        <div class="album-list">

            <?php the_content(); ?>

        </div>

        <?php endwhile; else : ?>
        <?php endif; ?>

    </div>
</main>


<?php get_footer(); ?>
