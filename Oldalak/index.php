<?php
require_once 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
<style>

body {
   font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    background: #ffffcc;
    font-size: 20px;
}
 
.navbar {
  overflow: hidden;
  background-color: #ff9933; 
    font-size: 20px;
    }

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.navbar a:hover{
  background-color: #ffcc66;
}

    
    #Fejlec{
	height: 157px;
background-image: url(p.jpg);
	cursor:default;
	text-align:right;
    }
 #bejel,#reg{
	background:#ffffcc;
	color:#ff9933;
	border: 1px solid #ff9933;
	padding: 10px 20px;
	font-size: 24px;
	cursor:pointer;
	border-radius:10px;
	
	
	
}
#bejel:hover,
    #reg:hover {
	background:#ff9933;
	color:#fff;
	border: 1px solid #fff;
	padding: 10px 20px;
	font-size: 24px;
	cursor:pointer;
	border-radius:10px;
	
	
	
}
    body #bejelentkezes{

        margin-top: 10px;
}
body #bejelentkezes td{
	padding:5px;
}
</style>
</head>
<body >
    <table id="bejelentkezes" align="right" >
	  <tr><td><input id="bejel" type="button" value="Bejelentkezés" onclick="location='bejelentkezes.php';"></td><td><input id="reg" type="button" value="Regisztráció"  onclick="location='regisztracio.php';"></td></tr>
	  </table>
<div id=Fejlec > </div>
	
<div class="navbar">
  <a href="rolunk.php">Rólunk</a>
  <a href="allatok.php">Örökbefogadható állataink</a>
  <a href="talaltallat.php">Talált állat bejelentése</a>
  <a href="gondozok.php">Gondozóink</a>  
    <a href="tamogatas.php">Támogatás</a>
    <a href="orokbefogadott.php">Örökbefogadott kutyák</a>
  <a href="kapcsolat.php">Kapcsolat</a>
</div>

</body>
</html>
