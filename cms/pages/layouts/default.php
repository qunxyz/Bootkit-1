<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="<?php echo Meta::$Description; ?>">

	<title><?php echo Meta::$Title; ?></title>

	<script type="text/javascript" src="assets/javascripts/vendor/require-2.1.11.min.js"></script>
	<script type="text/javascript">
		require.config({
		    baseUrl: "assets/javascripts/",
		    paths: {
		        jquery:    "vendor/jquery-2.1.1.min",
		        bootstrap: "vendor/bootstrap-3.1.1.min"
		    },
			shim: {
				"bootstrap": {deps: ["jquery"]}
			}
		});
	</script>

	<link rel="stylesheet" type="text/css" href="assets/stylesheets/reset.min.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/vendor/bootstrap-3.1.1.min.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
</head>
<body>
	<header id="header">
		<div class="container">
			<h1><a href="/">PHP Bootstrap</a></h1>
			<nav>
				<ul>
					<li><a href="/?page=login">Login</a></li>
					<li>Kontakt</li>
					<li>Team</li>
					<li>Impressum</li>
				</ul>
			</nav>
		</div>
	</header>
	<?php Layout::theContent($this->Content); ?>
	<footer></footer>
	<script type="text/javascript" src="assets/javascripts/libraries/test.js"></script>
</body>
</html>