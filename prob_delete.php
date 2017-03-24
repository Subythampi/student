<html>
<body>
<?php
include('config.php');
//include('header.php');

	if(isset($_GET['course_id']))
	{
		$id=$_GET['course_id'];

		$upd=mysql_query("update cc_problems set status=0 where problem_id='$id'");
		if($upd)
			{
				header('location:mex.php');
			}
	}
	if(isset($_GET['status']))
	{
		$status=$_GET['status'];
			if($status==0)
			{
				$upd=mysql_query("update cc_problems set status=1 where problem_id='$id'");
				
			}
	}
?>
</body>
</html>
