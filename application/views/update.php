<?php include "./parts/head.php" ?>
<?php include "./parts/navbar-dashboard.php" ?>

<?php 
$username = "root"; 
$password = ""; 
$database = "tubes_Webpro"; 
$conn=new mysqli("localhost", $username, $password, $database);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}


if(count($_POST)>0) {
mysqli_query($conn,"UPDATE daftar_data set NO_KTP='" . $_POST['NO_KTP'] . "', NAMA='" . $_POST['NAMA'] . "', PROGRAM='" . $_POST['PROGRAM'] .  "' WHERE NO_KTP='" . $_POST['NO_KTP'] . "'");
header('Location: index1.php');
}
$result = mysqli_query($conn,"SELECT * FROM daftar_data WHERE NO_KTP='" . $_GET['NO_KTP'] . "'");
$data= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update</title>
</head>
<body>
    <CENTER>
    <h2>MASUKAN UPDATE DATA</h2>
</CENTER>
     <br>
    <br>
    <br>
    <br>
     <br>
    <br>
    
  
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<center>
NO_KTP: <br>
<input type="hidden" name="NO_KTP" class="txtField" value="<?php echo $data['NO_KTP']; ?>">
<input type="text" name="NO_KTP"  value="<?php echo $data['NO_KTP']; ?>">
<br>
NAMA: <br>
<input type="text" name="NAMA" class="txtField" value="<?php echo $data['NAMA']; ?>">
<br>
PROGRAM :<br>
<input type="text" name="PROGRAM" class="txtField" value="<?php echo $data['PROGRAM']; ?>">
<br>

<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</center>
</form>
</body>
</html>

<?php include "./parts/footer.php" ?>