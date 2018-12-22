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

 	<div id="content">
    <?php

						$dsn = "mysql:dbname=brhammer_funrun_db";
						$username = "brhammer";
						$password = "Illian8*";


            $conn = new PDO($dsn, $username, $password);

       $sql = "SELECT * FROM runs ORDER BY startdate";

       $rows = $conn->query($sql);

echo "<table id='table'><tr><th>Run Name</th><th>Start Date/Time</th><th>Price</th><th>Maximum Registrations</th></tr>";
						foreach($rows as $row) {

							echo "<tr><td>" . $row["name"] . "</td><td>" . $row["startdate"] . "</td><td> $" . $row["price"] . "</td><td>" . $row["maxregistrations"] . "</td>";

						}
            echo "</table>";


    ?>

 	</div>
  <?php
include ABSOLUTE_PATH . '/footer.inc.php';
   ?>
 </div>

 </body>
 </html>
