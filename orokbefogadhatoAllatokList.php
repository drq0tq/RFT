<?php
include 'index.php';
include 'tablastyle.php';
$query = "SELECT * FROM orokbefogadhato_allatok";
require_once 'connect.php';
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
