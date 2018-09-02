/**
 * Customize site info content.
 */
function understrap_child_site_info_content() {
	$your_site_info = '&copy; ' . date( 'Y' ) . ' Example, Inc.';
	return esc_html( $your_site_info );
}
add_filter( 'understrap_site_info_content', 'understrap_child_site_info_content' );
