<?php

require_once 'connect.php';



  $korErr =$nemErr =$fajtaErr =$meretErr =$mozgasigenyErr =$ivartalanErr =$gyerekbaratErr ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
  if (empty($_POST["kor"])) {
     
  echo  $korErr = "Kor mező üres!";
     
      
      
  } else {
   
   $nev = ($_POST["kor"]);
  
    if (!preg_match("/^[0-9]*$/",$nev)) {
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
 if ( $besznevErr == "" && $beszemailErr == "" && $vegzettsegErr =="") {
     
     $sql = "insert into gondozok (nev,munkakor,vegzettseg) values ('$nev','$munkakor','$vegzettseg')";
$conn->query($sql);
include 'index.php';
echo "Sikeres hozzáadás!"; 
 } else { include 'index.php'; echo  "Sikertelen hozzáadás! $besznevErr $beszemailErr $vegzettsegErr"; }

        ?>