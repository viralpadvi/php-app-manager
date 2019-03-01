<?php  
 	 error_reporting(E_ALL); 
date_default_timezone_set('Asia/Kolkata'); 
  $curdate=date('Y-m-d');
ini_set('display_errors', 1);	 
	 
	 if($_SERVER['HTTP_HOST']=="localhost" or $_SERVER['HTTP_HOST']=="192.168.1.125")
		{	
			//local  

				 DEFINE ('DB_USER', 'appdevdb');
				 DEFINE ('DB_PASSWORD', 'root@123');
				 DEFINE ('DB_HOST', 'localhost'); //host name depends on server
				 DEFINE ('DB_NAME', 'appdevnew');
		}
		else
		{
			//local live 

		 	 DEFINE ('DB_USER', 'appdevdb');
				 DEFINE ('DB_PASSWORD', 'root@123');
				 DEFINE ('DB_HOST', 'localhost'); //host name depends on server
				 DEFINE ('DB_NAME', 'appdevnew');
		} 

	
	$mysqli =mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

	if ($mysqli->connect_errno) 
	{
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	 
	 //for downloads updats
	if(isset($_POST['appid']))
		{ 		 
		$view_qry=mysqli_query($mysqli,"UPDATE `appdetails` SET `downloads` = `downloads` + 1 WHERE `appdetails`.`app_id` = '".$_POST['appid']."'");

		/*$view_qry1=mysqli_query($mysqli,"UPDATE `app_group_cat` SET `impression` = `impression` + 1 WHERE `app_group_cat`.`app_ids` = '".$_POST['appid']."'");*/



		/*todat 10-09-2018 add new table insert data*/
		$query1="SELECT * FROM `date_filter` WHERE `date_filter`.`app_id` = '".$_POST['appid']."' AND `date_filter`.`today_date` ='$curdate'";
		$sql1 = mysqli_query($mysqli,$query1)or die(mysqli_error());
		//$data1 = mysqli_fetch_assoc($sql1);
		if (mysqli_num_rows($sql1)>0) {
			# code...
			$view_qry1=mysqli_query($mysqli,"UPDATE `date_filter` SET `download` = `download` + 1 WHERE `date_filter`.`app_id` = '".$_POST['appid']."' AND `date_filter`.`today_date` ='$curdate'");
		}else{

			$view_qry1=mysqli_query($mysqli,"INSERT INTO `date_filter`(`app_id`, `download`, `today_date`) VALUES ('".$_POST['appid']."',`download` + 1,'$curdate')");
		}
		/*end data insert update*/
	


	    }
			
		// for on/off google ads	
		else if(isset($_POST['appidisrevenue']))	
		{
		
		$jsonObj= array();	
 
		$query="SELECT * FROM `appdetails` WHERE `appdetails`.`app_id` = '".$_POST['appidisrevenue']."'";

		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			 
			$row['id'] = $data['id'];
			$row['app_id'] = $data['app_id'];
			$row['pkg_name'] = $data['pkg_name'];
			$row['developer_ac'] = $data['developer_ac'];
			$row['app_name'] = $data['app_name'];
			$row['short_desc'] = stripslashes($data['short_desc']);
			$row['description'] = $data['description'];
			$row['promo_video_id'] = $data['promo_video_id'];
			$row['version_code'] = $data['version_code'];
			$row['version_name'] = $data['version_name'];
			$row['category'] = $data['category'];
			$row['status'] = $data['status'];
			$row['app_icon'] = $data['app_icon'];
			$row['app_banner'] = $data['app_banner'];
			$row['downloads'] = $data['downloads'];
			$row['revenuad'] = $data['revenuad'];
		
			array_push($jsonObj,$row);
		
		}

		$set['LASSERVICES'] = $jsonObj;
		
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
	
		}
		
		//for all apps
else if(isset($_POST['getallapps']))	
		{
			
		$jsonObj= array();	
 
		$query="SELECT * FROM `appdetails` WHERE `appdetails`.`status` = 1";

		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());
		$link="http://appdevbuild.com/appdevinc/";
		while($data = mysqli_fetch_assoc($sql))
		{
			 
			$row['id'] = $data['id'];
			$row['app_id'] = $data['app_id'];
			$row['pkg_name'] = $data['pkg_name'];
			$row['developer_ac'] = $data['developer_ac'];
			$row['app_name'] = $data['app_name'];
			$row['short_desc'] = stripslashes($data['short_desc']);
			$row['description'] = $data['description'];
			$row['promo_video_id'] = $data['promo_video_id'];
			$row['version_code'] = $data['version_code'];
			$row['version_name'] = $data['version_name'];
			$row['category'] = $data['category'];
			$row['status'] = $data['status'];
			$row['app_icon'] = $link.$data['app_icon'];
			$row['app_banner'] = $link.$data['app_banner'];
			$row['downloads'] = $data['downloads'];
			$row['revenuad'] = $data['revenuad'];
			
			array_push($jsonObj,$row);
		
		}

		$set['LASSERVICES'] = $jsonObj;
		
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
	
		}

	 //for downloads groupapps updats
	 //for group open app updats
	if(isset($_POST['appids']))
		{ 		 
			$view_qry2=mysqli_query($mysqli,"UPDATE `app_group_cat` SET `app_open` = `app_open` + 1 WHERE `app_group_cat`.`g_id` = '".$_POST['appids']."'");
			if ($view_qry2==TRUE) {
				# code...
				echo "app_open update successed....";
			}else{
				echo "something wrong....";
			}
	
	    }
//for group impression update
	    else if (isset($_POST['gid'])) {
	    	# code...
	    	$view_qry1=mysqli_query($mysqli,"UPDATE `app_group_cat` SET `impression` = `impression` + 1 WHERE `app_group_cat`.`g_id` = '".$_POST['gid']."'");
	    	if ($view_qry1==TRUE) {
				# code...
				echo "impression update successed....";
			}else{
				echo "something wrong....";
			}

	    }	
	?>