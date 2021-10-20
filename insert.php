<?php
include"connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>
	<form action="" method="post">
		<label>Roll No   </label><input type="text" name="rollno"><br><br>
		<label>Name   </label><input type="text" name="name"><br><br>
		<label>Class  </label><input type="text" name="class"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>

<?php
if (isset($_POST["submit"]))
 {
	$rn=$_POST["rollno"];
    $sn=$_POST["name"];
	$cl=$_POST["class"];
	$sql="INSERT INTO hptable(rollno,name,class) VALUES('$rn','$sn','$cl')"; 
	$data=mysqli_query($con,$sql);
    if ($data) 
    {
		echo"<script>alert('Data Inserted')</script>";		
	}	
	else
	{
		echo"<script>alert('Data Not Inserted')</script>";	
	}
}
?>
