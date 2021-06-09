<?php
include 'index.php';
include 'tablastyle.php';
$query = "SELECT * FROM gondozok";
require_once 'connect.php';
$gondozok = getList($query);
?>
<?php if(count($gondozok)<=0) : ?>
    <h1>Nem található gondozó a táblában</h1>
<?php else : ?>
<table id="table" >
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Név</th>
				<th scope="col">Munkakör</th>
				<th scope="col">Végzettség</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0; ?>
			<?php foreach ($gondozok as $g) : ?>
				<?php $i++; ?>
				<tr>
					<th scope="row"><?=$i ?></th>
					<td><?=$g['nev'] ?></td>
					<td><?=$g['munkakor'] ?></td>
					<td><?=$g['vegzettseg'] ?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php endif; ?>

<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 1) : ?>
	<h1>Hozzáférés megtagadva</h1>
<?php else : ?>
	<h1>OK</h1>
<?php endif; ?>


