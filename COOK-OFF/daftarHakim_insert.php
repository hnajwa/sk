<?php
include('config.php');

$IDHakim = $_POST["IDHakim"];
$NamaHakim = $_POST["NamaHakim"];
$kataLaluanM = $_POST["kataLaluan"];
$telHakim = $_POST["telefon"];

$sql = "INSERT INTO hakim (IDHakim,NamaHakim,kataLaluanM,telHakim)
        VALUES ('$IDHakim','$NamaHakim','$kataLaluanM','$telHakim')";

$result = mysqli_query($con,$sql);
if($result){
	echo"<script>alert('Pendaftaran hakim berjaya');
	window.location = 'senarai_hakim.php'</script>";
}else{
	echo"<script>alert('Pendaftaran hakim gagal');
	window.location = 'MenuAdmin.php'</script>";

}
?>