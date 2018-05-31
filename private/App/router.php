<?php
namespace Petrova\Prod\App;

class Router{
	static function run($controllers_namespace){
		$get = null;
		$controller = 'Index';
		$action = 'index';
		$routes = explode('/',$_SERVER['REQUEST_URI']);
		//var_dump($routes);
		if(!empty($routes[1])){
			$controller = $routes[1];
			
		}
		if(!empty($routes[2])){
			$action = $routes[2];
			
		}
		if(!empty($routes[3])){
			$get = $routes[3];
		}// танцы с ГЕТ это для запростов не типа GET  а типа domain/goods/phones/45 где 45 какой то айдишник
		// не для стандартных маршрутов а для распарсивания по своему методу

		$controller = $controllers_namespace.ucfirst(strtolower($controller)).'Controller';
		$action = strtolower($action).'Action';
		
		if (class_exists($controller)){
			$controller = new $controller();
		} else {
			var_dump($controller);
			var_dump('класс не существует');
		}
		
		if (method_exists($controller,$action)){
			$controller->$action();
		} else {
			var_dump($action);
			var_dump('метода не существует');
		}
		
		
		
		

	}
}