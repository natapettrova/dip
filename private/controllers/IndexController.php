<?php
namespace Petrova\Prod\Controllers;

use Petrova\Prod\App\Controller;

class IndexController extends Controller{
	
	public function IndexAction(){
		$view = 'index_view.php';
		$title = 'Main';
		
		$this->generateResponse($view,[
			'title'=> $title,
			
		
		]);
	}

}