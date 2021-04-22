<?php

require_once 'connect.php';


  $nev = ($_POST["nev"]);
$nevErr ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
  if (empty($_POST["nev"])) {
     
  echo  $nevErr = "Név mező üres!";
     
      
      
  } else {
   
   $nev = ($_POST["nev"]);
  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nev)) {
    echo  $nevErr = "A Név mezőben hibás karakterek vannak!";
          
    } 
      
  }
  
   
    
} if ( $nevErr == "") {  
 
     $sql = "delete from gondozok where nev='$nev';";
$conn->query($sql);
include 'index.php';
echo "Sikeres törlés!"; 
 } else { include 'index.php'; echo  "Sikertelen törlés! $nevErr"; }

        ?>