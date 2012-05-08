<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-07 20:42:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\welcome.php [ 9 ]
2012-05-07 20:42:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-07 20:42:58 --- ERROR: View_Exception [ 0 ]: The requested view site/home/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-07 20:42:58 --- STRACE: View_Exception [ 0 ]: The requested view site/home/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\view.php(137): Kohana_View->set_filename('site/home/index')
#1 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\view.php(30): Kohana_View->__construct('site/home/index', NULL)
#2 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\application\classes\controller\welcome.php(9): Kohana_View::factory('site/home/index')
#3 [internal function]: Controller_Welcome->action_index()
#4 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-07 20:43:12 --- ERROR: View_Exception [ 0 ]: The requested view site/home/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-07 20:43:12 --- STRACE: View_Exception [ 0 ]: The requested view site/home/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\view.php(137): Kohana_View->set_filename('site/home/index')
#1 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\view.php(30): Kohana_View->__construct('site/home/index', NULL)
#2 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\application\classes\controller\welcome.php(9): Kohana_View::factory('site/home/index')
#3 [internal function]: Controller_Welcome->action_index()
#4 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-07 20:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-07 20:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-07 20:53:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-07 20:53:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-07 20:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-07 20:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files\VertrigoServ\www\kohana_3.2_blog\index.php(109): Kohana_Request->execute()
#3 {main}