<?php
	session_start();
		require_once('conn.php');
?>
<?php

	$userid = $_GET['userid']; // user id
	if(isset($userid)) {
		$q="DELETE FROM user where user_id=$userid";
		$q = strtolower($q);
			if(!$conn->query($q)){
				echo "DELETE failed. Error: ".$conn->error ;
		   }
		   $conn->close();
		   //redirect
		   header("Location:user.php");
	}
?>
