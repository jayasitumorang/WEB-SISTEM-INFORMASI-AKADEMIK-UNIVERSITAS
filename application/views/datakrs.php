<?php include "./parts/head.php" ?>
<?php include "./parts/navbar-dashboard.php" ?>
 
<html>
<head><style type="text/css"><style type="text/css">table {
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
}</style></style>
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
</style></head>
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
<form action="datakrs.php" method="post" >
    <h3>masukan kode khusus mu:</h3>
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
      $query ="SELECT * FROM krs WHERE kodekrs like '%" . $aKeyword[0] . "%'";
     
     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $query .= " OR kodekrs like '%" . $aKeyword[$i] . "%'";
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
           
            echo "<tr><td> "."kodekrs"." </td><td>". $row['kodekrs'] . "</td></tr>";
            echo "<tr><td> kelas </td><td>". $row['kelas'] . "</td></tr>";
            echo "<tr><td> semester  </td><td>". $row['semester'] . "</td></tr>";
            
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
    <a class="nav-link" href="./mahasiswa.php">
            <button type="button" class="btn btn-login-navbar btn-warning btn-text">kembali</button>        </a></center>

</body>

</html>