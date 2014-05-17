<?php 

require("config.php");
require("cms/router.php");

$Page = isset($_GET["page"]) ? $_GET["page"] : "";
$router = new Router($Page);
$router->init();

?>
