<?php

include "config.php";

//Ottengo i dati del form

$username = $_POST['username'];
$password = $_POST['password'];

//Controllo la loro presenza sul db

$sql = "SELECT * FROM utenti WHERE username = '$username' and password='$password'";
$risultati = mysqli_query($connessione, $sql);

$numero = $risultati->num_rows;


//Log in effettuato o fallito
$loggato="";
if($numero > 0){
    //echo "Login effettuato";
    $loggato="Y";
    $_SESSION["username"]=$username;
    $_SESSION["logged"]=$loggato;
    
    header('Location: index_accesso.php');
exit;

} else {
    //echo "Login non effettuato";
    $loggato="N";
    
    header('Location: login_form.php');
exit;
    exit;
    
    

}



?>
