<?php

if ($_SERVER['REQUEST_METHOD'] === "GET") {
		
	$Ideas = array(
		array("Title" => "Lorem ipsum", "Description" => "Lorem ipsum"),
		array("Title" => "Lorem ipsum", "Description" => "Lorem ipsum"),
		array("Title" => "Lorem ipsum", "Description" => "Lorem ipsum"),
		array("Title" => "Lorem ipsum", "Description" => "Lorem ipsum"),
		array("Title" => "Lorem ipsum", "Description" => "Lorem ipsum")
	);
	echo json_encode(
		array("Ideas" => $Ideas,
			  "Workspace" => array("Title" => "Workspace")
	    )
	);
}

?>