<?php 

require("pages/layouts/_class.php");

class Router {

	private $Page = "";

	function __construct($_Page) {
		$this->Page = $_Page;
	}

	public function init() {
		switch ($this->Page) {
			case "":
				$view = new Layout("default", "home");
				$view->render();
				break;

			case "login":
				$view = new Layout("default", "login");
				$view->render();
				break;
			
			default:
				$view = new Layout("default", "404");
				$view->render();
				break;
		}
	}

}

?>