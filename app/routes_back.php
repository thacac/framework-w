<?php
//routes front site
$back_r = [
	//this format works only if multilang = false or for technical routes with no rendering
	'index' => [
		'method' => 'GET',
		'controller' => 'Default#home',
		'path' => '/admin',
		'title'=> 'title page no multi'
	]

];
