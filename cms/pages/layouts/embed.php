<!DOCTYPE html>
<html lang="de">
<head>
	<title><?php echo Meta::$Title; ?></title>

	<link rel="stylesheet" type="text/css" href="assets/stylesheets/reset.min.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/vendor/bootstrap-3.1.1.min.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/app/embed.css">

	<?php Layout::theHead(); ?>
</head>
<body>
	<?php Layout::theContent($this->Content); ?>
</body>
</html>