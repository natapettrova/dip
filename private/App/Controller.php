<?php
namespace Petrova\Prod\App;
class Controller{
	protected function generateResponse($view, $data=[]){
		//ответ сервера за запрос урла
		if (is_array($data)){
			extract($data);
		}
		require_once "../private/view/template.php";
	}
}
