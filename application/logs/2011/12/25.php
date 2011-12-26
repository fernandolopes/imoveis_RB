<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-25 18:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.meiomask.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-25 18:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.meiomask.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:33:06 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_ORM::rules() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\clientes.php [ 105 ]
2011-12-25 19:33:06 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_ORM::rules() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\clientes.php [ 105 ]
--
#0 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(105): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\xampp\htdocs...', 105, Array)
#1 [internal function]: Controller_Clientes->action_create()
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-25 19:56:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\clientes\create.php [ 9 ]
2011-12-25 19:56:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\clientes\create.php [ 9 ]
--
#0 C:\xampp\htdocs\imoveis\application\views\clientes\create.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\imoveis\application\views\layout\template.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(113): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Clientes->action_create()
#11 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#12 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#15 {main}
2011-12-25 20:12:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\clientes\create.php [ 8 ]
2011-12-25 20:12:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\clientes\create.php [ 8 ]
--
#0 C:\xampp\htdocs\imoveis\application\views\clientes\create.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\imoveis\application\views\layout\template.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(122): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Clientes->action_create()
#11 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#12 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#15 {main}
2011-12-25 20:14:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\clientes.php [ 121 ]
2011-12-25 20:14:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\clientes.php [ 121 ]
--
#0 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(121): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 121, Array)
#1 [internal function]: Controller_Clientes->action_create()
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-25 20:15:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\clientes\create.php [ 8 ]
2011-12-25 20:15:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\clientes\create.php [ 8 ]
--
#0 C:\xampp\htdocs\imoveis\application\views\clientes\create.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\imoveis\application\views\layout\template.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(125): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Clientes->action_create()
#11 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#12 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#15 {main}
2011-12-25 20:17:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: values ~ APPPATH\views\clientes\create.php [ 9 ]
2011-12-25 20:17:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: values ~ APPPATH\views\clientes\create.php [ 9 ]
--
#0 C:\xampp\htdocs\imoveis\application\views\clientes\create.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\imoveis\application\views\layout\template.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(124): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Clientes->action_create()
#11 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#12 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#15 {main}
2011-12-25 20:31:14 --- ERROR: ErrorException [ 8 ]: Undefined index: cpf ~ APPPATH\classes\controller\clientes.php [ 81 ]
2011-12-25 20:31:14 --- STRACE: ErrorException [ 8 ]: Undefined index: cpf ~ APPPATH\classes\controller\clientes.php [ 81 ]
--
#0 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(81): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 81, Array)
#1 [internal function]: Controller_Clientes->action_create()
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-25 20:31:59 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\format.php [ 228 ]
2011-12-25 20:31:59 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\format.php [ 228 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\xampp\htdocs...', 228, Array)
#1 C:\xampp\htdocs\imoveis\application\classes\format.php(228): number_format('629.657.783-49', 2, ',', '.')
#2 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(92): format::currency('629.657.783-49')
#3 [internal function]: Controller_Clientes->action_create()
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-25 20:35:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: form ~ APPPATH\classes\controller\clientes.php [ 92 ]
2011-12-25 20:35:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: form ~ APPPATH\classes\controller\clientes.php [ 92 ]
--
#0 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 92, Array)
#1 [internal function]: Controller_Clientes->action_create()
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-25 20:36:17 --- ERROR: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Unknown modifier 'g' ~ APPPATH\classes\controller\clientes.php [ 92 ]
2011-12-25 20:36:17 --- STRACE: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Unknown modifier 'g' ~ APPPATH\classes\controller\clientes.php [ 92 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(92): preg_replace('/\D/g', '', '629.657.783-49')
#2 [internal function]: Controller_Clientes->action_create()
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-25 20:44:41 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Cliente as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2011-12-25 20:44:41 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Cliente as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 20:46:12 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Cliente as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2011-12-25 20:46:12 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Cliente as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 20:52:09 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Cliente as array ~ APPPATH\classes\controller\clientes.php [ 36 ]
2011-12-25 20:52:09 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Cliente as array ~ APPPATH\classes\controller\clientes.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 20:53:59 --- ERROR: Kohana_Exception [ 0 ]: Cannot update cliente model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2011-12-25 20:53:59 --- STRACE: Kohana_Exception [ 0 ]: Cannot update cliente model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(59): Kohana_ORM->update(Object(Validation))
#1 [internal function]: Controller_Clientes->action_edit()
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-25 20:55:41 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\clientes.php [ 34 ]
2011-12-25 20:55:41 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\clientes.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 20:56:05 --- ERROR: ErrorException [ 1 ]: Call to a member function update() on a non-object ~ APPPATH\classes\controller\clientes.php [ 60 ]
2011-12-25 20:56:05 --- STRACE: ErrorException [ 1 ]: Call to a member function update() on a non-object ~ APPPATH\classes\controller\clientes.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 20:56:22 --- ERROR: Kohana_Exception [ 0 ]: Cannot update cliente model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2011-12-25 20:56:22 --- STRACE: Kohana_Exception [ 0 ]: Cannot update cliente model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 C:\xampp\htdocs\imoveis\application\classes\controller\clientes.php(60): Kohana_ORM->update(Object(Validation))
#1 [internal function]: Controller_Clientes->action_edit()
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Clientes))
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#6 {main}