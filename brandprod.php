<?php
require 'db.php';

if(isset($_REQUEST["brand"]))
{
$brand=$_REQUEST["brand"];
}
$query="select * from products where brandname = '$brand'";
$result5 = mysqli_query($conn, $query);
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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
        <style>
		body{
			background:white;
			font-family: 'Work Sans', sans-serif;
		}
		
		header{
			width:100%;
			height:auto;
			padding:6px 6px 10px 0px;
			background:#030057;
		}
		.header-title{
			font-size:17px;
			color:darkorange;
			margin-left:10px;
			padding:8px 0px 2px 0px;
		}
		.after_header{
			width:100%;
			height:auto;
			padding:10px;
			color : white;
			background:#01153b;
		}
		.header-pg-title{
			font-size:16px;
			margin-top:8px;
		}
		.bottom{
			width:100%;
			height:auto;
			background:#030057;
		}
		.btm-elm{
			font-size:15px;
			padding:5px;
			margin-left:10px;
		}
		.btm-elm a{
			text-decoration:none;
			color:white;
			font-weight:700;
		}
		.last-line{
			font-size:11px;
			color:white;
			padding:5px;
			margin-left:10px;
		}	
		
		
            .container{
                margin-top: 20px;
            }
            .qc{
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
            .thumbnail{
                border: 2px solid rgb(236, 233, 233);
                border-radius: 5px;
                margin-top: 20px;
                box-shadow:2px 2px 10px 1px rgba(0,0,0,0.2);
            }
            .thumbnail img{
                width: 100%;
            }

            .caption {
                color:black;
                text-decoration: none;
                padding: 10px;
            }
            .info-prod{
                font-weight: 700;
                color: #19566b;
            }
        </style>
    </head>
    <body>
        <header class="d-flex justify-content-between">
			<div class="header-title">
				<b> <img src="images/logo.png" color="white" width="40px" height="20px"> &nbsp;CL Sales</b>
			</div>
			<div class="header-pg-title">
				<b style="color:white;margin-right:10px;"><img src="images/loc.png" color="white" width="15px" height="20px"> &nbsp;Deorbija</b>
			</div>
		</header>
		<div class="after_header">
		Gauranteed | Quality Checked | Home Delivery 
		</div>
        <div class="container">
            <div class="row">
                <?php
                while($row = mysqli_fetch_assoc($result5))
                {
                ?>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="prodesc.php?eid=<?php echo $row['placeid'];?>">
                            <img src="<?php echo $row['prodimg'];?>" alt="Product Image">
                            <div class="caption">
                            <p class="info-prod"><?php echo $row['prodname'];?></p>
                                <p>Rs. <del><?php echo $row['actrate'];?> /-</del> | <mark>&nbsp;<?php echo $row['discount'];?> %&nbsp;</mark><br/>
                                    <b>Rs. <?php echo $row['effrate'];?> /- </b> Only<br/>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <br/>
            <br/>
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
        <div class="bottom">
            <div class="btm-elm">
                <a href="feedback.php"><u>Suggessions & Feedback</u></a> | <a href="about.html"><u>About</u></a>
            </div>
            <div class="last-line">
                All the concepts, ideas, way of presentation, contents & images are written & developed by Chhatrapal Patel.<br/>
                Version - 1.1.2 | Developer - Manish Patel
            </div>
        </div>
    </body>
</html>
