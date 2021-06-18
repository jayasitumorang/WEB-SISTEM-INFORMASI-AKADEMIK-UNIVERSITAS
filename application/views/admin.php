<?php include "./parts/head.php" ?>
<?php include "./parts/navbar-dashboard.php" ?>
<br>
<br>
<br>
<br>
<Br>

<!DOCTYPE html>
<html>
  <head>
    <style>
body {
  background-image: url('images/bcc.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
    <title>Blank Table-Based Grid</title>
    <script src="https://chemwriter.com/sdk/chemwriter.js"></script>
    <link rel="stylesheet" href="https://chemwriter.com/sdk/chemwriter.css">
  </head>
  <style>
    body { font-family: monospace; }
    h1 { border-bottom: 4px solid black; font-size: 260%; }
    table { width: 100%; border-collapse: collapse; border-style: hidden; table-layout: fixed; }
    td { border: 10px solid transparent; }
    tr { height: 200px; }
    .page { width: 930px; margin: 0 auto; }
    .cell { background-color: #f5dada; text-align: center; padding: 10px; }
    .image { height: 100px; background-color: white; margin-bottom: 10px;}
    .data { font-size: 100%; }
  </style>
  <body>
    <div class="page">
      <h1>MENU</h1>
      <table>
        <tbody>
          <tr>
            <td>
              <div class="cell">
                <a href="datamahasiswa.php">
    <img src="images/student.png" alt="Snow" style="width:50%"></a>
                <div class="data">data mahasiswa</div>
              </div>
            </td>
            <td>
              <div class="cell">
                <a href="datadosen.php">
    <img src="images/teacher.png" alt="Snow" style="width:50%"></a>
                <div class="data">data dosen</div>
              </div>
            </td>
            
            <td>
              <div class="cell">
               <a href="datamatakuliah.php">
    <img src="images/books.png" alt="Snow" style="width:50%"></a>
                <div class="data"> mata kuliah</div>
              </div>
            </td>
            <td>
              <div class="cell">
              <a href="jadwal.php">
    <img src="images/clock.png" alt="Snow" style="width:50%"></a>
                <div class="data">data jadwal</div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
      <div class="page">
      
      <table>
        <tbody>
          <tr>
            <td>
              <div class="cell">
              <a href="krs.php">
    <img src="images/reading.png" alt="Snow" style="width:50%"></a>
                <div class="data">data krs</div>
              </div>
            </td>
            <td>
              <div class="cell">
               <a href="presensi.php">
    <img src="images/absen.png" alt="Snow" style="width:50%"></a>
                <div class="data">presensi</div>
              </div>
            </td>
            <td>
              <div class="cell">
             <a href="datanilai.php">
    <img src="images/nilai.png" alt="Snow" style="width:50%"></a>
                <div class="data">nilai</div>
              </div>
            </td>
            <td>
              <div class="cell">
              <a href="datakhs.php">
    <img src="images/hasil.png" alt="Snow" style="width:50%"></a>
                <div class="data">data khs</div>
              </div>
            </td>
           
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>