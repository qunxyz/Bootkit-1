<?php 

require("config.php");
require("cms/router.php");
require("cms/security.php");

$Page = isset($_GET["page"]) ? $_GET["page"] : "";
$router = new Router($Page);
$router->init();

?>
