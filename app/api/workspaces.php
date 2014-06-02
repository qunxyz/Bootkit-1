<?php

require("../../config.php");
require("../../cms/objects/idea.php");
require("../../cms/objects/workspace.php");

if ($_SERVER['REQUEST_METHOD'] === "GET") {

	echo json_encode(array(
		array("Title" => "Test"),
		array("Title" => "Test"),
		array("Title" => "Test"),
		array("Title" => "Test")
	));
}

?>