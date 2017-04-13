<?php
/*
Template Name: arhiv
*/
get_header();

?>

        <main class="container-fluid archive">
            <div class="container">
                <div class="title-page">
                    <h1>Архив</h1>
                </div>
                <div class="main-content archive">
                   <div class="categories-archive white">
                        <h2>Публикации по категориям</h2>
                       <ul>
                           <?php $args = array(
                                   'orderby' => 'name',
                                   'hierarchical' =>  false,
                                   'title_li' => ''
                                );
                               wp_list_categories($args);?>
                       </ul>

                   </div>
                   <div class="year-archive white">
                        <h2>Публикации по годам</h2>
                       <ul>
                           <?php  wp_get_archives(array('type' => 'yearly')); ?>

                       </ul>
                   </div>
                   <div class="month-archive white">
                        <h2>Публикации по месяцам</h2>
                       <ul>
                           <?php  wp_get_archives(array('type' => 'monthly')); ?>
                       </ul>
                   </div>

                    <div class="white">
                        <h2>Все публикации</h2>
                       <ul>
                           <?php  wp_get_archives(array('type' => 'postbypost')); ?>
                       </ul>
                   </div>

                    
                </div>
                
            </div>
        </main>
    

<?php get_footer(); ?>