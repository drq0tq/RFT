<?php

require_once 'connect.php';



$nevErr =$munkakorErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
  if (empty($_POST["nev"])) {
     
  echo  $nevErr = "Név mező üres!";
     
      
      
  } else {
   
   $nev = ($_POST["nev"]);
  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nev)) {
    echo  $nevErr = "A Név mezőben hibás karakterek vannak!";
          
    } 
      
  }
  
   
  if (empty($_POST["munkakor"])) {
   echo $munkakorErr = "Munkakör mező üres!";
     
  } else {
 $munkakor = ($_POST["munkakor"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$munkakor)) {
     echo $munkakorErr = "A munkakör mezőben hibás karakterek vannak";
        
    } 
  }

  if ("válasszon"=($_POST["vegzettseg"])) {
      echo $vegzettsegErr = "Nem választott végzettséget!";
  }
    
    
    
    
}
 if ( $besznevErr == "" && $beszemailErr == "") {
     
     $sql = "insert into gondozok (nev,munkakor,vegzettseg) values ('$nev','$munkakor','$vegzettseg')";
$conn->query($sql);
include 'index.php';
echo "Sikeres hozzáadás!"; 
 } else { include 'index.php'; echo  "Sikertelen hozzáadás! $besznevErr $beszemailErr $vegzettsegErr"; }

        ?>