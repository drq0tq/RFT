<?php
//error_reporting(0);
//$db = new mysqli('127.0.0.1','root','','menhelydb');
require_once 'connect.php';
$connection = getConnection();
//if($db->connect_errno){
//echo $db->connect_error;
//die();



  $korErr =$nemErr =$fajtaErr =$meretErr =$mozgasigenyErr =$ivartalanErr =$gyerekbaratErr ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
  if (empty($_POST["kor"])) {
     
  echo  $korErr = "Kor mező üres!";
     
      
      
  } else {
   
   $kor = ($_POST["kor"]);
  
    if (!preg_match("/^[0-9]*$/",$kor)) {
    echo  $korErr = "A Kor mezőben hibás karakterek vannak!";
          
    } 
      
  }
  
   
  if (empty($_POST["nem"])) {
   echo $nemErr = "Nem mező üres!";
     
  } else {
 $nem = ($_POST["nem"]);
    if (!preg_match("/^[0-1]*$/",$nem)) {
     echo $nemErr = "A Nem mező csak 0, vagy 1 lehet";
        
    } 
  }
    if (empty($_POST["ivartalan"])) {
   echo $ivartalanErr = "Ivartalanított mező üres!";
     
  } else {
 $ivartalan = ($_POST["ivartalan"]);
    if (!preg_match("/^[0-1]*$/",$ivartalan)) {
     echo $ivartalanErr = "Az ivartalanított mező csak 0, vagy 1 lehet";
        
    } 
  }
    if (empty($_POST["gyerekb"])) {
   echo $gyerekbaratErr = "Gyerekbarát mező üres!";
     
  } else {
 $gyerekb = ($_POST["gyerekb"]);
    if (!preg_match("/^[0-1]*$/",$gyerekb)) {
     echo $gyerekbaratErr = "A gyerekbarát mező csak 0, vagy 1 lehet";
        
    } 
  }
if (empty($_POST["mozgasigeny"])) {
   echo $mozgasigenyErr = "Mozgásigény mező üres!";
     
  } else {
 $mozgasigeny = ($_POST["mozgasigeny"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$mozgasigeny)) {
     echo $mozgasigenyErr = "A mozgásigény mezőben hibás karakterek vannak";
        
    } 
  }
    
    if (empty($_POST["fajta"])) {
   echo $fajtaErr = "Fajta mező üres!";
     
  } else {
 $fajta = ($_POST["fajta"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fajta)) {
     echo $fajtaErr = "A fajta mezőben hibás karakterek vannak";
        
    } 
  }
    if (empty($_POST["meret"])) {
   echo $meretErr = "A méret mező üres!";
     
  } else {
 $meret = ($_POST["meret"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$meret)) {
     echo $meretErr = "A méret mezőben hibás karakterek vannak";
        
    } 
  }
    
    
    
    

    
    //$korErr =$nemErr =$fajtaErr =$meretErr =$mozgasigenyErr =$ivartalanErr =$gyerekbaratErr
}
 if ( $korErr == "" && $nemErr == "" && $fajtaErr =="" && $meretErr =="" && $mozgasigenyErr =="" && $ivartalanErr =="" && $gyerekbaratErr =="") {
     
     $query = "INSERT INTO orokbefogadhato_allatok (kor,nem,fajta,meret,mozgasigeny,ivartalanitott,gyerekbarat) VALUES ('$kor','$nem','$fajta','$meret','$mozgasigeny','$ivartalan','$gyerekb')";
     executeDML($query);
     redirect('message', '<br>Sikeres hozzáadás!');
 } else redirect('message', '<br>Sikertelen hozzáadás! Kérem próbálja meg újra!');

?>
