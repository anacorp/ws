<HTML>
	<HEAD>
		<TITLE>WEB SERVICE</TITLE>
	</HEAD>
	<BODY>
		<?php
			$numero = -1;


			$xml = simplexml_load_file("http://localhost/php/ws/webservice.php?numero=" .$numero);

			if(isset($xml->dados)){
				if($xml->dados == "é par"){
					echo "O numero é par";
				}else if($xml->dados == "é impar"){
				echo "O numero é impar";
				}else{
				echo "retorno invalido";
				}
			}else{
				echo "Error ao comunicar com o webservice ";
			}

		?>
	</BODY>



</HTML>