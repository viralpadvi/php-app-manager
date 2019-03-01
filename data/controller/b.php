<?php
	$databaseHost     = 'localhost';
$databaseName     = 'appdev';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

	if(isset($_POST['delete_group_id_cls']))
	{

		$selected= $_POST['checkbox'];
		if(empty($selected)) 
	    {
	        echo("<p>You didn't select any  .</p>\n");
	    } 
	    else 
	    {
	       $N = count($selected);

	        echo("<p>You selected $N values(s): ");

	       
		
	        for($i=0; $i < $N; $i++)
	        {
	            echo $var1=$selected[$i];
	           

				$result = mysqli_query($mysqli,"DELETE FROM app_group_cat WHERE id='$var1'");
	            
	        }

	        header("location:../../data/pages/show_group_apps.php?successfully..");

	      }
	}

	else
	{
		header("location:../../data/pages/show_group_apps.php?error");

	}
	

?>
