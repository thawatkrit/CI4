<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2018-09-04 08:22:43 --> syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST)
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 08:23:02 --> Undefined property: App\Controllers\equipment_controller::$load
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(14): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-09-04 08:23:30 --> Undefined property: App\Controllers\equipment_controller::$load
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(14): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-09-04 08:23:37 --> mysqli::real_connect(): send of 40 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.

#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(8, 'mysqli::real_co...', 'C:\\xampp\\htdocs...', 177, Array)
#1 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(177): mysqli->real_connect('p:localhost', 'root', '', 'itil', 3306, '', 0)
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(true)
#3 C:\xampp\htdocs\service\system\Database\BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#4 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(17): CodeIgniter\Database\BaseBuilder->get()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-09-04 08:23:43 --> mysqli::real_connect(): send of 40 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.

#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(8, 'mysqli::real_co...', 'C:\\xampp\\htdocs...', 177, Array)
#1 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(177): mysqli->real_connect('p:localhost', 'root', '', 'itil', 3306, '', 0)
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(true)
#3 C:\xampp\htdocs\service\system\Database\BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#4 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(17): CodeIgniter\Database\BaseBuilder->get()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-09-04 08:24:19 --> Undefined property: App\Controllers\equipment_controller::$load
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(14): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-09-04 08:42:25 --> syntax error, unexpected '$db' (T_VARIABLE)
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:07:45 --> syntax error, unexpected '$db' (T_VARIABLE)
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:25:23 --> Undefined variable: data
#0 C:\xampp\htdocs\service\application\Views\equipment.php(50): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(26): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:25:32 --> Undefined variable: data
#0 C:\xampp\htdocs\service\application\Views\equipment.php(50): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(26): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:25:52 --> Undefined variable: data
#0 C:\xampp\htdocs\service\application\Views\equipment.php(50): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(26): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:26:03 --> Array to string conversion
#0 C:\xampp\htdocs\service\application\Views\equipment.php(50): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(26): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:26:05 --> Array to string conversion
#0 C:\xampp\htdocs\service\application\Views\equipment.php(50): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(26): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:26:06 --> Array to string conversion
#0 C:\xampp\htdocs\service\application\Views\equipment.php(50): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(26): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:26:51 --> Undefined variable: element_per_page
#0 C:\xampp\htdocs\service\application\Views\equipment.php(50): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(26): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:26:59 --> Undefined variable: element_per_page
#0 C:\xampp\htdocs\service\application\Views\equipment.php(50): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(26): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:27:12 --> Undefined variable: element_per_page
#0 C:\xampp\htdocs\service\application\Views\equipment.php(50): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(26): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:27:13 --> Undefined variable: element_per_page
#0 C:\xampp\htdocs\service\application\Views\equipment.php(50): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(26): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:29:22 --> Undefined variable: element_per_page
#0 C:\xampp\htdocs\service\application\Views\equipment.php(50): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(26): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:37:58 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:38:04 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:38:27 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:38:28 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:38:28 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:39:16 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:39:25 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:39:33 --> Undefined variable: number_of_page
#0 C:\xampp\htdocs\service\application\Views\equipment.php(50): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(30): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:39:54 --> Undefined index: page
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(21): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 21, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-09-04 09:41:08 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:41:28 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:42:00 --> Undefined variable: element_per_page
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(30): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-09-04 09:42:01 --> Undefined variable: element_per_page
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(30): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-09-04 09:42:18 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:42:20 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:42:38 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:42:39 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:42:50 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:42:51 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 09:42:57 --> Unsupported operand types
#0 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-09-04 09:44:17 --> Undefined variable: page
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(22): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 22, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-09-04 09:49:44 --> Undefined property: mysqli::$equipment_name
#0 C:\xampp\htdocs\service\application\Views\equipment.php(37): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(39): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 10:00:04 --> mysqli::real_connect(): send of 40 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.

#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(8, 'mysqli::real_co...', 'C:\\xampp\\htdocs...', 177, Array)
#1 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(177): mysqli->real_connect('p:localhost', 'root', '', 'itil', 3306, '', 0)
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(true)
#3 C:\xampp\htdocs\service\system\Database\BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#4 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(17): CodeIgniter\Database\BaseBuilder->get()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-09-04 10:00:06 --> mysqli::real_connect(): send of 40 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.

#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(8, 'mysqli::real_co...', 'C:\\xampp\\htdocs...', 177, Array)
#1 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(177): mysqli->real_connect('p:localhost', 'root', '', 'itil', 3306, '', 0)
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(true)
#3 C:\xampp\htdocs\service\system\Database\BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#4 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(17): CodeIgniter\Database\BaseBuilder->get()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-09-04 10:08:58 --> Array to string conversion
#0 C:\xampp\htdocs\service\application\Views\equipment.php(37): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(38): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 10:11:13 --> count(): Parameter must be an array or an object that implements Countable
#0 C:\xampp\htdocs\service\application\Views\equipment.php(37): CodeIgniter\Debug\Exceptions->errorHandler(2, 'count(): Parame...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(38): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 10:13:01 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::getResult()
#0 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-09-04 10:13:28 --> Call to a member function getResult() on string
#0 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-09-04 10:13:34 --> count(): Parameter must be an array or an object that implements Countable
#0 C:\xampp\htdocs\service\application\Views\equipment.php(37): CodeIgniter\Debug\Exceptions->errorHandler(2, 'count(): Parame...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(38): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 10:18:46 --> mysqli::real_connect(): send of 40 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.

#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(8, 'mysqli::real_co...', 'C:\\xampp\\htdocs...', 177, Array)
#1 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(177): mysqli->real_connect('p:localhost', 'root', '', 'itil', 3306, '', 0)
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(true)
#3 C:\xampp\htdocs\service\system\Database\BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#4 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#5 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(30): CodeIgniter\Database\BaseBuilder->get(0, 5)
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#8 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2018-09-04 10:20:56 --> syntax error, unexpected ''number_of_page'' (T_CONSTANT_ENCAPSED_STRING), expecting ']'
#0 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\service\system\Autoloader\Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(749): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(287): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 11:21:21 --> A non well formed numeric value encountered
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'A non well form...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-09-04 11:21:31 --> A non well formed numeric value encountered
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'A non well form...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-09-04 11:23:37 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(28): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 11:25:04 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(28): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 11:25:43 --> Undefined variable: back_page
#0 C:\xampp\htdocs\service\application\Views\equipment.php(57): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(37): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 11:25:45 --> Undefined variable: back_page
#0 C:\xampp\htdocs\service\application\Views\equipment.php(57): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(37): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 11:25:58 --> Undefined variable: back_page
#0 C:\xampp\htdocs\service\application\Views\equipment.php(57): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(37): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 11:25:59 --> Undefined variable: back_page
#0 C:\xampp\htdocs\service\application\Views\equipment.php(57): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(37): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 11:26:49 --> Undefined variable: back_page
#0 C:\xampp\htdocs\service\application\Views\equipment.php(57): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(37): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 11:27:20 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(28): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 11:29:44 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(28): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 11:33:47 --> Cannot use isset() on the result of an expression (you can use "null !== expression" instead)
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-09-04 11:35:37 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(28): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 11:35:47 --> Undefined variable: back_page
#0 C:\xampp\htdocs\service\application\Views\equipment.php(62): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 62, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(37): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 11:37:16 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(28): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 11:37:19 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(28): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 11:37:32 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(28): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 12:00:58 --> syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting '-' or identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING)
#0 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#1 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(37): view('equipment', Array)
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-09-04 12:00:58 --> syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting '-' or identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING)
#0 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#1 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(37): view('equipment', Array)
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-09-04 12:01:07 --> syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting '-' or identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING)
#0 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#1 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(37): view('equipment', Array)
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-09-04 12:01:14 --> syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting '-' or identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING)
#0 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#1 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(37): view('equipment', Array)
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-09-04 12:02:42 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(28): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 12:02:48 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-60, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(28): CodeIgniter\Database\BaseBuilder->get(10, -60)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 12:08:30 --> Undefined variable: back_page
#0 C:\xampp\htdocs\service\application\Views\equipment.php(68): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 68, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(43): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 12:10:18 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-60, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(34): CodeIgniter\Database\BaseBuilder->get(10, -60)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 12:10:24 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(34): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 12:11:06 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(34): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 12:11:07 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(34): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 12:11:07 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(34): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 12:11:07 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(34): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 12:11:24 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(34): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 12:12:05 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 3
#0 C:\xampp\htdocs\service\system\Database\MySQLi\Connection.php(312): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\service\system\Database\BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\service\system\Database\BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\service\system\Database\BaseBuilder.php(1384): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array)
#4 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(34): CodeIgniter\Database\BaseBuilder->get(10, -10)
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#7 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-09-04 12:24:19 --> Undefined variable: _SERTVER
#0 C:\xampp\htdocs\service\application\Views\equipment.php(71): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 71, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(43): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 12:24:21 --> Undefined variable: _SERTVER
#0 C:\xampp\htdocs\service\application\Views\equipment.php(71): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 71, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(43): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 12:25:28 --> Undefined index: REMOTE_HOST
#0 C:\xampp\htdocs\service\application\Views\equipment.php(70): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(43): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 12:25:41 --> Undefined index: REMOTE_HOST
#0 C:\xampp\htdocs\service\application\Views\equipment.php(70): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(43): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 12:25:41 --> Undefined index: REMOTE_HOST
#0 C:\xampp\htdocs\service\application\Views\equipment.php(70): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(43): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 12:25:41 --> Undefined index: REMOTE_HOST
#0 C:\xampp\htdocs\service\application\Views\equipment.php(70): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(43): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 12:25:41 --> Undefined index: REMOTE_HOST
#0 C:\xampp\htdocs\service\application\Views\equipment.php(70): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(43): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 12:25:41 --> Undefined index: REMOTE_HOST
#0 C:\xampp\htdocs\service\application\Views\equipment.php(70): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(43): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 12:25:41 --> Undefined index: REMOTE_HOST
#0 C:\xampp\htdocs\service\application\Views\equipment.php(70): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(43): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 12:26:07 --> Undefined index: REMOTE_HOST
#0 C:\xampp\htdocs\service\application\Views\equipment.php(70): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(43): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 12:26:35 --> Undefined index: REMOTE_HOST
#0 C:\xampp\htdocs\service\application\Views\equipment.php(70): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\service\system\View\View.php(209): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('equipment', Array, NULL)
#3 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(43): view('equipment', Array)
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#6 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-09-04 12:35:01 --> Undefined variable: query
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(18): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 18, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-09-04 12:35:57 --> Undefined variable: rows
#0 C:\xampp\htdocs\service\application\Controllers\equipment_controller.php(20): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 20, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\equipment_controller->index()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\equipment_controller))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(38): CodeIgniter\CodeIgniter->run()
#5 {main}
