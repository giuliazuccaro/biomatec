<?php

include "config.php";

$username = $_POST["username"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$password = $_POST["password"];

if($username == "" || $nome == "" || $email == "" || $password == "") {
    echo "Devi compilare tutti i campi!";
} else {
    
    
$query_registrazione = "INSERT INTO utenti (username, nome, email, password) VALUES ('$username','$nome', '$email', '$password')";


if($query_registrazione) {
    //echo("<br>Ti sei iscritto correttamente!");
    header('Location: index_accesso.php');
exit;
} else{
    //echo("<br>Iscrizione non eseguita");
    header('Location: registrazione_form.php');
exit;}
    exit;

}
 
?>









