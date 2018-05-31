<?php
namespace Petrova\Prod\Controllers;

use Petrova\Prod\App\Controller;

class AuthorizeController extends Controller{
	/*

login
psw
authModel->check проверка на наличие в системе*/
	
	public function registrationAction(){
		$view = 'registration_view.php';
		$title = 'Регистрация';
		
		$this->generateResponse($view,[
			'title'=> $title,
			
		
		]);
	}

}