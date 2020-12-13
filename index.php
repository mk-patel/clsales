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
		
		
		

		.brand-style{
			 background-image:linear-gradient(to bottom,  #d1edff ,white);
		}
		.brands{
			color: #01153b;
			font-size: 23px;
			font-weight: 700;
			padding:20px 0px 0px 10px;
		}
		.cont-first-left{
			float: left;
			padding: 15px;
			width: 50%;
			height: auto;
		}
		.cont-first-left img{
			width: 200px;
			height: 200px;
		}
		.cont-sec-right{
			float: right;
			padding: 15px;
			width: 50%;
			height: auto;
		}
		.cont-sec-right img{
			width: 200px;
			height: 200px;
		}
		
		
		
		
		
		.services{
			
			background-image:linear-gradient(to bottom,white, #f5abf4 );
		}
		.services h3{
			font-size: 23px;
			color: #01153b;
			font-weight: 700;
			padding:30px 0px 0px 10px;
		}
		.qc{
			width: auto;
			background-color:#030057;
			border-radius: 3px;
			padding: 7px;
			color: white;
			font-size: 17px;
		}
		
		
		
		
		
		
		
		.thumbnail{
			border: 2px solid #ebfbff;
			border-radius: 5px;
			margin-top: 20px;
			background:#ebfbff;
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
			color: black;
		}
		.row{
			margin-top:10px;
			margin-left:20px;
			margin-right:20px;
		}

		@media screen and (max-width:1000px){
			
			.brand-img img{
				width: 200px;
				height: auto;
			}
			.cont-first-left img{
				width: 180px;
				height: 180px;
			}
			.cont-sec-right img{
				width: 180px;
				height: 180px;
			}
			.cont-first-left{
				float: left;
				padding: 15px;
				width: 98%;
				height: auto;
				text-align: center;
				margin-top: 15px;
			}
			.cont-sec-right{
				float: left;
				padding: 15px;
				width: 98%;
				height: auto;
				text-align: center;
				margin-top: 15px;
			}
		}
		@media screen and (max-width:700px){
			
			
			.brand-img img{
				width: 200px;
				height: auto;
			}
			.cont-first-left{
				float: left;
				padding: 15px;
				width: 97%;
				height: auto;
				margin-top: 15px;
			}
			.cont-sec-right{
				float: left;
				padding: 15px;
				width: 97%;
				height: auto;
				margin-top: 15px;
			}
			.cont-first-left img{
				width: 150px;
				height: 150px;
			}
			.cont-sec-right img{
				width: 150px;
				height: 150px;
			}
			.thumbnail{
				text-align: center;
				margin-left: 20px;
				margin-right: 20px;
			}    
			.thumbnail img{
				text-align: center;
				width:100%;
				height: auto;
			}
			.caption{
				margin-left: 10px;
				margin-right: 10px;
			}
		}
		@media screen and (max-width:575px){
			
			.brands{
				margin-top: 00px;
			}
			.cont-first-left{
				float: left;
				padding: 15px;
				width: 50%;
				height: auto;
				margin-top:0px;
			}
			.cont-sec-right{
				float: right;
				padding: 15px;
				width: 50%;
				height: auto;
				margin-top:0px;
			}
			.cont-first-left img{
				width: 150px;
				height: 150px;
			}
			.cont-sec-right img{
				width: 150px;
				height: 150px;
			}
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
			
		<div class="brand-style">
            <div class="brands">
                <p>Big Brands</p>
            </div>
			
            <div class="row">
                <div class="col-sm-6">
                    <a href="brandprod.php?brand=<?php echo $row["brandname"]; ?>">
					<?php
						if(!empty($row['brandname'])){
						?>
                        <div class="cont-first-left">
                            <img src="<?php echo $row["brandimg"]; ?>" alt="brand image"/>
                        </div>
						<?php
						}
						?>
                    </a>
                    <a href="brandprod.php?brand=<?php echo $row2["brandname"];?>">
						<?php
						if(!empty($row2['brandname'])){
						?>
						<div class="cont-sec-right">
                            <img src="<?php echo $row2["brandimg"]; ?>" alt="brand image"/>
                        </div>
						<?php
						}
						?>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="brandprod.php?brand=<?php echo $row3["brandname"]; ?>">
						<?php
						if(!empty($row3['brandname'])){
						?>
                        <div class="cont-first-left">
                            <img src="<?php echo $row3["brandimg"]; ?>" alt="brand image"/>
                        </div>
						<?php
						}
						?>
                    </a>
                    <a href="brandprod.php?brand=<?php echo $row4["brandname"]; ?>">
                        <?php
						if(!empty($row4['brandname'])){
						?>
						<div class="cont-sec-right">
                            <img src="<?php echo $row4["brandimg"]; ?>" alt="brand image"/>
                        </div>
						<?php
						}
						?>
                    </a>
                </div>
            </div>
			</div>
			
			
			<br/>

            <div class="row">
                <?php
                while($row5 = mysqli_fetch_assoc($result5))
                {
					if(!empty($row5['prodname'])){
						
                ?>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="prodesc.php?eid=<?php echo $row5['placeid'];?>">
						<div class="caption">
						
						<p class="info-prod"><?php echo $row5['prodname'];?></p>
						</div>
						
                            <img src="<?php echo $row5['prodimg'];?>" alt="Product Image">
                            <div class="caption">
                                <p>Rs. <del><?php echo $row5['actrate'];?> /-</del> | <mark>&nbsp;<?php echo $row5['discount'];?> %&nbsp;</mark><br/>
                                    <b>Rs. <?php echo $row5['effrate'];?> /- </b> Only<br/>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                }}
                ?>
            </div>
			<br/>
            <div class="row">
                <?php
                while($row6 = mysqli_fetch_assoc($result6))
                {
					if(!empty($row6['prodname'])){
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
                }}
                ?>
            </div>

        <br/>
        <br/>
        <div class="bottom">
            <div class="btm-elm">
                <a href="feedback.php"><u>Suggessions & Feedback</u></a> | <a href="about.html"><u>About</u></a>
            </div>
            <div class="last-line">
                All the concepts, ideas, way of presentation, contents & images are written & developed by Chhatrapal Patel.<br/>
                Version - 1.1.2 | Developer - Manish Patel
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
