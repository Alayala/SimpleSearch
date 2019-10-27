<?php

function validateFormBook($title, $author, $publication_date)
{
	$date = explode('-', $publication_date);

	if(sizeof($date) != 3){
		return false;
	}

	if(count($title) > 0 && count($author) > 0 && checkdate($date[1], $date[2], $date[0])){
		return true;
	}else{
		return false;
	}


}

?>