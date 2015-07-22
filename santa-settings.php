<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function santa_settings(){
register_setting('santa_settings_group','santa_speed');
register_setting('santa_settings_group','santa_style');
register_setting('santa_settings_group','santa_size');
register_setting('santa_settings_group','santa_direction');
}

function santa_register_settings(){
register_setting('santa_settings_group','santa_speed');
register_setting('santa_settings_group','santa_style');
register_setting('santa_settings_group','santa_size');
register_setting('santa_settings_group','santa_direction');
}

register_activation_hook(__FILE__,'santa_install');
register_deactivation_hook(__FILE__,'santa_deactivate');
add_action('wp_footer','santa_footer');
add_action('admin_menu','santa_menu');
add_action('admin_init','santa_settings');