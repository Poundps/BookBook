<!---------php_connect------------------------------>
<?php
	session_start();
	require_once('conn.php');



//---------php_Check_Regis&INSERT_DATA------------------------------//


$checkregistext="";
$checkregis="none";
if(isset($_POST['submitre'])) {
$email=$_POST['email'];
$usrname=$_POST['usrname'];
$psw=$_POST['psw'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$birth=$_POST['birth'];
$phone=$_POST['phone'];
$usertype="Member";


//////////////////////////Check_username&INSERT_USER//////////////////////////////
$c = "select * from user where user_name='".$usrname."'";
			if($result = $conn->query($c)){
				if($result->num_rows == 1){
				//echo "Cannot insert data";
			$checkregis="block";
			$checkregistext="*This username already exists. Please use a different username.";
				}
				else{
		///////////Inert_user///////////////////////////
					//echo "Can insert data";
					$q="INSERT INTO user (user_name,user_pass,user_firstname,user_lastname,user_gender,user_birth,user_phone,user_email,user_type)
					VALUES ('$usrname','$psw','$firstname','$lastname','$gender','$birth','$phone','$email','$usertype')";
					$result=$conn->query($q);
					if(!$result){
					  echo "INSERT failed. Error: ".$mysqli->error ;
					}
        	$a = "select * from user where user_name='".$usrname."' and user_pass='".$psw."'";
					if($result = $conn->query($a)){
						if($result->num_rows == 1){
							$row = $result->fetch_array();
							$_SESSION['user_id'] = $row['user_id'];
							$_SESSION['user_name'] =$row['user_name'];
							$_SESSION['user_pass'] =$row['user_pass'];
							$_SESSION['user_firstname'] =$row['user_firstname'];
							$_SESSION['user_lastname'] =$row['user_lastname'];
							$_SESSION['user_email'] =$row['user_email'];
							$_SESSION['user_gender'] =$row['user_gender'];
							$_SESSION['user_birth'] =$row['user_birth'];
							$_SESSION['user_phone'] =$row['user_phone'];
							$_SESSION['user_type'] =$row['user_type'];


						}

					}else{
						echo 'select failed: '.$conn->error;
					}
///////////////////////////autologin_after_regis/////////////////////
						$_SESSION['check_log'] ="true";
			}

			}else{
				echo 'select failed: '.$mysqli->error;
			}


}
/////////////////////////////////////////////////////////////////////

//---------php_Checklogin------------------------------------------//


 $display='none';
 $username= "";
 $passwd="";
 $user= "";
 $pass="";

	if (isset($_POST['submitlog'])){
	$username = $_POST['usrname'];
	$passwd = $_POST['psw'];

$a = "select * from user where user_name='".$username."' and user_pass='".$passwd."'";

	if($result = $conn->query($a)){
		if($result->num_rows == 1){
    	$row = $result->fetch_array();
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['user_name'] =$row['user_name'];
			$_SESSION['user_pass'] =$row['user_pass'];
			$_SESSION['user_firstname'] =$row['user_firstname'];
			$_SESSION['user_lastname'] =$row['user_lastname'];
			$_SESSION['user_email'] =$row['user_email'];
			$_SESSION['user_gender'] =$row['user_gender'];
			$_SESSION['user_birth'] =$row['user_birth'];
			$_SESSION['user_phone'] =$row['user_phone'];
			$_SESSION['user_type'] =$row['user_type'];
			if($_SESSION['user_type']=='Admin'){
			header("Location:Bookbookad.php");
			}


    }

	}else{
		echo 'select failed: '.$conn->error;
	}

$usernameC="";
if(isset($_SESSION['user_name'])){$usernameC=$_SESSION['user_name'];}
$passC="";
if(isset($_SESSION['user_pass'])){$passC=$_SESSION['user_pass'];}
  if($username == $usernameC && $passwd == $passC){
						$_SESSION['check_log'] ="true";

  	}else{
					 $display='block';
  				}
	}


//---------php_shoppingcartchecktotalinuser----------//

if (isset($_SESSION['user_id'] )) {
	$a = "select count(*) as total from shoppingcarts where book_username='".$_SESSION['user_name']."'";
	$result=$conn->query($a);
	$data=$result->fetch_assoc();
	$totalbook=$data['total'];
}
else {
$totalbook=0;
}
//---------php---------------------------------------//

//---------php_shoppingcartpeyment----------//
  $paydis="none";
	$payerrordis="none";
if(isset($_POST['payment'])){
	$cardname=$_POST['cardname'];
	$cardnumber=$_POST['cardnumber'];
	$expmonth=$_POST['expmonth'];
	$expyear=$_POST['expyear'];
	$cvv=$_POST['cvv'];
	$a = "select * from payment_cards where name_card='".$cardname."'";
		if($result = $conn->query($a)){
			if($result->num_rows == 1){
	    	$row = $result->fetch_array();
				$_SESSION['cards_id'] = $row['cards_id'];
				$_SESSION['name_card'] =$row['name_card'];
				$_SESSION['creditnum'] =$row['creditnum'];
				$_SESSION['expmonth'] =$row['expmonth'];
				$_SESSION['expyear'] =$row['expyear'];
				$_SESSION['cvv'] =$row['cvv'];
 }

		}else{
			echo 'select failed: '.$conn->error;
		}
		if(	$_SESSION['creditnum']==$cardnumber&&$_SESSION['name_card']==$cardname&&$_SESSION['expmonth']==$expmonth&&$_SESSION['expyear']==$expyear&&$_SESSION['cvv']==$cvv){
		$paydis="block";


		}
		else{$payerrordis="block";}
}
if(isset($_POST['closepay'])){

//////////////insertbooktolibrary/////////////////////////////////
$username=$_SESSION['user_name'];
	$i=0;
	$a = "select * from shoppingcarts where book_username='".	$_SESSION['user_name']."'";
		if($result=$conn->query($a)){
		while($row=$result->fetch_array()){
			$bookname[$i]=$row['book_name'];
			$bookimg[$i]=$row['book_dir'];
      $i++;
 }
 for($j=0;$j<$i;$j++){
	 			$q="INSERT INTO library (book_username,book_name,book_dir) VALUES ('$username','$bookname[$j]','$bookimg[$j]')";
	 		  $result=$conn->query($q);
	 		  if(!$result){
	 		    echo "INSERT failed. Error: ".$mysqli->error ;
	 		  }
 }
}
////////////////////////delete_cartinsqlafterpayment////////////////////////////////////
	$q="delete from shoppingcarts where book_username='" . $_SESSION['user_name'] . "'";
	$q = strtolower($q);
		if(!$conn->query($q)){
			echo "DELETE failed. Error: ".$conn->error;
		 }
		 $conn->close();

		header("Location:library.php");
}
?>
