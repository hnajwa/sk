<?php
include('config.php');
include('MenuPeserta.php');

//DAPATKAN ID Pelajar
$nokp = $_SESSION['user'];

//Dapatkan data daripada XAMPP
$pesertaEdit = mysqli_query($con, "SELECT * FROM peserta WHERE NoKP = $nokp");
while($data = mysqli_fetch_array($pesertaEdit)){
	//papar data dari XAMPP
	$nama = $data['namapeserta'];
	$passwd = $data['Katalaluan'];
	$jantina = $data['jantina'];
	$notelefon = $data['notelefon'];
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">

<body><center><h3 class="panjang">KEMASKINI PESERTA</h3></center>
<main>
<form class="panjang" action="updatePeserta2.php" method="post">
<table border="0" align="center" style="font-size: 18px">
	<tr>
		<td>No Kad Pengenalan:</td>
		<td><label><?php echo $nokp; ?></label>
			<input type="hidden" name="nokp" value="<?php echo $nokp; ?>"></td>
	</tr>

	<tr>
		<td>Nama Peserta:</td>
		<td><input type="text" name="nama" value="<?php echo $namapeserta; ?>" /></td>
	</tr>