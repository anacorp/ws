<?php
	
	header("content-type: text/xml");

	$user = 'root';
	$password = 1234;



	$dom = new DOMDocument("1.0", "UTF-8");

	$dom->preserveWhiteSpace = FALSE;
	$dom->formatOutput = TRUE;

	$elementRoot = $dom->createElement("dados");


 	if(!isset($_REQUEST["email"])){
 		$error = $dom->createElement("erro", "Parametro 'email' não informado");
 		$elementRoot->appendChild($error);


 		$dom->appendChild($elementRoot);
 		echo $dom->saveXML();
 		exit();

 	}



 	try{


 		$connection = new PDO("mysql:host=localhost;dbname=ws", $user, $password);
 		$connection->exec("set names utf8");


 	}catch(PDOException $e){
 		$error = $dom->createElement("erro" , "falha na conexão com o banco de dados");
 		$elementRoot->appendChild($error);

 		$dom->appendChild($elementRoot);
 		echo $dom->saveXML();
 		exit();



 	}

















?>