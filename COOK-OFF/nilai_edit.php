<?php
include ('config.php');
include('MenuAdmin.php');
?>

<?php  
if (isset($_POST['update'])){
	$IDPenilaian = $_POST['IDPenilaian'];
	$aspek = $_POST['aspek'];
	$markahPenuh = $_POST['markah'];
	$IDHakim = $_POST['IDHakim'];

//KEMASKINI DATA DALAM JADUAL XAMPP
$update = "UPDATE penilaian SET aspek = '$aspek', markahPenuh= '$markah',
              IDHakim = '$IDHakim' WHERE IDPenilaian = '$IDPenilaian' ";
$result = mysqli_query($con,$update);

//papar mesej jika rekod berjaya dikemaskini
echo "<script>alert('Kemaskini rekod berjaya');
             window.location = 'senarai_nilai.php'</script>";
}
?>

<?php  
//DAPATKAN ID HAKIM
$nilaiEdit = $_GET['idpenilaian'];
$sql = mysqli_query($con, "SELECT * FROM penilaian WHERE IDPenilaian = $nilaiEdit");
while($hasil = mysqli_fetch_array($sql)){
	//papar data dari XAMPP
	$IDPenilaian = $hasil['IDPenilaian'];
	$aspek = $hasil['aspek'];
    $markahPenuh = $hasil['markahPenuh'];
    $IDHakim = $hasil['IDHakim'];
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">

<body><center><h3 class="panjang">KEMASKINI MAKLUMAT PENILAIAN</h3>
<main>
<form class="panjang" method="post">
<table border="0" align="center" style="font-size: 18px">
	<tr>
		<td>ID Penilaian:</td>
		<td><label><?php echo $nilaiEdit; ?></label></td>
		<td><input type="hidden" name="IDPenilaian" value="<?php echo $nilaiEdit; ?>"/></td>
	</tr>
	<tr>
		<td>Aspek Penilaian:</td>
		<td><input type="text" name="aspek" value="<?php echo $aspek; ?>" /></td>
	</tr>
	<tr>
		<td>Markah:</td>
		<td><input type="text" name="markahPenuh" value="<?php echo $markahPenuh; ?>" /></td>
	</tr>
	<tr>
		<td>ID Hakim: </td>
		<td><input type="text" name="IDHakim" value="<?php echo $IDHakim; ?>" /></td>
	</tr>

</table>
<button type="submit" name="update">Update</button>
<button type="submit" name="cancel" onclick="history.back()">Batal</button>
</form>
</main>
</center>
</body>
</html>