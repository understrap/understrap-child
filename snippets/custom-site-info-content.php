/**
 * Customize site info content.
 */
function understrap_child_site_info_content() {
	$custom_site_info = '&copy; ' . date( 'Y' ) . ' Example, Inc.';
	return esc_html( $custom_site_info );
}
add_filter( 'understrap_site_info_content', 'understrap_child_site_info_content' );
