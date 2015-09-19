<html>
<body>
	<?php
		if(isset($_POST['next'])){
		include("connect.php");
		session_start();
		
		
		echo"<br>";
		//lay tổng số  câu hỏi ở trang 1
		$i=$_SESSION['i'];
		for($j=1;$j<=$i;$j++){
			
				echo"day la ";
			// lấy đáp an ở trang 1	
				var_dump($_POST["q$j"]);
				echo"<br>";
			// lưu đáp án vào một mảng session	
			
				$_SESSION["d"][$j]=$_POST["q$j"];
				var_dump($_SESSION["d"]);
				
				$c=$_SESSION['idx'];
				foreach($c as $key=>$v){
				
				}
			
			
			
	}
		
		$sql ="select * from question where id>2";
		$result=mysqli_query($connect,$sql);
		echo"<form action='ktra.php' method='post'/>";
		$k= 2;
		while($row = mysqli_fetch_array($result))
		  {
			$k++;
			
			echo"<b>Q$k:</b>";
			echo"<br>";
			echo$row['name'];
			$a=$row['id'];
			
			$_SESSION['idxx'][$k]=$a;
			$sql1 ="select * from answer where qid='$a'";
			$result1=mysqli_query($connect,$sql1);
			while($row1 = mysqli_fetch_array($result1)) 
			{
				$b=$row1['dapan'];
				echo"<br>";
				echo$b;
				echo"<input id='q$a' type='radio' name='q$a' value='$b'/>"; 
			}
			echo"<br>";
			
		}
			echo"<br>";
			echo"<input type='submit' name='submit' value='submit'>";
			echo"</form>";
			$_SESSION['k']=$k;
			
}
	?>
</body>
</html>