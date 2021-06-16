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
<div style="text-align: center; margin: 15px;">
	<a href="#" style="
    width: 115px;
    height: 25px;
    background: #993300;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;">Hozzáadás</a>
	<a href="#" style="
    width: 115px;
    height: 25px;
    background: #993300;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;">Törlés</a>
	<a href="#" style="
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


