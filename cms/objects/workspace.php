<?php

class Workspace {

	function __construct() {

	}


	function getIdeas() {

		$Sql = mysql_query("SELECT id, title, description FROM ideas") or die(mysql_error());

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