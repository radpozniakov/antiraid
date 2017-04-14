<?php
/*
Template Name: Archive
*/
get_header();
?>
        <main class="container-fluid archive">
            <div class="container">
                <div class="title-page">
                    <h1><?php wp_title(''); ?></h1>
                </div>
                <div class="main-content archive">
                   <div class="categories-archive white">
                        <h2><?php echo tStr('archive_cat_title');?></h2>
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
                        <h2><?php echo tStr('archive_year_title');?></h2>
                       <ul>
                           <?php  wp_get_archives(array('type' => 'yearly')); ?>

                       </ul>
                   </div>
                   <div class="month-archive white">
                        <h2><?php echo tStr('archive_month_title');?></h2>
                       <ul>
                           <?php  wp_get_archives(array('type' => 'monthly')); ?>
                       </ul>
                   </div>

                    <div class="white">
                        <h2><?php echo tStr('archive_all_posts_title');?></h2>
                       <ul>
                           <?php  wp_get_archives(array('type' => 'postbypost')); ?>
                       </ul>
                   </div>

                    
                </div>
                
            </div>
        </main>
    

<?php get_footer(); ?>