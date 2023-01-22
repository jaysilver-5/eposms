
 <?php
define('DB_SERVER','localhost');
define('DB_USER','everkvom_eposmm');
define('DB_PASS' ,'Apostolic61#');
define('DB_NAME', 'everkvom_eposmm');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

