<html>

</head>
<body>
<?php
session_start();
include("connect.php");
//trang 1 chỉ gồm 2 câu hỏi
$sql ="select * from question where id<=3";
$result=mysqli_query($connect,$sql);
echo"<form action='page2.php' method='post'/>";

$i= 0;
 	
	
 while($row = mysqli_fetch_array($result))
  {
	
	
	$i++;
 	echo"<b>Q$i:</b>";
 	echo"<br>";
	//nội dung câu hỏi
 	echo$row['name'];
 	$a=$row['id'];
	//id câu hỏi
	//lưu id câu hỏi vào 1 mảng session
	$_SESSION['idx'][$i]=$a;
	var_dump($_SESSION['idx']);
	//lấy câu trả lời
 	$sql1 ="select * from answer where qid='$a'";
 	$result1=mysqli_query($connect,$sql1);
 	while($row1 = mysqli_fetch_array($result1)) 
 	{
		//đáp án
 		$b=$row1['dapan'];
 		echo"<br>";
 		echo$b;
		//nút radio
 		echo"<input id='q$a' type='radio' name='q$a' value='$b'/>"; 
 	}
 	echo"<br>";
	
}
	echo"<br>";
	echo"<input type='submit' name='next' value='next'>";
 	echo"</form>";
	//lấy tổng số câu hỏi
 	$_SESSION['i']=$i;
 	
?>
</body>
</html>
