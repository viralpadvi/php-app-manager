<?php
	$databaseHost     = 'localhost';
$databaseName     = 'appdev';
$databaseUsername = 'appdevdb';
$databasePassword = 'root@123';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

	if(isset($_POST['submit_chk']))
	{
			$selected= $_POST['submit_chk'];
			

		if(empty($selected)) 
	    {
	        echo("<p>You didn't select any any .</p>\n");
	    } 
	    else 
	    {
	       $N = count($selected);

	        echo("<p>You selected $N values(s): ");

	        $group_id=$_POST['group_id'];
		
	        for($i=0; $i < $N; $i++)
	        {
	             $var1=$selected[$i];
	          

				$result = mysqli_query($mysqli,"INSERT INTO app_group_cat(group_id,app_ids) VALUES('$group_id', '$var1')");
	            
	        }

	        header("location:show_apps.php?group_id=$group_id");

	      }
	}

	else
	{
		header("location:add_group_app.php?group_id=$group_id ?errors");

	}
?>
