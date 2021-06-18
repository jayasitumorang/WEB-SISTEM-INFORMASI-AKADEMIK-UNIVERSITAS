<?php include "./parts/head.php" ?>
<?php include "./parts/navbar-dashboard.php" ?>
<html>
<head>
<title>insert data in database using mysqli</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
<div id="main">
<h1>MASUKAN DATA</h1>
<div id="login">

<hr/>
<form action="" method="post">
<label>kode:</label>
<input type="text" name="nim" id="nim" required="required" placeholder=""/><br /><br />
<label>kelas :</label>
<input type="text" name="NAMA" id="NAMA" required="required" placeholder=""/><br/><br />
<label>semester:</label>
<input type="text" name="PROGRAM" id="PROGRAM" required="required" placeholder=""/><br/><br />
<input type="submit" value=" Submit " name="submit"/><br />
<br>
<br>
<div class="form-group button-search-box pl-1">
                <a class="nav-link" href="./datajadwal.php">
            <button type="button" class="btn btn-login-navbar btn-warning btn-text">kembali</button>
        </a>
            </div>
</form>
</div>
<!-- Right side div -->
<div id="formget">

</div>

</div>
</center>
<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tubes_webpro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO krs (kodekrs, kelas,semester)
VALUES ('".$_POST["nim"]."','".$_POST["NAMA"]."','".$_POST["PROGRAM"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>