<?php

namespace Controller;

use Controller\MasterController;

class DefaultController extends MasterController
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
