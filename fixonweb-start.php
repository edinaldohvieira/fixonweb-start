<?php
/**
 * Plugin Name:     fixonweb-start
 * Plugin URI:      https://github.com/edinaldohvieira/fixonweb-start
 * Description:     Redireciona conforme a função a que o usuário pertence.
 * Author:          Edinaldo H Vieira
 * Author URI:      https://github.com/edinaldohvieira
 * Text Domain:     fixonweb-start
 * Domain Path:     /languages
 * Version:         0.1.9
 *
 * @package         Fixonweb_Start
 */

/*
fix158629
*/

require 'plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/edinaldohvieira/fixonweb-start',
	__FILE__, 
	'fixonweb-start/fixonweb-start'
);

add_action( 'parse_request', 'wmc_parse_request');
function wmc_parse_request( &$wp ) {
	if($wp->request == 'start'){
		if(current_user_can('administrativo')){
			wp_redirect( home_url().'/administrativo/' );
		}
		wp_redirect( home_url() );
		exit;
	}
}