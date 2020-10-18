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
if (isset($_POST['submit'])){
    $placeid = $mysqli->real_escape_string($_POST['placeid']);
    $brandname = $mysqli->real_escape_string($_POST['brandname']);
    date_default_timezone_set('Asia/Calcutta');
    $date1=date("d-m-Y");
    echo "<br>";
    echo "<br>";
    echo "Error";
    echo "<br>";
         $file = $_FILES['brandimg'];
         echo "<br>";
         echo "Error";
         echo "<br>";
         $fileName = $_FILES['brandimg']['name'];
         $fileTmpName = $_FILES['brandimg']['tmp_name'];
         $fileSize = $_FILES['brandimg']['size'];
         $fileError = $_FILES['brandimg']['error'];
         $fileType = $_FILES['brandimg']['type'];
         
         $fileExt = explode('.', $fileName);
         $fileActualExt = strtolower(end($fileExt));
         
         $allowed = array('jpg', 'png', 'jpeg','gif');
         
         if(in_array($fileActualExt, $allowed)){
             if($fileError === 0){
                 if($fileSize <14624616){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                   $ext = pathinfo($fileName, PATHINFO_EXTENSION);
					if($ext == "png" || $ext == "PNG"  || 
					   $ext == "jpg" || $ext == "ipeg" || 
					   $ext == "JPG" || $ext == "JPEG" ||
					   $ext == "gif" || $ext == "GIF"
					)
					if($ext == "jpg" ||$ext == "JPG" || $ext == "jpeg" || $ext == "JPEG")
					{
						$src = imagecreatefromjpeg($fileTmpName);
					}
					if($ext == "png" ||$ext == "PNG")
					{
						$src = imagecreatefrompng($fileTmpName);
					}
					if($ext == "gif" ||$ext == "GIF")
					{
						$src = imagecreatefromgif($fileTmpName);
					}
					
					list($width_min,$height_min) = getimagesize($fileTmpName);
					$newwidth_min=350;
					$newheight_min = ($height_min / $width_min)*$newwidth_min;
					$tmp_min = imagecreatetruecolor($newwidth_min, $newheight_min);
					imagecopyresampled($tmp_min, $src, 0,0,0,0,$newwidth_min, $newheight_min, $width_min , $height_min);
					$fileDestinatio  =  imagejpeg($tmp_min,"../images/".$fileNameNew,99);
					$fileDestination ='images/'.$fileNameNew;
				
					move_uploaded_file($fileTmpName, $fileDestinatio);
                    $sql = "update brands set brandname='$brandname',brandimg='$fileDestination',date1='$date1' where placeid='$placeid'";
                    mysqli_query($conn, $sql);
                    $_SESSION['message3'] = "Updated Successfully";
                    header('location:uploadbrands.php');
                 }else{
                    $_SESSION['message3'] =  "Too Big Image, Please Upload Image Under 600kb Size.";
                 }
             }else{
                $_SESSION['message3'] =  "Sorry! Something Went Wrong.";
             }
         }else{
            $_SESSION['message3'] =  "Warning ! You can not upload of this type of file.";
         }
        }else{
            $_SESSION['message3'] =  "Sorry! Something Went Wrong.";
        }
?>