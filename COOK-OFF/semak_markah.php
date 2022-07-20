<?php
include('config.php');
include('MenuPeserta.php');

$nokp = $_SESSION['user'];
$nama = $_SESSION['name'];
?>

<?php
//set nilai awal pemboleh ubah
$jumlah = 0;

//dapatkan data daripada XAMPP
$sql="SELECT * FROM pertandingan WHERE NoKP = '$nokp' ORDER BY IDPenilaian ASC";
$data = mysqli_query($con,$sql);
while($rekod = mysqli_fetch_array($data)){
	$idpenilaian = $rekod['IDPenilaian'];
	$markahpenuh = $rekod['markahPenuh'];
	$jumlah = $rekod['jumlah'];

	//masukkan data ke dalam table pertandingan dalam XAMPP
	//$sql3="UPDATE pertandingan SET jumlah = $jumlah WHERE NOKP = '$nokp'";
	//$datakuiz = mysql_query($con,$sql3);
}

?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="senarai.css">

<body>
<center><h2>Semak Keputusan Pertandingan</h2>
<h5>No Kad Pengenalan: <?php echo $nokp; ?>&emsp;&emsp;
	Nama: <?php echo $nama; ?>&emsp;&emsp;</h5>
<!--papar jadual-->
<table border='1'>
	<tr>
		<th>Aspek</th>
		<th>Markah</th>
	</tr>

<?php
$jumlah = 0;

$sql = "SELECT * FROM pertandingan
        JOIN peserta ON pertandingan.NoKP = peserta.NoKP
        JOIN penilain ON pertandingan.IDPenilaian = penilaian.IDPenilaian
        JOIN hakim ON penilaian.IDHakim = hakim.IDHakim
        WHERE pertandingan.NoKP ='$nokp'";

$query = mysqli_query($con,$sql);

while($hasil = mysqli_fetch_array($query)){
	$jumlah = $hasil['jumlah'];
	?>
	<tr>
		<td><?php echo $hasil['aspek']; ?></td>
		<td><?php echo $hasil['skor']; ?></td>
	</tr>
<?php
}
?>
<tr>
	<td><b>Jumlah</b></td>
	<td><b><?php echo $jumlah; ?></b></td>
</tr>
</table><br>
<button class="cetak" onclick="window.print()">Cetak</button>
</body>
</center>
</html>