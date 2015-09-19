<?php
include("connect.php");
$sql ="select * from question";
 $result=mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)) {
 echo$row['name'];
 $num=$row['id'];
 $sql1 ="select * from answer where qid=$num";
 $result1=mysqli_query($connect,$sql1);
 while($row1 = mysqli_fetch_array($result1)) {
	echo$row1['dapan'];
 }
 }
 ?>