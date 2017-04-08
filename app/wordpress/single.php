<?php
    get_header();
?>


<!--[if lt IE 8]>
<p class="browserupgrade">Вы используете<strong>старый</strong> браузер. Пожалуйста обновите свой браузер.</p>
<![endif]-->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<main class="single-news">

    <?php
    $thumbnail_id = get_post_thumbnail_id();
    $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
    $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
    ?>


    <div data-parallax="scroll" data-parallax="scroll"  data-bg="<?php echo $thumbnail_url[0]; ?>" class="thumbnail-news parallax-news container-fluid"></div>

    <article class="container white">

        <div class="meta-info">
            <span><?php the_date(); ?></span>
            <span><?php the_category(' &bull; '); ?></span>
        </div>

        <h1 class="single-news-title"><?php the_title(); ?></h1>
        <div class="single-news-content">
            <div class="content-single">
                <?php the_content(); ?>
            </div>

            <!--Tags-->
            <div class="single-news-tags row">

                <div class="col-sm-6">

                    <?php the_tags('<i class="fa fa-tags"></i> <span class="tag-for-news">','<span> ',''); ?>

                </div>

                <div class="col-sm-6">
                    <ul class="share-social">
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Tags-->

            <?php endwhile; ?>
            <?php endif; ?>

            <!--Author info-->
            <div class="author-news">
                <?php echo get_avatar( get_the_author_meta('user_email')); ?>
                <p class="name-author"><?php the_author(); ?></p>
                <p class="email-author"><?php the_author_meta('user_email'); ?></p>

            </div>
            <!--Author info-->

            <!--Comments block-->
            <div class="comments-block">

<!--                коментарии-->

            </div>
            <!--Comments block-->
        </div>
    </article>

    <div class="container-fluid recent-news-wrap">


            <?php
                $categories = get_the_category($post->ID);

                if ($categories) {
                    $category_ids = array();
                    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                        $args = array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'showposts'=>3,
                            'orderby'=>rand,
                            'caller_get_posts'=>1);

                $my_query = new wp_query($args);
                if( $my_query->have_posts() ) {
                    echo " <div class=\"recent-news-parent container\">";

                    while ($my_query->have_posts()) {
                        $my_query->the_post();
                        ?>


                        <div class="recent-news-item">

                            <?php
                            $thumbnail_id = get_post_thumbnail_id();
                            $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                            $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
                            ?>

                            <a href="<?php the_permalink() ?>">
                                <div style="background-image: url('<?php echo $thumbnail_url[0]; ?>');" class="thumnail-recent-item"></div>
                                <div class="text-description">
                                    <p><span><?php echo the_time('j');?> <?php echo the_time('F');?> , <?php echo the_time('Y');?></span></p>
                                    <h4><?php the_title(); ?></h4>
                                    <div class="description"><?php the_excerpt(); ?></div>
                                </div>
                            </a>

                            <div class="tags">
                                <?php the_tags('<i class="fa fa-tags"></i> <span class="tag-for-news">','</span>',' '); ?>
                            </div>
                        </div>

                        <?php
                    }
                }
                wp_reset_query();
            }
            ?>

    </div>

</main>


<?php
    get_footer();
?>
