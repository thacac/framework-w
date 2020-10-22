<?php
/**
 * Inclusions des fichiers
 */

require 'routes_front.php'; // Routes du front
require 'routes_back.php'; // Routes du back

/**
 * Ajout des préfixes Front / Back devant le nom des Controllers
 */
// foreach($front_r as $r){
// 	$r[2] = 'Front\\'.ucfirst(str_replace('Front', '', $r[2]));
// 	$front_routes[] = $r;
// }
foreach($back_r as $r_name => $r_controller){
	$r_controller['controller'] = 'Back\\'.ucfirst(str_replace('Back', '', $r_controller['controller']));
	//set 
	$back_routes[$w_config['back_rte_prefix'].$r_name] = $r_controller;
}

$w_routes = array_merge($front_r, $back_routes);