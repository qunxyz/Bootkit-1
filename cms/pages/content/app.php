<?php if(!isset($_COOKIE["X-CSRF-Token"])) 
		setcookie("X-CSRF-Token", Security::generateCSRFToken()); 
?>

<div id="templates">


<script type="text/template" id="new-idea-template"><?php require("/app/templates/new-idea.js"); ?></script>
<script type="text/template" id="workspace-template"><?php require("/app/templates/workspace.js"); ?></script>


</div>

<div id="template-wrapper"></div>