<?php
require "config.php";
$sql="SELECT * FROM `project` order by subdate desc";
$result=mysqli_query($con,$sql);
?>


<html>
<head>
	<title>Project Status |  Admin Panel | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<?php
		include "header.php";
	?>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">Project ID</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Project Name</th>
				<th align = "center">Due Date</th>
				<th align = "center">Submission Date</th>
				<th align = "center">Mark</th>
				<th align = "center">Status</th>
				<th align = "center">Option</th>
				
			</tr>
	<?php
		require "config.php";
		$sql="SELECT * FROM `project` order by subdate desc";
		$result=mysqli_query($con,$sql);
		$i=1;
		while($row = mysqli_fetch_assoc($result))
		{
	?>
	<tr>
			<td><?php echo $i; ?>	
			<td><?php echo $row['pid']?>
			<td><?php echo $row['eid']?>
			<td><?php echo $row['pname']?>
			<td><?php echo $row['duedate']?>
			<td><?php echo $row['subdate']?>
			<td><?php echo $row['mark']?>
			<td><?php echo $row['status']?>
	<?php
		$i++;
		}
	?>

		</table>
		
	
</body>
</html>