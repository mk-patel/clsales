<?php
require 'db.php';
$query="select * from brands where placeid='1'";
$result = mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);
$query2="select * from brands where placeid='2'";
$result2 = mysqli_query($conn, $query2);
$row2=mysqli_fetch_assoc($result2);
$query3="select * from brands where placeid='3'";
$result3 = mysqli_query($conn, $query3);
$row3=mysqli_fetch_assoc($result3);
$query4="select * from brands where placeid='4'";
$result4 = mysqli_query($conn, $query4);
$row4=mysqli_fetch_assoc($result4);
$query5="select * from products limit 0,4";
$result5 = mysqli_query($conn, $query5);
$query6="select * from products limit 4,8";
$result6 = mysqli_query($conn, $query6);
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
        <link rel="stylesheet" type="text/css" href="header.css"/>
        <link rel="stylesheet" type="text/css" href="./index.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
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
                <img class="img-fluid ban" src="images/ban1.jpg" alt="Refresh to view the image">
            </div>
            <div class="row">
                <img class="img-fluid mobban" src="images/mobban1.jpg" alt="Refresh to view the image">
            </div>
            <div class="brands">
                <p>Big Brands</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="brandprod.php?brand=<?php echo $row["brandname"]; ?>">
                        <div class="cont-first-left">
                            <img src="<?php echo $row["brandimg"]; ?>" alt="brand image"/>
                        </div>
                    </a>
                    <a href="brandprod.php?brand=<?php echo $row2["brandname"]; ?>">
                        <div class="cont-sec-right">
                            <img src="<?php echo $row2["brandimg"]; ?>" alt="brand image"/>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="brandprod.php?brand=<?php echo $row3["brandname"]; ?>">
                        <div class="cont-first-left">
                            <img src="<?php echo $row3["brandimg"]; ?>" alt="brand image"/>
                        </div>
                    </a>
                    <a href="brandprod.php?brand=<?php echo $row4["brandname"]; ?>">
                        <div class="cont-sec-right">
                            <img src="<?php echo $row4["brandimg"]; ?>" alt="brand image"/>
                        </div>
                    </a>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                    <div class="services">
                        <h3>Services From Clsales</h3>
                        <div class="qc">
                            Gauranteed | Quality Checked | Home Delivery
                        </div>
                        <div class="qc">
                        समानों की गुणवत्ता और गारंटी की जानकारी के लिए कॉल या मेसेज करें - 7999106801
                        </div>
                    </div>
            </div>
            <div class="features">
                <p>Free Home Delivery</p>
            </div>
            <div class="row">
                <?php
                while($row5 = mysqli_fetch_assoc($result5))
                {
                ?>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="prodesc.php?eid=<?php echo $row5['placeid'];?>">
                            <img src="<?php echo $row5['prodimg'];?>" alt="Product Image">
                            <div class="caption">
                            <p class="info-prod"><?php echo $row5['prodname'];?></p>
                                <p>Rs. <del><?php echo $row5['actrate'];?> /-</del> | <mark>&nbsp;<?php echo $row5['discount'];?> %&nbsp;</mark><br/>
                                    <b>Rs. <?php echo $row5['effrate'];?> /- </b> Only<br/>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <hr/>
            <div class="features">
                <p>Free Home Delivery</p>
            </div>
            <div class="row">
                <?php
                while($row6 = mysqli_fetch_assoc($result6))
                {
                ?>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="prodesc.php?eid=<?php echo $row6['placeid'];?>">
                            <img src="<?php echo $row6['prodimg'];?>" alt="Product Image">
                            <div class="caption">
                            <p class="info-prod"><?php echo $row6['prodname'];?></p>
                                <p>Rs. <del><?php echo $row6['actrate'];?> /-</del> | <mark>&nbsp;<?php echo $row6['discount'];?> %&nbsp;</mark><br/>
                                    <b>Rs. <?php echo $row6['effrate'];?> /- </b> Only<br/>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <br/>
        <br/>
        <div class="bottom">
            <div class="btm-elm">
                <a href="feedback.php">Suggessions & Feedback</a> | <a href="about.html">About</a>
            </div>
            <div class="last-line">
                All the concepts, ideas, way of presentation, contents & images are written & developed by Chhatrapal Patel.<br/>
                Version - 1.0.0 | Developer - Manish Patel
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>