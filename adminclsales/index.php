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
		<link rel="stylesheet" type="text/css" href="index.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
	</head>
	<body>
		<header class="d-flex justify-content-between bg-primary">
			<div class="header-title">
				<b>CL Sales&nbsp;</b>
			</div>
			<div class="header-pg-title">
				<b style="color:white;margin-right:15px;"> Sales & Services</b>
			</div>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1>Cl sales</h1>
					<h2>Manage things</h2>
				</div>
				<div class="col-sm-6">
					<p>Welcome Sir/Madam ! Login First</p>
				</div>
			</div>
			<hr/>
			<div class="row">
				<form class="form" action="process.php" method="POST">
					<div class="form-group">
						<label for="uname">Username:</label>
						<input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
					
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Login</button>
					</div>
				</form>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>