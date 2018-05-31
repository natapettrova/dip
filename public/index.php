<?php
require_once __DIR__.'/../vendor/autoload.php';


/*// '/'index page
// '/goods' goods page
include "../private/controllers/controllers.php";
//include "../private/models/goods_model.php"; // можно дальше подключить, непосредственно для каждого кнтроллера
function runController(){
	
	$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	var_dump($uri);
	$action = trim($uri,'/')?:'index';//
	$action = $action.'Action';// еще строка
	var_dump($action);
	$action();//goodsAction() - вызов функции конкретного контроллера
}
runController();*/
/*include "../private/App/Router.php";
include "../private/App/controller.php";
include "../private/controllers/IndexController.php";
include "../private/controllers/GoodsController.php";*/
use Petrova\Prod\App\Router;
Router::run("Petrova\Prod\Controllers\\");
//зайти в папку проекта
//composer init
//composer dump-autoload
