<!---------php_connect------------------------------>
<?php
	session_start();
	require_once('conn.php');

?>
<!--------------------------------------------------->
<?php
$username=$_SESSION['user_name'];
$id = $_GET['id'];
  if(isset($_SESSION['user_name'])){
    $a="SELECT * from books WHERE book_id = $id;";
     if($result=$conn->query($a)){
       while ($row=$result->fetch_array()){
          $bookname=$row['book_name'];
          $bookprice=$row['book_price'];
          $bookimg=$row['book_dir'];
  }
}
  if(!$result){
    echo "Select failed. Error: ".$mysqli->error ;
  }
  $c = "select * from shoppingcarts where book_name='".$bookname."' and book_username='".$username."'";
  if($result = $conn->query($c)){
  if($result->num_rows == 1){
header('Location: BookBook.php');
}
else {
  $username=$_SESSION['user_name'];
  $q="INSERT INTO shoppingcarts (book_username,book_name,book_price,book_dir) VALUES ('$username','$bookname','$bookprice','$bookimg')";
  $q = strtolower($q);
  $result=$conn->query($q);
  if(!$result){
    echo "INSERT failed. Error: ".$mysqli->error ;
  }
}
}


}
header('Location: BookBook.php');


  ?>
