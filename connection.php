connection.php

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hp";

$con=mysqli_connect($servername,$username,$password,$dbname);
if ($con) 
{
			
}
else
{
	echo"<script>alert('Not Connected')</script>";	
}
?>
