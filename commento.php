<?php



$commento = $_POST["commento"];
$nome = $_POST["nome"];
$file = fopen("commento_form.php", "a+");
fwrite($file, "Commento di ".$nome.": <br>".$commento."<br>"."<hr><br>");
fclose($file);
Echo "Commento pubblicato con successo";

?>