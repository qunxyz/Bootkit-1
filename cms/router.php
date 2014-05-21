<?php 

session_start();

require("pages/layouts/_class.php");

class Router {

	private $Page = "";

	function __construct($_Page) {
		$this->Page = $_Page;
	}

	public function init() {
		switch ($this->Page) {
			case "":
				if(isset($_SESSION["Uid"])) {
					$view = new Layout("app", "app");
					$view->render();
					break;
				} else {
					$view = new Layout("default", "home");
					$view->render();
					break;
				}

			case "app":
				$view = new Layout("app", "app");
				$view->render();
				break;

			case "login":
				$view = new Layout("default", "login");
				$view->render();
				break;

			case "embed":
				$view = new Layout("embed", "embed");
				$view->render();
				break;

			case "logout":
				session_destroy();
				header("location: /"); 
				break;
			
			default:
				$view = new Layout("default", "404");
				$view->render();
				break;
		}
	}

}

?>