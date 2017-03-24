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
		<link rel="stylesheet" type="text/js" href="valid.js">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<style>
			td
			{
				padding:5px 5px;
			}
			p
			{
				color:red;
			}
		</style>
		<script src="valid.js"></script>
		<script>
			
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
						<td><input type="text" name="uname" id="user" onblur="use()"></td>
						<td><p id="p1"></p></td>
					</tr>
					<tr>
						<td><label>Organisation/Educational institution name</label></td>
						<td><label>:</label></td>
						<td><input type="text" name="org" id="or" onblur="orga()"></td>
						<td><p id="p2"></p></td>
					</tr>
					<tr>
						<td><label>Department</label></td>
						<td><label>:</label></td>
						<td><input type="text" name="dept" id="dep" onblur="de()"></td>
						<td><p id="p7"></p></td>
					</tr>
					<tr>
						<td><label>Year of study</label></td>
						<td><label>:</label></td>
						<td><input type="text" name="yos" id="y" onblur="yo()"></td>
						<td><p id="p8"></p></td>
					</tr>
					<tr>
						<td><label>Phone No</label></td>
						<td><label>:</label></td>
						<td><input type="text" name="phn" id="ph" onblur="phon()"></td>
						<td><p id="p3"></p></td>
					</tr>
					<tr>
						<td><label>Alternate Phone No</label></td>
						<td><label>:</label></td>
						<td><input type="text" name="aphn" id="aph" onblur="aphon()"></td>
						<td><p id="p4"></p></td>
					</tr>
					<tr>
						<td><label>Email</label></td>
						<td><label>:</label></td>
						<td><input type="text" name="email" id="em" onblur="ema()"></td>
						<td><p id="p5"></p></td>
					</tr>
					<tr>
						<td><label>Alternate Email</label></td>
						<td><label>:</label></td>
						<td><input type="text" name="aemail" id="aem" onblur="aema()"></td>
						<td><p id="p6"></p></td>
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
						<td><label>Course fees</label></td>
						<td><label>:</label></td>
						<td><select id="f"  name="sf" onchange="a();" >
						<option>select</option>
						<option>5000</option>
						<option>6000</option></td>
						<td><input type="text" name="tf" id="ttf" placeholder="Total fees"></td>
						<td><p id="fee" name="fees"></p></td>
					</tr>
					
					<tr>
						<td><label>Type of training/project</label></td>
						<td><label>:</label></td>
						<td><select id="type" name="tt">
						<option>select</option>
						<option>Intership</option>
						<option>Add on</option>
						<option>Project</option></select></td>
					</tr>
					<tr>
						<td style="padding-left:300px;padding-top:20px;"><input type="submit" value="Submit" name="submit" class="btn btn-default btn-lg"></td>
					</tr>
					</table>
				</center>
			</form>
		</body>
	</html>
