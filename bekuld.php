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

header("Content-Type: application/json; charset=UTF-8");


$connection = getConnection();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $allapot = $_POST["allapot"];
  
  if ( $allapot == "valaszt" ) {
    redirect('message', 'Kérem válassza ki a kutya állapotát!');
  } 
    
  if (empty($_POST["tel"])) {
    redirect('message', 'Tel mező üres!');
  } 
  else {
    $tel = $_POST["tel"];
  
    if (!preg_match("/^[0-9]*$/",$tel)) {
      redirect('message', 'Tel mezőben nem megfelelő karakter!');
    } 
      else if (strlen($tel)!= 11) {
      redirect('message', 'A telefonszámnak 11 hosszúnak kell lennie!');
    }
  }

  if (empty($_POST["adress"])) {
    redirect('message', 'Hely mező üres!');
  } 
  else {
    $adress = $_POST["adress"];
   if (!preg_match("/^[a-zA-ZáéíóöőüúűÁÉÍÖŐÜŰÚ]*$/",$adress)) {
      redirect('message', 'A hely mezőben nem megfelelő karakter!');
    }
  }
}

if ((!isset($_FILES['kép']) || $_FILES['kép']['size'] <= 0) && $allapotErr == "" && $telErr == ""  && $adressErr=="") {
  dbClose($connection);
  redirect('message', 'Kép feltöltése szükséges.');
}

$target_dir = BASE_PATH . "/Feltöltések/Talalt/";
$target_file = $target_dir . basename($_FILES["kép"]["name"]);
$imageFileType = strtolower(
  pathinfo($target_file, PATHINFO_EXTENSION)
);
$target_file_Name = generateRandomString() . '.' . $imageFileType;
$target_file = $target_dir . $target_file_Name;

$check = getimagesize($_FILES['kép']['tmp_name']);
if ($check === false) {
  redirect('message', 'A kiválasztott fájl nem kép.');
}

if (file_exists($target_file)) {
  redirect('message', 'A kiválasztott fájl már létezik.');
}

if ($_FILES['kép']['size'] > (MAX_UPLOAD_SIZE * 1000000)) {
  redirect('message', 'A kiválasztott fájl mérete túl nagy.');
}

$allowedFormats = ["jpg", "png", "jpeg"];

if (!in_array($imageFileType, $allowedFormats)) {
  redirect('message', 'A kiválasztott fájl formátuma nem megfelelő.');
}



if (move_uploaded_file($_FILES['kép']['tmp_name'], $target_file)){
  $query = "INSERT INTO talalt_allatok (allapot,telefonszam,hely,kep) VALUES ('$allapot',' $tel' , '$adress', '$target_file_Name')";
  executeDML($query);
  redirect('talaltallat_sikeresbejelentes', '<br>A bejelentés megtörtént. Köszönjük a segítséget!');
      
}
else redirect('message', '<br>Sikertelen bejelentés! Kérem próbálja meg újra!');

?>

  