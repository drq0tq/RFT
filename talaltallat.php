<?php 
include 'index.php';
$errors = [];
?>

<!DOCTYPE html>
<html>
<head>
<style>*{
	font-family: caption,arial;
	font-size: 20px;	
}
form#mezo{
    width: 32%;
    padding: 20px 50px 20px 20px;
    margin-bottom: auto;
    margin-left: auto;
    margin-right: auto;
}
form#mezo fieldset {
    margin-bottom: 15px;
	margin-left: 15px;
	margin-right: 10px;
	border: 2px solid #990000;
	background-color:#ffdd99;
	border-radius:10px;
    text-align: center;
    color:#e65c00; 
}
form#mezo fieldset legend{
	padding: auto;
	width: 350px;
	background:#b32d00;
	color:#ffcc99;
	border: 3px solid #990000;
	font-size: 35px;
	border-radius:10px;
}
form#mezo fieldset ol{
	list-style:none;
	padding: 12px;
}
form#mezo fieldset ol li{
	padding: 12px 0;
	clear: both;
}
form#mezo fieldset label{
	float: left;
    font-weight: bold;
}
form#mezo input[type="text"],select{
    width: 270px;
	border: 2px solid #990000;
	padding: 2px;
	font-family: courier;
	color:black;
	margin: 5px auto;
}
form#mezo input[type="reset"],
form#mezo input[type="submit"]{
	background:#b32d00;
	color:#ffcc99;
	border: 2px solid #ffcc99;
	padding: 10px 20px;
	font-size: 30px;
	text-align:center;
	cursor:pointer;
	border-radius:10px;
	margin:0px 10px 0px 10px;
}
form#mezo input[type="reset"]:hover,
form#mezo input[type="submit"]:hover{
	background:#ff9966;
	color:#660000;
	border: 2px solid #660000;
	padding: 10px 20px;
	font-size: 32px;
	text-align:center;
	cursor:pointer;
	border-radius:10px;
	margin:0 10px 0 10px;
}
#kepfeltöltmeret {
    font-size: 17px;
}
#kepfeltöltcim{
    margin-top: 20px;
}
</style>
</head>
  <body>
  
    <div id=urlap >
	    <form  align="center" id="mezo" action="<?php echo DOMAIN . 'bekuld.php' ?>" method="POST" enctype="multipart/form-data">
		  	<fieldset aliagn="center">
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

			<table>
        		<div id="kepfeltöltes">
        			<h1 id=kepfeltöltcim>Képfeltöltés</h1>
					<h5 id=kepfeltöltmeret>A kép mérete legfeljebb 5MB lehet.</h5>
            		<tr>
                    <div>
                        <input style="padding:5px;" type="file" name="kép">
                	</div>
            		</tr>
				</div>
    		</table>
			
	   		</fieldset>
	   		<input type="reset" value ="Mégse" >
	   		<input type="submit" value="Beküld" >
		  
	  	</form>
    </div>
	
</body>
</html> 
