




<?php include "./parts/head.php" ?>
<?php include "./parts/navbar-dashboard.php" ?>
 <br>
 <br>
 



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
    font-size: 15px;
}
body{
  background-image: url("images/5.jpg");
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <form action="codosen.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
          <label for="username">Username</label>
                <input class="form-control" type="text"  name="username" type="text" id="username"/>
        </div>
        <div class="form-group">
              <label for="password">Password</label>
                <input class="form-control" type="password" name="password" type="password" id="password" />
        </div>
        <div class="form-group">
            <input type="submit"  class="btn btn-success btn-block" name="Submit" value="Login" />
        </div>
       
</body>
</html>