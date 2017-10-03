<?php include "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home | BM</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
	<link rel="stylesheet" href="style.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1" />

     <script src="js/lazyload.js"></script>
       <script>
			$(document).ready( function(){
					$("img.lazy").lazyload({
						 effect : "fadeIn",
						 effect_speed:1500
					});
				});
		</script>
    <script type="text/javascript" src="js/form.js"></script> 
    
  
    
    
</head>
    
    
    
<body data-spy="scroll" data-target="#navbar-example">


  
   
  
 
    
    
<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #eaefe1">
    
    
    
    
   <div class="container">
       <br>
     
       <div class="col-md-12">
        <p style="text-align: right;">Non sei <?php echo $_SESSION["username"]; ?>?<a href="logout.php"> Cambia account</a></p>
      </div>
   
      <div class="col-md-12">     
    <form class="navbar-form navbar-right"
          role="search" action="ricerca.php" method="post">
        <div class="input-group">
          <input name="ricerca" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
        <input class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      </span>
        </div>
      </form> 
        </div>
    </div>
    
    
    
    
  <div class="container">
      

		<!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-example" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="IMG/logo_biomatec.png" width="100"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      
      
      
      
    <div class="collapse navbar-collapse" id="navbar-example">

      <ul class="nav navbar-nav navbar-right">
	  <li><a href="capelli.php">Capelli</a></li>
      <li><a href="corpo.php">Corpo</a></li>
       <li><a href="viso.php">Viso</a></li>
	   <li><a href="speciale_ottobre.php">Speciale Ottobre</a></li>
            <li><a href="concorso.php">Concorso</a></li>
          <li><a href="about_us.php">About Us</a></li>
        
     
	 </ul>
         </div>
   

  <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  

<h4 id="citazione" style="font-style: oblique; padding-top:17%; padding-bottom:3%; text-align:center;">La cosmetica è la scienza del cosmo della donna.</h4>
    <br>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
   
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/labbra.jpg" alt="labbra">
      <div class="carousel-caption">
        <h2 style="color: #ffffff;">Labbra secche? 
          <br>Problema risolto con il nuovo balsamo labbra Bio Matec!<br></h2>
          
   
          
      </div>
    </div>
    <div class="item">
      <img src="img/flowergirl.jpg" alt="flowergirl">
      <div class="carousel-caption">
        <h2 style="color: #ffffff">Dona più lucentezza ai tuoi capelli con la nuova maschera Bio Matec! </h2>
      </div>
    </div>
	<div class="item">
      <img src="img/cremaviso_slider.jpg" alt="crema">
      <div class="carousel-caption">
   <h2 style="color: #ffffff">Scopri la nuova crema viso Bio Matec!<br>Idrata ma non unge.</h2>
  </div>
  </div>

      
  
      
      
      
      
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
    
 
  <br>
    <br>
  
    
    <div class="speciale_ottobre">
   
    
    <div class="text-center"><h2 class="text-black sanelma fontx8 no-margin">SPECIALE OTTOBRE</h2><hr class="titolo-offerte-hr"><h4 class="text-blunero"></h4></div>

<div class="product-listing woocommerce clearfix columns-4">
   <ul class="flex-container">
		  <li class="flex-item"><a href="acqua_micellare.html"><img class="lazy" data-original="img/acqua_micellare.jpg" width="200px" height="200px" alt="Acqua micellare">
		  <h4>Acqua micellare</h4>
		  <p>€16.00</p>
		  </a>
		  </li>
		  <li class="flex-item"><a href="olio_argan.html"><img class="lazy" data-original="img/olio_argan.jpg" width="200px" height="200px" alt="Olio argan">
		  <h4>Olio di argan</h4>
		  <p>€20.00</p>
              </a>
		  </li>
		  <li class="flex-item"><a href="balsamo_fortificante.html"><img class="lazy" data-original="img/balsamo_fortificante.jpg" width="200px" height="200px" alt="Balsamo fortificante">
              <h4>Balsamo fortificante</h4>
		  <p>€17.00</p>
		  </a>
		  </li>
		  <li class="flex-item"><a href="crema_viso_notte.html"><img class="lazy" data-original="img/cremaviso_notte.jpg" width="200px" height="200px" alt="Crema viso notte">
		  <h4>Crema viso notte</h4>
		  <p>€40.00</p>
		  </a></li>
		</ul>
	</div>
    </div>
    
   
   <div class="home-newsletter"> 
       <h2 style="font-size: 22px; color: white; text-transform: uppercase; text-align:center;">Iscriviti alla newsletter Bio Matec</h2>
       <br><br><br>
    
  <form class="container" id="needs-validation" onsubmit="controllacampi()" action="#" novalidate>
  <div class="row">
    <div class="col-md-6 col-xs-12">
      <label for="validationCustom01" style="font-size: 16px;
color: white;
text-transform: uppercase;">Nome</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Inserisci il tuo nome" required>
         
    </div>
    <div class="col-md-6 col-xs-12">
      <label for="validationCustom02" style="font-size: 16px;
color: white;
text-transform: uppercase;">Cognome</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Inserisci il tuo cognome" required>
        
    </div>
  </div>
      <br>
  <div class="row">
    <div class="col-md-6">
      <label for="validationCustom03" style="font-size: 16px;
color: white;
text-transform: uppercase;">Email</label>
      <input type="email" class="form-control" id="validationCustom03" placeholder="Inserisci la tua email" required>
         
     
    </div>
   
  </div>
      <br>
  <button class="btn btn-primary" type="submit">Iscriviti</button>
</form>

</div>
    
      

<footer>
       
 
    <div class="footer" id="footer">
         <figure style="text-align:center; padding-top:2%;">
                   <img src="IMG/logo_biomatec.png" alt="Bio Matec" width="80" height="80" >
               </figure>
        <div class="container">
           
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                     <h3> Mappa del Sito </h3>
                    <ul>
                        <li> <a href="index.php"> Home</a> </li>
                        <li> <a href="capelli.php"> Capelli </a> </li>
                        <li> <a href="corpo.php"> Corpo </a> </li>
                        <li> <a href="viso.php"> Viso </a> </li>
                         <li> <a href="speciale_ottobre.php"> Speciale Ottobre </a> </li>
                        <li> <a href="concorso.php"> Concorso </a> </li>
                         <li> <a href="about_us.php"> About Us </a> </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <h3>Shop</h3>
            <ul class="list">
            <li><a href="punti_vendita.php">Punti vendita</a></li>
            <li>Eshop coming soon...</li>
           
           
            
            </ul>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
            <h3>Servizio Clienti</h3>
            <ul class="list">
            <li><a href="#">Metodi di Pagamento</a></li>
            <li><a href="#">Spedizioni e Reso</a></li>
             <li><a href="#" data-toggle="modal" data-target="#exampleModalLong">Privacy Policy</a></li>
             <li><a href="#">Contattaci</a></li>
           
                
          <div class="modal fade" id="exampleModalLong" tabindex="1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Privacy Policy - BIO MATEC</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Dichiarazione sul trattamento dati personali e consenso all’uso dei dati presso www.biomatec.com.
          <br>

La tutela dei dati personali è una questione di fiducia e la vostra fiducia per noi conta. Affinché vi sentiate a vostro agio sulle nostre pagine web, nell’elaborazione dei vostri dati personali ci atteniamo rigorosamente alle prescrizioni di legge. In questa sede vi vogliamo informare riguardo il rilevamento dati e l’uso dei dati da parte nostra. La seguente dichiarazione sul trattamento dei dati personali vi spiega quali dati vengono rilevati dalle mostre pagine web e quali dati elaboriamo e utilizziamo in che modo. Inoltre indichiamo a chi potete rivolgere le vostre domande in merito.
<br>
1. Sede responsabile e diritti dell’interessato<br>
La sede responsabile del rilevamento, elaborazione e utilizzo dei vostri dati personali ai sensi della legge federale sulla tutela dei dati è BIO MATEC. Quale sede responsabile BIO MATEC è reperibile per voi tramite i seguenti dati di contatto:
<br>
- Recapito postale: BIO MATEC, Tamara-Danz-Str. 1, 10243 Berlin
- Telefax: +49 (0)30 2759 46 93
- Email: servizioclienti@biomatec.it
<br>
Potete ottenere informazioni sui vostri dati memorizzati presso di noi in qualsiasi momento e gratuitamente, come anche esercitare il vostro diritto di correzione, bloccaggio o cancellazione dei vostri dati. A tale scopo vi preghiamo di rivolgervi ai dati di contatto indicati sopra.
<br>
2.1 Conto cliente <br>
 Per ogni cliente che procede alla sua registrazione tramite la funzione “Registrarsi ora”, creiamo un conto cliente, vale adire un accesso diretto protetto da password sui suoi dati anagrafici presso di noi memorizzati. Qui potete vedere, tra l’altro, i dati dei vostri ordini evasi, in corso e spediti recentemente, come anche amministrare i vostri dati personali e la newsletter.
          <br>
3. Trasmissione sicura dei dati<br>
Da noi i vostri dati personali vengono trasmessi in modo sicuro tramite crittografazione. Naturalmente ciò vale anche per la vostra ordinazione e il login cliente. Impieghiamo il sistema di codifica TLS (Transport Layer Security) ovvero SSL (Secure Socket Layer).

Inoltre proteggiamo le nostre pagine WEB e altri sistemi per mezzo di misure di ordine tecnico conto la perdita, distruzione, accesso, manomissione o diffusione dei vostri dati da parte di persone non autorizzate.  
<br>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ho capito!</button>
        
    </div>
  </div>
</div>             
                
                </div>              
                
                
<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus() 
  
})      
                
</script>              
                       
                
                
                
                
                
                
            
            </ul>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                  
                    <h3> Seguici su...</h3>
                   
                    <ul class="social">
                        <li> <a href="#"> <i class="fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                       
                      
                    </ul>
                </div>
            
            <!--/.row--> 
        </div>
        <!--/.container--> 
  
        
        </div>
    <!--/.footer-->
  <p id="back-top" style="display:block; margin:1.8em; text-align: right;">
        <a href="#top" title="Torna sù" alt=""><i class="fa fa-chevron-up fa-2x"></i></a></p>
        
        
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Design by Ilaria Del Boca e Giulia Zuccaro - 2017</p>
            
        </div>
    </div>
        
        
    <!--/.footer-bottom--> 
        
        
        
        
     
        </div>
</footer>
    
    





</body>
</html>
  
    
    
    
 
    