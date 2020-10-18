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
        <link rel="stylesheet" type="text/css" href="header.css"/>
        <link rel="stylesheet" type="text/css" href="./index.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
    <style>
body{
background:white;
font-family: 'Work Sans', sans-serif;
}
header{
width:100%;
height:40px;
background:grey;
}
.header-img{
float:left;
margin-left:10px;
width:120px;
height:40px;
line-height:40px;
font-size:15px;
font-weight:700;
color:white;
}
.header-img img{
width:40px;
height:40px;
border:1px solid white;
border-radius:50%;
}
.header-content{
float:right;
margin-right:10px;
width:110px;
height:40px;
}
.header-content img{
width:40px;
height:40px;
border:1px solid white;
border-radius:50%;
}
#category{
margin-top:5px;
}
.dropdown-item{
color:darkorange;
font-size:13px;
font-weight:700;
}
.row{
margin-top:10px;
}
.btn{
font-size:12px;
font-weight:700;
padding:5px;
}


</style>
</head>
    <body>
        <header class="d-flex justify-content-between bg-primary">
			<div class="header-title">
				<b>CL Sales&nbsp;</b>
			</div>
			<div class="header-pg-title">
				<b style="color:white;margin-right:10px;"> Sales & Services</b>
			</div>
		</header>
        <div class="container">
            <div class="row">
Suggessions & Feedback
<hr style="border:2px solid green">
  </div>

  <?php
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$title = $mysqli->real_escape_string($_POST['name']);
	$content = $mysqli->real_escape_string($_POST['content']);
  $mobile = $mysqli->real_escape_string($_POST['mobile']);
	$dt2=date("Y-m-d H:i:s");
		
	$sql = "INSERT INTO feedback(name,content,mobile,date)"
                    . "VALUES('$title','$content','$mobile','$dt2')";	
	mysqli_query($conn,$sql);
    echo "<br>";
    echo "<center style='color:green;'>Thankyou For Your Feedback.</center>";	
    echo "<br>";
    echo "<br>";echo "<br>";
}

?>

<div class="d-flex justify-content-center">
<div class="container">
 <form class="form" action="feedback.php" method="post" enctype="multipart/form-data" autocomplete="off">

<div class="form-group">
<label for="text">Your Name :</label>
    <input type="text" class="form-control" id="username" placeholder="Your Name " name="name" required>
</div>
<div class="form-group">
<label for="comment">Feedback / Report :</label>
  <textarea class="form-control" rows="7" id="comment" name="content" required></textarea>
</div>

<div class="form-group">
<label for="text">Your Mobile Number :</label>
<input type="text" class="form-control" id="username" placeholder="Mobile Number " name="mobile" required>

</div>
  
<button type="submit" name="submit" class="btn btn-warning">Submit</button>

</form>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>