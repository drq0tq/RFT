<?php
include 'index.php';
$errors = [];

    if (is_post()) {
        $nev = trim($_POST['nev']);
        $eletkor = trim($_POST['eletkor']);
        $email = trim($_POST['email']);
        $telefonszam = trim($_POST['telefonszam']);
        $kutyaazonositoja = trim($_POST['kutyaazonositoja']);

        if($nev==null){
            $errors['nev'][] = "A név mező nem lehet üres!";
        }

        if($eletkor == null){
            $errors['eletkor'][] = "Az életkor mező nem lehet üres!";
        }
        else if (!preg_match("/^[0-9]*$/",$eletkor)) {
            $errors['eletkor1'][] = "Az életkor mezőnek számokat kell tartalmaznia!";
        }
        else if (strlen($eletkor) > 2) { 
            $errors['eletkor2'][] = "Az életkor maximum 2 karakter hosszú lehet!";
        }

        if($email ==null){
            $errors['email'][] = "Az email mező nem lehet üres!";
        }       

        if($telefonszam == null){
            $errors['telefonszam'][] = "A telefonszám mező nem lehet üres!";
        }
        else if (!preg_match("/^[0-9]*$/",$telefonszam)) {
            $errors['telefonszam1'][] = "A telefonszám mezőnek számokat kell tartalmaznia!";
        }
        else if (strlen($telefonszam) != 11) { 
            $errors['telefonszam2'][] = "A telefonszámnak 11 karakter hosszúnak kell lennie!";
        }

        if($kutyaazonositoja == null){
            $errors['kutyaazonositoja'][] = "A kutya azonosítója mező nem lehet üres!";
        }
        else if (!preg_match("/^[0-9]*$/",$kutyaazonositoja)) {
            $errors['kutyaazonositoja1'][] = "A kutya azonosítója mezőnek számot kell tartalmaznia!";
        }
    
        if (count($errors) == 0) {

            $query = "INSERT INTO orokbefogadasi_szandek (nev,eletkor,email,telefonszam,kutyaazonositoja) VALUES ('$nev',' $eletkor' , '$email', '$telefonszam', '$kutyaazonositoja')";
            executeDML($query);

            redirect('message', 'Az örökbefogadási szándék jelzése sikeres volt!');
        }
    }
   
?>
<html lang="hu">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/app.css">
</head>
<body>

<div>
<form id=szandek align="center" action="<?php echo route(['page' => 'orokbefogadasiSzandek_urlap']); ?>" method="POST" enctype="multipart/form-data">
<h1 id=szandek_cim>Űrlap az örökbefogadási szándék jelzéséhez</h1>
<table>
    <tr>
        <td>Név:</td>
        <td><input type="text" id="nev" name="nev" value="<?php echo isset($nev) ? $nev : ''; ?>">
        <?php print_form_errors('nev', $errors); ?></td>
    </tr>
    <tr>
        <td>Életkor:</td>
        <td><input type="text" id="eletkor" name="eletkor" value="<?php echo isset($eletkor) ? $eletkor : ''; ?>">
        <?php print_form_errors('eletkor', $errors); ?></td>
        <?php print_form_errors('eletkor1', $errors); ?></td>
        <?php print_form_errors('eletkor2', $errors); ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
        <?php print_form_errors('email', $errors); ?></td>
    </tr>
    <tr>
        <td>Telefonszám:</td>
        <td><input type="text" id="telefonszam" name="telefonszam" value="<?php echo isset($telefonszam) ? $telefonszam : ''; ?>">
        <?php print_form_errors('telefonszam', $errors); ?></td>
        <?php print_form_errors('telefonszam1', $errors); ?></td>
        <?php print_form_errors('telefonszam2', $errors); ?></td>
    </tr>
    <tr>
        <td>Az örökbefogadni kívánt kutya azonosító száma:</td>
        <td><input type="text" id="kutyaazonositoja" name="kutyaazonositoja" value="<?php echo isset($kutyaazonositoja) ? $kutyaazonositoja : ''; ?>">
        <?php print_form_errors('kutyaazonositoja', $errors); ?></td>
        <?php print_form_errors('kutyaazonositoja1', $errors); ?></td>
    </tr>
    <tr>
        <td colspan=2><button class="btn" type="submit">Beküld</button></td>
    </tr>
</table>
</form>
</div>
</form>
</body>
</html>
