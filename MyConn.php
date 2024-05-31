<?php
// mysqli
error_reporting(E_ALL);
ini_set('display_errors', '1');


$host = '******:3306';
$user = '*******';
$pass = '******';
$conn = mysqli_connect($host, $user, $pass);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo 'Connected successfully';  
mysqli_close($conn);



?>