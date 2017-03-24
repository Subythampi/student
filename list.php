<?php
include('header.php');
include('config.php');
$query2=mysql_query("select * from adduser",$con);
?>
<html>
	<head>
			<style>
				td,th
				{
					padding-left:10px;
				}
			</style>
			
			
	</head>
	<body>


	<center>
	<div class="section">
	<h2>User details</h2><br>
	
	<table border="1" cellspacing="1" class="displaycontent" width="600" id="tab">
		<tr>
			<th>S.no</th>
			<th>Name</th>
			<th>Organisation</th>
			<th>Phone No</th>
			<th>Alternate Phone No</th>
			<th>Email</th>
			<th>Alternate Email</th>
			<th>Department</th>
			<th>Year of study</th>
			<th>course fees</th>
			<th>course</th>
			<th>Type of training</th>
			<th></th>
			<th></th>
		</tr>
	
	<?php
		while($row=mysql_fetch_array($query2))
		
		{
			$sno=$row['id'];
			$uname=$row['username'];
			$org=$row['organisation'];
			$phno=$row['phone_no'];
			$aphno=$row['alt_phone_no'];
			$email=$row['email'];
			$aemail=$row['alt_email'];
			$dept=$row['dept'];
			$yos=$row['year_of_study'];
			$fee=$row['fee'];
			$course=$row['course'];
			$tt=$row['type_training'];
		
		
		?>
		
		<tr>
			<td><?php echo $sno;?></td>	
			<td><?php echo $uname;?></td>
			<td><?php echo $org;?></td>
			<td><?php echo $phno;?></td>
			<td><?php echo $aphno;?></td>
			<td><?php echo $email;?></td>
			<td><?php echo $aemail;?></td>
			<td><?php echo $dept;?></td>
			<td><?php echo $yos;?></td>
			<td><?php echo $fee;?></td>
			<td><?php echo $course;?></td>
			<td><?php echo $tt;?></td>
			<td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
			<td ><a href="delete.php?id=<?php echo $row['id']; ?>&status=<?php echo $row['status']; ?>">
			<?php if($row['status']==0){ echo "<font color='#E32548'>Inactive</font>"; }
			else { echo "<font color='#36BD0D'>Active</font>"; } ?></a></td>
		</tr>
		
	<?php
	}
	?>
</body>

</html>
