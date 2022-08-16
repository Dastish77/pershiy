<?php


/*$string = '21-11-2015';
$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
$replacement = 'God $3, Mesyac $2, Den $1';
echo preg_replace($pattern, $replacement, $string);
*/

//Front Controller
 

//1. Общие настройки
ini_set('display errors',1);
error_reporting(E_ALL);

session_start();
        
//2. Подключение файлов системі
define('ROOT', dirname(__FILE__));

require_once(ROOT.'/components/Autoload.php');




//3. Установка соединения с БД


//4. Візов Router
$router = new Router();
$router->run();