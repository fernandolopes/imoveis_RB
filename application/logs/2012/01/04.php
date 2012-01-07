<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-04 10:48:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: clientes ~ APPPATH\views\users\index.php [ 10 ]
2012-01-04 10:48:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: clientes ~ APPPATH\views\users\index.php [ 10 ]
--
#0 C:\xampp\htdocs\imoveis\application\views\users\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\imoveis\application\views\layout\template.php(19): Kohana_View->__toString()
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\imoveis\application\classes\controller\users.php(22): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Users->action_index()
#11 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#15 {main}
2012-01-04 10:48:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: clientes ~ APPPATH\views\users\index.php [ 10 ]
2012-01-04 10:48:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: clientes ~ APPPATH\views\users\index.php [ 10 ]
--
#0 C:\xampp\htdocs\imoveis\application\views\users\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\imoveis\application\views\layout\template.php(19): Kohana_View->__toString()
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\imoveis\application\classes\controller\users.php(22): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Users->action_index()
#11 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#15 {main}
2012-01-04 10:49:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\users\index.php [ 10 ]
2012-01-04 10:49:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\users\index.php [ 10 ]
--
#0 C:\xampp\htdocs\imoveis\application\views\users\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\imoveis\application\views\layout\template.php(19): Kohana_View->__toString()
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\imoveis\application\classes\controller\users.php(22): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Users->action_index()
#11 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#15 {main}
2012-01-04 10:51:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\users\index.php [ 10 ]
2012-01-04 10:51:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\users\index.php [ 10 ]
--
#0 C:\xampp\htdocs\imoveis\application\views\users\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\imoveis\application\views\layout\template.php(19): Kohana_View->__toString()
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\imoveis\application\classes\controller\users.php(22): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Users->action_index()
#11 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#15 {main}
2012-01-04 11:10:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\users\index.php [ 22 ]
2012-01-04 11:10:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\users\index.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:18:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\users\create.php [ 3 ]
2012-01-04 14:18:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\users\create.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:25:51 --- ERROR: ReflectionException [ 0 ]: Function max_larrayength() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
2012-01-04 14:25:51 --- STRACE: ReflectionException [ 0 ]: Function max_larrayength() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\validation.php(383): ReflectionFunction->__construct('max_larrayength')
#1 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1172): Kohana_Validation->check()
#2 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(Object(Validation))
#3 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(Object(Validation))
#4 C:\xampp\htdocs\imoveis\application\classes\controller\users.php(93): Kohana_ORM->save(Object(Validation))
#5 [internal function]: Controller_Users->action_create()
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-04 14:34:06 --- ERROR: ReflectionException [ 0 ]: Function max_larrayength() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
2012-01-04 14:34:06 --- STRACE: ReflectionException [ 0 ]: Function max_larrayength() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\validation.php(383): ReflectionFunction->__construct('max_larrayength')
#1 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1172): Kohana_Validation->check()
#2 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(Object(Validation))
#3 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(Object(Validation))
#4 C:\xampp\htdocs\imoveis\application\classes\controller\users.php(93): Kohana_ORM->save(Object(Validation))
#5 [internal function]: Controller_Users->action_create()
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-04 16:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-04 16:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 16:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-04 16:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 16:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-04 16:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 16:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-04 16:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 16:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-04 16:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 16:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-04 16:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 16:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-04 16:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 16:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-04 16:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/users was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}