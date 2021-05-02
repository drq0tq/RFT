<html><style>
    body  {
        color:chocolate;
        font-size:40px;
        text-align: center;
          
    }   
    </style>
</html>
<?php

require_once 'connect.php';
include 'index.php';

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
      $adressErr = "Az hely mezőben nem megfelelő karakter!";
       
    }
  }
}


    if ( $allapotErr == "" && $telErr == ""  && $adressErr==""){
   
        $query =  "INSERT INTO talalt_allatok (allapot,telefonszam,hely) VALUES ('$allapot',' $tel' , '$adress')";
      executeDML($query );

echo "<br>A bejelentés megtörtént. Köszönjük a segítséget! <br><br><img width='20%' src='happy.png'><br><br>";
        
  

     }else echo "<br>Sikertelen bejelentés! Kérem próbálja meg újra! <br><br> Hiba oka: $allapotErr $telErr $adressErr <br><br> <img src='sad.png' ><br><br>"; 


?>

  