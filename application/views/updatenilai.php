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
mysqli_query($conn,"UPDATE nilai set nim='" . $_POST['nim'] . "',english='" . $_POST['NAMA'] . "', web='" . $_POST['PROGRAM'] .  "' WHERE nim='" . $_POST['nim'] . "'");
header('Location: index1.php');
}
$result = mysqli_query($conn,"SELECT * FROM nilai WHERE nim='" . $_GET['nim'] . "'");
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
<input type="hidden" name="nim" class="txtField" value="<?php echo $data['nim']; ?>">
<input type="text" name="nim"  value="<?php echo $data['nim']; ?>">
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