<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-02 13:14:10 --- ERROR: Database_Exception [ 1146 ]: Table 'imoveis.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-02 13:14:10 --- STRACE: Database_Exception [ 1146 ]: Table 'imoveis.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\imoveis\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#2 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\imoveis\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\imoveis\application\classes\controller\users.php(20): Kohana_ORM::factory('user')
#7 [internal function]: Controller_Users->action_index()
#8 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#9 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-02 13:35:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_Cliente' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-01-02 13:35:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_Cliente' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-02 15:19:55 --- ERROR: View_Exception [ 0 ]: The requested view users/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-01-02 15:19:55 --- STRACE: View_Exception [ 0 ]: The requested view users/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\imoveis\system\classes\kohana\view.php(137): Kohana_View->set_filename('users/index')
#1 C:\xampp\htdocs\imoveis\application\classes\controller\users.php(22): Kohana_View->__construct('users/index')
#2 [internal function]: Controller_Users->action_index()
#3 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\imoveis\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\imoveis\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\imoveis\index.php(109): Kohana_Request->execute()
#7 {main}