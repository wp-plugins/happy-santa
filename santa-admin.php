<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function santa_admin_table_style(){
wp_enqueue_style( 'tableStyle', plugins_url('css/ts.css',__FILE__) ); 
}
add_action( 'admin_enqueue_scripts', 'santa_admin_table_style' );
function santa_menu(){
add_menu_page('Happy Santa','Happy Santa','manage_options','santamenu','santa_settings_page',plugins_url('imgs/santaicon.png',__FILE__));
}
function santa_settings_page(){
?>
<h2 style="text-align:center; font-weight:bold;"><img width="5%;" src="<?php echo plugins_url('imgs/santaimg.png',__FILE__); ?>"/><br>Happy Santa</h2>
<form method="post" action="options.php">
<?php
wp_nonce_field('update-options');
settings_fields('santa_settings_group');
?>
<div style="width:98.5%;">
<table  class="widefat" style="width:100% !important;">
<thead>
<tr>
<th colspan="6">
<span style=" font-size:16px;">Happy Santa Settings</span>
</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row" style="border-bottom-width:0px !important; width:125px;">
Speed
</th>
<!--[if lte IE 9]>
<td >
<input type="radio" name="santa_speed" value="250" <?php if(get_option('santa_speed')=='250') echo 'checked';  ?> > <label for="santa_speed">Slow</label>  </td>
<td ><input type="radio" name="santa_speed" value="150" <?php if(get_option('santa_speed')=='150') echo 'checked';  ?> > <label for="santa_speed">Normal</label></td>
<td ><input type="radio" name="santa_speed" value="50" <?php if(get_option('santa_speed')=='50') echo 'checked';  ?> > <label for="santa_speed">Fast</label>
</td>
<td></td>
<![endif]-->
<!--[if !IE]> -->
<td colspan="4">
Fast <input style="width:30%;" type="range" name="santa_speed" value="<?php echo get_option('santa_speed'); ?>" min="20" max="300" step="5" /> Slow  </td> 
<!-- <![endif]-->
</tr>
<tr >
<th scope="row" style="border-bottom-width:0px !important; width:125px;">
Style
</th>
<td >
<input type="radio" name="santa_style" value="s1" <?php if(get_option('santa_style')=='s1') echo 'checked';  ?> > Regular </td>
<td ><input type="radio" name="santa_style" value="s2" <?php if(get_option('santa_style')=='s2') echo 'checked';  ?> > Single Reindeer </td>
<td ><input type="radio" name="santa_style" value="s3" <?php if(get_option('santa_style')=='s3') echo 'checked';  ?> > Cool </td>
<td ><input type="radio" name="santa_style" value="s4" <?php if(get_option('santa_style')=='s4') echo 'checked';  ?> > Nightly </td>
<td ><input type="radio" name="santa_style" value="s5" <?php if(get_option('santa_style')=='s5') echo 'checked';  ?> > Flying </td>
</tr>
<tr>
<th scope="row" style="border-bottom-width:0px !important; width:125px;">
Size
</th>
<!--[if lte IE 9]>
<td style="border-bottom-width:1px !important;">
<input type="radio" name="santa_size" value="9" <?php if(get_option('santa_size')=='9') echo 'checked';  ?> > Small </td>
<td><input type="radio" name="santa_size" value="12" <?php if(get_option('santa_size')=='12') echo 'checked';  ?> > Normal </td>
<td><input type="radio" name="santa_size" value="18" <?php if(get_option('santa_size')=='18') echo 'checked';  ?> > Big  
</td>
<td></td>
<![endif]-->
<!--[if !IE]> -->
<td colspan="4">
Small <input style="width:30%;" type="range" name="santa_size" value="<?php echo get_option('santa_size'); ?>" min="8" max="20" step="0.1" /> Big  </td> 
<!-- <![endif]-->

</tr>
<tr>
<th scope="row" style="border-bottom-width:0px !important; width:125px;">
Direction
</th>
<td style="border-bottom-width:0px !important;">
<input type="radio" name="santa_direction" value="rtl" <?php if(get_option('santa_direction')=='rtl') echo 'checked';  ?> > Right To Left  </td>
<td><input type="radio" name="santa_direction" value="ltr" <?php if(get_option('santa_direction')=='ltr') echo 'checked';  ?> > Left To Right 
</td>
<td></td>
<td></td>
</tr>
</tbody>
<tfoot>
<tr>
<th colspan="6" >
<input type="submit" class="button-primary"  value="Save Changes">
</th>
</tr>
</tfoot>
</table>
</div>
<?php
}