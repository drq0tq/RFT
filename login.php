<?php
require_once 'usernManager.php';
include 'index.php';
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
    $postData = [
        'email' => $_POST['email'],
        'jelszo' => $_POST['jelszo']
    ];
    if(empty($postData['email']) || empty($postData['jelszo'])){
        echo "Hiányzó adatok";
    }else if(!filter_var($postData['email'],FILTER_VALIDATE_EMAIL)){
        echo "Hibás email formátum";
    }else if(!userLogin($postData['email'], $postData['jelszo'])){
        echo "Hibás email cím vagy jelszó";
    }
    $postData['jelszo'] = "";
}

?>

<form method="post">
    <div class="form-group">
    <label>Email cím: </label>
    <input type="email" class="form-control" id="loginEmail" name="email" value="<?= isset($postData) ? $postData['email'] : '';?>">
    </div>
    <div class="form-group">
        <label>Jelszó:</label>
        <input type="password" class="form-control" id="loginJelszo" name="jelszo" value="">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Bejelentkezés</button>
</form>
