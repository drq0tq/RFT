<?php
include 'index.php';
include 'tablastyle.php';
$query = "SELECT * FROM orokbefogadhato_allatok";
require_once 'connect.php';
require_once 'usernManager.php';
$allatok = getList($query);
?>
<?php if(count($allatok)<=0) : ?>
    <h1>Nem található gondozó a táblában</h1>
<?php else : ?>
<table id="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Kor</th>
				<th scope="col">Nem</th>
				<th scope="col">Fajta</th>
				<th scope="col">Méret</th>
                <th scope="col">Mozgásigény</th>
                <th scope="col">Ivartalanított</th>
                <th scope="col">Gyerekbarát</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0; ?>
			<?php foreach ($allatok as $a) : ?>
				<?php $i++; ?>
				<tr>
					<th scope="row"><?=$i ?></th>
					<td><?=$a['kor'] ?></td>
                    <td><?php if($a['nem'] == 0) {echo "Kan";} else {echo "Szuka";}  ?></td>
					
					<td><?=$a['fajta'] ?></td>
                    <td><?=$a['meret'] ?></td>
                    <td><?=$a['mozgasigeny'] ?></td>
                    <td><?php if($a['ivartalanitott'] == 0) {echo "Nem";} else {echo "Igen";} ?></td>
                    <td><?php if($a['gyerekbarat'] == 0) {echo "Nem";} else {echo "Igen";} ?></td>
                   
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php endif; ?>


<?php if(isUserLoggedin()) : ?>
    <div style="margin: 15px; text-align: center;">
<a href="orokbefogadasiSzandek_urlap.php" style="
    width: 115px;
    height: 25px;
    background: #993300;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;">Szeretnék örökbefogadni</a>
</div>

<?php else : ?>

<?php endif; ?>


<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 1) : ?>
	<h1>Hozzáférés megtagadva</h1>
<?php else : ?>
<div style="text-align: center;">
	<a href="hozzaad_urlap.php" style="
    width: 115px;
    height: 25px;
    background: #993300;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;">Hozzáadás</a>
	<a href="torol_urlap.php" style="
    width: 115px;
    height: 25px;
    background: #993300;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;">Törlés</a>
	<a href="modosit_urlap.phphr" style="
    width: 115px;
    height: 25px;
    background: #993300;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;" >Frissítés</a>
</div>
<?php endif; ?>