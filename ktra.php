 <?php
include("connect.php");
session_start();
if(isset($_POST['submit'])){
	//tổng số câu hỏi ở trang 1
	$i=$_SESSION['i'];
	echo"i=";
	echo$i;
	echo"<br>";
	//số lượng câu đúng
	$sl=0;
	
		
		//lấy id của câu hỏi trang 1
		$c=$_SESSION['idx'];
		foreach($c as $key=>$v){
			
			//lấy đáp án ở trang 1
			$b=$_SESSION["d"];
			
			foreach($b as $key=>$l){
				$t="true";
				//select đáp án đúng khi id=id
				$sql="SELECT * FROM `answer` WHERE dungsai='$t' AND qid='$v';";
				
				
				$result=mysqli_query($connect,$sql);
				while($row = mysqli_fetch_array($result)) 
				{	
					//nếu đáp án == đáp án ở trang 1
					if($l==$row['dapan'])
					{
						//số lượng câu đúng ++
					$sl++;
					echo"dung roi ".$sl." cau";
					}
				}
									}
		
									}	
		
	//số lượng câu hỏi ở page 2
	$k=$_SESSION['k'];
	echo"k=";
	echo$k;
	//số câu đúng ở page 2
	$sl1=0;
	//id của câu hỏi trang 2 bắt đầu =9
		$num1=$_SESSION['idxx'];
		foreach($num1 as $key=>$v){
			$t1="true";
			$re=$_POST['q9'];
			echo$re;
			$sql1="SELECT * FROM `answer` WHERE dungsai='$t1' AND qid='9'";
			$result1=mysqli_query($connect,$sql1);
			while($row1 = mysqli_fetch_array($result1)) 
				{
				if($re==$row1['dapan']){
					$sl1++;
					echo"cau 3 dung";
				}
		}
		
		
	
	}
echo"so cau dung";
echo$sl+$sl1;	
$r=(($sl+$sl1)/($k))*100;
echo"ban tra loi dung:";
echo$r;
echo"%";
echo"<a href='finish.php'>Ketthuc</a>";




}
?>