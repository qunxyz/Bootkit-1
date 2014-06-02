<?php

	require("cms/objects/workspace.php");

	$WorkspaceGUID = isset($_GET["workspace"]) ? $_GET["workspace"] : "";
	$workspace = new Workspace($WorkspaceGUID);

?>

<header id="embed-header">
	<h1><?php echo $workspace->Title; ?></h1>
</header>
<form id="embed-layer">
	<fieldset>

		<input class="title" name="title" type="text">
		<textarea rows="5" class="description" name="description"></textarea>
		<button id="submit">Idee einreichen</button>

	</fieldset>
</form>

