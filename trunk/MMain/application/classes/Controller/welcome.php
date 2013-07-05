<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$view = View::factory('welcome');
		$view->title = Helpers_Const::APPNAME." - Sistemas Mancini";
		$this->response->body($view->render());
	}
}
