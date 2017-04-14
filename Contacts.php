<?php 

class Contact {


	public static $connection = null;

	public static function dbConnect() {
        if (!is_null(self::$connection)) {
            return;
        }
        self::$connection = require 'db_connection.php';
    }














}





?>