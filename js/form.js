

function controllacampi(){
	if(($('#validationCustom01').val()=="Inserisci il tuo nome") ||
		($('#validationCustom01').val()=="") ||
      
      ($('#validationCustom02').val()=="Inserisci il tuo cognome") ||
		($('#validationCustom02').val()=="") ||
       
       ($('#validationCustom03').val()=="Inserisci la tua email") ||
		($('#validationCustom03').val()=="")
      
      
      )
        {
        
       
	 
			alert("Occorre compilare i campi!");
     
			return false;
			
		}else{
            alert("Ti sei iscritto alla Newsletter!");
            return true;
        }
    
  
    
	/*if((document.iscriviti.cognome.value=="Inserisci il tuo cognome") ||
		(document.iscriviti.cognome.value==""))
          {
	    
			alert("Occorre compilare i campi!");
       
			return false;
			
		}  
  
    
    if((document.iscriviti.email.value=="Inserisci la tua email") ||
		(document.iscriviti.email.value=="")) 
          {
	 
			alert("Occorre compilare i campi!");
       
			return false;
			
		}
   
     
    
    
    alert("Ti sei iscritto alla Newsletter!");
    else{return true;}*/
    
}
   
   


