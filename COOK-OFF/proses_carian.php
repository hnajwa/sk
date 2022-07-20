<?php  
include('config.php');
include('MenuAdmin.php');

$nama = $_POST['nama'];

//membuat query untuk dapatkan data
$sql1 = mysqli_query($con,"SELECT * FROM peserta WHERE NamaPeserta like '%$nama%'");
$no = 1;
while($row=mysqli_fetch_array($sql1)){
	$peserta = $row['NamaPeserta'];
	$nokp = $row['NoKP'];
	$markah = $row['markah'];
}
?>

<html>
<link rel="stylesheet" href="senarai.css">
<center>
<h2>Keputusan Individu</h2>
<h5>No Kad Pengenalan: <?php echo $nokp; ?>&emsp;&emsp;
	Nma: <?php echo $peserta; ?>&emsp;&emsp;</h5>

<!--papar tajuk jadual-->
<table border='1'>
<tr>
	<th>Aspek</th>
	<th>Markah</th>
</tr>

<?php  
    $sql2 = "SELECT * FROM pertandingan
        JOIN peserta ON pertandingan.NoKP = peserta.NoKP
        JOIN penilaian ON pertandingan.IDPenilaian = penilaian.IDPenilaian
        JOIN hakim ON penilaian.IDHakim = hakim.IDHakim
        WHERE pertandingan.NoKP = '$nokp' ";

$query = mysqli_query($con,$sql2);

while($hasil = mysqli_fetch_array($query)){
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
	<td><b><?php echo $markah; ?></b></td>
</tr>
</table><br>
<button class="cetak" onclick="window.print()">Cetak</button>
</body>
</center>
</html> 