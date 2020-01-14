<?php
	session_start();
		require_once('conn.php');
?>
<?php

	$bookid = $_GET['bookid']; // user id
	if(isset($bookid)) {
		$q="DELETE FROM shoppingcarts where shop_id=$bookid";
		$q = strtolower($q);
			if(!$conn->query($q)){
				echo "DELETE failed. Error: ".$conn->error ;
		   }
		   $conn->close();
		   //redirect
		   header("Location:shoppingcarts.php");
	}
?>
