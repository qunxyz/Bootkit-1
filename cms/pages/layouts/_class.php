<?php class Layout {

	private $Layout, $Content = "";

	function __construct($_Layout, $_Content) {
		$this->Layout = $_Layout;
		$this->Content = $_Content;
	}

	function render() {
		$_Layout = $_SERVER['DOCUMENT_ROOT'] . "/cms/pages/layouts/" . $this->Layout . ".php";
		
		if(file_exists($_Layout)) {
			require($_Layout);
		} else {
			echo "Layout doesnt exist!";
		}
	}

	static function theContent($_Content) {
		$_Content = $_SERVER['DOCUMENT_ROOT'] . "/cms/pages/content/" . $_Content . ".php";
		if(file_exists($_Content)) {
			require($_Content);
		} else {
			echo "Content doesnt exist!";
		}
	}

}

?>