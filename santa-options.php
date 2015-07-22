<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function santa_install(){
add_option('santa_speed','150');
add_option('santa_style','s1');
add_option('santa_size','12');
add_option('santa_direction','ltr');
}

function santa_deactivate(){
delete_option('santa_speed');
delete_option('santa_style');
delete_option('santa_size');
delete_option('santa_direction');
}