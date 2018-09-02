/**
 * Remove UnderStrap page templates from the templates dropdown
 *
 * @param array $page_templates Page templates. Keys are filenames, values are translated names.
 * @return array (Maybe) modified page templates array.
 */
function understrap_child_remove_understrap_page_templates( $page_templates ) {
	unset( $page_templates['page-templates/right-sidebarpage.php'] );
	unset( $page_templates['page-templates/left-sidebarpage.php'] );
	unset( $page_templates['page-templates/both-sidebarspage.php'] );
	unset( $page_templates['page-templates/blank.php'] );
	unset( $page_templates['page-templates/empty.php'] );
	unset( $page_templates['page-templates/fullwidthpage'] );
	return $page_templates;
}
add_filter( 'theme_page_templates', 'understrap_child_remove_understrap_page_templates' );
