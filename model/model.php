<?php
include 'book.php';

class model{

public function getBookDetails(){

	  return array(
                  "xyz"=>new book('xyz','subhajit','fake book'),
                  "abc"=> new book('abc','hiru','real book'),
                  "pqrs"=> new book('pqrs','puntu','fake book')
	           );
}

public function getBook($title){
	$allBook=$this->getBookDetails();
	return $allBook[$title];


}
}
?>