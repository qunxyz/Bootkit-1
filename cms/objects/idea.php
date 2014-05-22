<?php

class Idea {

	public $Id = "";
	public $Title = "";
	public $Description = "";
	public $Url = "";

	function __construct($Id = null) {
		if(isset($Id)) {

			$Query = mysql_query("SELECT id, title, description FROM ideas WHERE id = $Id") or die(mysql_error());
			$AffectedRows = mysql_num_rows($Query);
			if($AffectedRows == 1) {
				$Sql = mysql_fetch_array($Query);
				$this->Id 			= intval($Sql["id"]);
				$this->Title 		= $Sql["title"];
				$this->Description 	= $Sql["description"];
				$this->Url 			= "#/idea/" . $this->Id;
				mysql_free_result($Query);
			}
		}
	}

	function save() {
		mysql_query("INSERT INTO ideas(title, description, created_at) 
							VALUES('$this->Title', '$this->Description', NOW())") or die(mysql_error());
	}

}

?>