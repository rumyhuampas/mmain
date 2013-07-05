<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-22 23:07:23 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'mpdf' at 'MODPATH\mpdf' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in C:\xampp\htdocs\MMain\application\bootstrap.php:121
2013-06-22 23:07:23 --- DEBUG: #0 C:\xampp\htdocs\MMain\application\bootstrap.php(121): Kohana_Core::modules(Array)
#1 C:\xampp\htdocs\MMain\index.php(102): require('C:\xampp\htdocs...')
#2 {main} in C:\xampp\htdocs\MMain\application\bootstrap.php:121
2013-06-22 23:15:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Helpers_User' not found ~ APPPATH\classes\Controller\login.php [ 7 ] in :
2013-06-22 23:15:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-22 23:15:45 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\xampp\htdocs\MMain\modules\database\classes\Kohana\Database\MySQL.php:75
2013-06-22 23:15:45 --- DEBUG: #0 C:\xampp\htdocs\MMain\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\xampp\htdocs\MMain\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\MMain\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\MMain\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#4 C:\xampp\htdocs\MMain\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\MMain\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\MMain\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\MMain\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\MMain\application\classes\Helpers\user.php(20): Kohana_ORM::factory('user')
#9 C:\xampp\htdocs\MMain\application\classes\Controller\login.php(7): Helpers_User::isAnyUser()
#10 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#13 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\MMain\modules\database\classes\Kohana\Database\MySQL.php:75
2013-06-22 23:18:49 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'mmain' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\xampp\htdocs\MMain\modules\database\classes\Kohana\Database\MySQL.php:75
2013-06-22 23:18:49 --- DEBUG: #0 C:\xampp\htdocs\MMain\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('mmain')
#1 C:\xampp\htdocs\MMain\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\MMain\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\MMain\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#4 C:\xampp\htdocs\MMain\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\MMain\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\MMain\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\MMain\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\MMain\application\classes\Helpers\user.php(20): Kohana_ORM::factory('user')
#9 C:\xampp\htdocs\MMain\application\classes\Controller\login.php(7): Helpers_User::isAnyUser()
#10 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#13 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\MMain\modules\database\classes\Kohana\Database\MySQL.php:75
2013-06-22 23:19:52 --- CRITICAL: View_Exception [ 0 ]: The requested view newuser could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\MMain\system\classes\Kohana\View.php:137
2013-06-22 23:19:52 --- DEBUG: #0 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(137): Kohana_View->set_filename('newuser')
#1 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(30): Kohana_View->__construct('newuser', NULL)
#2 C:\xampp\htdocs\MMain\application\classes\Controller\login.php(11): Kohana_View::factory('newuser')
#3 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\MMain\system\classes\Kohana\View.php:137
2013-06-22 23:20:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Helpers_Const' not found ~ APPPATH\classes\Controller\login.php [ 13 ] in :
2013-06-22 23:20:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-22 23:21:00 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\views\newuser.php [ 13 ] in C:\xampp\htdocs\MMain\application\views\newuser.php:13
2013-06-22 23:21:00 --- DEBUG: #0 C:\xampp\htdocs\MMain\application\views\newuser.php(13): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\MMain\application\views\newuser.php(13): include()
#2 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MMain\application\classes\Controller\login.php(14): Kohana_View->render()
#5 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MMain\application\views\newuser.php:13
2013-06-22 23:26:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Helpers_Session' not found ~ APPPATH\classes\Controller\login.php [ 29 ] in :
2013-06-22 23:26:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-22 23:30:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_estado' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-06-22 23:30:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :