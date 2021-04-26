<?php 
include 'index.php';
?>

<!DOCTYPE html>
<html>
 <head>

  </head>
  <body>
  
    <div id=urlap >
	    <form  align="center" id="mezo" action="bekuld.php" method="post" onSubmit="">
		  <fieldset aliagn="center ">
		    <legend aliagn="center">Talált állat bejelentése</legend>
		      <ol>  <img src="kobor.jpg"  width="60%" align="center" >
		      <li>
			    <label for="allapot">Kutya állapota:<em>*</em></label>
				<br>
			    <select id="allapot" name="allapot">
                    <option id="ez" name="ez" value="valaszt">Kérem válasszon...</option>
  <option value="Sérült">Sérült</option>
  <option value="Egészséges">Egészséges</option>
  <option value="Sovány">Sovány</option>
  </select>
			  </li>
                  <li>
			    <label for="tel">Bejelentő Tel.száma:<em>*</em></label>
				<br>
			    <input name="tel" id="tel" type="text"  placeholder="06304676566"/>
			  </li>
              
              <li>
			    <label for="name">Megtalálás helye:<em>*</em></label>
				<br>
			    <input name="adress" id="adress" type="text"  placeholder="Eger"/>
			  </li>
	      
		</ol>
      

	    
	   </fieldset>
	   <input type='reset' value ='Mégse' >
	   <input type="submit" value="Beküld" >
		
		  
	  </form>
    </div>
	
  </body>
</html> 
