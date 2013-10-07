<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_ABMUsers extends Controller
{	
	public function action_edit()
    {
    	if(!isset($_POST['username'])){
    		$view = View::factory('profile');
			$view->title = Helpers_Const::APPNAME." - Perfil de usuario";
			$view->menuid = Helpers_Const::MENUINICIOID;
			$session = Session::instance();
			$userid = $session->get('currentuserid');
			$view->userobj = ORM::factory('user', $userid);
			$this->response->body($view->render());
		}
		else{
			$session = Session::instance();
			$userid = $session->get('currentuserid');
			$user = ORM::factory('user', $userid);
			if($_POST['newpass'] == $_POST['newpass2']){
				if($_POST['oldpass'] == $user->Password){
					$user->UserName = $_POST['username'];
					$user->Password = $_POST['newpass'];
					$user->update();
					
					HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmusers', 'action' => 'edit',
						'msgtype' => 'msgsuccess', 'msgtext' => 'Usuario modificado con exito.')));
				}
				else{
					HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmusers', 'action' => 'edit',
						'msgtype' => 'msgalert', 'msgtext' => 'La contrasena actual es incorrecta.')));
				}
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmusers', 'action' => 'edit',
					'msgtype' => 'msgalert', 'msgtext' => 'Las contrasenas nuevas deben ser iguales.')));
			}
		}
    }

	public function action_editprofiles(){
		if(isset($_POST['upadmin']) || isset($_POST['upgranja']) || isset($_POST['upventa']) || isset($_POST['upestadistico'])){
			$session = Session::instance();
			$userid = $session->get('currentuserid');
			$user = ORM::factory('user', $userid);
			
			$profile = "";
			if(isset($_POST['upadmin'])){ $profile .= Helpers_Const::UPADMIN.","; }
			if(isset($_POST['upventa'])){ $profile .= Helpers_Const::UPVENTA.","; }
			if(isset($_POST['upgranja'])){ $profile .= Helpers_Const::UPGRANJA.","; }
			if(isset($_POST['upestadistico'])){ $profile .= Helpers_Const::UPESTADISTICO.","; }
			if(strlen($profile) > 0){ $profile = substr($profile, 0, -1); }
			$user->Profile = $profile;
			$user->update();
			
			$session->set('currentuserprofile', $user->Profile);
			
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmusers', 'action' => 'edit',
				'msgtype' => 'msgsuccess', 'msgtext' => 'Usuario modificado con exito.')));
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmusers', 'action' => 'edit',
				'msgtype' => 'msgalert', 'msgtext' => 'Debe seleccionar al menos un perfil.')));
		}
	}

	public function action_new()
    {
    	if(!isset($_POST['username'])){
    		$view = View::factory('users');
			$view->title = Helpers_Const::APPNAME." - Usuarios";
			$view->menuid = Helpers_Const::MENUINICIOID;
			$view->users = Helpers_User::get();
			$this->response->body($view->render());
		}
		else{
			if(!Helpers_User::exists($_POST['username'])){
				if($_POST['newpass'] == $_POST['newpass2']){
					$user = ORM::factory('user');
					$user->UserName = $_POST['username'];
					$user->Password = $_POST['newpass'];
					
					$profile = "";
					if(isset($_POST['upadmin'])){ $profile .= Helpers_Const::UPADMIN.","; }
					if(isset($_POST['upventa'])){ $profile .= Helpers_Const::UPVENTA.","; }
					if(isset($_POST['upgranja'])){ $profile .= Helpers_Const::UPGRANJA.","; }
					if(isset($_POST['upestadistico'])){ $profile .= Helpers_Const::UPESTADISTICO.","; }
					if(strlen($profile) > 0){ $profile = substr($profile, 0, -1); }
					$user->Profile = $profile;
					
					$user->create();
					
					HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmusers', 'action' => 'new',
						'msgtype' => 'msgsuccess', 'msgtext' => 'Usuario creado con exito.')));
				}
				else{
					HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmusers', 'action' => 'new',
						'msgtype' => 'msgalert', 'msgtext' => 'Las contrasenas deben ser iguales.')));
				}
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmusers', 'action' => 'new',
					'msgtype' => 'msgerror', 'msgtext' => 'El usuario ya existe.')));
			}
		}
    }

	public function action_delete(){
		$user = ORM::factory('user', $this->request->param('id'));
		$user->delete();
		
		HTTP::redirect(Route::get('msg')->uri(array('controller' => 'abmusers', 'action' => 'new',
			'msgtype' => 'msgsuccess', 'msgtext' => 'Usuario eliminado con exito.')));
	}
}