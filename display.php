<?php
include"connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Display</title>
</head>
<body>
<form action="" method="post" >
	<table>
		<caption>Student Data</caption>
		<thead>
			<tr>
				<th>Roll No</th>
				<th>Name</th>
				<th>Class</th>
				<th colspan="2">Operations</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php
				$query="SELECT * FROM hptable"; 
				$data=mysqli_query($con,$query);
				$total=mysqli_num_rows($data);
                if ($total!=0) 
                	{
					while ($result=mysqli_fetch_assoc($data)) 
                    {
						echo"
							<tr>
							<td>".$result['rollno']."</td>
							<td>".$result['name']."</td>
							<td>".$result['class']."</td>
							<td><a href='update.php?rn=$result[rollno]&nm=$result[name]&cl=$result[class]'>Edit</a></td>
							<td><a href='delete.php?rn=$result[rollno]'>Delete</a></td>
							</tr>";	    
					}	
				}
				else
				{
					echo"no records";
				}
				?>
				
			</tr>
		</tbody>
	</table>
</form>
</body>
</html>
