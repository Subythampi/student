<html>
<body>
<?php
include('config.php');
include('header.php');

	if(isset($_GET['id']))
	{
		$id=$_GET['id'];

		$upd=mysql_query("update adduser set status=0 where id='$id'");
		if($upd)
			{
				header('location:list.php');
			}
	}
	if(isset($_GET['status']))
	{
		$status=$_GET['status'];
			if($status==0)
			{
				$upd=mysql_query("update adduser set status=1 where id='$id'");
				
			}
	}
?>
</body>
</html>
