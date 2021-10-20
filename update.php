<?php
include"connection.php";
$_GET["rn"];
$_GET["nm"];
$_GET["cl"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>
	<form action="" method="post">
		<label>Roll No   </label><input type="text" name="rollno" value="<?php echo $_GET["rn"];?>"><br><br>
		<label>Name   </label><input type="text" name="name" value="<?php echo $_GET["nm"];?>"><br><br>
		<label>Class  </label><input type="text" name="class" value="<?php echo $_GET["cl"];?>"><br><br>
		<input type="submit" name="submit" value="Update">
	</form>
</body>
</html>

<?php
if (isset($_POST["submit"])) 
{
	$rn=$_POST["rollno"];
	$sn=$_POST["name"];
	$cl=$_POST["class"];

	$qry="UPDATE hptable SET name='$sn',class='$cl' WHERE rollno='$rn'";
	$data=mysqli_query($con,$qry);
	if ($data) 
	{
		echo"<script>alert('Data Updated')</script>";		
	}	
	else
	{
		echo"<script>alert('Data Not Updated')</script>";	
	}
}
?>
