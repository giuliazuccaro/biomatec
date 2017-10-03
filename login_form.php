<?php include "config.php" ?>

<!DOCTYPE HTML>  
<html lang="it">
<head>
</head>
    <meta charset="UTF-8">
	<title>Log in | BM</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
	<link rel="stylesheet" href="style.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1" />

<body data-spy="scroll" data-target="#navbar-example"> 
    
<div class="background" style="background-color: #eaefe1">

         <figure style="text-align:center;">
                   <a class="brand" href="index.php"><img src="img/logo_biomatec.png" alt="Bio Matec" width="100" height="100"></a>
               </figure>
			  



      <div class="text-center">
        <div class="row">
        </div>
        <div class="row">
          <div class="col-xs-12 colonna">
            <div class="jumbotron">
              <h2>Benvenuto su BIO MATEC</h2>
              <p>Accedi con le tue credenziali</p>
                <br>
                
                
                
         <form action="login.php" method="post" class="form-horizontal"> 
	    <div class="form-group">
		    <label for ="username" class="control-label"> Username </label>
			<div class="controls">
			 <input type="text" name="username" placeholder="Username">
			</div>
		</div>
		 
		 
		<div class="control-group">
		    <label for ="pwd" class="control-label"> Password </label>
			<div class="controls">
                    <input type="password" name="password" placeholder="Password">
                  </div>
		</div>
             <br>
		<div class="control-group">
		   <div class="controls">
                    <input type="submit" class="btn" value="LOG IN!">
                    
                  </div>
		</div>
		<div class="form-group">
		    <div class="col-sm-offset-4" id="messaggioErrore">
			</div>
		</div>
		
	
    </form>	         
                
                
                
             
                  
            </div>
          </div>
        </div>
		
    </div>
    
    <div><h3 class="text-center">Non sei registrato? <br> <br>Registrati <a href="registrazione_form.php">qui!</a></h3></div>
    <br>
    
    </div>
</body>
</html>
