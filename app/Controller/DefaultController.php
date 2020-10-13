<?php

namespace Controller;

class DefaultController extends \W\Controller\Controller
{

	/**
	 * Your homepage no multi lang
	 */
	public function nolang()
	{
		$this->render('/nolang/home');
	}

	/**
	 * Your homepage 
	 */
	public function home()
	{
		$this->render('/home/home');
	}
}
