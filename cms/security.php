<?php

class Security {
	static function generateCSRFToken() {
		return sha1(date("d.m.Y") . rand());
	}
}

?>