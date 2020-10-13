<?php

$w_routes = [
	'nolang' => [
		'method' => 'GET',
		'controller' => 'Default#nolang',
		'path' => '/',
		'title'=> 'title page no multi'
	],
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
