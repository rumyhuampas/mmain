<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-23 00:33:35 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\views\users.php [ 22 ] in C:\xampp\htdocs\MMain\application\views\users.php:22
2013-06-23 00:33:35 --- DEBUG: #0 C:\xampp\htdocs\MMain\application\views\users.php(22): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 22, Array)
#1 C:\xampp\htdocs\MMain\application\views\users.php(22): include()
#2 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MMain\application\classes\Controller\login.php(14): Kohana_View->render()
#5 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MMain\application\views\users.php:22
2013-06-23 00:34:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\users.php [ 72 ] in C:\xampp\htdocs\MMain\application\views\users.php:72
2013-06-23 00:34:06 --- DEBUG: #0 C:\xampp\htdocs\MMain\application\views\users.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 72, Array)
#1 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\MMain\application\classes\Controller\login.php(14): Kohana_View->render()
#4 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\MMain\application\views\users.php:72
2013-06-23 00:34:55 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\views\users.php [ 93 ] in C:\xampp\htdocs\MMain\application\views\users.php:93
2013-06-23 00:34:55 --- DEBUG: #0 C:\xampp\htdocs\MMain\application\views\users.php(93): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 93, Array)
#1 C:\xampp\htdocs\MMain\application\views\users.php(93): include()
#2 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MMain\application\classes\Controller\login.php(15): Kohana_View->render()
#5 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MMain\application\views\users.php:93
2013-06-23 00:36:56 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\views\users.php [ 1 ] in C:\xampp\htdocs\MMain\application\views\users.php:1
2013-06-23 00:36:56 --- DEBUG: #0 C:\xampp\htdocs\MMain\application\views\users.php(1): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\MMain\application\views\users.php(1): include()
#2 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MMain\application\classes\Controller\login.php(15): Kohana_View->render()
#5 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MMain\application\views\users.php:1
2013-06-23 00:37:27 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\views\users.php [ 5 ] in C:\xampp\htdocs\MMain\application\views\users.php:5
2013-06-23 00:37:27 --- DEBUG: #0 C:\xampp\htdocs\MMain\application\views\users.php(5): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\MMain\application\views\users.php(5): include()
#2 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MMain\application\classes\Controller\login.php(15): Kohana_View->render()
#5 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MMain\application\views\users.php:5
2013-06-23 00:37:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Helpers_Cerda' not found ~ APPPATH\views\_headerbar.php [ 8 ] in :
2013-06-23 00:37:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-23 00:38:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _eventsCount ~ APPPATH\views\_headerbar.php [ 33 ] in C:\xampp\htdocs\MMain\application\views\_headerbar.php:33
2013-06-23 00:38:06 --- DEBUG: #0 C:\xampp\htdocs\MMain\application\views\_headerbar.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\MMain\application\views\users.php(5): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MMain\application\classes\Controller\login.php(15): Kohana_View->render()
#5 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MMain\application\views\_headerbar.php:33
2013-06-23 00:38:38 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\views\users.php [ 11 ] in C:\xampp\htdocs\MMain\application\views\users.php:11
2013-06-23 00:38:38 --- DEBUG: #0 C:\xampp\htdocs\MMain\application\views\users.php(11): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 11, Array)
#1 C:\xampp\htdocs\MMain\application\views\users.php(11): include()
#2 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MMain\application\classes\Controller\login.php(15): Kohana_View->render()
#5 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MMain\application\views\users.php:11
2013-06-23 00:39:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menuid ~ APPPATH\views\_menu.php [ 6 ] in C:\xampp\htdocs\MMain\application\views\_menu.php:6
2013-06-23 00:39:00 --- DEBUG: #0 C:\xampp\htdocs\MMain\application\views\_menu.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\MMain\application\views\users.php(11): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\MMain\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\MMain\application\classes\Controller\login.php(15): Kohana_View->render()
#5 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\MMain\application\views\_menu.php:6