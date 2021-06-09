<?php
require_once 'connect.php';
require_once 'usernManager.php';

?>
<?php session_start(); ?>
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
	  <tr><td><input id="bejel" type="button" value="Bejelentkezés" onclick="location='login.php';"></td><td><input id="reg" type="button" value="Regisztráció"  onclick="location='register.php';"></td></tr>
	  </table>
<div id=Fejlec > </div>
	

<div class="navbar">
<?php if(!IsUserLoggedIn()) : ?>
  <a href="rolunk.php">Rólunk</a>
<?php else : ?>
  <a href="rolunk.php">Rólunk</a>
  <a href="orokbefogadhatoAllatokList.php">Örökbefogadható állataink</a>
  <a href="talaltallat.php">Talált állat bejelentése</a>
  <a href="listGondozok.php">Gondozóink</a>  
  <a href="tamogatas.php">Támogatás</a>
  <a href="orokbefogadott.php">Örökbefogadott kutyák</a>
  <a href="kapcsolat.php">Kapcsolat</a>
  <a href="logout.php">Kijelentkezés</a>
<?php endif; ?>
</div>

</body>
</html>
