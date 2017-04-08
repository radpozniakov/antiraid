<?php  get_header(); ?>

<main class="container-fluid about">
    <div class="container">
        <div class="title-page">
            <h1><?php wp_title();?></h1>
        </div>
        <div class="main-content">
            <div class="our-help white">
                <?php if ( have_posts() ) : ?>
                   <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                            <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php  get_footer(); ?>


