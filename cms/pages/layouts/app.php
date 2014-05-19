<!DOCTYPE html>
<html lang="de">
<head>
	<title><?php echo Meta::$Title; ?></title>

	<link rel="stylesheet" type="text/css" href="assets/stylesheets/reset.min.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/vendor/bootstrap-3.1.1.min.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/app/sidebar.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/buttons.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/app/new-idea.css">

	<?php Layout::theHead(); ?>
</head>
<body>
	<aside id="sidebar">
		<nav class="sidebar-container">
			<div class="sidebar-profile clearfix">
				<div class="profile-image"></div>
				<div class="profile-name">Lorem Ipsum</div>


			</div>
			<footer>
				<ul>
					<li><a href="/?page=logout">Logout</a></li>
				</ul>
			</footer
		</nav>
	</aside>
	<main></main>
	<?php Layout::theContent($this->Content); ?>
	<footer></footer>
	<script type="text/javascript" src="assets/javascripts/libraries/test.js"></script>
</body>
</html>