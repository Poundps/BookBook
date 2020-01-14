<?php include 'phpcode.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>BookBook</title>
<link rel="stylesheet" href="Mystyle.css">
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-1.9.1.min.js"></script>
<script src="jquery.cycle.all.js"></script>
<script type="text/javascript"  src="Slider_Product.js" charset="utf-8"></script>
<script type="text/javascript">
$('#slider').cycle({
    fx:     'scrollHorz',
    speed:  'slow',

    next:   '#next',
    prev:   '#prev'

});

</script>

    </head>
    <body>

<?php if($_SESSION['user_type']=="Admin"){?>
<header>

  <!--//////////////popuppp///////////////////////////////////////////-->
  <div id="incontent">


  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      <h1 style="font-weight:bold;">  BOOKBOOK</h1>
       </div>

      <form class="w3-container" action="bookbook.php" method="post" >
        <div class="w3-section">
          <label style="float:left;"><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>

          <label style="float:left;"><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
          <button class="w3-btn-block w3-section w3-padding" type="submit" style="background-color:#3cff00; color:black;" name="submitlog" >Login</button>

          	<button style="font-weight:bold;" onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none';" class="btn" >Register??</button>
                <br>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me

        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red" style="width:80px; float:left">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

  </div>
  </div>

  <div id="id02"  style="display:<?php echo $checkregis?>;" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:400px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      <h1 style="font-weight:bold;"> Registration</h1>
       </div>

      <form class="w3-container" action="bookbook.php" method="post" >
        <div class="w3-section">
          <label style="float:left;"><b>Email</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Email" name="email" required>

          <label style="float:left;"><b>Username</b><br> <text style="color:red; font-size:12px;"><?php echo $checkregistext; ?></text></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>

          <label style="float:left;"><b>Password</b></label>
          <input class="w3-input w3-border  w3-margin-bottom" type="password" placeholder="Enter Password" name="psw" required>

          <label style="float:left;"><b>Firstname</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Firstname" name="firstname" required>

          <label style="float:left;"><b>Lastname</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Lastname" name="lastname" required>

          <label style="float:left;"><b>Gender</b></label>
          <br>
          <div  class=" w3-margin-bottom" >
          <input type="radio" placeholder="Enter Username" name="gender" value="Male" required >Male
          <input  type="radio" placeholder="Enter Username" name="gender" value="Female" required>Female
          <input type="radio" placeholder="Enter Username" name="gender" value="Others" required>Others
        </div>

          <label style="float:left;"><b>Date of Birth.</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="date"  name="birth" required>

          <label style="float:left;"><b>Phone</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Phone" name="phone" required>


          <button class="w3-btn-block w3-section w3-padding" type="submit" style="background-color:#3cff00; color:black;" name="submitre">Register</button>
         </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-btn w3-red" style="width:80px; float:left">Cancel</button>
        <span class="w3-right "><button class="w3-btn" type="submit" onclick="document.getElementById('id01').style.display='block';document.getElementById('id02').style.display='none';" style="background-color:#3cff00; color:black;">Login</button></span>
      </div>

  </div>
  </div>

  <div id="id03" style="display:<?php echo $display?>;"class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id03').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
        <img src="Phtos/error.png" width="60px" height="60px;">
      <h2 style="font-weight:bold; color:#f44336;"><labe>Wrong Username or Password!</label></h2>
       </div>

      <div class="w3-container">
        <div class="w3-section">



          	<button style="font-weight:bold;" onclick="document.getElementById('id02').style.display='block';document.getElementById('id03').style.display='none';" class="btn" >Register??</button>

        </div>
      </div>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id03').style.display='none'" type="button" class="w3-btn w3-red" style="width:80px; float:left">Cancel</button>
        <button class="w3-btn "  onclick="document.getElementById('id01').style.display='block';document.getElementById('id03').style.display='none';" type="submit" style="background-color:#3cff00; color:black; margin-left:5px;">Login</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

  </div>
  </div>

	<div id="buylog" style="display:<?php echo $checklog?> ;" class="w3-modal">
		<div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

			<div class="w3-center"><br>
				<span onclick="document.getElementById('buylog').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
			<h1 style="font-weight:bold;">  BOOKBOOK</h1>
			 </div>

			<form class="w3-container" action="bookbook.php" method="post" >
				<div class="w3-section">
					<label style="float:left;"><b>Username</b></label>
					<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>

					<label style="float:left;"><b>Password</b></label>
					<input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
					<button class="w3-btn-block w3-section w3-padding" type="submit" style="background-color:#3cff00; color:black;" name="submitlog" >Login</button>

					 <button style="font-weight:bold;" onclick="document.getElementById('id02').style.display='block';document.getElementById('buylog').style.display='none';" class="btn" >Register??</button>
								<br>
					<input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me

				</div>

      </form>
			<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
				<button onclick="document.getElementById('buylog').style.display='none'" type="button" class="w3-btn w3-red" style="width:80px; float:left">Cancel</button>
				<span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
			</div>

	</div>
	</div>

	<div id="addsuccess" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('addsuccess').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
        <img src="Phtos/correct.png" width="60px" height="70px;">
      <h2 style="font-weight:bold; color:#41AD49;"><labe>Added to cart</label></h2>
       </div>


      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('addsuccess').style.display='none'" type="button" class="w3-btn w3-red" style="width:80px; float:left">Cancel</button>

        <span class="w3-right w3-padding w3-hide-small"><a href="#"> <button class="w3-btn "  onclick="document.getElementById('id01').style.display='block';document.getElementById('id03').style.display='none';" type="submit" style="background-color:#41AD49; color:white; margin-left:5px;">Payment</button></a></span>
      </div>

  </div>
  </div>

  <div id="payment" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('payment').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>

      <h2 style="font-weight:bold;"><labe>BOOKBOOK</label></h2>
       </div>
       <form class="w3-container" action="Shoppingcarts.php" method="post" >
 				<div class="w3-section w3-light-grey">
            <div class="col-50">
          <h3 style="font-weight:bold;"><labe>Payment</label></h3>
          <label for="fname">Accepted Cards</label>
          <div class="icon-container">
            <i class="fa fa-cc-visa" style="color:navy;"></i>
            <i class="fa fa-cc-amex" style="color:blue;"></i>
            <i class="fa fa-cc-mastercard" style="color:red;"></i>
            <i class="fa fa-cc-discover" style="color:orange;"></i>
          </div>
            <label style="margin-right:32px;"for="cname">Name on Card:</label>
            <input style="margin-bottom:10px;"type="text" id="cname" name="cardname" placeholder="John More Doe">
            <br>
            <label style="margin-bottom:10px;"for="ccnum">Credit card number:</label>
            <input style="margin-bottom:10px;"type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                <br>
            <label style="margin-bottom:10px;"for="expmonth">Exp Month:</label>
            <input style="margin-bottom:10px;"type="text" id="expmonth" name="expmonth" placeholder="September">
          <label style="margin-bottom:10px;"for="expyear">Exp Year:</label>
                <input style="margin-bottom:10px;"type="text" id="expyear" name="expyear" placeholder="2019">
                  <br>
                <label style="margin-bottom:10px;" for="cvv">CVV:</label>
                <input style="margin-bottom:10px;" type="text" id="cvv" name="cvv" placeholder="352">

         </div>
          <input type="submit" class="btn" name='payment' style="width:100%;height:50px;background-color:#41AD49; color:white;" value='Payment'/>
 				</div>

       </form>
      </div>

  </div>
  </div>

  <div id="paysuccess" style="display:<?php echo $paydis;?> ;" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('paysuccess').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
        <img src="Phtos/correct.png" width="60px" height="70px;">
      <h2 style="font-weight:bold; color:#41AD49;"><labe>Payment successful!</label></h2>
       </div>


      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <form action='Shoppingcarts.php' method="post"><button type="submit" name="closepay" class="w3-btn w3-red w3-right" style="width:80px; float:left">Close</button> </form>

      </div>

  </div>
  </div>

  <div id="payerror" style="display:<?php echo $payerrordis?> ;" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('payerror').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
        <img src="Phtos/error.png" width="60px" height="60px;">
      <h2 style="font-weight:bold; color:#f44336;"><labe>Payment fail!</label></h2>
       </div>


      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('payerror').style.display='none'" type="button" class="w3-btn w3-red w3-right" style="width:80px; float:left">Cancel</button>

      </div>

  </div>
  </div>
  </div>
  <!--/////////////////////////////////////////////////////////-->

<div class="header">
	<div class="headup">
    <div class="headup-right">
	   <label style="float:left; ">Customer Support:191 |</label>
     <?php
        echo '<div class="dropdown3">';
        echo "<button style='float:right; font-weight:bold;'class='btn' >"."Ad.".$_SESSION['user_firstname']."<l><img style='margin:0; margin-left:2px;' src='.\Phtos\drop-down-arrow.png' width='15px' height='15px'></i>"."</button>";
        echo '<div class="dropdown-content3">';
        echo '<a href="user.php">User </a>';
        echo '<a href="logout.php">Logout</a>';
        echo '</div>';
      echo '</div>';
      ?>

		<!--<button style="float:right; font-weight:bold;" onclick="document.getElementById('id01').style.display='block'" class="btn" >LOGIN</button>-->
    </div>
		</div>
    <div class="head">
		<a href="bookbookad.php">	<p style="color: black; margin-left: 20%; margin-top: 20px; font-size: 30px;font-weight: bold;">BOOKBOOK</p></a>

    <div class="nav">
        <div class="menu">
          <ul style="margin-top: 0px; margin-left:-50px;">
              <li><a href="BookAd.php">Book</a></li>
              <li><a href="NovelAd.php">Novel</a></li>
              <li><a href="ComicAd.php">Comic</a></li>
              <li><a href="MagazineAd.php">Magazine</a></li>
              <li><a href="NewspaperAd.php">Newspaper</a></li>
                <li><a href="AddBook.php">AddBook</a></li>
        </ul>
        </div>
    </div>
	</div>
</div>
		</header>
<!--////////////////////-->

 <div class="main2">
  <div class="box">




<div class="cart" style="margin-top:40px;">
	 <?php
$totalbook=0;
$username=$_GET['username'];
$count=1;
				$a = "select * from library where book_username='".$username."'";
        	if($result=$conn->query($a)){
					while ($row=$result->fetch_array()){
            echo "<div class='product'>";
            echo '<img src="'.$row['book_dir'].'" width="180px" height="200px">';
            echo "<p>".$count.".".$row['book_name']."</p>";
            echo  "</div>";
        $totalbook++;
        $count++;

			 }
		}
?>
</div>
</div>
</div>
<?php  if($totalbook<5){   ?>
<div class="footer2">
  <center style="margin-top:30px;color:black;font-weight:bold;"><text >Reference website from <a href="https://www.ookbee.com">www.ookbee.com</a></text></center>
</div><?php }
else{?>
<div class="footer">
  <center style="margin-top:30px;color:black;font-weight:bold;"><text >Reference website from <a href="https://www.ookbee.com">www.ookbee.com</a></text></center>
</div><?php }?>
<?php }
else{
echo "You don't have permission!!!!";
}?>
</body>
</html>
