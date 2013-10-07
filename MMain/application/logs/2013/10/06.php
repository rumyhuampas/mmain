<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-06 19:47:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function length() ~ APPPATH\classes\Controller\abmusers.php [ 62 ] in :
2013-10-06 19:47:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-06 19:48:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function size() ~ APPPATH\classes\Controller\abmusers.php [ 62 ] in :
2013-10-06 19:48:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-06 19:49:05 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant length - assumed 'length' ~ APPPATH\classes\Controller\abmusers.php [ 62 ] in C:\xampp\htdocs\MMain\application\classes\Controller\abmusers.php:62
2013-10-06 19:49:05 --- DEBUG: #0 C:\xampp\htdocs\MMain\application\classes\Controller\abmusers.php(62): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 62, Array)
#1 C:\xampp\htdocs\MMain\system\classes\Kohana\Controller.php(84): Controller_ABMUsers->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_ABMUsers))
#4 C:\xampp\htdocs\MMain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\MMain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\MMain\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\MMain\application\classes\Controller\abmusers.php:62