<?php $router = new Router($_GET["page"] || "");
	  $router->init();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Bootkit</title>

	<script type="text/javascript" src="assets/javascripts/vendor/require-2.1.11.min.js"></script>
	<script type="text/javascript">
		require.config({
		    baseUrl: "assets/javascripts/",
		    paths: {
		        jquery:    "vendor/jquery-2.1.1.min",
		        bootstrap: "vendor/bootstrap-3.1.1.min"
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
			<h1>PHP Bootstrap</h1>
			<nav>
				<ul>
					<li>Kontakt</li>
					<li>Team</li>
					<li>Impressum</li>
				</ul>
			</nav>
		</div>
	</header>
	<main id="main-wrapper">
		<div class="container">
			<h1>PHP Bootstrap</h1>
		</div>
	</main>
	<footer></footer>
	<script type="text/javascript" src="assets/javascripts/libraries/test.js"></script>
</body>
</html>