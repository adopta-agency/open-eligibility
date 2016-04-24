<?php

$dbserver = "laneworks-2.cjgvjastiugl.us-east-1.rds.amazonaws.com";
$dbname = "open_eligibility";
$dbuser = "laneworks-api";
$dbpassword = "h8fmtfYxs2LbYD";

// Make a database connection
mysql_connect($dbserver,$dbuser,$dbpassword) or die('Could not connect: ' . mysql_error());
mysql_select_db($dbname);

$datastore = "mysql"; // mysql or github JSON currently

$githuborg = "adopta-agency";
$githubrepo = "open-eligibility";
?>
