<?php
class User
{
	private $username;
	private $email;
	private $password;

	private $connection;

	public function __construct($data) {
		$this->username = (isset($data['username']) ? $data['username'] : "");
		$this->email = (isset($data['email']) ? $data['email'] : "");
	}

	public static function getDbConnection(){
        return Database::getInstance();
    }

	public function getByUsername($username) {
		$query = "SELECT * FROM users WHERE username = :username";
		$params = array(':username'=>$username);
		$statement = self::getDbConnection()->prepare($query);
		if ($statement->execute($params)) {
			return new User($statement->fetch(PDO::FETCH_ASSOC));
		}
		die($statement->errorInfo());
	}

	public function getUsername() {
		return $this->username;
	}

	public function getEmail() {
		return $this->email;
	}
}