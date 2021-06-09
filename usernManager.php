<?php

function isUserLoggedin(){
    return $_SESSION != null && array_key_exists('uid', $_SESSION) && is_numeric($_SESSION['uid']);
}

function userLogOut(){
    session_unset();
    session_destroy();
    header('Location: index.php');
}

function userLogin($email, $password){
    $query = "SELECT id, nev, email, permission from felhasznalok where email = :email AND jelszo = :password";
    $params = [
        ':email' => $email,
        ':password' => $password
    ];

    require_once 'connect.php';
    $record = getRecord($query,$params);
    if(!empty($record)){
        $_SESSION['uid'] = $record['id'];
        $_SESSION['nev'] = $record['nev'];
        $_SESSION['email'] = $record['email'];
        $_SESSION['permission'] = $record['permission'];
        header('Location: index.php');
    }
    return false;
}
function userRegister($email,$nev,$password, $kor){
    $query = "SELECT id FROM felhasznalok WHERE email = :email";
    $params = [':email' => $email];

    require_once 'connect.php';
    $record = getRecord($query,$params);
    if(empty($record)){
        $query = "INSERT INTO felhasznalok (nev,email,jelszo, eletkor) values (:nev, :email, :jelszo, :kor)";
        $params = [
            ':nev' => $nev,
            ':email' => $email,
            ':jelszo' => $password,
            ':kor' => $kor
        ];
        if(executeDML($query,$params)){
            header('Location: login.php');
        }
        return false;
    }
}

?>