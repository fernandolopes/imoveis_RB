<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-18 09:46:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\views\layout\template.php [ 8 ]
2011-12-18 09:46:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\views\layout\template.php [ 8 ]
--
#0 C:\xampp\htdocs\imoveis\application\views\layout\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(9): Kohana_View->render()
#4 [internal function]: Controller_Clientes->action_index()
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-18 09:48:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\views\layout\template.php [ 8 ]
2011-12-18 09:48:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\views\layout\template.php [ 8 ]
--
#0 C:\xampp\htdocs\imoveis\application\views\layout\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(11): Kohana_View->render()
#4 [internal function]: Controller_Clientes->action_index()
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-18 10:28:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: clientes ~ APPPATH\views\clientes\index.php [ 12 ]
2011-12-18 10:28:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: clientes ~ APPPATH\views\clientes\index.php [ 12 ]
--
#0 C:\xampp\htdocs\imoveis\application\views\clientes\index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 12, Array)
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\imoveis\application\views\layout\template.php(16): Kohana_View->__toString()
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(12): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Clientes->action_index()
#11 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#12 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#15 {main}
2011-12-18 11:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/edit was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-18 11:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/edit was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-18 11:06:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-18 11:06:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-18 11:06:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/delete/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-18 11:06:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/delete/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-18 11:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/delete/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-18 11:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/delete/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-18 11:07:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-18 11:07:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-18 11:08:18 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Clientes::action_edit() ~ APPPATH\classes\controller\clientes.php [ 19 ]
2011-12-18 11:08:18 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Clientes::action_edit() ~ APPPATH\classes\controller\clientes.php [ 19 ]
--
#0 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(19): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 19, Array)
#1 [internal function]: Controller_Clientes->action_edit()
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-18 11:08:47 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Clientes::action_edit() ~ APPPATH\classes\controller\clientes.php [ 19 ]
2011-12-18 11:08:47 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Clientes::action_edit() ~ APPPATH\classes\controller\clientes.php [ 19 ]
--
#0 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(19): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 19, Array)
#1 [internal function]: Controller_Clientes->action_edit()
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-18 11:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL clientes/create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-18 11:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL clientes/create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-18 14:38:10 --- ERROR: ErrorException [ 8 ]: Undefined index: data_nascimento ~ APPPATH\classes\controller\clientes.php [ 46 ]
2011-12-18 14:38:10 --- STRACE: ErrorException [ 8 ]: Undefined index: data_nascimento ~ APPPATH\classes\controller\clientes.php [ 46 ]
--
#0 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 46, Array)
#1 [internal function]: Controller_Clientes->action_create()
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-18 14:39:41 --- ERROR: ErrorException [ 8 ]: Undefined index: data_nascimento ~ APPPATH\classes\controller\clientes.php [ 46 ]
2011-12-18 14:39:41 --- STRACE: ErrorException [ 8 ]: Undefined index: data_nascimento ~ APPPATH\classes\controller\clientes.php [ 46 ]
--
#0 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 46, Array)
#1 [internal function]: Controller_Clientes->action_create()
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-18 17:15:02 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\clientes.php [ 14 ]
2011-12-18 17:15:02 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\clientes.php [ 14 ]
--
#0 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(14): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\xampp\htdocs...', 14, Array)
#1 [internal function]: Controller_Clientes->action_index()
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#6 {main}