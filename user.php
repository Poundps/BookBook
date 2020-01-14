<?php
include 'phpcode.php';
include 'phpcodead.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>BookBook</title>
<link rel="stylesheet" href="Mystyle.css">
<link rel="stylesheet" href="login.css">

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
          <button class="w3-btn-block w3-section w3-padding" type="submit" style="background-color:#3cff00; color:black;" name="submitlog" onclick="Check();">Login</button>

          	<button style="font-weight:bold;" onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none';" class="btn" >Register??</button>
                <br>


        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red" style="width:80px; float:left">Cancel</button>

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
							<button class="w3-btn-block w3-section w3-padding" type="submit" style="background-color:#3cff00; color:black;" name="submitlog" onclick="Check();">Login</button>

							 <button style="font-weight:bold;" onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none';" class="btn" >Register??</button>
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
<div class="content2">
 <div class="main2">
  <div class="box">


<!--////////////////////////Novel////////////////////////////////-->
<h2><p style="margin-left: 20px;">USER</p></h2>
 <hr >
 <div class="Recommend">

<table>
<tr>
  <th>
    <label>USERNAME</label>
  </th>
  <th>
    <label>FIRSTNAME</label>
  </th>
  <th>
    <label>LASTNAME</label>
  </th>
  <th>
    <label>GENDER</label>
  </th>
  <th>
    <label>BIRTH</label>
  </th>
  <th>
    <label>EMAIL</label>
  </th>
  <th>
    <label>PHONE</label>
  </th>
    <th>

  </th>
</tr>
<?php
        $a="SELECT * from user WHERE user_type='Member';";

                  if($result=$conn->query($a)){
                  while ($row=$result->fetch_array()){
echo "<tr>";
  echo "<th>";
  echo "<a href='History.php?username=".$row['user_name']."'><label>".$row['user_name']."</label></a>";
  echo "</th>";
  echo "<th>";
  echo "<label>".$row['user_firstname']."</label>";
  echo "</th>";
  echo "<th>";
  echo "<label>".$row['user_lastname']."</label>";
  echo "</th>";
  echo "<th>";
  echo "<label>".$row['user_gender']."</label>";
  echo "</th>";
  echo "<th>";
  echo "<label>".$row['user_birth']."</label>";
  echo "</th>";
  echo "<th>";
  echo "<label>".$row['user_email']."</label>";
  echo "</th>";
  echo "<th>";
  echo "<label>".$row['user_phone']."</label>";
  echo "</th>";
  echo "<th>";
  echo "<a href='del_user.php?userid=".$row['user_id']."'>";
  echo '<img src="Phtos/trash.png" width="40px" height="40px;">';
  echo "</a>";
  echo "</th>";
echo "</tr>";
}
}?>
</table>
 </div>

</div>
</div>

<div class="footer2">
  <center style="margin-top:30px;color:black;font-weight:bold;"><text >Reference website from <a href="https://www.ookbee.com">www.ookbee.com</a></text></center>
</div>
</div>
<?php }
else{
echo "You don't have permission!!!!";
}?>
</body>
</html>
