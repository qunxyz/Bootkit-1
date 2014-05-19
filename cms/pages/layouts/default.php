<!DOCTYPE html>
<html lang="de">
<head>
	<title><?php echo Meta::$Title; ?></title>

	<link rel="stylesheet" type="text/css" href="assets/stylesheets/reset.min.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/vendor/bootstrap-3.1.1.min.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">

	<?php Layout::theHead(); ?>
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