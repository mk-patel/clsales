<?php
session_start();
$msg = $_SESSION["message1"];  
?>
<!Doctype html>
<html>
    <head>
    <meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
		<title>CL Sales - Product Description</title>
		<meta property="og:title" content="CL Sales">
		<meta name="description" content="This is Clsales website demonstratingand the products.">
		<meta property="og:description" content="This is Clsales website demonstratingand the products.">
		<meta name="keywords" content="clsales">
		<meta name="author" content="Manish Patel">
        <link rel="stylesheet" type="text/css" href="header.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
        <style>
            .container{
                margin-top: 20px;
            }
            .qc{
                width: 100%;
                border: 1px solid  rgb(0, 0, 0);
                background-color: rgb(255, 255, 255);
                border-radius: 5px;
                color: #19566b;
                padding: 10px;
                text-align: center;
                font-weight: 700;
                font-size: 15px;
                margin-left: 20px;
                margin-right: 20px;
                margin-bottom: 30px;
            }
            .qc1{
                width: 100%;
                border: 1px solid  rgb(0, 0, 0);
                background-color: lightblue;
                border-radius: 5px;
                color: #19566b;
                padding: 10px;
                text-align: center;
                font-weight: 700;
                font-size: 16px;
                margin-left: 20px;
                margin-right: 20px;
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background:;">
        <header class="d-flex justify-content-between bg-primary">
			<div class="header-title">
				CL Sales&nbsp;
			</div>
			<div class="header-pg-title">
				<b style="color:black;"> Product Description</b>
			</div>
			<div class="header-content">
				<button id="category" type="button" class="btn bg-primary" data-toggle="dropdown">Menu</button>
				<ul class="dropdown-menu">         
					<li><a class="dropdown-item" href="projects.php">Projects</a></li>
					<li class="divider"></li>
					<li><a class="dropdown-item" href="applications.php">Application</a></li>
					<li class="divider"></li>
					<li><a class="dropdown-item" href="aiarea.php">AI Area</a></li>
					<li class="divider"></li>
					<li><a class="dropdown-item" href="feedback.php">Feedback</a></li>
				</ul>
			</div>
		</header>
        <div class="container">
            <div class="row">
				<div class="qc1">
                    <?php echo $msg;?>
                </div>
            </div>
			<div class="row">
                <div class="qc">
                    Gauranteed | Quality Checked | Home Delivery
                </div>
            </div>
            <div class="row">
                <div class="qc">
                    समानों की गुणवत्ता और गारंटी की जानकारी के लिए कॉल या मेसेज करें - 7999106801
                </div>
            </div>
		</div>
	</body>
</html>