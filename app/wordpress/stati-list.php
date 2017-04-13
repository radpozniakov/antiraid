<?php
/*
Template Name: stati-list
*/
get_header();
?>
    <main class="container-fluid news">
        <div class="container">
            <div class="title-page">
                <h1><?php wp_title('');?></h1>
            </div>
            <div class="news-list">
                <?php
                $query = new WP_Query($args);
                while ( $query->have_posts() ) : $query->the_post();
                    $do_not_duplicate[] = $post->ID; // Store post ID in array
                endwhile; wp_reset_query();

                // Ajax Load More
                if($do_not_duplicate){
                    $post__not_in = implode(',', $do_not_duplicate);
                }
                echo do_shortcode('[ajax_load_more container_type="div" css_classes="news-list" post_type="post" category="stati" button_label="Загрузить еще" button_loading_label="Загрузка"]');
                ?>
            </div>
        </div>
    </main>
<?php
get_footer();
?>