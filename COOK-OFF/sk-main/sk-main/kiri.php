<!--Fail ini adalah laman utama yang memaparkan isi kandungan web pada bahagian tengah -->

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="kiri.css">

<body>
    <center>
        <h1>
            <font size="+1" color="#ffff00" font face=" Tangerine">MENU UTAMA</font>
        </h1>
        <ul>
            <li><a href="utama.php" target="main">Utama</a></li>
            <li><a href="hubungi.php" target="main">Hubungi</a></li>
        </ul>

        <caption style="font-family: verdana">SISTEM KUIZ ONLINE</caption>
        <ul>
            <li><a href="signup.html" target="main">Daftar Peserta</a></li>
            <li><a class="arrow" href="#">Log Masuk</a></li>
                <ul>
                    <li><a href="login.php" target="main">Peserta</a></li>
                    <li><a href="loginHakim.php" target="main">Hakim</a></li>
                </ul>
            <li><a href="Senarai_hakim.php" target="main">Senarai Hakim</a></li>
        </ul>

        <!-- papar pautan menu luar -->
        <ul>
            <li><a href="https://www.facebook.com/SMKPuncakAlamOFFICIAL/" target="blank">SMK P Alam</a></li>
        </ul>
    </center>
    <?php include 'utility.php'; ?>
</body>

</html>