<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-22 21:12:13 --- EMERGENCY: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/kohana/system/classes/Kohana/View.php:137
2013-05-22 21:12:13 --- DEBUG: #0 /var/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('site')
#1 /var/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('site', NULL)
#2 /var/www/kohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('site')
#3 /var/www/kohana/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/kohana/system/classes/Kohana/View.php:137
2013-05-22 22:15:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Uploadimg::_save_image() ~ APPPATH/classes/Controller/Uploadimg.php [ 21 ] in :
2013-05-22 22:15:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 22:16:04 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/uploads/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/kohana/application/classes/Controller/Uploadimg.php:47
2013-05-22 22:16:04 --- DEBUG: #0 /var/www/kohana/application/classes/Controller/Uploadimg.php(47): Kohana_Upload::save(Array, NULL, '/var/www/kohana...')
#1 /var/www/kohana/application/classes/Controller/Uploadimg.php(21): Controller_Uploadimg->_save_image(Array)
#2 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Uploadimg->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uploadimg))
#5 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/kohana/application/classes/Controller/Uploadimg.php:47
2013-05-22 22:17:09 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/uploads/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/kohana/application/classes/Controller/Uploadimg.php:47
2013-05-22 22:17:09 --- DEBUG: #0 /var/www/kohana/application/classes/Controller/Uploadimg.php(47): Kohana_Upload::save(Array, NULL, '/var/www/kohana...')
#1 /var/www/kohana/application/classes/Controller/Uploadimg.php(21): Controller_Uploadimg->_save_image(Array)
#2 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Uploadimg->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uploadimg))
#5 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/kohana/application/classes/Controller/Uploadimg.php:47
2013-05-22 22:17:36 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/uploads/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/kohana/application/classes/Controller/Uploadimg.php:47
2013-05-22 22:17:36 --- DEBUG: #0 /var/www/kohana/application/classes/Controller/Uploadimg.php(47): Kohana_Upload::save(Array, NULL, '/var/www/kohana...')
#1 /var/www/kohana/application/classes/Controller/Uploadimg.php(21): Controller_Uploadimg->_save_image(Array)
#2 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Uploadimg->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uploadimg))
#5 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/kohana/application/classes/Controller/Uploadimg.php:47
2013-05-22 22:20:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function strtotlower() ~ APPPATH/classes/Controller/Uploadimg.php [ 49 ] in :
2013-05-22 22:20:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 22:20:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH/classes/Controller/Uploadimg.php [ 51 ] in :
2013-05-22 22:20:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 22:28:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error_message ~ APPPATH/views/uploadimg/upload.php [ 14 ] in /var/www/kohana/application/views/uploadimg/upload.php:14
2013-05-22 22:28:06 --- DEBUG: #0 /var/www/kohana/application/views/uploadimg/upload.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 14, Array)
#1 /var/www/kohana/system/classes/Kohana/View.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/application/classes/Controller/Uploadimg.php(33): Kohana_Response->body(Object(View))
#6 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Uploadimg->action_upload()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uploadimg))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/application/views/uploadimg/upload.php:14