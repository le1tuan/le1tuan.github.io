<?php
$server="localhost";
$user="root";
$pass="";
$connect=mysqli_connect($server,$user,$pass);
if(!$connect)
 {
 echo "Connection error ".mysqli_error($connect)."<br>";;
 }
else
 {
 echo "Hello<br>";
 } 
 $db="tracnghiem";
if (mysqli_select_db($connect,$db))
{
 echo "<br>.<br>";
}
else
{
 echo "<br>Error selecting db".mysqli_error($connect);
}
$connect=mysqli_connect($server,$user,$pass,$db); 

?>