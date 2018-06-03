<?php

namespace application\core;

use application\helpers\Request;

abstract class Model 
{	
	public $request;
	
	public function __construct() 
	{
		$this->request = new Request;
	}
}