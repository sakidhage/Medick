<?php

include "config.php";

if (isset($_GET['stud_id']))
{
    $delete=mysqli_query($conn,"delete from tbl_contact where id='".$_GET['stud_id']."'");
    if($delete){

    
        
			echo "<script>;";
			echo "window.alert('Data delete successfully....!');";
			echo 'window.location.href = "contactview.php";'; 
			echo "</script>;";
		}
		else
		{
			echo "<script>;";
			echo "window.alert('Data error....!');";
            echo 'window.location.href = "contactview.php";'; 
			echo "</script>;";
		}
	}

 ?>