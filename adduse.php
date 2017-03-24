<?php
include('header.php');
include('config.php');
if(isset($_POST['submit']))
	{
		$username=$_POST['uname'];
		$org1=$_POST['org'];
		$phn1=$_POST['phn'];
		$aphn1=$_POST['aphn'];
		$email1=$_POST['email'];
		$aemail1=$_POST['aemail'];
		$dept1=$_POST['dept'];
		$yos1=$_POST['yos'];
		$fee1=$_POST['tf'];
		$course1=$_POST['course'];
		$tt1=$_POST['tt'];
		$query1=mysql_query("INSERT INTO adduser(username, organisation, phone_no, alt_phone_no, email, 
		alt_email, dept, year_of_study, fee, course, type_training) 
		VALUES ('".$username."','".$org1."','".$phn1."','".$aphn1."','".$email1."','".$aemail1."','".$dept1."','".$yos1."','".$fee1."',
		'".$course1."','".$tt1."')");
	
	if($query1)
		{
			header("location:list.php");
		}
	}
	
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<style>
			td
			{
				padding:5px 5px;
			}
		</style>
		<script>
			function a()
			{
			
				var b=document.getElementById("f").value;
				var c=b+(14.5*100);
				var d=document.getElementById("ttf");
					
				d.value=c;
			}
		</script>
	</head>
	<body>
	<form action="adduser.php" method="post">
		<center>
	<h1>User Details</h1>
	<table>
	
		<tr>
			<td><label>Username</label></td>
			<td><label>:</label></td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td><label>Organisation/Educational institution name</label></td>
			<td><label>:</label></td>
			<td><input type="text" name="org"></td>
		</tr>
		<tr>
			<td><label>PhoneNo</label></td>
			<td><label>:</label></td>
			<td><input type="text" name="phn"></td>
		</tr>
		<tr>
			<td><label>Alternate PhoneNo</label></td>
			<td><label>:</label></td>
			<td><input type="text" name="aphn"></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><label>:</label></td>
			<td><input type="text" name="email"></td>
		</tr>
	<tr>
	<td><label>Alternate Email</label></td>
	<td><label>:</label></td>
	<td><input type="text" name="aemail"></td>
	</tr>
	<tr>
	<td><label>Department</label></td>
	<td><label>:</label></td>
	<td><input type="text" name="dept"></td>
	</tr>
	<tr>
	<td><label>Year of study</label></td>
	<td><label>:</label></td>
	<td><input type="text" name="yos"></td>
	</tr>
	<tr>
	<td><label>Course fees</label></td>
	<td><label>:</label></td>
	<td><select id="f"  onchange="a();" >
	<option>select</option>
	<option>5000</option>
	<option>6000</option></td>
	<td><input type="text" name="tf" id="ttf" placeholder="Total fees"></td>
	<td><p id="fee" name="fees"></p></td>
	</tr>
	<tr>
	<td><label>Course</label></td>
	<td><label>:</label></td>
	<td><select name="course">
	<option>select</option>
	<option>PHP</option>
	<option>Python</option></td>
	</tr>
	<tr>
	<td><label>Type of training/project</label></td>
	<td><label>:</label></td>
	<td><input type="text" name="tt"></td>
	</tr>
	<tr>
	<td><input type="submit" value="Submit" name="submit" class="btn btn-default btn-lg"></td>
	</tr>
	</table>
	</center>
	</form>
	</body>
	</html>
