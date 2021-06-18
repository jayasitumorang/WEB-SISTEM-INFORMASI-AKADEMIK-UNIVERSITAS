<?php include "./parts/head.php" ?>
<?php include "./parts/navbar.php" ?>



<!DOCTYPE html>
<html>

<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
body {
  background-image: url('images/bc.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
body {
  color:white;
}

h1 {
  color: black;
}
</style>
    <style>
* {
  box-sizing: border-box;
}
body{
  background color:white;
  }
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
 
</style>
</head>
<body>
<div class="container">
    <br>
    <h4>VISI MISI</h4>


</div>


<br>
<br>
<br>
<br>
<br>
<br>


<center>
<div class="row">
  <div class="column">
    <figure>
   
    <img src="images/1.jpg" alt="Snow" style="width:70%">
    <figcaption>MENCIPTAKAN LULUSAN TERBAIK</figcaption>
  </figure>
  </div>
  <div class="column">
    <figure>
    
    <img src="images/2.jpg" alt="Forest" style="width:70%">
    <figcaption>MENYEDIAKAN SARANA BELAJAR BERMUTU</figcaption>
  </figure>
  </div>
  <div class="column">
    <figure>
    
    <img src="images/3.jpg" alt="Mountains" style="width:70%">
    <figcaption>MENYEDIAKAN RESOURCES MEMADAI </figcaption>
  </figure>
  </div>


</div>

<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">

<?php

    include "koneksi1.php";

    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['nip'])) {
        $NO_KTP=htmlspecialchars($_GET["nip"]);

        $sql="delete from dosen where nip='$NO_KTP' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:admin.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>


    <table class="table table-striped">
        <br>
       <thead class="thead-dark">
        <tr>
            <th>nip</th>
            <th>nama</th>
            <th>fakultas</th>
           
            
          
        </tr>
        </thead>
        <?php
        include "koneksi1.php";
        $sql="select * from dosen order by nip desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
              <thead class="thead-dark">
            <tr>
               
                <td class="table-light"><?php echo $data["nip"]; ?></td>
                <td class="table-light"><?php echo $data["nama"];   ?></td>
                <td class="table-light"><?php echo $data["fakultas"];   ?></td>  
              
            </tr>
          </thead>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
</center>
</body>
</html>

<?php include "./parts/footer.php" ?>