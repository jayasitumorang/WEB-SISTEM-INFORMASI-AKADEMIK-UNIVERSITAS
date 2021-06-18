<?php include "./parts/head.php" ?>
<?php include "./parts/navbar-dashboard.php" ?>

<!DOCTYPE html>
<html>
<head>
 <style>
body {
  background-image: url('images/bgg.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style> <Style>
    .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}
 
.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}
 
.table1, th, td {
    padding: 8px 20px;
    text-align: center;
}
 
.table1 tr:hover {
    background-color: #f5f5f5;
}
 
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
</Style>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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


    <table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>nip</th>
            <th>nama</th>
            <th>fakultas</th>
           
            
            <th colspan='2'>Aksi</th>

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
            <tr>
               
                <td><?php echo $data["nip"]; ?></td>
                <td><?php echo $data["nama"];   ?></td>
                <td><?php echo $data["fakultas"];   ?></td>
                 
                <td>
                    
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?nip=<?php echo $data['nip']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    
  <a class="nav-link" href="./addosen.php">
            <button type="button" class="btn btn-login-navbar btn-warning btn-text">tambah data</button>
        </a>

</div>
              <center>
    <a class="nav-link" href="./admin.php">
            <button type="button" class="btn btn-login-navbar btn-warning btn-text">kembali</button>        </a></center>

</body>
</html>

<?php include "./parts/footer.php" ?>