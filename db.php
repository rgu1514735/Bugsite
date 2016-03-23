<?php

$conn = mysql_connect("localhost", "root", "")
or die("No database connection");
mysql_select_db("bugsite", $conn)
or die('No database selected; ' . mysql_error());
?>