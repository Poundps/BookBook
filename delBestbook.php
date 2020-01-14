<?php
	session_start();
		require_once('conn.php');
?>
<?php
  $booktype= $_GET['booktype'];
	$bookid = $_GET['id']; // user id
	if(isset($bookid)) {
    	$q = "update books set book_name='Empty', book_type='".$booktype."', book_price='0', book_dir='./Phtos/Photoinweb/empty.png'  where book_id=$bookid ";
			if(!$conn->query($q)){
				echo "UPDATE failed. Error: ".$conn->error ;
		   }
		   $conn->close();
		   //redirect
		  header("Location:BookBookad.php");
	}
?>
