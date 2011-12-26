<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-17 18:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL imoveis was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-17 18:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL imoveis was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-17 21:22:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL imoveis was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-17 21:22:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL imoveis was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-17 21:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: imoveis/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-17 21:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: imoveis/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-17 21:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-17 21:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-17 22:55:52 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\xampp\htdocs\imoveis\application\classes\controller\filho.php on line 10 and defined ~ SYSPATH\classes\kohana\controller.php [ 43 ]
2011-12-17 22:55:52 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\xampp\htdocs\imoveis\application\classes\controller\filho.php on line 10 and defined ~ SYSPATH\classes\kohana\controller.php [ 43 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\imoveis\application\classes\controller\filho.php(10): Kohana_Controller->__construct()
#2 [internal function]: Controller_Filho->action_index()
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Filho))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-17 23:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL filho/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-17 23:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL filho/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-17 23:11:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Cliente::find_all() ~ APPPATH\classes\controller\welcome.php [ 6 ]
2011-12-17 23:11:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Cliente::find_all() ~ APPPATH\classes\controller\welcome.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 23:12:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Cliente::find_all() ~ APPPATH\classes\controller\welcome.php [ 7 ]
2011-12-17 23:12:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Cliente::find_all() ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}