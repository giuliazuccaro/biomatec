<?php
        error_reporting(E_ALL);
        ini_set( 'display_errors','1');

        session_start();

        $username=$_REQUEST["username"];
        $password=$_REQUEST["password"];

		$conn = new mysqli("localhost","root","root","eshop");

        echo $username."\n";
        echo $password."\n";

        //$_SESSION["user"]=$username;
        //header('Location: http://localhost/clashop/index.php');

        $query= "SELECT password FROM utenti where username='$username'";

        if (!($risultato = $conn->query($query)))
                die("Query sugli utenti fallita!");

          if ($riga = $risultato->fetch_array()) {
                      $pwd=$riga["password"];
                      echo $pwd."\n";
                      if ($pwd==$password) {
                        echo "OK\n";
                        //session_destroy();
                        //session_start();
                        $_SESSION["username"]=$username;
                        header('Location: index.php?user='.$username);
                        exit;
                      }

                }
                header('Location: login.php');
                exit;
  ?>
