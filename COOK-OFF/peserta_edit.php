<?php   
include('config.php');
include('MenuAdmin.php');

if (isset($_POST['update'])){
	$nokp = $_POST['nokp'];
	$nama = $_POST['namapeserta'];
	$passwd = $_POST['passwd'];
	$jantina = $_POST['jantina'];
	$notelefon = $_POST['notelefon'];

//KEMASKINI DATA DALAM JADUAL XAMPP
$update = "UPDATE peserta SET NoKP = '$nokp', NamaPeserta = '$namapeserta', Katalaluan='$passwd',
                  jantina = '$jantina', NoTelefon ='$telefon' WHERE NoKP = '$nokp' ";
$result = mysqli_query($con,$update);

//papar mesej jika rekod berjaya dikemaskini
echo "<script>alert('Kemaskini maklumat peserta berjaya');
              window.location = 'senarai_peserta.php'</script>";
}
?>

<?php
//DAPATKAN ID PESERTA
$pesertaEdit = $_GET['nokp'];
$sql = mysqli_query($con, "SELECT * FROM peserta WHERE NoKP = $pesertaEdit");
while($hasil = mysqli_fetch_array($sql)){
	//papar data dari XAMPP
	$nokp = $hasil['NoKP'];
	$nama = $hasil['NamaPeserta'];
	$passwd = $hasil['Katalaluan'];
	$jantina = $hasil['jantina'];
	$telefon = $hasil['NoTelefon'];
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">

<body><center><h3 class="panjang">KEMASKINI MAKLUMAT PESERTA</h3>
<main>
<form class="panjang" method="post">
<table border="0" align="center" style="font-size: 18px">
	<tr>
		<td>No Kad Pengenalan:</td>
		<td><label><?php echo $pesertaEdit; ?></label></td>
		<td><input type="hidden" name="nokp" value="<?php echo $pesertaEdit; ?>" /></td>
	</tr>
	<tr>
		<td>Nama Peserta:</td>
		<td><input type="text" name="nama" value="<?php echo $namapeserta; ?>" /></td>
	</tr>
	<tr>
		<td>Katalaluan:</td>
		<td><input type="text" name="passwd" value="<?php echo $passwd; ?>"></td>
	</tr>
	<tr>
		<td>Jantina:</td>
		<td><input type="text" name="jantina" value="<?php echo $jantina; ?>"></td>
    </tr>
    <tr>
    	<td>Telefon:</td>
		<td><input type="text" name="telefon" value="<?php echo $notelefon; ?>"></td>
	</tr>
</table>
<button type="submit" name="update">Simpan</button>
<button type="submit" name="cancel" onclick="history.back()">Batal</button>
</form>
</main>
</center>
</body>
</html>