<?php
/**
* ownCloud - Cloudpress
*
* @author Bastien Ho (EELV - Urbancube)
* @copyleft 2012 bastienho@urbancube.fr
* @projeturl http://ecolosites.eelv.fr
*
* Free Software under creative commons licence
* http://creativecommons.org/licenses/by-nc/3.0/
* Attribution-NonCommercial 3.0 Unported (CC BY-NC 3.0)
* 
* You are free:
* to Share — to copy, distribute and transmit the work
* to Remix — to adapt the work
*
* Under the following conditions:
* Attribution — You must attribute the work in the manner specified by the author or licensor (but not in any way that
* suggests  that they endorse you or your use of the work).
* Noncommercial — You may not use this work for commercial purposes.
*
*/

require_once('apps/user_wordpress/user_wordpress.php');
OC::$CLASSPATH['OC_wordpress_images_menu_sites_icon'] = '/apps/user_wordpress/img/sites.png';  
OC::$CLASSPATH['OC_wordpress'] = 'apps/user_wordpress/lib/wordpress.class.php';  
OC::$CLASSPATH['OC_wordpress_site_list'] = '/?app=user_wordpress&getfile=wordpress.php';


OCP\Util::addStyle('user_wordpress', 'wordpress');
OCP\Util::addScript('user_wordpress', 'wordpress');

OCP\App::register(Array(
	'order' => 29,
	'id' => 'cloudpress',
	'name' => 'Cloudpress'
)); 
OCP\App::registerAdmin('user_wordpress','settings');
OCP\App::addNavigationEntry( 
	array( 
	'id' => 'wordpress_sites', 
	'order' => 70, 
	'href' => OCP\Util::linkTo( 'user_wordpress', 'wordpress.php' ), 
	'icon' => OC::$CLASSPATH['OC_wordpress_images_menu_sites_icon'], 
	'name' => 'Sites'
	)
);
OCP\App::registerPersonal('user_wordpress', 'persopress');
// register user backend

OC_User::useBackend( 'wordpress' );

// add settings page to navigation
/*
$entry = array(
	'id'   => 'user_wordpress_settings',
	'order'=> 1,
	'href' => OC_Helper::linkTo( "wordpress", "settings.php" ),
	'name' => 'wordpress'
);*/
