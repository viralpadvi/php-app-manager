<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
include_once '../lib/dao.php';
include_once '../lib/model.php';
// create a is_object
$d = new dao();
$m = new model();
// error_reporting(0);
header('Access-Control-Allow-Origin: *');  //I have also tried the * wildcard and get the same response
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('content-type: application/json; charset=utf-8');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
extract($_POST);
extract($_GET);
$response = array();
//..............................delete table section........................................//
	

	//delete group app data 
		$id = $_GET['g_id'];
		echo "$id";
		$q=$d->delete("app_group_cat","g_id=$id");
		if($q==TRUE) {
			 $response["message"] = "app deleted";
			 $response["status"] = 1;
			 header("Location:Show_group_apps.php?success...");
			 echo json_encode($response);
		} else {
			 $response["message"] = "Error";
			 $response["status"] = 0;
			 header("Location:Show_group_apps.php?Error");
			 echo json_encode($response);
		}
//...................................End delete table section..........................................//

?>