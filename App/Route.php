<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['MudaTexto'] = array(
			'route' => '/MudaTexto',
			'controller' => 'indexController',
			'action' => 'mudarTexto'
		);

		$this->setRoutes($routes);
	}

}

?>