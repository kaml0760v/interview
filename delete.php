<?php
include"connection.php";
$roll=$_GET['rn'];
$query="DELETE FROM hptable WHERE rollno='$roll'";
$data=mysqli_query($con,$query);
if ($data) 
	{
		echo"<script>alert('Data Deleted')</script>";	
		
	}	
	else
	{
		echo"<script>alert('Data Not Deleted')</script>";	
	}
?>
