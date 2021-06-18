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
<style>
body {
  background-image: url('images/bcc.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>
<div class="container">
    <br>
    <h4>MASUK SEBAGAI</h4>


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
    <a href="logindosen.php">
    <img src="images/teacher.png" alt="Snow" style="width:50%"></a>
    <figcaption>DOSEN</figcaption>
  </figure>
  </div>
  <div class="column">
    <figure>
    <a href="loginpage.php">
    <img src="images/admin.png" alt="Forest" style="width:50%"></a>
    <figcaption>AKADEMIK UNIVERSITAS</figcaption>
  </figure>
  </div>
  <div class="column">
    <figure>
    <a href="loginmahasiswa.php">
    <img src="images/student.png" alt="Mountains" style="width:50%"></a>
    <figcaption>MAHASISWA</figcaption>
  </figure>
  </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h1> LAPORAN </h1>
<div class="container">
    <br>
    <h4>DAFTAR DATA DOSEN</h4>

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

    <br>
    <br>
    <bt>
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
            <th>jurusan</th>
            <th>akreditas</th>
            <th>visi misi</th>
           
            
          
        </tr>
        </thead>
        <?php
        include "koneksi1.php";
        $sql="select * from jurusan order by namajurusan desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
              <thead class="thead-dark">
            <tr>
               
                <td class="table-light"><?php echo $data["namajurusan"]; ?></td>
                <td class="table-light"><?php echo $data["akreditasi"];   ?></td>
                <td class="table-light"><?php echo $data["visimisi"];   ?></td>  
              
            </tr>
          </thead>
            </tbody>
            <?php
        }
        ?>
    </table>
   
</center>
</body>
</html>

<?php include "./parts/footer.php" ?>