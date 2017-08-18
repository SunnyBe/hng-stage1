<?php

class Database
{
	public static function getInstance() {
		try{
            $db = new PDO(DB_DSN, DB_USER, DB_PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $db;
    } catch(PDOException $e){
            $error = new Error_Controller();
            die($error->getMessage());
	}
}
}