<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Session {
	
	public static function clearSession(){
		$session = Session::instance();
		$session->delete('currentuser');
		$session->delete('currentuserid');
		$session->delete('currentuserprofile');
		$session->delete('endstatusid');
	}
}
	