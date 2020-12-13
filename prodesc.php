<?php
require 'db.php';
session_start();
if (isset($_POST['submit'])) {
    $prodname = $mysqli->real_escape_string($_POST['prodname']);
    $placeid = $mysqli->real_escape_string($_POST['placeid']);
    $name = $mysqli->real_escape_string($_POST['name']);
    $village = $mysqli->real_escape_string($_POST['village']);
    $pincode = $mysqli->real_escape_string($_POST['pincode']);
	$address = $mysqli->real_escape_string($_POST['address']);
    $mobile = $mysqli->real_escape_string($_POST['mobile']);
    $status = "NA";
	date_default_timezone_set('Asia/Calcutta');
	$date=date("Y-m-d H:i a");
	if(empty($name) || empty($village) || empty($address) || empty($mobile) ){
		echo "<br>";
        echo "<center style='color:red;font-weight:700;'>Warning! Empty FIELDS not VALID !!!</center>";
        echo "<br>";
    }
	else{
		$sql1 = "INSERT INTO orders (prodname,placeid,name,village,pincode,address,mobile,date,status) VALUES ('$prodname','$placeid','$name', '$village', '$pincode' , '$address', '$mobile','$date','$status')";
                $result1 = mysqli_query($conn, $sql1);
                $_SESSION["message1"]="Successfully placed your order.";
                header('location:orderplaced.php');
        }
 }   

if(isset($_REQUEST["eid"]))
{
$eid=$_REQUEST["eid"];
}
$query="select * from products where placeid=$eid";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
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
            .prodhead h1{
                font-size:25px;
                color:#19566b;
                padding:5px;
                margin-top:10px;
            }
            .prodhead p{
                padding:5px;
                margin-top:10px;
            }
            .prodhead h2{
                font-size:25px;
                color:grey;
                padding:5px;
                margin-top:10px;
            }
            .form{
                width:100%;
                margin-left:20px;
                margin-right:20px;
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
            }#hide{
                display:none;
            }
        </style>
    </head>
    <body style="background:;">
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
                <div class="col-sm-6">
                    <img class="img-responsive img-thumbnail"  src="<?php echo $row['prodimg'];?>"/>
                </div>
                
                <div class="col-sm-6 prodhead">
                    <h1><?php echo $row['prodname'];?></h1>
                    <p><?php echo $row['brandname'];?></p>
                    <p><?php echo nl2br(str_replace(" ", "&nbsp;", $row['shortdesc']));?></p>
                    <p>Rs. <del><?php echo $row['actrate'];?> /-</del> | <mark>&nbsp;<?php echo $row['discount'];?> %&nbsp;</mark><br/>
                                    <b>Rs. <?php echo $row['effrate'];?> /- </b> Only
                                </p>
                                <hr/>
                        <p><?php echo nl2br(str_replace(" ", "&nbsp;", $row['fulldesc']));?></p>
                        <p><b><?php echo nl2br(str_replace(" ", "&nbsp;", $row['offers']));?></b></p>
                        <p>समानों की गुणवत्ता और गारंटी की जानकारी के लिए कॉल या मेसेज करें - 7999106801</p>
                </div>
            </div>
            <hr/>
            <div class="row">
               
            </div>
            <div class="row">
                <div class="qc1">
                    Book Your Order
                </div>
            </div>
            <div class="row">
                <form class="form" action="prodesc.php" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <input type="hide" class="form-control" id="hide" value="<?php echo $row['prodname'];?>" name="prodname" required>
                        <input type="hide" class="form-control" id="hide" value="<?php echo $row['placeid'];?>" name="placeid" required>
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="username" placeholder="Full Name" name="name" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="village">Village/City</label>
                        <input type="text" class="form-control" id="uname" placeholder="Village/City" name="village" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="village">Pincode</label>
                        <input type="text" class="form-control" id="uname" placeholder="Pincode" name="pincode" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="pata">Address</label>
                        <input type="text" class="form-control" id="uname" placeholder="Address" name="address" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile No. </label>
                        <input type="text" class="form-control" id="uname" placeholder="Mobile No." name="mobile" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Book</button>
                    </div>
                </form>
            </div>
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
