<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function tukarWarna(color){
			document.getElementsByTagName('Body')[0].style.backgroundColor = color.
			value;
		}
	</script>
</head>
<center>
<body>
	<select size="" onchange='tukarWarna(this);'>
		<option value="select">Pilih warna</option>
		<option value="#ccccb3">Kelabu</option>
		<option value="#ecd9c6">Pink</option>
		<option value="#e6e6e6">Putih</option>
		<option value="#efefc3">Beige</option>
	</select>
</body>
</center>
</html>