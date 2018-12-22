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

  Registration Successful!

<?php
echo "Your user ID is: <b>" . $_COOKIE["userID"] . "</b>.";
 ?>

  <?php
include ABSOLUTE_PATH . '/footer.inc.php';
   ?>
 </div>

 </body>
 </html>
