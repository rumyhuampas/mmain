<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Utils {	
	public static function strContains($str, $val){
		return strpos($str, $val) !== false;
	}
}