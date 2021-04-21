<?php
require_once 'connect.php';

?>
<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/app.css" ?>
<style>
body {
   font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    background: #ffffcc;
    font-size: 20px;
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
  <a href="orokbefogadhatoAllatokList.php">Örökbefogadható állataink</a>
  <a href="talaltallat.php">Talált állat bejelentése</a>
  <a href="gondozok.php">Gondozóink</a>  
  <a href="tamogatas.php">Támogatás</a>
  <a href="orokbefogadott.php">Örökbefogadott kutyák</a>
  <a href="kapcsolat.php">Kapcsolat</a>
</div>

</body>
</html>
