<?php


namespace webShop;


class Db {

	use TSingletone;

	protected function __construct() {
		$db = require_once CONFIG . '/config_db.php';
	}

}