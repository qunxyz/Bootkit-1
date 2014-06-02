<?php

class User {

	public $Id = "";
	public $FirstName = "";
	public $Name = "";

	function __construct($Id = null) {
		if(isset($Id)) {
			
			$sql = mysql_query("SELECT id, first_name, name
	                            FROM users
	                            WHERE id = $Uid") or die(mysql_error());
			
			$sql = mysql_fetch_array($sql);
			$this->Id 		 = intval($sql["id"]);
			$this->FirstName = $sql["first_name"];
			$this->Name 	 = $sql["name"];
		}
	}
}

class Me extends User {
	function __construct() {
		parent::__construct($_SESSION["Uid"]);
	}
}