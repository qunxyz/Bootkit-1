<?php

class Idea {

	public $Id = "";
	public $Title = "";
	public $Description = "";
	public $Created = "";
	public $Url = "";

	public $Author = "";

	function __construct($Id = null) {
		if(isset($Id)) {

			$Query = mysql_query("SELECT ideas.id, ideas.title, ideas.description, ideas.author AS UserId, ideas.created_at,
										 users.first_name AS UserFirstName,
										 users.name AS UserName FROM ideas, users WHERE users.id=ideas.author AND ideas.id = $Id") or die(mysql_error());
			$AffectedRows = mysql_num_rows($Query);
			if($AffectedRows == 1) {
				$Sql = mysql_fetch_array($Query);
				$this->Id 			= intval($Sql["id"]);
				$this->Title 		= $Sql["title"];
				$this->Description 	= $Sql["description"];
				$this->Created 	    = $Sql["created_at"];
				$this->Url 			= "#/idea/" . $this->Id;
				$this->Author       = array(
										"Id"        => $Sql["UserId"], 
										"FirstName" => $Sql["UserFirstName"], 
										"Name"      => $Sql["UserName"]);
				mysql_free_result($Query);
			}
		}
	}

	function save() {

		$Uid = $_SESSION["Uid"];

		mysql_query("INSERT INTO ideas(author, title, description, created_at) 
							VALUES($Uid, '$this->Title', '$this->Description', NOW())") or die(mysql_error());

		return mysql_insert_id();
	}

}

?>