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

	static function theHead() { ?>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="description" content="<?php echo Meta::$Description; ?>">
	<?php }

}

?>