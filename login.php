<?php
include('config.php');
include('header.php');
if(isset($_POST['submit']))
	{
		 $username = $_POST['uname'];
		 $password = $_POST['pass'];
		 $sql = mysql_query("select * from adduser where `username` ='".$username."' and `password` = '".$password."' and status = 1");

		 if(mysql_num_rows($sql) > 0)
			 {
			 
			   echo "Username & Password Matched";
				
			 }
		else 
			{
				echo "Username & Password Mis Matched";
				exit;
				
			}
		mysql_close($con);
		header('Location:index.php');
	}
?>
<html>
	<head>
		<style>
		
		table
		{
			padding:50px 50px;
		}
		
		.btn
		{
			cursor:pointer;
			display:inline-block;
			border:1px solid black;
			border-radius:10px;
			margin-left:15px;
			padding:10px 10px;
		}
		td
		{
			padding-top:20px;
		}
		
		p
		{
			color:red;
		}
		
		</style>
		<script>
		function nam()
		{
			var y=document.getElementById("t1");
			var p=document.getElementById("p1");
			var n=/^[0-9]+$/;
			if(y.value==null || y.value=="")
			{
				p.innerHTML="Required";
			}
			else if(y.value.match(n))
			{
				p.innerHTML="Alphabets only";
			}
			else
			{
				p.innerHTML="";
		}
	}
	function pa()
	{
		var y=document.getElementById("t2").value;
		var p=document.getElementById("p2");
		if(y==null || y=="")
			{
				p.innerHTML="Required";
			}
		else if(y.length<5)
		{
			p.innerHTML="lenght must be 7-12";
		}
		else
			{
				p.innerHTML="";
			}
	}
	function final()
	{
		pa();
		nam();
	}
		</script>
	</head>
	<body>
	<form method="post" action="login.php">
	<center>
		<!--<marquee direction="right" style="font-size:50px;color:gray;padding-top:30px;">Welcome</marquee>-->
		
		
	<table>
	<tr>
	<td>Username:</td>
	<td><input type="text" id="t1" name="uname" onblur="nam()"></td>
	<td><p id="p1"></p></td>
	</tr>
	<tr>
	<td>Password:</td>
	
	<td><input type="password" id="t2" name="pass" onblur="pa()"></td>
	<td><p id="p2"></p></td>
	</tr>
	<tr>
	<td style="padding-left:100px;"><input type="submit" name="submit" class="btn" value="Submit" onclick="return pa()" /></td>
	<td><input type="reset" name="reset" class="btn" value="Reset"></td>
	</tr>
	</table>
	</center>
	</form>
	</body>
	</html>
