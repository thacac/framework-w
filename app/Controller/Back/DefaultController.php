<?php

namespace Controller\Back;

use Controller\Back\MasterController;

class DefaultController extends MasterController
{

	const PATH = '/back/home' ;
	/**
	 * Your homepage 
	 */
	public function home()
	{
		$this->render(self::PATH.'/home');
	}
}
