<?php

require_once('bookController.php');
require_once('../lib/function.php');

$title = $_POST['title'];
$author = $_POST['author'];
$publication_date = $_POST['publication_date'];
$message = null;

/*
Validate registration form for a new book
*/
if(validateFormBook($title, $author, $publication_date)){
	$bookController = new bookController();
	$message = $bookController->insertBook($title, $author, $publication_date);
	
	return $message;
}else{
	$message = "Error validating the form";

	return $message;
}


?>