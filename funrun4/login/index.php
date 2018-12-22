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

   <body>
<?php
if (isset ($_COOKIE["loginError"]))
{
  echo $_COOKIE["loginError"];

//delete cookie
  setcookie("loginError", "", time()-3600, "/");
}
 ?>


   <form id="login_form" action="process_login.php" method="post">
     <div class="imgcontainer">
       <img src="assets/user.png" alt="Avatar" class="avatar">
     </div>

     <div class="container">
       <div id="inputname">
       <label><b>Username</b></label>
       <input id="username" type="username" placeholder="Enter Username" name="username" minlength="3" required>
     </div>

       <div id="inputpass">
       <label><b>Password</b></label>
       <input id="password"  type="password" placeholder="Enter Password" name="password" minlength="3" required>
     </div>
       <button type="submit">Login</button>

     </div>


   </form>

   </body>
   </html>

  <?php
include ABSOLUTE_PATH . '/footer.inc.php';
   ?>
 </div>

 </body>
 </html>
