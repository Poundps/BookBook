<!---------php_connect------------------------------>
<?php
	require_once('conn.php');
	$bestbookid="";
  if(isset($_GET['Bestid'])){$bestbookid=$_GET['Bestid'];}
	$booktype="";
	if(isset($_GET['Bestid'])){$booktype=$_GET['booktype'];}

if(isset($_POST['booksub'])){
$bookname=$_POST['bookname'];
$booktype=$_POST['booktype'];
$bookprice=$_POST['bookprice'];
$bookimg=$_FILES['bookimg']['name'];

$a="INSERT INTO books (book_name,book_type,book_price,book_dir) VALUES ('$bookname','$booktype','$bookprice','./Phtos/Photoinweb/$bookimg')";
 if($conn->query($a)){
	move_uploaded_file($_FILES['bookimg']['tmp_name'],"Phtos/Photoinweb/$bookimg");
	 echo  "<script>alert('Image Has Been Uploaded to Folder')</script>";
 }
 else{
	  echo  "<script>alert('Image Does Not Upload To Folder')</script>";
 }
}

if(isset($_POST['upbooksub'])){
$bookid=$_POST['bookid'];
$bookname=$_POST['bookname'];
$booktype=$_POST['booktype'];
$bookprice=$_POST['bookprice'];


$q = "update books set book_name='".$bookname."', book_type='".$booktype."', book_price='".$bookprice."' where book_id=$bookid ";
if(!$conn->query($q)){
	echo "UPDATE failed. Error: ".$conn->error ;
 }
 $conn->close();
 //redirect
//header("Location:BookBookad.php");
}
  ?>
