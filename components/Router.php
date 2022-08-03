<?php

/**
 * Class Router
 */
class Router
{
    /**
     * @var mixed
     */
    private $routes;

    /**
     * Router constructor.
     */
    public function __construct()
    {
        $routesPath= ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }
    
    // Возвращает строку Стринг
    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])) {
        return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        //Получить строку запроса
        $uri = $this->getURI();
        
        //Проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path){

            //Сравнение $uriPattern and $uri
            if (preg_match("~$uriPattern~", $uri)){

                $path = preg_replace("~$uriPattern~", $path, $uri);
                //Определить какой контроллер
                //и Актион обрабатівает запрос
                $segments = explode('/', $path);
                
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
            
                $actionName = 'action' . ucfirst(array_shift($segments));
    
                $parameters = $segments;
                //Подключить файл класса контроллера
        
                $controllerFile = ROOT . '/controllers/' .
                        $controllerName . '.php';
                
                if (file_exists($controllerFile)){
                    include_once($controllerFile);
                }
                //Создать обьект, візвать метод (т.е. Актион)
                $controllerObject = new $controllerName;
           
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
            
                if ($result != null) {
                    break;
                }
            }
        }
    }
}
