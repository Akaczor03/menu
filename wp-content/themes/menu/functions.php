<?php 
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'lang' ),
	    	'footer_menu'  => __( 'Footer Menu', 'lang' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

add_action('after_setup_theme', 'wpdocs_theme_setup');

/**
 * Load translations for wpdocs_theme
 */
function wpdocs_theme_setup(){
    load_theme_textdomain('lang', get_template_directory() . '/lang');
}

add_filter( 'acf/location/rule_types', 'addCustomLocationRules' );
add_filter( 'acf/location/rule_values/menu_level','addValuesForMenu' );
add_filter( 'acf/location/rule_match/menu_level', 'matchValueForMenu', 10, 3 );

function addCustomLocationRules( $choices ) {
    $choices['Custom']['menu_level'] = 'Menu depth level';
    return $choices;
 }
 
function addValuesForMenu( $choices ) {
    $list = [];
    for ( $i = 0; $i <= 10; $i++ ) $list[ $i ] = $i;
    return $list;
 }

 function matchValueForMenu( $match, $rule, $options ) {
    return ( isset( $options['nav_menu_item_depth'] ) && ( $rule['value'] == $options['nav_menu_item_depth'] ) );
 }

 add_filter( 'wpf_menu', 'getMenu', 10, 2 );


 function getMenu( $value, $location ) {
    $locations = get_nav_menu_locations();
    if ( ! isset( $locations[ $location ] ) ) {
        return $value;
    }

    $items = wp_get_nav_menu_items( $locations[ $location ] );
    if ( ! $items ) {
        return $value;
    }

    _wp_menu_item_classes_by_context( $items );

    $items = navTree( $items, $location );
    return $items;
}

function navTree( $items, $location, $parentId = 0 ) {
    $list = [];

    foreach ( $items as $index => $item ) {
        if ( $item->menu_item_parent != $parentId ) {
            continue;
        }
        $list[] = parseItem( $item, $items, $location );
    }

    return $list;
}

 function parseItem( $item, $items, $location ) {
    $object   = (object) [
        'ID'        => $item->ID,
        'post_type' => $item->post_type,
    ];
    $children = navTree( $items, $location, $item->ID );
    $active   = (
        in_array( 'current-menu-parent', $item->classes )
        || in_array( 'current-menu-item', $item->classes )
        || in_array( 'current-page-ancestor', $item->classes )
    );

    if ( ! $active && ( $item->type == 'post_type_archive' ) ) {
        global $post;
        if ( is_object( $post ) && ( $post->post_type == $item->object ) ) {
            $active = true;
        }
    }

    $data = [
        'object'   => $object,
        'url'      => $item->url,
        'title'    => $item->title,
        'target'   => $item->target ? $item->target : '_self',
        'active'   => $active,
        'children' => $children ? $children : [],
    ];

    $data = apply_filters( 'wpf_menu_item', $data, $item, $location );
    return $data;
}
