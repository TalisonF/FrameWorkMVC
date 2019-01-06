<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {
		$modelodeTeste = Container::getModel("Modelo");
		$modelodeTeste->__set("teste", "Olá Mundo!");

		$this->view->teste = $modelodeTeste->__get("teste");

		$this->render('index');
	}
	
	public function mudarTexto() {
		$modelodeTeste = Container::getModel("Modelo");

		$_POST['texto'];

		$modelodeTeste->__set("teste", $_POST['texto']);

		$this->view->teste = $modelodeTeste->__get("teste");

		$this->render('index');
	}
}


?>