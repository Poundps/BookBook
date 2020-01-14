<!---------php_connect------------------------------>
<?php
	require_once('conn.php');
  if(isset($_GET['bookid']) && isset($_GET['bestid'])){
		$booktype=$_GET['booktype'];
    $bookid=$_GET['bookid'];
    $bestbookid=$_GET['bestid'];
//////////////////////////เอาข้อมูลหนังสือที่เราเลือก/////////////
$a = "select * from books where book_id='".$bookid."'";
  if($result = $conn->query($a)){
    while ($row=$result->fetch_array()){
      $q = "update books set book_name='".$row['book_name']."', book_type='".$booktype."', book_price='".$row['book_price']."', book_dir='".$row['book_dir']."'  where book_id=$bestbookid ";
      if(!$conn->query($q)){
        echo "UPDATE failed. Error: ".$conn->error ;
       }
       $conn->close();
      header("Location:BookBookad.php");
}

  }else{
    echo 'select failed: '.$conn->error;
  }

}
else{
  echo "error recive";
}
  ?>
