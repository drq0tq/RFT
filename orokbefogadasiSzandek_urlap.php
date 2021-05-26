<?php
include 'index.php';

   
?>
<html lang="hu">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/app.css">
</head>
<body>

<div>
<form id=szandek align="center">
<h1 id=szandek_cim>Űrlap az örökbefogadási szándék jelzéséhez</h1>
<table>
    <tr>
        <td>Név:</td>
        <td><input type="text" name="nev" value="<?php echo isset($nev) ? $nev : ''; ?>">
       
    </tr>
    <tr>
        <td>Életkor:</td>
        <td><input type="text" name="eletkor" value="<?php echo isset($eletkor) ? $eletkor : ''; ?>">
        
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
        
    </tr>
    <tr>
        <td>Telefonszám:</td>
        <td><input type="text" name="telefonszam" value="<?php echo isset($telefonszam) ? $telefonszam : ''; ?>">
      
    </tr>
    <tr>
        <td>Az örökbefogadni kívánt kutya azonosító száma:</td>
        <td><input type="text" name="kutyaazonosito" value="<?php echo isset($kutyaazonosito) ? $kutyaazonosito : ''; ?>">
       
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