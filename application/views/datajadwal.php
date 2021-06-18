<?php include "./parts/head.php" ?>
<?php include "./parts/navbar-dashboard.php" ?>
 
<html>
<style>
body {
  background-image: url('images/bg4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
body {
  color:white;
}

h1 {
  color: white;
}
</style>
<style type="text/css"><style type="text/css">table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width:50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}</style>
<body>
    <br>
    <br>
    <br>
    <br>

<br>
    <br>
    <br>
    <br>

<center>
<form action="datajadwal.php" method="post" >
    <h3>mata kuliah :</h3>
    <input type="text" name="keyword">
    <input type="submit" value="Search">
</form>

<?php
   $db_host="localhost";
   $db_user="root";
   $db_pass="";
   $db_name="tubes_Webpro";
    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);
    
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
?>
<?php
if(!empty($_POST))
{
      $aKeyword = explode(" ", $_POST['keyword']);
      $query ="SELECT * FROM jadwal WHERE matakuliah like '%" . $aKeyword[0] . "%'";
     
     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $query .= " OR matakuliah like '%" . $aKeyword[$i] . "%'";
        }
      }
    
     $result = $db->query($query);
     echo "<br>You have searched for keywords: " . $_POST['keyword'];
                    
     if(mysqli_num_rows($result) > 0) {
        $row_count=0;
        echo "<br>Result Found: ";
        echo "<br><table border='1'>";
        While($row = $result->fetch_assoc()) {   
            $row_count++;                         
           
            echo "<tr><td> "."periode"." </td><td>". $row['periode'] . "</td></tr>";
            echo "<tr><td> matakuliah ".$row_count." </td><td>". $row['matakuliah'] . "</td></tr>";
            echo "<tr><td> hari jam ".$row_count." </td><td>". $row['harijam'] . "</td></tr>";
            
        }
        echo "</table>";
    }
    else {
        echo "<br>Result Found: NONE";
    }
}
?>
</center>

<center>
    <a class="nav-link" href="./dosen.php">
            <button type="button" class="btn btn-login-navbar btn-warning btn-text">kembali</button>        </a></center>

</body>

</html>