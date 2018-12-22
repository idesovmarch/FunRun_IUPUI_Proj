<?php
include '../_includes/config.php';

include ABSOLUTE_PATH . '/header.inc.php';
 ?>

   <body>

 <div id="container">
 	<div id="header">
 		<h1>
 			Fun Run: Run for Good
 		</h1>
 	</div>

  <?php
include ABSOLUTE_PATH . '/main_nav.inc.php';
	 ?>

   <?php
   	if (isset ($_COOKIE["registrationError"]))
   	{
   		echo ($_COOKIE["registrationError"]);
   		setcookie ("registrationError", "", time()-3600, "/");
   	}
?>

<!--form from w3schools.com with some changes-->
<form class="regform" action="process_registration.php" method="post">

  <div class="container">
    <label><b>First Name</b></label><br>
    <input type="username" placeholder="First Name" name="firstname" required>

<br>
<br>

    <label><b>Last Name</b></label><br>
    <input type="username" placeholder="Last Name" name="lastname" required>

<br>
<br>

    <label><b>Username</b></label><br>
    <input type="username" placeholder="Enter Username" name="username" required>

<br>
<br>

    <label><b>Email</b></label><br>
    <input type="email" placeholder="Enter Email" name="email" required>

<br>
<br>

    <label><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" minlength="5" required>

<br>
<br>

    <label><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" minlength="5" required>

    <div class="clearfix">
      <button type="button"  class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>

</form>

<?php
include ABSOLUTE_PATH . '/footer.inc.php';
 ?>


 </body>
 </html>
