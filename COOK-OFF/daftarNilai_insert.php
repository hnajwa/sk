<?php
include('config.php');

$IDPenilaian = $_POST["IDPenilaian"];
$aspek = $_POST["aspek"];
$markahPenuh = $_POST["markahPenuh"];
$IDHakim = $_POST["IDHakim"];

$sql = "INSERT INTO penilaian (IDPenilaian, aspek, markahPenuh,IDHakim)
        VALUES ('$IDPenilaian','$aspek','$markahPenuh','$IDHakim')";

$result = mysqli_query($con,$sql);
if($result){
    echo"<script>alert('Maklumat Penilaian berjaya disimpan');
    window.location = 'senarai_nilai.php'</script>";
}else{
    echo"<script>alert('Maklumat Penilaian gagal disimpan');
    window.location = 'MenuAdmin.php'</script>";
}
?>