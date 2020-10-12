<?php

namespace Controller;


class DefaultController extends \W\Controller\Controller
{

	/**
	 * Your homepage 
	 */
	public function home()
	{
		$this->render('home/home');
	}
}
