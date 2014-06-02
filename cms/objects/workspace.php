<?php

class Workspace {

	public $Title = "";

	function __construct($Id = null) {
		if(isset($Id)) {

			$Query = mysql_query("SELECT id, title FROM workspaces WHERE id = $Id") or die(mysql_error());
			$AffectedRows = mysql_num_rows($Query);
			if($AffectedRows == 1) {
				$Sql = mysql_fetch_array($Query);
				$this->Id 			= intval($Sql["id"]);
				$this->Title 		= $Sql["title"];
				mysql_free_result($Query);
			}
		}
	}


	function getIdeas() {

		$Sql = mysql_query("SELECT id, title, description FROM ideas ORDER BY created_at DESC") or die(mysql_error());

		while($Row = mysql_fetch_array($Sql))
			$RowArray[] = $Row;
		if(isset($RowArray)) {
			if(sizeof($RowArray) > 0) {
				foreach ($RowArray as $Idea) {
					$Ideas[] = new Idea($Idea["id"]);
				}
				return $Ideas;
			}
		}
		return null;
	}
}

?>