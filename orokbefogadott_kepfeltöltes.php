<?php
include 'index.php';

header("Content-Type: application/json; charset=UTF-8");


$connection = getConnection();

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

if (move_uploaded_file($_FILES['kép']['tmp_name'], $target_file)) {
    $query = "INSERT INTO orokbefogadott_kepek (kep) VALUES ('$target_file_Name')";
    executeDML($query);

    redirect('message', 'Kép sikeresen feltöltve.');
} else {
    dbClose($connection);
    redirect('message', '<br>Sikertelen képfeltöltés! Kérem próbálja meg újra!');
}

