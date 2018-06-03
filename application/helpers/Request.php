<?php

namespace application\helpers;

class Request
{

	const GET = 10;

	public static function get($name, $method = null)
	{
		if ($method === null || strtolower($method) === "get") {
		  	$method = self::GET;
		} else {
			return false;
		}

		$holder = null;
		switch ($method) {
			case self::GET:
				$holder = $_GET;
				break;
			default:
				return false;
		}

	    $response = $holder[$name];

	    return $response;
  	}
}