<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-23 02:52:05 --- EMERGENCY: ErrorException [ 2 ]: opendir(/kohana/application/uploads): failed to open dir: No such file or directory ~ APPPATH/classes/Controller/Uploadimg.php [ 32 ] in :
2013-05-23 02:52:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/kohana...', '/var/www/kohana...', 32, Array)
#1 /var/www/kohana/application/classes/Controller/Uploadimg.php(32): opendir('/kohana/applica...')
#2 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Uploadimg->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uploadimg))
#5 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-05-23 02:53:17 --- EMERGENCY: ErrorException [ 2 ]: opendir(/var/www/kohana/application/uploads): failed to open dir: No such file or directory ~ APPPATH/classes/Controller/Uploadimg.php [ 32 ] in :
2013-05-23 02:53:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/var/ww...', '/var/www/kohana...', 32, Array)
#1 /var/www/kohana/application/classes/Controller/Uploadimg.php(32): opendir('/var/www/kohana...')
#2 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Uploadimg->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uploadimg))
#5 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-05-23 05:54:39 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 05:54:39 --- DEBUG: #0 /var/www/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('img_testvideo1', NULL)
#1 /var/www/kohana/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('img_testvideo1')
#2 /var/www/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 05:54:50 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 05:54:50 --- DEBUG: #0 /var/www/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('img_testvideo1', NULL)
#1 /var/www/kohana/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('img_testvideo1')
#2 /var/www/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 05:55:12 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 05:55:12 --- DEBUG: #0 /var/www/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('img_testvideo1', NULL)
#1 /var/www/kohana/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('img_testvideo1')
#2 /var/www/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 05:55:18 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 05:55:18 --- DEBUG: #0 /var/www/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('img_testvideo1', NULL)
#1 /var/www/kohana/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('img_testvideo1')
#2 /var/www/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 05:55:35 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 05:55:35 --- DEBUG: #0 /var/www/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('img_testvideo1', NULL)
#1 /var/www/kohana/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('img_testvideo1')
#2 /var/www/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 05:55:45 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 05:55:45 --- DEBUG: #0 /var/www/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('img_testvideo1', NULL)
#1 /var/www/kohana/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('img_testvideo1')
#2 /var/www/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 05:56:25 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 05:56:25 --- DEBUG: #0 /var/www/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('img_testvideo2', NULL)
#1 /var/www/kohana/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('img_testvideo2')
#2 /var/www/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/kohana/system/classes/Kohana/Cookie.php:67
2013-05-23 06:15:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: img_testvideo1 ~ APPPATH/views/uploadimg/upload.php [ 67 ] in /var/www/kohana/application/views/uploadimg/upload.php:67
2013-05-23 06:15:57 --- DEBUG: #0 /var/www/kohana/application/views/uploadimg/upload.php(67): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 67, Array)
#1 /var/www/kohana/system/classes/Kohana/View.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/application/classes/Controller/Uploadimg.php(47): Kohana_Response->body(Object(View))
#6 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Uploadimg->action_upload()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uploadimg))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/application/views/uploadimg/upload.php:67
2013-05-23 09:45:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: testimg ~ APPPATH/classes/Controller/Uploadimg.php [ 48 ] in /var/www/kohana/application/classes/Controller/Uploadimg.php:48
2013-05-23 09:45:40 --- DEBUG: #0 /var/www/kohana/application/classes/Controller/Uploadimg.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 48, Array)
#1 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Uploadimg->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uploadimg))
#4 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/kohana/application/classes/Controller/Uploadimg.php:48
2013-05-23 21:46:47 --- EMERGENCY: ErrorException [ 2 ]: opendir(/var/www/kohana/uploads): failed to open dir: No such file or directory ~ APPPATH/classes/Controller/Uploadimg.php [ 34 ] in :
2013-05-23 21:46:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/var/ww...', '/var/www/kohana...', 34, Array)
#1 /var/www/kohana_imgupload/application/classes/Controller/Uploadimg.php(34): opendir('/var/www/kohana...')
#2 /var/www/kohana_imgupload/system/classes/Kohana/Controller.php(84): Controller_Uploadimg->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/kohana_imgupload/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uploadimg))
#5 /var/www/kohana_imgupload/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/kohana_imgupload/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana_imgupload/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-05-23 21:47:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: imgarr ~ APPPATH/classes/Controller/Uploadimg.php [ 46 ] in /var/www/kohana_imgupload/application/classes/Controller/Uploadimg.php:46
2013-05-23 21:47:56 --- DEBUG: #0 /var/www/kohana_imgupload/application/classes/Controller/Uploadimg.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 46, Array)
#1 /var/www/kohana_imgupload/system/classes/Kohana/Controller.php(84): Controller_Uploadimg->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/kohana_imgupload/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uploadimg))
#4 /var/www/kohana_imgupload/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/kohana_imgupload/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana_imgupload/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/kohana_imgupload/application/classes/Controller/Uploadimg.php:46