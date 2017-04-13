<?php get_header(); ?>

    <!--         ========================== END HEADER ==========================
        [if lt IE 8]>
    <p class="browserupgrade">Вы используете<strong>старый</strong> браузер. Пожалуйста обновите свой браузер.</p>
    <![endif] -->

    <main class="container-fluid index">
        
            <div class="index-slider">
            <div class="navigation-nav">
                <div class="navigation-prev"><b>&#9001;</b></div>
                <div class="navigation-next">&#9002;</div>
            </div>
                <div class="owl-carousel owl-theme " id='index-carousel'>
                    <div class="item">
                        <a href="#"></a>
                        <div class="dark"></div>
                        <div class="index-slider-text container">
                            <h2>
                                Радион Поздняков набрал команду про проходу дебрей js фреймворков
                            </h2>
                            
                        </div>
                        
                        
                    </div>
                    <div class="item">
                        <a href="#"></a>
                        <div class="dark"></div>
                        <div class="index-slider-text container">
                            <h2>
                                Радион Поздняков набрал команду про проходу дебрей js фреймворков
                            </h2>
                            
                        </div>
                        
                        
                    </div>
                    <div class="item">
                        <a href="#"></a>
                        <div class="dark"></div>
                        <div class="index-slider-text container">
                            <h2>
                                Радион Поздняков набрал команду про проходу дебрей js фреймворков
                            </h2>
                            
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <div class="container">

                <style>.alm-reveal{ display: flex; justify-content: space-between; flex-wrap: wrap;}</style>

                    <?php
                    $query = new WP_Query($args);
                    while ( $query->have_posts() ) : $query->the_post();
                        $do_not_duplicate[] = $post->ID; // Store post ID in array
                    endwhile; wp_reset_query();

                    // Ajax Load More
                    if($do_not_duplicate){
                        $post__not_in = implode(',', $do_not_duplicate);
                    }
                    echo do_shortcode('[ajax_load_more container_type="div" css_classes="index-list" post_type="post" posts_per_page="9" button_label="Загрузить еще" button_loading_label="Загрузка"]');
                    ?>
                </div>
        </main>


<?php get_footer(); ?>