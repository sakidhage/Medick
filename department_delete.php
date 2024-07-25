<?php 
 	include "config.php";

 	if (isset($_GET['dep_id'])) 
 	{
 		$delete = mysqli_query($conn,"delete from tbl_department where id='".$_GET['dep_id']."'");

 		if ($delete) 				
		{
			echo "<script>;";
			echo "alert('Record Delete....!');";
			echo 'window.location.href = "departmentview.php";';
			echo "</script>;";
		}
		else
		{
			echo "<script>;";
			echo "alert('Data error....!');";
			echo 'window.location.href = "departmentview.php";';
			echo "</script>;";
		}
 	}

  ?>