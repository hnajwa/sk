<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script type="text/javascript">
            function tukarWarna(color){
                document.getElementsByTagName('Body')[0].style.backgroundColor = color.value;
            }
        </script>
    </head>
    <center>
    <body>
        <select size="" onchange='tukarWarna(this);'>
            <option value="select">Pilih warna</option>
            <option value="#e6497d">Merah</option>
            <option value="#6c9ceb">Biru</option>
            <option value="#f2f2c7">Kuning</option>
            <option value="#b4f0c0">Hijau</option>
        </select>
        </body>
    </center>
</html>  
