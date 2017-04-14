<?php
/*
Template Name: Contacts
*/
get_header();

?>
    <!--[if lt IE 8]>
    <p class="browserupgrade">Вы используете<strong>старый</strong> браузер. Пожалуйста обновите свой браузер.</p>
    <![endif]-->
    <main class="container-fluid contacts">
        <div class="container">
            <div class="title-page">
                <h1><?php wp_title(''); ?></h1>
            </div>
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 about-us">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php the_content(); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                       
                     </div>

                    </div>
                    <div class="col-sm-offset-1 col-sm-6 form">
                        <form id='form-contact' action="#">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="contact-name"><?php echo tStr('form_send_name');?></label>
                                    <input type="text" class="  form-control" id="contact-name" name="contact-name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="contact-email">Email</label>
                                    <input type="email" class=" form-control" id="contact-email" name="contact-email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contact-area"><?php echo tStr('form_text');?></label>
                                <textarea class="form-control " rows="5" id="contact-area" name="contact-area"></textarea>
                            </div>
                            <p class="notification"></p>
                            <button type="submit" class="btn btn-default" id='contact-buttom'><?php echo tStr('form_send_text');?></button>
                        </form>
                    </div>
                </div>
            </div>

            <?php get_template_part( 'social-foot' ); ?>

        </div>
    </main>

<?php get_footer(); ?>