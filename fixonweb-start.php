<?php
/**
 * Plugin Name:     fixonweb-start
 * Plugin URI:      https://github.com/edinaldohvieira/fixonweb-start
 * Description:     Redireciona conforme a função a que o usuário pertence.
 * Author:          Edinaldo H Vieira
 * Author URI:      https://github.com/edinaldohvieira
 * Text Domain:     fixonweb-start
 * Domain Path:     /languages
 * Version:         0.1.1
 *
 * @package         Fixonweb_Start
 */

/*
fix158629
*/

require 'plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://suporte.appsaas.com.br/plugins/fixonweb-start/update/plugin.json',
	__FILE__, 
	'fixonweb-start/fixonweb-start'
);