<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-29 16:10:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function contains() ~ APPPATH\views\welcome.php [ 16 ] in :
2013-09-29 16:10:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-29 16:52:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function contains() ~ APPPATH\views\welcome.php [ 16 ] in :
2013-09-29 16:52:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-29 16:52:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _userprofile ~ APPPATH\views\welcome.php [ 16 ] in C:\xampp\htdocs\MMain\application\views\welcome.php:16
2013-09-29 16:52:43 --- DEBUG: #0 C:\xampp\htdocs\MMain\application\views\welcome.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\MMain\application\classes\Controller\welcome.php(9): Kohana_View->render()
#4 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\MMain\application\views\welcome.php:16
2013-09-29 17:12:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Helpers_Utils' not found ~ APPPATH\views\welcome.php [ 17 ] in :
2013-09-29 17:12:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :