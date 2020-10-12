<?php

$w_routes = [
	'index' => [
		'method' => 'GET',
		'controller' => 'Default#home',
		'fr' => [
			'path' => '/',
			'title' => 'Titre de la page en français'
		],
		'en' => [
			'path' => '/',
			'title' => 'english title'
		]
	]
];