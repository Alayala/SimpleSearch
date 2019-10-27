<?php

require_once ('../database/db_connection.php');

class BookController
{
	protected $connection;

	public function __construct()
	{

		$connection = new DbConnection();

	}

	public function fetchBook()
	{
		$rows = null;
		$sql = "SELECT * FROM books ORDER BY title DESC";
		$statement = $connection->prepare($sql);
		$statement->execute();
		$result = $statement->fetch();

		return $result;
	}

	public function insertBook($arg_title, $arg_author, $arg_publication_date)
	{


		//print_r($connection->getAttribute(PDO::ATTR_CONNECTION_STATUS));

		$sql = "INSERT INTO books (title, author, publication_date) VALUES (:title, :author, :publication_date)";
		$statement = $connection->prepare($sql);

		$statement->bindParam(':title', $arg_title);
		$statement->bindParam(':author', $arg_author);
		$statement->bindParam(':publication_date', $arg_publication_date);
		

		if(!$statement){
			return "Error creating register";
		}else{
			$statement->execute();
			return "Register created successfully";
		}
	}

}

?>