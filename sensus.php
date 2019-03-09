<html>
<head>
<title>Sensus Penduduk</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="main">
<div id="login">
<h2>Data Form</h2>
<hr/>
<form action="" method="post">
<label>ID :</label>
<input type="text" name="id" id="id" required="required" placeholder="Masukan ID"/><br /><br />
<label>Nama :</label>
<input type="text" name="nama" id="nama" required="required" placeholder="Masukan Nama"/><br /><br />
<label>Email :</label>
<input type="email" name="email" id="email" required="required" placeholder="email_kamu@gmail.com"/><br/><br />
<label>Alamat :</label>
<input type="text" name="alamat" id="alamat" required="required" placeholder="Masukan Alamat"/><br/><br />
<label>Provinsi :</label>
<input type="text" name="provinsi" id="provinsi" required="required" placeholder="Masukan Prvinsi"/><br/><br />
<label>Pendapatan :</label>
<input type="text" name="pendapatan" id="pendapatan" required="required" placeholder="Masukan Pendapatan"/><br/><br />
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>
<!-- Right side div -->
<div id="formget">
</div>

</div>
<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sensus (id, nama, email, alamat, provinsi, pendapatan)
VALUES ('".$_POST["id"]."','".$_POST["nama"]."','".$_POST["email"]."','".$_POST["alamat"]."','".$_POST["provinsi"]."','".$_POST["pendapatan"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('Data Berhasil Ditambahkan!');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>

