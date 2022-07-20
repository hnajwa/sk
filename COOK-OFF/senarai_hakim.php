<?php 
include('config.php');
include('MenuAdmin.php');
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="senarai.css">

<body>
<center><h2>Senarai Hakim</h2>

<!--papar jadual-->
<table border='1'>
	<tr>
		<th>Bil.</th>
		<th>ID Hakim</th>
		<th>Nama Hakim</th>
		<th>Kata Laluan</th>
		<th>Telefon</th>
	    <th colspan="2">Tindakan</th>
	</tr>

<?php
//membuat query untuk dapatkan data
$hasil = mysqli_query($con,"SELECT * FROM hakim");
$no = 1;

//umpukkan data yang ditemui ke dalam tatasusunan $row
while($row = mysqli_fetch_array($hasil))
{
	?>
	<!--papar data di dalam jadual-->
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $row['IDHakim']; ?></td>
		<td><?php echo $row['NamaHakim']; ?></td>
		<td><?php echo $row['kataLaluanM']; ?></td>
		<td><?php echo $row['telHakim']; ?></td>

		<td><a href="hakim_edit.php?idhakim=<?php echo $row['IDHakim']; ?>"
			           onclick="return confirm('Anda pasti?')"><u>Kemaskini</u></a></td>
	    <td><a href="hakim_hapus.php?idhakim=<?php echo $row['IDHakim']; ?>"
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