<?php

class DbConnection
{
	private $db_host;
	private $db_name;
	private $db_user;
	private $user_password;
	public $dbc;


	public function __construct()
	{
		
		$this->db_host = "";
		$this->db_name = "";
		$this->db_user = "";
		$this->user_password = "";

		$this->connect();
	}

	public function __destruct()
	{
		$this->dbc = NULL;
	}

	private function connect()
	{
		if($this->dbc == NULL){
			try {

				$dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";
				$this->dbc = new PDO($dsn, $this->db_user, $this->user_password);
				$this->dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			}
			catch(PDOException $e)
			{
				echo "Connection failed<br>";
			   	echo "Error number: " . $e->getCode() . "<br>";
			   	echo "Error message: " . $e->getMessage() . "<br>";
			   	die();
			}

			return $this->dbc;
		}
	}

}

?>
