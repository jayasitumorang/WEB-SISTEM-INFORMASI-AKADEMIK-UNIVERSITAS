<?php include "./parts/head.php" ?>
<?php include "./parts/navbar-dashboard.php" ?>

<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="container">
    <br>
    <h4>DAFTAR DATA MAHASISWA</h4>

<?php

    include "koneksi1.php";

    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['kodekhs'])) {
        $NO_KTP=htmlspecialchars($_GET["kodekhs"]);

        $sql="delete from khs where kodekhs ='$NO_KTP' ";
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


    <table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>kode khs</th>
            <th>kelas</th>
            <th>semester</th>
            
            
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>
        <?php
        include "koneksi1.php";
        $sql="select * from khs order by kodekhs desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
               
                <td><?php echo $data["kodekhs"]; ?></td>
                <td><?php echo $data["kelas"];   ?></td>
                <td><?php echo $data["semester"];   ?></td>
                 
                <td>
                    
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?kodehrs=<?php echo $data['kodekhs']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    
  <a class="nav-link" href="./adkhs.php">
            <button type="button" class="btn btn-login-navbar btn-warning btn-text">tambah data</button>
        </a>

</div>
              <center>
    <a class="nav-link" href="./admin.php">
            <button type="button" class="btn btn-login-navbar btn-warning btn-text">kembali</button>        </a></center>

</body>
</html>

<?php include "./parts/footer.php" ?>