<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function santa_footer(){
$santa_style_url=plugins_url('imgs/'.get_option('santa_style').'.gif',__FILE__);
if(get_option('santa_direction')=='rtl'){
?>
<img style=" width:<?php echo get_option('santa_size');?>%;  position:fixed; z-index:99999; right:0; bottom:0; margin:0; padding:0;" id="moving_santa" src="<?php echo $santa_style_url; ?>"/>
<?php
wp_enqueue_script( 'rtlScript', plugins_url('js/rtl.js',__FILE__) ); 
	$rtlSpeed = get_option('santa_speed');
$rtlApplyData = array(
	'rtlSpeed' => $rtlSpeed,
);
wp_localize_script( 'rtlScript', 'rtl_php_vars', $rtlApplyData );

}
else{
?>
<img style="-moz-transform: scaleX(-1);
		-o-transform: scaleX(-1);
		-webkit-transform: scaleX(-1);
		transform: scaleX(-1);
		filter: FlipH;
		-ms-filter: FlipH;
		width:<?php echo get_option('santa_size');?>%;
		position:fixed;
		z-index:99999;
		right:0;
		bottom:0;
		margin:0;
		padding:0;"
		id="moving_santa" src="<?php echo $santa_style_url; ?>" />
<?php
wp_enqueue_script( 'ltrScript', plugins_url('js/ltr.js',__FILE__) ); 
	$ltrSpeed = get_option('santa_speed');
$ltrApplyData = array(
	'ltrSpeed' => $ltrSpeed,
);
wp_localize_script( 'ltrScript', 'ltr_php_vars', $ltrApplyData );
}
}