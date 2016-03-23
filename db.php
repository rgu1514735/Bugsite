<?php

define('DB_SERVER','eu-cdbr-azure-west-d.cloudapp.net');
define('DB_USERNAME','bf535786bb30fa');
define('DB_PASSWORD','88faaa14');
define('DB_DATABASE','ogunleye');

$conn = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD)
or die("No database connection");
mysql_select_db(DB_DATABASE, $conn)
or die('No database selected; ' . mysql_error());
?>