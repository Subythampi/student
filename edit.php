

<?php
	include('config.php');
	include_once('header.php');
	if(isset($_GET['id']))
	{
	$id=$_GET['id'];
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
					$query3=mysql_query("UPDATE adduser SET username='$username',organisation='$org1',
							phone_no='$phn1',alt_phone_no='$aphn1',email='$email1',alt_email='$aemail1',dept='$dept1',
							year_of_study='$yos1',fee='$fee1',course='$course1',type_training='$tt1'
							where id='$id'");
				if($query3)
					{
						header('location:list.php');
					}
			}
	$query1=mysql_query("select * from adduser where id='$id'");
	$query2=mysql_fetch_array($query1);
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
					var c=parseInt(b)+(14.5*100);
					var d=document.getElementById("ttf");
						
					d.value=c;
				}
			function fees()
				{
					var a=document.getElementById("co").value;
					var b=document.getElementById("cof").value;
					if(a=="PHP")
						{
							b=5000;
						}
					if(a=="Python")
						{
							b=6000;
						}	
				}
			function corfee()
				{
					a();
					fees();
				}
		</script>
	</head>
	<body>
		<form method="post" action="">
			<center>
				<h1>User Details</h1>
			<table>
			
				<tr>
					<td><label>Username</label></td>
					<td><label>:</label></td>
					<td><input type="text" name="uname" value="<?php echo $query2['username']; ?>"></td>
				</tr>
				<tr>
					<td><label>Organisation/Educational institution name</label></td>
					<td><label>:</label></td>
					<td><input type="text" name="org" value="<?php echo $query2['organisation']; ?>"></td>
				</tr>
				<tr>
					<td><label>Department</label></td>
					<td><label>:</label></td>
					<td><input type="text" name="dept" value="<?php echo $query2['dept']; ?>"></td>
				</tr>
				<tr>
					<td><label>Year of study</label></td>
					<td><label>:</label></td>
					<td><input type="text" name="yos" value="<?php echo $query2['year_of_study']; ?>"></td>
				</tr>
				<tr>
					<td><label>PhoneNo</label></td>
					<td><label>:</label></td>
					<td><input type="text" name="phn" value="<?php echo $query2['phone_no']; ?>"></td>
				</tr>
				<tr>
					<td><label>Alternate PhoneNo</label></td>
					<td><label>:</label></td>
					<td><input type="text" name="aphn" value="<?php echo $query2['alt_phone_no']; ?>"></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td><label>:</label></td>
					<td><input type="text" name="email" value="<?php echo $query2['email']; ?>"></td>
				</tr>
				<tr>
					<td><label>Alternate Email</label></td>
					<td><label>:</label></td>
					<td><input type="text" name="aemail" value="<?php echo $query2['alt_email']; ?>"></td>
				</tr>
				
				<tr>
					<td><label>Course</label></td>
					<td><label>:</label></td>
					<td><select name="course" onchange="corfee()">
					<option id="co">select</option>
					<option <?php if($query2['course']=='PHP') { ?> selected="selected" <?php } ?>>PHP</option>
					<option <?php if($query2['course']=='Python') { ?> selected="selected" <?php } ?>>Python</option>
					</select></td>
					
				</tr>
				<tr>
					<td><label>Course fees</label></td>
					<td><label>:</label></td>
					<td><select id="cof"  onchange="fee();"  name="sf">
					<option>select</option>
					<option <?php if($query2['fee']=='5000') { ?> selected="selected" <?php } ?>>5000</option>
					<option <?php if($query2['fee']=='6000') { ?> selected="selected" <?php } ?>>6000</option></td>
					<td><input type="text" name="tf" id="ttf" placeholder="Total fees"></td>
					<td><p id="fee"></p></td>
				</tr>
				
				<tr>
					<td><label>Type of training/project</label></td>
					<td><label>:</label></td>
					<td><select id="type" name="tt">
						<option>select</option>
						<option <?php if($query2['type_training']=='Internship') { ?> selected="selected" <?php } ?>>Intership</option>
						<option <?php if($query2['type_training']=='Add on') { ?> selected="selected" <?php } ?>>Add on</option>
						<option <?php if($query2['type_training']=='Project') { ?> selected="selected" <?php } ?>>Project</option></select></td>
				</tr>
				<tr>
					<td style="padding-left:300px;padding-top:20px;"><input type="submit" name="submit" value="Update" class="btn btn-default btn-lg"/></td>
				</tr>
			</table>
		</center>
		</form>
	</body>
<?php
}
?>

</body>
</html>
