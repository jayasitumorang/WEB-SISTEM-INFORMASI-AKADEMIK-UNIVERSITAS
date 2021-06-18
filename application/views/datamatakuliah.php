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
    if (isset($_GET['kodematakuliah'])) {
        $NO_KTP=htmlspecialchars($_GET["kodematakuliah"]);

        $sql="delete from matakuliah where kodematakuliah='$NO_KTP' ";
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
            <th>kode mata kuliah</th>
            <th>mata kuliah</th>
            <th>sks</th>
           
            
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>
        <?php
        include "koneksi1.php";
        $sql="select * from matakuliah order by kodematakuliah desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
               
                <td><?php echo $data["kodematakuliah"]; ?></td>
                <td><?php echo $data["matakuliah"];   ?></td>
                <td><?php echo $data["sks"];   ?></td>
                 
                <td>
                    
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?nip=<?php echo $data['nip']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    
  <a class="nav-link" href="./admin.php">
            <button type="button" class="btn btn-login-navbar btn-warning btn-text">tambah data</button>
        </a>

</div>
              <center>
    <a class="nav-link" href="./admin.php">
            <button type="button" class="btn btn-login-navbar btn-warning btn-text">kembali</button>        </a></center>

</body>
</html>

<?php include "./parts/footer.php" ?>