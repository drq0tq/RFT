<?php
include 'index.php';
?>
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
		    	<legend aliagn="center">Örökbefogadható állat hozzáadása</legend>
		      		<ol>  <img src="kobor.jpg"  width="60%" align="center" >
                		<li>
			    			<label for="kor">Állat kora:<em>*</em></label>
							<br>
			    			<input name="kor" id="kor" type="text"  placeholder=""/>
			  			</li>
              
              			<li>
			    			<label for="nem">Nem:<em>*</em></label>
							<br>
			    			<input name="nem" id="nem" type="text"  placeholder="Szuka / Kan"/>
			  			</li>
                        <li>
			    			<label for="fajta">Fajta:<em>*</em></label>
							<br>
			    			<input name="fajta" id="fajta" type="text"  placeholder=""/>
			  			</li>
                        <li>
			    			<label for="meret">Méret:<em>*</em></label>
							<br>
			    			<input name="meret" id="meret" type="text"  placeholder=""/>
			  			</li>
                        <li>
			    			<label for="mozgas">Mozgásigény:<em>*</em></label>
							<br>
			    			<input name="mozgas" id="mozgas" type="text"  placeholder="Pl.: Kevés, sok"/>
			  			</li>
                        <li>
			    			<label for="ivar">Ivartalanított:<em>*</em></label>
							<br>
			    			<input name="ivar" id="ivar" type="text"  placeholder="Igen / Nem"/>
			  			</li>
                        <li>
			    			<label for="gyerekb">Gyerekbarát:<em>*</em></label>
							<br>
			    			<input name="gyerekb" id="gyerek" type="text"  placeholder=""/>
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