<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2018-08-31 06:36:58 --> Undefined variable: news
#0 C:\xampp\htdocs\service\application\Views\equitment.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 28, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equitment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equitment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 06:37:00 --> Undefined variable: news
#0 C:\xampp\htdocs\service\application\Views\equitment.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 28, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equitment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equitment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 06:40:13 --> Undefined variable: news
#0 C:\xampp\htdocs\service\application\Views\equitment.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 28, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equitment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equitment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 06:40:26 --> Undefined variable: news
#0 C:\xampp\htdocs\service\application\Views\equitment.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 28, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equitment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equitment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 06:40:48 --> Undefined variable: news
#0 C:\xampp\htdocs\service\application\Views\equitment.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 28, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equitment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equitment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 06:52:37 --> Table 'itil.equitment' doesn't exist
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Models\selectmodel.php(17): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\service\application\Controllers\equitment_controller.php(13): App\Models\selectmodel->getNews()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equitment_controller->index()
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equitment_controller))
#9 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-08-31 06:55:33 --> Table 'itil.equitment' doesn't exist
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Models\selectmodel.php(17): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\service\application\Controllers\equitment_controller.php(13): App\Models\selectmodel->getNews()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equitment_controller->index()
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equitment_controller))
#9 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-08-31 06:56:10 --> Table 'itil.equitment' doesn't exist
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Models\selectmodel.php(17): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\service\application\Controllers\equitment_controller.php(13): App\Models\selectmodel->getNews()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equitment_controller->index()
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equitment_controller))
#9 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-08-31 06:56:12 --> Table 'itil.equitment' doesn't exist
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Models\selectmodel.php(17): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\service\application\Controllers\equitment_controller.php(13): App\Models\selectmodel->getNews()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equitment_controller->index()
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equitment_controller))
#9 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-08-31 06:58:03 --> Table 'itil.equitment' doesn't exist
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Models\selectmodel.php(17): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\service\application\Controllers\equitment_controller.php(13): App\Models\selectmodel->getNews()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equitment_controller->index()
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equitment_controller))
#9 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-08-31 06:58:04 --> Table 'itil.equitment' doesn't exist
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Models\selectmodel.php(17): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\service\application\Controllers\equitment_controller.php(13): App\Models\selectmodel->getNews()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equitment_controller->index()
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equitment_controller))
#9 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-08-31 06:58:10 --> Table 'itil.equitment' doesn't exist
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Models\selectmodel.php(17): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\service\application\Controllers\equitment_controller.php(13): App\Models\selectmodel->getNews()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equitment_controller->index()
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equitment_controller))
#9 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-08-31 06:58:11 --> Table 'itil.equitment' doesn't exist
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Models\selectmodel.php(17): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\service\application\Controllers\equitment_controller.php(13): App\Models\selectmodel->getNews()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equitment_controller->index()
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equitment_controller))
#9 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-08-31 07:00:01 --> Table 'itil.equitment' doesn't exist
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Models\selectmodel.php(17): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\service\application\Controllers\equitment_controller.php(13): App\Models\selectmodel->getNews()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equitment_controller->index()
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equitment_controller))
#9 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-08-31 07:00:16 --> Table 'itil.equitment' doesn't exist
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Models\selectmodel.php(17): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\service\application\Controllers\equitment_controller.php(13): App\Models\selectmodel->getNews()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equitment_controller->index()
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equitment_controller))
#9 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-08-31 07:00:33 --> Table 'itil.equitment' doesn't exist
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(372): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Models\selectmodel.php(17): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\service\application\Controllers\equitment_controller.php(13): App\Models\selectmodel->getNews()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equitment_controller->index()
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equitment_controller))
#9 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2018-08-31 07:02:32 --> Class 'App\Models\Model' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-08-31 07:10:15 --> Class 'App\Controllers\Controller' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-08-31 07:10:16 --> Class 'App\Controllers\Controller' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-08-31 07:37:39 --> Class 'App\Controllers\Controller' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-08-31 07:40:31 --> Class 'App\Controllers\Controller' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-08-31 07:42:20 --> Class 'App\Controllers\Controller' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-08-31 07:45:20 --> Class 'App\Controllers\Controller' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-08-31 07:45:21 --> Class 'App\Controllers\Controller' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-08-31 07:48:33 --> Class 'App\Controllers\Controller' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-08-31 07:48:53 --> Class 'App\Controllers\Controller' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-08-31 07:49:10 --> Class 'App\Controllers\Controller' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-08-31 07:49:33 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 07:51:22 --> Call to a member function run() on integer
#0 {main}
CRITICAL - 2018-08-31 10:18:12 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:20:04 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:22:39 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:22:44 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:24:46 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:25:57 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:28:58 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:29:08 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:31:27 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:34:18 --> syntax error, unexpected '='
#0 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#1 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-08-31 10:34:18 --> syntax error, unexpected '='
#0 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#1 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-08-31 10:34:39 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:35:07 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:35:08 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:35:08 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:35:24 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:35:25 --> Undefined variable: equitment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:35:58 --> Undefined variable: equipment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:37:35 --> Undefined variable: equipment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:40:45 --> Undefined variable: equipment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:44:48 --> Undefined variable: equipment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:46:35 --> Undefined variable: equipment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:47:15 --> Undefined variable: equipment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:47:20 --> Undefined variable: equipment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:48:28 --> Undefined variable: row
#0 C:\xampp\htdocs\service\application\Views\equipment.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:48:40 --> Undefined variable: row
#0 C:\xampp\htdocs\service\application\Views\equipment.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:48:41 --> Undefined variable: row
#0 C:\xampp\htdocs\service\application\Views\equipment.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:49:13 --> Undefined variable: row
#0 C:\xampp\htdocs\service\application\Views\equipment.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:49:21 --> Undefined variable: row
#0 C:\xampp\htdocs\service\application\Views\equipment.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:49:21 --> Undefined variable: row
#0 C:\xampp\htdocs\service\application\Views\equipment.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:49:22 --> Undefined variable: row
#0 C:\xampp\htdocs\service\application\Views\equipment.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:49:22 --> Undefined variable: row
#0 C:\xampp\htdocs\service\application\Views\equipment.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:49:25 --> Undefined variable: row
#0 C:\xampp\htdocs\service\application\Views\equipment.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:49:25 --> Undefined variable: row
#0 C:\xampp\htdocs\service\application\Views\equipment.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:50:10 --> syntax error, unexpected '='
#0 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#1 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-08-31 10:50:10 --> syntax error, unexpected '='
#0 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#1 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-08-31 10:50:10 --> syntax error, unexpected '='
#0 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#1 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-08-31 10:50:11 --> syntax error, unexpected '='
#0 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#1 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-08-31 10:53:17 --> Undefined variable: equipment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:54:29 --> Undefined variable: equipment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:58:29 --> Undefined variable: equipment
#0 C:\xampp\htdocs\service\application\Views\equipment.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\Home.php(32): view('equipment')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-08-31 10:58:52 --> Unknown column 'deleted' in 'where clause'
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(326): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(12): CodeIgniter\Model->find(Array)
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-08-31 10:58:53 --> Unknown column 'deleted' in 'where clause'
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(326): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(12): CodeIgniter\Model->find(Array)
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-08-31 10:59:22 --> Unknown column 'deleted' in 'where clause'
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(326): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(12): CodeIgniter\Model->find(Array)
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-08-31 11:04:01 --> Unknown column 'deleted' in 'where clause'
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(326): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(12): CodeIgniter\Model->find(Array)
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-08-31 11:04:22 --> Unknown column 'deleted' in 'where clause'
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(326): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(12): CodeIgniter\Model->find(Array)
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-08-31 11:04:38 --> Unknown column 'deleted' in 'where clause'
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(326): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(12): CodeIgniter\Model->find(Array)
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-08-31 11:04:57 --> Unknown column 'deleted' in 'where clause'
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(326): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(12): CodeIgniter\Model->find(Array)
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-08-31 11:04:58 --> Unknown column 'deleted' in 'where clause'
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(326): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(12): CodeIgniter\Model->find(Array)
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-08-31 11:06:37 --> Unknown column 'deleted' in 'where clause'
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(326): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(12): CodeIgniter\Model->find(Array)
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-08-31 11:07:02 --> Unknown column 'deleted' in 'where clause'
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\system\Model.php(326): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(12): CodeIgniter\Model->find(Array)
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-08-31 11:13:15 --> Undefined offset: 0
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(16): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-08-31 11:13:38 --> Undefined offset: 0
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(16): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-08-31 11:13:48 --> Undefined offset: 0
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(16): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-08-31 11:13:50 --> Undefined offset: 0
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(16): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-08-31 11:14:35 --> Undefined offset: 0
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(16): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
