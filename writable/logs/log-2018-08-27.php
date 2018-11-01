<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2018-08-27 16:55:38 --> Call to undefined function form_open()
#0 C:\xampp\htdocs\service\system\View\View.php(209): include()
#1 C:\xampp\htdocs\service\system\Common.php(139): CodeIgniter\View\View->render('login_message', Array, NULL)
#2 C:\xampp\htdocs\service\application\Controllers\Home.php(33): view('login_message')
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Home->login()
#4 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-08-27 17:25:59 --> Too few arguments to function App\Controllers\Login::process(), 0 passed in C:\xampp\htdocs\service\system\CodeIgniter.php on line 795 and exactly 1 expected
#0 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Login->process()
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-08-27 19:41:54 --> Call to a member function set() on null
#0 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Login->process()
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-08-27 19:42:30 --> Call to a member function set() on null
#0 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Login->process()
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-08-27 20:07:28 --> Trying to get property 'username' of non-object
#0 C:\xampp\htdocs\service\application\Controllers\Login.php(34): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 34, Array)
#1 C:\xampp\htdocs\service\system\CodeIgniter.php(795): App\Controllers\Login->process()
#2 C:\xampp\htdocs\service\system\CodeIgniter.php(297): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#3 C:\xampp\htdocs\service\system\CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\service\public\index.php(37): CodeIgniter\CodeIgniter->run()
#5 {main}
