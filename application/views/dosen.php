<?php include "./parts/head.php" ?>
<?php include "./parts/navbar-dashboard.php" ?>

<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 50%;
  padding: 55px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
 <style>
body {
  background-image: url('images/bgg.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>
<div class="container">
    <br>
    <h4>PILIH</h4>
    <br>
    <br>
    <br>
    <br>


</div>
<center>
<div class="row">
  <div class="column">
    <figure> <a href="datajadwal.php">
    <img src="images/krs.png" alt="Snow" style="width:35%"></a>
    <figcaption>JADWAL</figcaption>
</figure>
   
  </div>
 
  <div class="column">
    <figure> <a href="addnilai.php">
    <img src="images/nilai.png" alt="Mountains" style="width:35%"></a>
    <figcaption>INPUT NILAI</figcaption>
</figure>
   
  </div>
</div>
</center>
</body>
</html>

<?php include "./parts/footer.php" ?>