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