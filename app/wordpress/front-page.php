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
                <div class="index-list">

                 <?php
                        $args = array(
                            'post_type' => 'post',
                        );
                        $the_query = new WP_Query( $args );
                        ?>
                        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <div class="index-item white <?php the_field('modificator'); ?>">
                             <?php
                                $thumbnail_id = get_post_thumbnail_id();
                                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'large', true );
                                $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
                                ?>
                            <div class="index-img" style="background-image: url('<?php echo $thumbnail_url[0]; ?>');"></div>
                            <div class="index-content white">
                                <span class="time uppercase"><?php echo the_time('j');?> <?php echo the_time('F');?> , <?php echo the_time('Y');?></span>
                                <h2 class="item-card">
                                    <?php the_title(); ?>
                                </h2>
                                <?php the_excerpt(); ?>
                                 <?php the_tags('<i class="fa fa-tags"></i> <span class="tag-for-news">','<span> ','','<span class="tag-for-news"></span>'); ?>


                            </div>
                            <a href="<?php the_permalink(); ?>"></a>
                        </div>
                        <?php endwhile; ?>
                 <?php endif; ?>



                </div>




                <div class="a-more">
                    <a class="uppercase" href="#">загрузить еще</a>
                </div>



            </div>
        </main>


<?php get_footer(); ?>