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
// ADD NEW USER 
if(isset($full_name_insert)){
	// check user 
	$q1=$d->select("users","mobile='$mobile'");
	$data=mysqli_fetch_array($q1);
	if($data==TRUE) {
		 $response["user_id"]=$data['user_id'];
		 $response["message"] = "User Already register";
		 $response["status"] = 3;
		 echo json_encode($response);
	} else{

	$last_auto_id=$d->last_auto_id("users");
    $res=mysqli_fetch_array($last_auto_id);
    $user_id=$res['Auto_increment'];

    $otp= mt_rand(100000, 999999);

	$m->set_data("full_name_insert",test_input($full_name_insert));
	$m->set_data('mobile',test_input($mobile));
	$m->set_data('password',test_input($password));
	$m->set_data('otp',test_input($otp));
	// create a new array
	$a = array (
		'full_name'=>$m->get_data('full_name_insert'),
		'mobile'=>$m->get_data('mobile'),
		'password'=>$m->get_data('password'),
		'otp'=>$m->get_data('otp'),
	);

	$q=$d->insert("users",$a);
	if($q==TRUE) {

		 $response["user_id"] = $user_id;
		 $response["otp"] = $otp;
		 $msg=urlencode("your otp is : $otp");
		 file_get_contents("http://www.smsidea.co.in/sendsms.aspx?mobile=9737564998&pass=VGULN&senderid=SMSBUZ&to=$mobile&msg=$msg");
		
		 $response["otp"] = $otp;
		 $response["message"] = "Registration successfully.";
		 $response["status"] = 1;
		 echo json_encode($response);
	} else {
		 $response["message"] = "Error";
		 $response["status"] = 0;
		 echo json_encode($response);
	}
	}

}

//.......
if(isset($addUser)){
	// check user 
	$q1=$d->select("users","mobile='$mobile'");
	$data=mysqli_fetch_array($q1);
	if($data==TRUE) {

		header("location:addUser.php?errorMsg=Already Register");
	} else{

	$last_auto_id=$d->last_auto_id("users");
    $res=mysqli_fetch_array($last_auto_id);
    $user_id=$res['Auto_increment'];


	$m->set_data("full_name_admin",test_input($full_name_admin));
	$m->set_data('mobile',test_input($mobile));
	$m->set_data('password',test_input($password));
	// create a new array
	$a = array (
		'full_name'=>$m->get_data('full_name_admin'),
		'mobile'=>$m->get_data('mobile'),
		'password'=>$m->get_data('password'),
	);

	$q=$d->insert("users",$a);
	if($q==TRUE) {

		header("location:users.php");
	} else {
		header("location:addUser.php");
		
	}
	}

}



 // update feedbac...............
if(isset($name)){

	$m->set_data("name",test_input($name));
	$m->set_data('email',test_input($email));
	$m->set_data('message',test_input($message));
	// create a new array
	$a = array (
		'name'=>$m->get_data('name'),
		'email'=>$m->get_data('email'),
		'message'=>$m->get_data('message'),
	);

	$q=$d->update("videofeedback",$a,"f_id='$f_id'");
	if($q==TRUE) {
		 $response["message"] = "Updated";
		 $response["status"] = 1;
		 echo json_encode($response);
	} else {
		 $response["message"] = "Error";
		 $response["status"] = 0;
		 echo json_encode($response);
	}


}



 // update user
if(isset($full_name_update_admin)){

	$m->set_data("full_name_update_admin",test_input($full_name_update_admin));
	$m->set_data('mobile',test_input($mobile));
	$m->set_data('password',test_input($password));
	// create a new array
	$a = array (
		'full_name'=>$m->get_data('full_name_update_admin'),
		'mobile'=>$m->get_data('mobile'),
		'password'=>$m->get_data('password'),
	);

	$q=$d->update("users",$a,"user_id='$user_id'");
	if($q==TRUE) {
		header("location:users.php");
	} else {
		header("location:users.php");
	}


}

if(isset($user_id_delete_feedback)) {

	$q=$d->delete("videofeedback","f_id='$user_id_delete_feedback'");
	if($q==TRUE) {
		 header("location:../../data/tables/feedback.php?success");
	} else {
		 header("location:../../data/tables/feedback.php?error");
	}

}

// delte user 
if(isset($user_id_delete)) {

	$q=$d->delete("users","user_id='$user_id_delete'");
	if($q==TRUE) {
		 $response["message"] = "User deleted";
		 $response["status"] = 1;
		 echo json_encode($response);
	} else {
		 $response["message"] = "Error";
		 $response["status"] = 0;
		 echo json_encode($response);
	}

}


if(isset($user_id_delete_admin)) {

	$q=$d->delete("videoreport","v_id='$user_id_delete_admin'");
	if($q==TRUE) {
		 header("location:users.php");
	} else {
		 header("location:users.php");
	}

}
 
// view users 
if(isset($view_all_user)) {
	$q=$d->select("users","","");
	$response["user"] = array();
	while($row=mysqli_fetch_array($q)) {
		$user = array();
	    $user["user_id"] = $row["user_id"];
	    $user["full_name"] = $row["full_name"];
	    $user["mobile"] = $row["mobile"];

	    // push single product into final response array
        array_push($response["user"], $user);	
	}
	$response["status"] = 1;
	echo json_encode($response);
}

// view users  join
if(isset($view_all_user_join)) {

	$q=$d->select("users,users_address","users.user_id=users_address.user_id","");

	$response["user"] = array();
	while($row=mysqli_fetch_array($q)) {
		$user = array();
	    $user["user_id"] = $row["user_id"];
	    $user["full_name"] = $row["full_name"];
	    $user["mobile"] = $row["mobile"];
	    $user["city"] = $row["city"];
	    $user["pincode"] = $row["pincode"];

	    // push single product into final response array
        array_push($response["user"], $user);	
	}
	$response["status"] = 1;
	echo json_encode($response);
}

// view Single user
if(isset($view_all_user_id)) {
	$q=$d->select("users","user_id='$view_all_user_id'","");
	$response["user"] = array();
	$row=mysqli_fetch_array($q);
		$user = array();
	    $user["user_id"] = $row["user_id"];
	    $user["full_name"] = $row["full_name"];
	    $user["mobile"] = $row["mobile"];

	    // push single product into final response array

        array_push($response["user"], $user);	
	$response["status"] = 1;
	echo json_encode($response);
}
// count users

if(isset($count_users)) {
	$count=$d->count_data("user_id","users","");
    while($row=mysqli_fetch_array($count))
   {
     $users= $data=$row['COUNT(*)'];
     $response["users"] = $users;
     $response["status"] = 1;
	echo json_encode($response);
    }
}

// sum data 
if(isset($user_sum)) {
	$count=$d->sum_data("pincode","users_address","");
	  while($row=mysqli_fetch_array($count))
	 {
	     $user_sum=$row['SUM(pincode)'];
	   	$response["user_sum"] = $user_sum;
			$response["status"] = 1;
		echo json_encode($response);
	         
	  }


}

 ?>
