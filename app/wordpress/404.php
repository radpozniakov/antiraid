<?php
 get_header();
?>

<main class="container-fluid not-found">
    <div class="container">
        <div class="title-page">
            <h1><?php wp_title('');?></h1>
        </div>
        <div class="not-found-content white">
            <h2>— 404 —</h2>
            <p>
                <?php echo tStr('text_404');?>
            </p>
            <div class="img"></div>
            <div class="a-more">
                <a class="uppercase" href="<?php get_home_url();?>"><?php echo tStr('text_button_404');?></a>
            </div>
        </div>

    </div>
</main>

<?php
get_footer();
?>