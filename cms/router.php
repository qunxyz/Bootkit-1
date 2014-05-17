<?php class Router {

	$Page = "";

	void __construct($_Page) {
		$this->Page = $_Page;
	}

	public function init() {
		switch ($this->Page) {
			case "":
				$view = new Layout("default", "home");
				$view->render();
				break;
			
			default:
				# code...
				break;
		}
	}

}

?>