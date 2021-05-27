<?php
include 'index.php';

header("Content-Type: application/json; charset=UTF-8");


$connection = getConnection();
//$errors = [];

if (!isset($_FILES['kép']) || $_FILES['kép']['size'] <= 0) {
    dbClose($connection);
    redirect('message', 'Kép feltöltése szükséges.');
}

$target_dir = BASE_PATH . "/Feltöltések/Örökbefogadott/";
$target_file = $target_dir . basename($_FILES["kép"]["name"]);
$imageFileType = strtolower(
    pathinfo($target_file, PATHINFO_EXTENSION)
);
$target_file_Name = generateRandomString() . '.' . $imageFileType;
$target_file = $target_dir . $target_file_Name;

$check = getimagesize($_FILES['kép']['tmp_name']);
if ($check === false) {
    //$errors[] = "A kiválasztott fájl nem kép. A fájl típusa: {$check['mime']}.";
    redirect('message', 'A kiválasztott fájl nem kép.');
}

if (file_exists($target_file)) {
    //$errors[] = "A kiválasztott fájl már létezik.";
    redirect('message', 'A kiválasztott fájl már létezik.');
}

if ($_FILES['kép']['size'] > (MAX_UPLOAD_SIZE * 1000000)) {
    //$errors[] = "A kiválasztott fájl mérete túl nagy. Maximum méret: {MAX_UPLOAD_SIZE}MB";
    redirect('message', 'A kiválasztott fájl mérete túl nagy.');
}

$allowedFormats = ["jpg", "png", "jpeg"];

if (!in_array($imageFileType, $allowedFormats)) {
    //$errors[] = "A kiválasztott fájl formátuma nem megfelelő. Próbáld ezeket: " . implode(", ", $allowedFormats);
    redirect('message', 'A kiválasztott fájl formátuma nem megfelelő.');
}

//if (count($errors) > 0) {
   // redirect('message', $errors);
//} else {
    if (move_uploaded_file($_FILES['kép']['tmp_name'], $target_file)) {
        $query = "INSERT INTO orokbefogadott_kepek (kep) VALUES ('$target_file_Name')";
        executeDML($query);

        redirect('message', 'Kép sikeresen feltöltve.');
    } else {
        //echo "2";
        dbClose($connection);
        redirect('message', '<br>Sikertelen képfeltöltés! Kérem próbálja meg újra!');
        //http_response_code(500);
        //die(json_encode(['errors' => ['Valami történt']]));
    }
//}
