<?php

require("../../config.php");
require("../../cms/objects/idea.php");
require("../../cms/objects/workspace.php");

if ($_SERVER['REQUEST_METHOD'] === "GET") {

	$workspace = new Workspace(1);
	echo json_encode(array(
		"Ideas" => $workspace->getIdeas(),
		"Workspace" => array("Title" => "asd")
	));
}

?>