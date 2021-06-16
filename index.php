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
<<<<<<< HEAD

=======
<?php if(!IsUserLoggedIn()) : ?>
  <a href="rolunk.php">Rólunk</a>
<?php else : ?>
>>>>>>> a53403963afa141a40991a7690499792467853c1
  <a href="rolunk.php">Rólunk</a>
  <a href="orokbefogadhatoAllatokList.php">Örökbefogadható állataink</a>
  <a href="talaltallat.php">Talált állat bejelentése</a>
  <a href="listGondozok.php">Gondozóink</a>  
  <a href="tamogatas.php">Támogatás</a>
  <a href="orokbefogadott.php">Örökbefogadott kutyák</a>
  <a href="kapcsolat.php">Kapcsolat</a>
<<<<<<< HEAD
  <?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 1) : ?>
<?php else : ?>
  <a href="talaltAllatok.php">Talált állatok</a>
<?php endif; ?>
  <a href="logout.php">Kijelentkezés</a>

=======
  <a href="logout.php">Kijelentkezés</a>
<?php endif; ?>
>>>>>>> a53403963afa141a40991a7690499792467853c1
</div>

</body>
</html>
