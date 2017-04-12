<?php
//Настройки панели администрирования
//Регистрация функции настроек
function theme_settings_init(){
    register_setting( 'theme_settings', 'theme_settings' );
}
// Добавление настроек в меню страницы
function add_settings_page() {
    add_menu_page( __( 'Главная инфа' ), __( 'Главная инфа' ), 'manage_options', 'settings', 'theme_settings_page');
}
//Добавление действий
add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );
//Сохранение настроек
function theme_settings_page() {
    global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
    ?>
    <div>
        <h2 id="title">Настройка темы</h2>
        <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
            <div id="message" class="updated">
                <p><strong>Настройки сохранены</strong></p>
            </div>
        <?php endif; ?>
        <form method="post" action="options.php">
            <?php settings_fields( 'theme_settings' ); ?>
            <?php $options = get_option( 'theme_settings' ); ?>

            <table>

                <tr valign="top">
                    <td>Email</td>
                    <td><input id="theme_settings[custom_email]" type="text" size="38" name="theme_settings[custom_email]" value="<?php esc_attr_e( $options['custom_email'] ); ?>" /></td>
                    <td><label> - Email. Будет отображаться на сайте</label></td>
                </tr>
                <tr valign="top">
                    <td>Телефон</td>
                    <td><input id="theme_settings[custom_phone]" type="text" size="38" name="theme_settings[custom_phone]" value="<?php esc_attr_e( $options['custom_phone'] ); ?>" /></td>
                    <td><label> - Номер телефона. Будет отображаться на сайте</label></td>
                </tr>

                <tr valign="top">
                    <td>Текст в шапке сайте</td>
                    <td><textarea id="theme_settings[header_description]" name="theme_settings[header_description]" rows="5" cols="36"><?php esc_attr_e( $options['header_description'] ); ?> </textarea></td>
                    <td><label> - Можете ввести свой текст, ссылки и права на копирайт. Можно использовать html теги. </label></td>
                </tr>

                <tr valign="top">
                    <td>Текст в подвале сайта</td>
                    <td><textarea id="theme_settings[footer_description]" name="theme_settings[footer_description]" rows="5" cols="36"><?php esc_attr_e( $options['footer_description'] ); ?></textarea></td>
                    <td><label> - Можете ввести свой текст, ссылки и права на копирайт. Можно использовать html теги. </label></td>
                </tr>

                <tr valign="top">
                    <td>Facebook ссылка</td>
                    <td><input id="theme_settings[facebook_link]" type="text" size="38" name="theme_settings[facebook_link]" value="<?php esc_attr_e( $options['facebook_link'] ); ?>"/></td>
                    <td><label> - Ссылка на ваш профиль в facebook</label></td>
                </tr>

                <tr valign="top">
                    <td>Vkontakte ссылка</td>
                    <td><input id="theme_settings[vk_link]" type="text" size="38" name="theme_settings[vk_link]" value="<?php esc_attr_e( $options['vk_link'] ); ?>" /></td>
                    <td><label> - Ссылка на ваш профиль в vk.com</label></td>
                </tr>

                <tr valign="top">
                    <td>Twitter ссылка</td>
                    <td><input id="theme_settings[tw_link]" type="text" size="38" name="theme_settings[tw_link]" value="<?php esc_attr_e( $options['tw_link'] ); ?>" /></td>
                    <td><label> - Ссылка на ваш профиль в твиттере</label></td>
                </tr>

                <tr valign="top">
                    <td>Метрика</td>
                    <td><textarea id="theme_settings[tracking]" name="theme_settings[tracking]" rows="5" cols="36"><?php esc_attr_e( $options['tracking'] ); ?></textarea></td>
                    <td><label> - здесь можно прописать коды счетчиков или дополнительных скриптов</label></td>
                </tr>
            </table>
            <p><input name="submit" id="submit" class="button button-primary" value="Сохранить" type="submit"></p>
        </form>
    </div>
<?php } ?>