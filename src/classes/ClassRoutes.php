<?php 
namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes {

	use TraitUrlParser;

	private $rota;

	public function getRota(){
		$url = $this->parserUrl();
		$recurso = $url[0];

		$this->rota = Array(
			"" => "ControllerHome",
			"home" => "ControllerHome",
			"contato" => "ControllerContato"
		);

		if (!array_key_exists($recurso, $this->rota))
			return "Controller404";

		if (!file_exists(DIRREQ."app/controller/{$this->rota[$recurso]}.php"))
			return "ControllerHome";

		return $this->rota[$recurso];
	}

}