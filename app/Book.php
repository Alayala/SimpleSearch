<?php

class Book 
{
	private $code_book;
	private $title;
	private $author;
	private $publication_date;

	public function __construct($title, $author, $publication_date)
	{
		$this->title = $title;
		$this->author = $author;
		$this->publication_date = $publication_date;
	}

	/* Method Get And Set*/

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function setAuthor($author)
	{
		$this->author = $author;
	}

	public function setPublicationDate($publication_date)
	{
		$this->publication_date = $publication_date;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function getPublicationDate()
	{
		return $this->publication_date;
	}

	public function getBookData(){
		$bookData = array(
			"title" 			=> $this->title,
			"author"			=> $this->author,
			"publication_date"	=> $this->publication_date
		);

		return $bookData;
	}

}


?>