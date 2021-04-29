<?php 
require_once 'connect.php';
include 'index.php';
?>

<!DOCTYPE html>
<html>
<head>
<style>
    
    #oldal{
        color:chocolate;
        font-size:40px;
        text-align: center;
          
    }
#vissza{
	background:#b32d00;
	color:#ffcc99;
	border: 2px solid #ffcc99;
	padding: 10px 20px;
	font-size: 30px;
	text-align:center;
	cursor:pointer;
	border-radius:10px;
	margin:0 10px 0 10px;
  margin-top: 20px;
  margin-bottom: 20px;
	
}
#vissza:hover{
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
</style>
</head>
    <body id="oldal">
    <input align="center" id="vissza" type="button" value="Vissza" onclick="location='talaltallat.php';">
          
    </body>
</html>
<?php

$allapotErr =$telErr=$adressErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
       $allapot = $_POST["allapot"];
  
  if ( $allapot == "valaszt" ) {
     
    $allapotErr = "Kérem válassza ki a kutya állapotát!";

  } 
    
    if (empty($_POST["tel"])) {
    $telErr = "Tel mező üres!";
        
       
  } else {
    $tel = $_POST["tel"];
  
    if (!preg_match("/^[0-9]*$/",$tel)) {
      $telErr = "Tel mezőben nem megfelelő karakter!";
       
    }else if (strlen($tel)!= 11) 
    { $telErr = "A telefonszámnak 11 hosszúnak kell lennie!";}
  }

    
    if (empty($_POST["adress"])) {
     
    $adressErr = "Hely mező üres!";
     
      
      
  } else {
    $adress = $_POST["adress"];
   if (!preg_match("/^[a-zA-ZáéíóöőüúűÁÉÍÖŐÜŰÚ]*$/",$adress)) {
      $adressErr = "Az állapot mezőben nem megfelelő karakter!";
       
    }
  }
}


    if ( $allapotErr == "" && $telErr == ""  && $adressErr==""){
    $sql = "INSERT INTO talalt_allatok (allapot,telefonszam,hely) VALUES ('$allapot','$tel','$adress')"; 
        if ($db->query($sql) === True) 
        {
  echo "<br>A bejelentés megtörtént. Köszönjük a segítséget! <br><br><img width='20%' src='happy.png'><br><br>";
        
         } else echo "<br>Hiba!";

     }else echo "<br>Sikertelen bejelentés! Kérem próbálja meg újra! <br><br> Hiba oka: $allapotErr $telErr $adressErr <br><br> <img src='sad.png' ><br><br>"; 

 $db->close();
?>

  