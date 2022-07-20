<?php
include ('config.php');
include('MenuAdmin.php');

//kira jumlah soalan dalam senarai
$sql = "SELECT IDHakim FROM hakim";
$data = mysqli_query($con,$sql);
$total = mysqli_num_rows($data);
$no = $total +1;
?>

<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">

<style>
	input[type="text"] {
		    width: 200px;
		    padding: 5px;
		    margin: 5px;
	    }
</style>

<h3 class="panjang">DAFTAR HAKIM</h3>
<form class="panjang" action="daftarHakim_insert.php" method="post">
<table>
	<tr>
		<td>ID Hakim</td>
		<td><label><?php echo $no; ?></label>
			<input type="text" value="<?php echo $no;?>" name="IDHakim" hidden></td>
	</tr>

	<tr>
		<td>Nama Hakim</td>
		<td><input type="text" name="NamaHakim"></td>
	</tr>

	<tr>
		<td>Kata Laluan</td>
		<td><input type="text" name="kataLaluanM"></td>
	</tr>
	<tr>
		<td>telefon</td>
		<td><input type="text" name="telHakim"></td>
	</tr>

</table>
<button class="tambah" type="submit">TAMBAH</button>
</form>
</html>