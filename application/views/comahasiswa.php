<?php include "./parts/head.php" ?>
<?php include "./parts/navbar-dashboard.php" ?>
<?php
$username= $_POST['username'];
$password=$_POST['password'];
$DB_NAME = 'tubes_webpro';
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM admin WHERE username='$username' and password='$password'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
header("Location: mahasiswa.php");
}
else {
echo '
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 <center> 
   <H1> <p style="color:white"> PASSWORD SALAH</p> </H1>
        <a class="nav-link" href="./loginpage.php">
      
                          <button type="button" class="btn btn-login-navbar btn-warning btn-text">MASUKAN PASSWORD KEMBALI</button>
        </a>
    </center>';	

}
?>

<style>
body {
  background-image: url('images/bg1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<style>
div {
 
}
</style>