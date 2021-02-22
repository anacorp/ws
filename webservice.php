<?php
 
 /* altera o header para xml */
 header("content-type: text/xml");

 /*requisita o valor numerico*/
 $numero = $_REQUEST["numero"];

 if($numero % 2 ==0){
 	$dados = "é par";
 }else {
 	$dados = "é impar";
 }

 $dom = new DOMDocument("1.0", "UTF-8");
 $dom->preserveWhiteSpace = FALSE;
 $dom->formatOutput = TRUE;

 $elementoDados = $dom->createElement("dados", $dados);
 $elementoRoot = $dom->createElement("resposta");
 $elementoRoot->appendChild($elementoDados);
 $dom->appendChild($elementoRoot);

 echo $dom->saveXML();


?>