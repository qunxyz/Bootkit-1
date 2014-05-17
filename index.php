<?php 

require("cms/router.php");

$Title = "PHP Bootstrap";
$Description = "Starter kit for PHP";

$Page = isset($_GET["page"]) ? $_GET["page"] : "";
$router = new Router($Page);
$router->init();

?>
