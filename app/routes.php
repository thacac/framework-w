<?php

$w_routes = [
	//this format works only if multilang = false or for technical routes with no rendering
	'nolang' => [
		'method' => 'GET',
		'controller' => 'Default#nolang',
		'path' => '/',
		'title'=> 'title page no multi'
	],
	
	//this format works only if multilang = true
	'index' => [
		'method' => 'GET',
		'controller' => 'Default#home',
		'multi' => [
			'fr' => [
				'path' => '/',
				'title' => 'Titre de la page en français'
			],
			'en' => [
				'path' => '/',
				'title' => 'english title'
			]
		]
	]
];
