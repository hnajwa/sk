<?php
include ('config.php');
include('MenuAdmin.php');
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="senarai.css">

<body>
<center><h2>Maklumat Aspek Penilaian</h2>

<!--papar jadual-->
<table border='1'>
	<tr>
		<th>Bil.</th>
		<th>ID Nilai</th>
		<th>Aspek Penilaian</th>
		<th>Markah</th>
		<th>Hakim</th>
		<th colspan="2">Tindakan</th>
	</tr>

<?php
//membuat queryuntuk dapatkan data
$hasil = mysqli_query($con,"SELECT * FROM penilaian");
$no = 1;

//umpukkan data yang ditemui ke dalam tatasusunan $row
while($row = mysqli_fetch_array($hasil))
{
	?>
	<!--papar data di dalam jadual-->
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $row['IDnilai']; ?></td>
		<td><?php echo $row['aspek']; ?></td>
		<td><?php echo $row['markahPenuh']; ?></td>
		<td><?php echo $row['IDhakim']; ?></td>

		 <td><a href="nilai_edit.php?idnilai=<?php echo $row['IDnilai']; ?>"
			          onclick="return confirm('Anda pasti?')"><u>Kemaskini</u></a></td>
		<td><a href="nilai_hapus.php?idnilai=<?php echo $row['IDnilai']; ?>"
			          onclick="return confirm('Anda pasti?')"><u>Padam</u></a></td>
    </tr>
    <?php 
        $no++;
        }
    ?>
</table>
</center>
</body>
</html>