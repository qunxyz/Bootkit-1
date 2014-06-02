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
		<meta name="robots" content="noindex, nofollow">
		<meta name="description" content="<?php echo Meta::$Description; ?>">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" type="text/css" href="assets/stylesheets/global.css">

		<script type="text/javascript" src="assets/javascripts/vendor/require-2.1.11.min.js"></script>
		<script type="text/javascript">
			require.config({
			    baseUrl: "assets/javascripts/",
			    paths: {
			    	underscore: "vendor/underscore-1.6.0.min",
			        jquery:     "vendor/jquery-2.1.1.min",
			        bootstrap:  "vendor/bootstrap-3.1.1.min",
			        backbone:   "vendor/backbone-1.1.2.min",
			        moment: 	"vendor/moment-2.5.0.min"
			    },
				shim: {
					"bootstrap":  { deps: ["jquery"] },
					//"underscore": { deps: ["jquery", "backbone"],   exports: "_" },
					"backbone":   { deps: ["underscore", "jquery"],	exports: "Backbone" }
				}
			});
		</script>
	<?php }

}

?>