<!DOCTYPE html>
<html lang="de">
<head>

	<?php Layout::theHead(); ?>
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
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/app/sidebar.css">
</head>
<body>
	<aside id="sidebar">
		<nav class="sidebar-container">
			<div class="sidebar-profile">
				<div class="profile-image"></div>


			</div>
			<footer>
				<ul>
					<li><a href="/?page=logout">Logout</a></li>
				</ul>
			</footer
		</nav>
	</aside>
	<header id="topbar">
		<ul><li><a href="">Neu</a></li></ul>
	</header>
	<main></main>
	<?php Layout::theContent($this->Content); ?>
	<footer></footer>
	<script type="text/javascript" src="assets/javascripts/libraries/test.js"></script>
</body>
</html>