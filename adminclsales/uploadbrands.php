<?php
session_start();
require 'db.php';
$user=$_SESSION["username"];
$password=$_SESSION["password"];
$query="select * from users where username='$user' and password='$password'";
$result = mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);
$un = $row["username"];
$pass = $row["password"];
if(empty($user) || empty($password)){
       header("location: index.php");
         exit();
	}else{
if ($_SESSION["username"] == $row["username"])
	
	{
	}else{
		header("location: index.php");
        exit();
	}
 if ($password == $row["password"])
 {
 }else{
         header("location: index.php");
         exit();
 }
}	
?>
<?php
	if(empty($_SESSION['message3'])){
		$msg="Update Brand";
	}
	else{
		$msg = $_SESSION['message3'];
	}
?>
<?php
require 'db.php';
$query="select * from brands";
$result = mysqli_query($conn, $query);
?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
    <title>CL Sales</title>
    <meta property="og:title" content="CL Sales">
    <meta name="description" content="This is Clsales website demonstratingand the products.">
    <meta property="og:description" content="This is Clsales website demonstratingand the products.">
    <meta name="keywords" content="clsales">
    <meta name="author" content="Manish Patel">
    <link rel="stylesheet" type="text/css" href="../header.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
    <style>
			.container{
				margin-top: 20px;
				margin-left: 10px;
				margin-right: 10px;
			}
			.row{
				margin-left: 10px;
				margin-right: 10px;
			}
			.row h1{
				font-size: 25px;
				color: darkblue;
			}
			.form{
        width:100%;
				margin-left: 10px;
				margin-right: 10px;
			}
		</style>
  </head>
  <body>
    <header class="d-flex justify-content-between bg-primary">
			<div class="header-title">
				<b>CL Sales&nbsp;</b>
			</div>
			<div class="header-pg-title">
				<b style="color:white;">Wlcm <?php echo $user; ?></b>
			</div>
			<div class="header-pg-title">
				<b style="color:white;margin-right:15px;"> Sales & Services</b>
			</div>
		</header>
    <div class="container">
      <div class="row">
        <h1><?php echo $msg ;?></h1>
      </div>
      <div class="row">
        <form class="form" action="insertbrands.php" method="POST" enctype="multipart/form-data" autocomplete="on">
          <div class="form-group">
            <label for="text">Place No. :</label>
            <select class="custom-select" name="placeid" required>
              <option selected>1</option>
              <?php
              while($row=mysqli_fetch_assoc($result))
              {
              ?>
                  <option value="<?php echo $row["placeid"]; ?>"><?php echo $row["placeid"]; ?></option>
                  
              <?php 
              }
              ?>  
            </select>
          </div>
          <div class="form-group">
            <label for="text">Brand Name :</label>
                <input type="text" class="form-control" id="username" name="brandname">
          </div>
          <div class="form-group">
            <label for="file">Photo:</label>
              <input type="file" class="form-control" id="file" name="brandimg">
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-warning">Submit</button>
          </div>
            <p style="margin-top:5px;">Submit करने के बाद प्रतीक्षा करें।</p>
        </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>