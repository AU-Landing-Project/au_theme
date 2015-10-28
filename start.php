<?php

/**
 * AU responsive theme based on Aalborg theme plugin. Largely replicates original theme, but:
 * slightly cleaner design - more white, fewer contrasts, more space
 * makes buttons etc more consistent
 * fixes overflowing text editor issues
 * responsive
 *
 * @package AalborgTheme
 */
elgg_register_event_handler('init', 'system', 'au_theme_init');

function au_theme_init() {

	elgg_register_event_handler('pagesetup', 'system', 'au_theme_pagesetup', 1000);

	// theme specific CSS
	elgg_extend_view('css/elgg', 'au_theme/css');

	//add friends list to collections for all-in-one page
	elgg_extend_view('core/friends/collections', 'au_theme/following');

	elgg_register_js('respond', 'mod/au_theme/vendors/js/respond.min.js');
	elgg_load_js('respond');

	// non-members do not get visible links to RSS feeds
	if (!elgg_is_logged_in()) {
		elgg_unregister_plugin_hook_handler('output:before', 'layout', 'elgg_views_add_rss_link');
	}
	if (elgg_is_logged_in()) {
		// add in header links for authenticated users
		elgg_extend_view('page/elements/header', 'au_theme/header_links_auth');
	} else {
		// add in header links and guest login form for anonymous users
		elgg_extend_view('page/elements/header', 'au_theme/header_links');
	}
	// kill the widget manager index page and add our own responsive version
	if (elgg_is_active_plugin('widget_manager')) {
		elgg_unregister_plugin_hook_handler("route", "all", "widget_manager_route_index_handler");
		elgg_register_plugin_hook_handler('route', 'all', 'au_theme_custom_index'); // must be very early
	}

	//optionally show title buttons as dropdown list
	if (elgg_get_plugin_setting("enable_compact_title_buttons", 'au_theme') == 'true') {
		// set title menu to dropdown if more than one action exists
		// use register, all to make sure this is called last
		elgg_register_plugin_hook_handler('register', 'all', 'au_theme_titlemenu', 9999);
	}
	
	elgg_register_plugin_hook_handler('head', 'page', 'au_theme_metatags');
}

/**
 * Rearrange menu items
 */
function au_theme_pagesetup() {

//	elgg_unextend_view('page/elements/header', 'search/header');
	//if (elgg_is_logged_in()) {
//	elgg_extend_view('page/elements/sidebar', 'search/header', 0);
	//}
	// kill the logo
	elgg_unregister_menu_item('topbar', 'elgg_logo');

	// add our logo
	elgg_register_menu_item('topbar', array(
		'name' => 'au-logo',
		'href' => '/',
		'text' => "<img src='" . elgg_get_site_url() . "mod/au_theme/graphics/logotopbar_notext.png' alt='site home' title='site home'/>",
		'priority' => 1,
	));

	//elgg_unextend_view('page/elements/topbar');

	elgg_unregister_menu_item('topbar', 'dashboard');
	if (elgg_is_active_plugin('dashboard')) {
		elgg_register_menu_item('site', array(
			'name' => 'dashboard',
			'href' => 'dashboard',
			'text' => elgg_echo('dashboard'),
		));
	}

	if (elgg_is_logged_in()) {

		elgg_register_menu_item('topbar', array(
			'name' => 'account',
			'text' => elgg_echo('account'),
			'href' => "#",
			'priority' => 100,
			'section' => 'alt',
			'link_class' => 'elgg-topbar-dropdown',
		));

		$item = au_theme_elgg_get_menu_item('topbar', 'usersettings');
		if ($item) {
			$item->setParentName('account');
			$item->setText(elgg_echo('settings'));
			$item->setPriority(103);
		}

		$item = au_theme_elgg_get_menu_item('topbar', 'logout');
		if ($item) {
			$item->setParentName('account');
			$item->setText(elgg_echo('logout'));
			$item->setPriority(104);
		}

		$item = au_theme_elgg_get_menu_item('topbar', 'administration');
		if ($item) {
			$item->setParentName('account');
			$item->setText(elgg_echo('admin'));
			$item->setPriority(101);
		}
	}
}

/**
 * Get a menu item registered for a menu
 *
 * @param string $menu_name The name of the menu
 * @param string $item_name The unique identifier for this menu item
 *
 * @return ElggMenuItem
 */
function au_theme_elgg_get_menu_item($menu_name, $item_name) {
	global $CONFIG;

	if (!isset($CONFIG->menus[$menu_name])) {
		return null;
	}

	foreach ($CONFIG->menus[$menu_name] as $index => $menu_object) {
		/* @var ElggMenuItem $menu_object */
		if ($menu_object->getName() == $item_name) {
			return $CONFIG->menus[$menu_name][$index];
		}
	}

	return null;
}

/**
 * Hook to take over the index page
 *
 * @param $hook_name
 * @param $entity_type
 * @param $return_value
 * @param $parameters
 * @return unknown_type

 * replaces widget manager index page with one that is more elastic
 */
function au_theme_custom_index($hook_name, $entity_type, $return_value, $parameters) {
	if (empty($return_value) || !is_array($return_value)) {
		return $return_value;
	}
	
	// identifier will be empty for the index page
	$identifier = elgg_extract("identifier", $return_value);
	if (!empty($identifier)) {
		return $return_value;
	}
	
	$setting = elgg_get_plugin_setting("custom_index", "widget_manager");
	if (empty($setting)) {
		return $return_value;
	}
	
	list($non_loggedin, $loggedin) = explode("|", $setting);
		
	if ((!elgg_is_logged_in() && !empty($non_loggedin)) || (elgg_is_logged_in() && !empty($loggedin)) || (elgg_is_admin_logged_in() && (get_input("override") == true))) {
		elgg_register_page_handler("", "au_theme_index_page_handler");
	}
}

/* function to show title buttons as a dropdown list */

function au_theme_titlemenu($h, $t, $r, $p) {
	$threshold = elgg_get_plugin_setting('compact_title_button_threshold', 'au_theme');
	if (!$threshold) {
		$threshold = 1;
	}
	if (($t == 'menu:title') && (count($r) > $threshold)) {

		$count = 0;
		foreach ($r as $key => $button) {
			if ($button->inContext()) {
				$count++;
			}
		}

		if ($count <= $threshold) {
			return $r;
		}
		// add in our top level element 'Actions'
		// everything else gets added as a child of that
		$text = elgg_echo('au_theme:titledropdown') . '<span class="elgg-icon elgg-icon-round-plus"></span>';
		$item = new ElggMenuItem('action-dropdown', $text, '#');
		$item->setLinkClass('action-dropdown');

		foreach ($r as $key => $button) {
			if ($button->inContext()) {
				$item->addChild($button);
			}
		}

		return array($item);
	}
}

/**
 * Add metatags and shortcut icons
 * 
 * @param type $hook
 * @param type $type
 * @param type $return
 * @param type $params
 */
function au_theme_metatags($hook, $type, $return, $params) {
	$icon_href = elgg_normalize_url('mod/au_theme/graphics/homescreen.png');
	
	$apple_icon_added = false;
	$shortcut_added = false;
	foreach ($return['links'] as $key => $r) {
		if ($r['rel'] == 'apple-touch-icon') {
			$apple_icon_added = true;
			$return['links'][$key]['href'] = $icon_href;
		}
		
		if ($r['rel'] == "SHORTCUT ICON") {
			$shortcut_added = true;
			$return['links'][$key]['href'] = elgg_get_site_url() . 'mod/au_theme/graphics/favicon.ico';
		}
		
		if ($r['rel'] == 'icon') {
			$return['links'][$key]['href'] = elgg_get_site_url() . 'mod/au_theme/graphics/favicon.ico';
		}
	}
	
	$viewport_added = false;
	foreach ($return['metas'] as $key => $r) {
		if ($r['name'] == 'viewport') {
			$viewport_added = true;
			$return['metas'][$key]['content'] = "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0";
		}
	}
	
	if (!$apple_icon_added) {
		$return['links'][] = array(
			'rel' => 'apple-touch-icon',
			'href' => $icon_href
		);
	}
	
	if (!$viewport_added) {
		$return['metas'][] = array(
			'name' => 'viewport',
			'content' => "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
		);
	}
	
	if (!$shortcut_added) {
		$return['links'][] = array(
			'rel' => "SHORTCUT ICON",
			'href' => elgg_get_site_url() . 'mod/au_theme/graphics/favicon.ico'
		);
	}
	
	return $return;
}

function au_theme_index_page_handler($page) {
	
	elgg_set_page_owner_guid(elgg_get_site_entity()->getGUID()); // site owns the index widgets
	
	// from widget manager by coltrick
	// adds alternative styling for mobile use
	// set context
	elgg_push_context('index');
	
	echo elgg_view('resources/au_theme/index');
	return true;
}