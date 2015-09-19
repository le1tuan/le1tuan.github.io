<<!DOCTYPE html>
<html>
<head>
	<title>]</title>
</head>
<body>
	  <?php
	  		include("connect.php");
	  ?>
	  <form  method='post'/>
	  <p >Name of question<p/>
	  <input type='text' name='question'/>
	  <p>the answer<p/>
	  <br>
	  <p>q1</p><input type='text' name='answer1' /><br>
	  <p>q2</p><input type='text' name='answer2' />
	  <p> the true answer is</p><br>
	  <p>q1</p><input type='radio' value="q1" name='dapan'/><br>
	  <p>q2</p><input type='radio' value="q2" name='dapan'/><br>
	  <input type='submit' name='add' value='add'/>
	  </form>
	  <?php
	  		if(isset($_POST['add'])){
	  			$q=$_POST['question'];
	  			$sql="insert into question values(null,'$q')";
	  			$result=mysqli_query($connect,$sql);
	  				
	  			
	  			$sql1="select * from question where name='$q'";
	  			$result1=mysqli_query($connect,$sql1);
				while($row=mysqli_fetch_array($result1)){
					$qid=$row['id'];
					
				}
				echo$qid;
				$a1=$_POST['answer1'];
	  			$a2=$_POST['answer2'];
				$q1="q1";
				$q2="q2";
				if($_POST['dapan']==$q1){	
					$sql2="insert into answer values(null,'$qid','$a1','true');";
					$result2=mysqli_query($connect,$sql2);
					$sql3="insert into answer values(null,'$qid','$a2','false');";
					$result3=mysqli_query($connect,$sql3);
					echo"add answer thanh cong";
	  			}else if($_POST['dapan']==$q2){
					$sql4="insert into answer values(null,'$qid','$a1','false');";
					$result4=mysqli_query($connect,$sql4);
					$sql5="insert into answer values(null,'$qid','$a2','true');";
					$result5=mysqli_query($connect,$sql5);
					echo"add answer thanh cong";
					}
	  			
	  			
	  		
		}	
	  ?>
</body>
</html>