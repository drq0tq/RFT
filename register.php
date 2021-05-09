<?php
include 'index.php';
require_once 'usernManager.php';
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){
    $postData = [
        'nev' => $_POST['nev'],
        'email' => $_POST['email'],
        'jelszo' => $_POST['jelszo'],
        'jelszoerosites' => $_POST['jelszo1'],
        'kor' => $_POST['kor']
    ];

    if(empty($postData['nev']) || empty($postData['email']) || empty($postData['jelszo']) || empty($postData['jelszoerosites']) ||empty($postData['kor'])){
       /* echo "név: ".$postData['nev'];
        echo "email: ".$postData['email'];
        echo "jelszo: ".$postData['jelszo'];
        echo "jelszo1: ".$postData['jelszo1'];*/
        echo "Hiányzó adatok";
    } else if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)){
        echo "Hibás email cím formátum";
    } else if($postData['jelszo'] != $postData['jelszoerosites']){
        echo "A jelszavak nem egyeznek meg";
    }
    else if(strlen($postData['jelszo']) < 6){
        echo "A jelszó nem elég hosszú, min 6. karakter";
    }
    else if(!userRegister($postData['email'], $postData['nev'], $postData['jelszo'], $postData['kor'])){
        echo "Sikertelen regisztráció";
    }

    $postData['jelszo'] = $postData['jelszo1'] = "";
}

?>

<form method="post">
    <div class="form-row"> 
        <div class="form-group col-md-4">
            <label>Név:</label>
            <input type="text" class="form-control" id="registerNev" name="nev" value="<?=isset($postData) ? $postData['nev'] : "";?>">
        </div>

        <div class="form-group col-md-4">
            <label>Email:</label>
            <input type="text" class="form-control" id="registerEmail" name="email" value="<?=isset($postData) ? $postData['email'] : "";?>">
        </div>

        <div class="form-group col-md-4">
            <label>Kor:</label>
            <input type="text" class="form-control" id="registerKor" name="kor" value="<?=isset($postData) ? $postData['kor'] : "";?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <lable>Jelszó:</lable>
            <input type="password" class="form-control" id="registerPassword" name="jelszo" value="">
        </div>

        <div class="form-group col-md-6">
            <lable>Jelszó újra:</lable>
            <input type="password" class="form-control" id="registerPassword1" name="jelszo1" value="">
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="register"> Regisztráció </button>
</form>