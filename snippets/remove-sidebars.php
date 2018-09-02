/**
 * Remove UnderStrap sidebars
 *
 * @see https://codex.wordpress.org/Function_Reference/unregister_sidebar
 */
function understrap_child_remove_understrap_sidebars() {

	// Right sidebar.
	unregister_sidebar( 'right-sidebar' );

	// Left sidebar.
	unregister_sidebar( 'left-sidebar' );

	// Hero Slider.
	unregister_sidebar( 'hero' );

	// Hero Canvas.
	unregister_sidebar( 'herocanvas' );

	// Top full.
	unregister_sidebar( 'statichero' );

	// Footer full.
	unregister_sidebar( 'footerfull' );

}
add_action( 'widgets_init', 'understrap_child_remove_understrap_sidebars', 11 );
