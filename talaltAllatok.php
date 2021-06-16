<?php
include 'index.php';
include 'tablastyle.php';
$query = "SELECT id,hely,allapot,telefonszam FROM talalt_allatok";
require_once 'connect.php';
$allatok = getList($query);
?>
<?php if(count($allatok)<=0) : ?>
    <h1>Nem található talált állat a táblában</h1>
<?php else : ?>
<table id="table" >
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Hely</th>
				<th scope="col">Állapot</th>
				<th scope="col">Telefonszám</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0; ?>
			<?php foreach ($allatok as $g) : ?>
				<?php $i++; ?>
				<tr>
					<th scope="row"><?=$i ?></th>
					<td><?=$g['hely'] ?></td>
					<td><?=$g['allapot'] ?></td>
					<td><?=$g['telefonszam'] ?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php endif; ?>


