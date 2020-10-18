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
				margin-left: 20px;
				margin-right: 10px;
			}
			.row h1{
				font-size: 25px;
				color: darkblue;
			}
			.box{
				width:100%;
				border:1px solid black;
				color:black;
				padding:5px;
				margin-top: 20px;
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
				<h1>Feedbacks</h1>
			</div>
			<div class="row">
				<?php
				$query="select * from feedback order by id desc";
				$result = mysqli_query($conn,$query);
				$rowcount1=mysqli_num_rows($result);
				?>
				<?php
				while($row2 = mysqli_fetch_assoc($result))
				{
				?>
					<div class="box">
						<h4>Name : <?php echo htmlspecialchars($row2["name"], ENT_QUOTES, 'UTF-8');?></h4>
						<hr/>
						<p> Mobile : <?php echo htmlspecialchars($row2["mobile"], ENT_QUOTES, 'UTF-8'); ?></p>
						<hr/>
						<p> Mobile : <?php echo htmlspecialchars($row2["content"], ENT_QUOTES, 'UTF-8'); ?></p>
						<hr/>
						<p> Date : <?php echo htmlspecialchars($row2["date"], ENT_QUOTES, 'UTF-8'); ?></p>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</body>
</html>