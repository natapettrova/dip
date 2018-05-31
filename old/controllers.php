<?php
function goodsAction(){
	include "../private/models/goods_model.php";
	echo "GOODS CONTROLLER";
	$title = "Goods";
	$view = "goods_view.php";
	$data = getAllGoods();// функция модели 
	generateResponse($view,[
			'title' => $title,
			'goods' => $data
	]);
}
function indexAction(){
	
	echo "INDEX CONTROLLER";
	$view = 'index_view.php';
	$title = 'Main';
	
	generateResponse($view,[
		'title'=> $title,
		
	
	]);
}
function generateResponse($view, $data=[]){
	//ответ сервера за запрос урла
	if (is_array($data)){
		extract($data);
	}
	//require_once "../private/view/template.php";
}
function publicAction(){
	echo "PUBLIC CONTROLLER";
	$view = 'public_view.php';
	$title = 'pub';
	generateResponse($view,[
		'title'=>$title	
	]);
}
