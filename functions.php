<?php
 // Including style and JS
if (!function_exists('coming_soon')) {
	function coming_soon()
	{
		wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all'  );
		wp_enqueue_style( 'icons', get_template_directory_uri() . '/css/icons.css', array(), '1.0', 'all'  );
		wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Montserrat:400,700' , array(), '1.0', 'all'  );

		wp_enqueue_script( 'downCount', get_template_directory_uri() . '/js/jquery.downCount.js', array('jquery'), '1.0.0', false );
		wp_enqueue_script( 'mail', get_template_directory_uri() . '/js/mailchimp.js', array('jquery'), '1.0.0', false );
		wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', false );
	}
	add_action( 'wp_enqueue_scripts', 'coming_soon' );
}

 // Including Redux Framework
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/inc/coming-soon-options.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/coming-soon-options.php' );
}
 // The value must be over 10
add_action( 'admin_menu', 'remove_redux_menu',12 );
	function remove_redux_menu() {
	remove_submenu_page('tools.php','redux-about');
}
// For Coundown

if (!function_exists('lunch_date')) {
	function lunch_date()
	{
		global $cs;
		if ($cs['lunch_datepicker'] && $cs['lunch_houre']  && $cs['lunch_minute'] ) {
			$lunch_datepicker 	= $cs['lunch_datepicker'];
			$lunch_houre 		= $cs['lunch_houre'];
			$lunch_minute 		= $cs['lunch_minute'];
		} else {
			$lunch_datepicker	= '11/14/2019';
			$lunch_houre 		= '15';
			$lunch_minute		= '00';
		}
		
		?>
			<script type="text/javascript">
				jQuery(document).ready(function ($) {
					$('.countdown').downCount({
			            date: '<?php echo $lunch_datepicker; ?> <?php echo $lunch_houre; ?>:<?php echo $lunch_minute; ?>:00',   // Change the launch date from here
			            offset: +5.5
			          }, function () {
			             alert('Countdown Done, We are just going to launch our website!');
			        });
				});
			</script>
		<?php
	}
	add_action('wp_head','lunch_date');
}


?>