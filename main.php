<?php 
/**
* Plugin Main Class
*/
if ( ! defined( 'ABSPATH' ) ) exit;
// unique id creator
$ersconstid = 1;
class ERS_VC_SPACE {
	function __construct() {
		add_action( 'init', array( $this, 'ers_vc_is_install' ) );
		add_action('vc_before_init', array($this, 'ers_map_settings'));
		add_shortcode( 'er_space', array( $this, 'ers_function'));
	}
	
	function ers_function( $atts, $content = null, $tag ){
		global $ersconstid;
		extract( shortcode_atts( array(
			'ersheight' => '40px',
			'erstab_landscape_height' => '',
			'erstab_portrait_height' => '',
			'ersmobile_height' => ''
		), $atts ) );
$output =  '
<div id="ersspace-'.$ersconstid.'"></div><style type="text/css">#ersspace-'.$ersconstid.' { height: '.$ersheight.'; }';
if($erstab_landscape_height != ''){
$output .=  '
@media handheld, only screen and (max-width: 1199px) {
	#ersspace-'.$ersconstid.' { height: '.$erstab_landscape_height.'; }
}';
}
if($erstab_portrait_height != ''){
$output .=  '
@media handheld, only screen and (max-width: 1023px) {
	#ersspace-'.$ersconstid.' { height: '.$erstab_portrait_height.'; }
}';
}
if($ersmobile_height != ''){
$output .=  '
@media handheld, only screen and (max-width: 767px) {
	#ersspace-'.$ersconstid.' { height: '.$ersmobile_height.'; }
}';
}
		$ersconstid++;
		$output .=  '</style>';
		return $output;
	}
	
	function ers_map_settings(){
		require_once('ers-settings.php');
	}
	
	function ers_vc_is_install(){
		if ( ! defined( 'WPB_VC_VERSION' ) ) {
			// Display notice that Visual Compser is required
            add_action('admin_notices', array( $this, 'ers_notice' ));
            return;
		}
	}
	
	function ers_notice(){
		$plugin_name = 'Empty Responsive Space Addon for Visual Composer';
        echo '<div class="updated" style="padding: 0;border: 4px solid #46b450 !important;"><p style="margin: 0;border: 1px dashed red;font-size:20px;line-height: 25px; padding: 10px;">'.sprintf('Kindly Install <strong><a href="http://codecanyon.net/item/visual-composer-page-builder-for-wordpress/242431?ref=thyash" target="_blank">Visual Composer</a></strong> to work with <strong>%s</strong> plugin', $plugin_name).'</p></div>';
	}
}
 ?>