<?php

require("../../config.php");
require("../../cms/objects/idea.php");
require("../../cms/objects/workspace.php");

if ($_SERVER['REQUEST_METHOD'] === "GET") {
	$idea = new Idea($_GET["id"]);
	echo json_encode(array(
		"Title" => $idea->Title,
		"Description" => $idea->Description
	));

} else if ($_SERVER['REQUEST_METHOD'] === "POST") {
	$data = json_decode(file_get_contents("php://input"));
	$idea = new Idea();
	$idea->Title       = $data->{ "Title" };
	$idea->Description = $data->{ "Description" };
	$idea->save();
}

?>