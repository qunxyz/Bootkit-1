<?php

class Idea {

	public $Id = "";
	public $Title = "";
	public $Description = "";

	function __construct($Id) {
		$Query = mysql_query("SELECT id, title, description FROM ideas WHERE id=$Id") or die(mysql_error());
				
		$AffectedRows = mysql_num_rows($Query);
		if($AffectedRows == 1) {
			$Sql = mysql_fetch_array($Query);
		
			$this->Id 			= intval($Sql["id"]);
			$this->Title 		= $Sql["title"];
			$this->Description 	= $Sql["description"];

			mysql_free_result($Query);
		}
	}

}

?>