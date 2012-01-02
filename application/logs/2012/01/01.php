<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-01 18:46:17 --- ERROR: Database_Exception [ 1146 ]: Table 'imoveis.imovels' doesn't exist [ SHOW FULL COLUMNS FROM `imovels` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-01 18:46:17 --- STRACE: Database_Exception [ 1146 ]: Table 'imoveis.imovels' doesn't exist [ SHOW FULL COLUMNS FROM `imovels` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\imoveis\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('imovels')
#2 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\imoveis\application\classes\controller\imoveis.php(20): Kohana_ORM::factory('imovel')
#7 [internal function]: Controller_Imoveis->action_index()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Imoveis))
#9 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-01 18:48:50 --- ERROR: Database_Exception [ 1146 ]: Table 'imoveis.imovels' doesn't exist [ SHOW FULL COLUMNS FROM `imovels` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-01 18:48:50 --- STRACE: Database_Exception [ 1146 ]: Table 'imoveis.imovels' doesn't exist [ SHOW FULL COLUMNS FROM `imovels` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\imoveis\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('imovels')
#2 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\imoveis\application\classes\controller\imoveis.php(20): Kohana_ORM::factory('imovel')
#7 [internal function]: Controller_Imoveis->action_index()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Imoveis))
#9 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-01 18:50:01 --- ERROR: Database_Exception [ 1146 ]: Table 'imoveis.imovels' doesn't exist [ SHOW FULL COLUMNS FROM `imovels` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-01 18:50:01 --- STRACE: Database_Exception [ 1146 ]: Table 'imoveis.imovels' doesn't exist [ SHOW FULL COLUMNS FROM `imovels` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\imoveis\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('imovels')
#2 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\imoveis\application\classes\controller\imoveis.php(20): Kohana_ORM::factory('imovel')
#7 [internal function]: Controller_Imoveis->action_index()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Imoveis))
#9 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-01 18:50:02 --- ERROR: Database_Exception [ 1146 ]: Table 'imoveis.imovels' doesn't exist [ SHOW FULL COLUMNS FROM `imovels` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-01 18:50:02 --- STRACE: Database_Exception [ 1146 ]: Table 'imoveis.imovels' doesn't exist [ SHOW FULL COLUMNS FROM `imovels` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\imoveis\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('imovels')
#2 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\imoveis\application\classes\controller\imoveis.php(20): Kohana_ORM::factory('imovel')
#7 [internal function]: Controller_Imoveis->action_index()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Imoveis))
#9 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-01 19:03:10 --- ERROR: Kohana_Exception [ 0 ]: The bairo property does not exist in the Model_Imovel class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-01-01 19:03:10 --- STRACE: Kohana_Exception [ 0 ]: The bairo property does not exist in the Model_Imovel class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\imoveis\application\views\imoveis\index.php(21): Kohana_ORM->__get('bairo')
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\imoveis\application\views\layout\template.php(19): Kohana_View->__toString()
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\imoveis\application\classes\controller\imoveis.php(25): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Imoveis->action_index()
#11 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Imoveis))
#12 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#15 {main}
2012-01-01 19:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguilde was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-01 19:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguilde was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 19:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguilde was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-01 19:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguilde was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 19:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguilde was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-01 19:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguilde was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 19:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-01 19:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 19:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguide/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-01 19:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguide/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 19:10:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguide/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-01 19:10:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguide/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 19:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL imocveis was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-01 19:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL imocveis was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 19:30:31 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in C:\xampp\htdocs\imoveis\system\classes\kohana\core.php on line 923 and defined ~ SYSPATH\classes\kohana\arr.php [ 411 ]
2012-01-01 19:30:31 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in C:\xampp\htdocs\imoveis\system\classes\kohana\core.php on line 923 and defined ~ SYSPATH\classes\kohana\arr.php [ 411 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\arr.php(411): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 411, Array)
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\core.php(923): Kohana_Arr::merge(Array, 1)
#2 C:\xampp\htdocs\imoveis\system\classes\kohana\validation.php(545): Kohana_Core::message('models/imovel', 'nome.not_empty')
#3 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm\validation\exception.php(168): Kohana_Validation->errors('models/imovel', true)
#4 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('imovel', Array, 'models', true)
#5 C:\xampp\htdocs\imoveis\application\classes\controller\imoveis.php(109): Kohana_ORM_Validation_Exception->errors('models')
#6 [internal function]: Controller_Imoveis->action_create()
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Imoveis))
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-01 19:43:04 --- ERROR: ReflectionException [ 0 ]: Function mix_length() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
2012-01-01 19:43:04 --- STRACE: ReflectionException [ 0 ]: Function mix_length() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\validation.php(383): ReflectionFunction->__construct('mix_length')
#1 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1172): Kohana_Validation->check()
#2 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(Object(Validation))
#3 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(Object(Validation))
#4 C:\xampp\htdocs\imoveis\application\classes\controller\imoveis.php(103): Kohana_ORM->save(Object(Validation))
#5 [internal function]: Controller_Imoveis->action_create()
#6 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Imoveis))
#7 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-01 21:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cliente/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-01 21:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cliente/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#3 {main}