<?php
define('DB_SERVER','mysql-main-db.cjoiw8u8kkbl.us-east-2.rds.amazonaws.com');
define('DB_USER','mesa_user');
define('DB_PASS' ,'buFk9YL764q7');
define('DB_NAME','mesa');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
 
