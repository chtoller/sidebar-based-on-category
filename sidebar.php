<?php
/**
 * This is a fallback sidebar
 *
 * @package Namaha
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area primary" role="complementary">
	<?php
	if ( in_category('praxisangebot') ) {
		dynamic_sidebar( 'sidebar-1' );
	} else {
		dynamic_sidebar( 'secondary-sidebar' );
	}	
	?>
</div><!-- #secondary -->
