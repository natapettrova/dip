<?php
namespace Petrova\Prod\Controllers;
use Petrova\Prod\App\Controller;
use Petrova\Prod\Models\GoodsModel;
// "../private/models/goodsmodel.php";
class GoodsController extends Controller{
	private $goodsModel;
	
	function __construct(){
		$this->goodsModel = new GoodsModel();
	}
	
	public function IndexAction(){
		
		
		$title = "Goods";
		$view = "goods_view.php";
		$data = $this->goodsModel->getAllGoods();
		//$data = getAllGoods();// функция модели 
		$this->generateResponse($view,[
				'title' => $title,
				'goods' => $data
		]);
	}

}