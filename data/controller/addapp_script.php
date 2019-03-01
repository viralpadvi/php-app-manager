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

/************************.....insert data section...***************************/
//........................................
//add appdata in inserted data
if(isset($_POST['package_name'])) {
		$str= date('YmdHi');
		$ren="icon_".$str;
		$ren1="banner_".$str;
						//This is the directory where images will be saved
		$target1 = "../../appdevinc/img/";
		$target=explode(".",$_FILES['app_icon']['tmp_name']);
		$target=$target[count($target)-1];
		$path = pathinfo($_FILES["app_icon"]["name"]);
		$ext = $path['extension'];
		$app_icon=$target1.$ren.'.'.$ext;
		$app_icon1= "img/".$ren.'.'.$ext;
		if(move_uploaded_file($_FILES['app_icon']['tmp_name'], $app_icon)) {
		//Tells you if its all ok
		echo "The file ". basename( $_FILES['app_icon']['name']). " has been uploaded, and your information has been added to the directory";
	}
		$targ = "img/";
		$banner_target=explode(".",$_FILES['app_banner']['tmp_name']);
		$banner_target=explode(".",$_FILES['app_banner']['type']);
		$banner_target=$banner_target[count($banner_target)-1];
		$path_parts = pathinfo($_FILES["app_banner"]["name"]);
		$extension = $path_parts['extension'];
		$app_banner=$target1.$ren1.'.'.$extension;
		$app_banner1="img/".$ren1.'.'.$extension;

		//Writes the Filename to the server
		if(move_uploaded_file($_FILES['app_banner']['tmp_name'], $app_banner)) {
		//Tells you if its all ok
		echo "The file ". basename( $_FILES['app_banner']['name']). " has been uploaded, and your information has been added to the directory";
	}
	 
	 $app_id="app-".$str;

		$m->set_data('app_id',test_input($app_id));
		$m->set_data("pkg_name",test_input($package_name));
		$m->set_data('developer_ac',test_input($developer_ac));
		$m->set_data('app_name',test_input($app_name));
		$m->set_data('short_desc',test_input($short_desc));
		$m->set_data('description',test_input($desc));
		$m->set_data('promo_video_id',test_input($promo_video_id));
		$m->set_data('version_code',test_input($version_code));
		$m->set_data('version_name',test_input($version_name));
		$m->set_data('category',test_input($category));
		$m->set_data('status',test_input($status));
		$m->set_data('AD',test_input($AD));
		$m->set_data('app_icon',test_input($app_icon1));
		$m->set_data('app_banner',test_input($app_banner1));
		$m->set_data('authentication',test_input($authentication));
		$m->set_data('token',test_input($token));
		/*added 12-09-2018*/
		$m->set_data('google_initialize_id',test_input($google_initialize_id));
		$m->set_data('google_banner_id',test_input($google_banner_id));
		$m->set_data('google_native_id',test_input($google_native_id));
		$m->set_data('google_inter_id',test_input($google_inter_id));
		$m->set_data('fb_banner_id',test_input($fb_banner_id));
		$m->set_data('fb_native_id',test_input($fb_native_id));
		$m->set_data('fb_inter_id',test_input($fb_inter_id));
		/*endedd*/
	// create a new array
	$a = array (

		'app_id'=>$m->get_data('app_id'),
		'pkg_name'=>$m->get_data('pkg_name'),
		'developer_ac'=>$m->get_data('developer_ac'),
		'app_name'=>$m->get_data('app_name'),
		'short_desc'=>$m->get_data('short_desc'),
		'description'=>$m->get_data('description'),
		'promo_video_id'=>$m->get_data('promo_video_id'),
		'version_code'=>$m->get_data('version_code'),
		'version_name'=>$m->get_data('version_name'),
		'category'=>$m->get_data('category'),
		'status'=>$m->get_data('status'),
		'AD'=>$m->get_data('AD'),
		'app_icon'=>$m->get_data('app_icon'),
		'app_banner'=>$m->get_data('app_banner'),
		'authentication'=>$m->get_data('authentication'),
		'token'=>$m->get_data('token'),
		/*new addded 11-09-2018*/
		'google_initialize_id'=>$m->get_data('google_initialize_id'),
		'google_banner_id'=>$m->get_data('google_banner_id'),
		'google_native_id'=>$m->get_data('google_native_id'),
		'google_inter_id'=>$m->get_data('google_inter_id'),
		'fb_banner_id'=>$m->get_data('fb_banner_id'),
		'fb_native_id'=>$m->get_data('fb_native_id'),
		'fb_inter_id'=>$m->get_data('fb_inter_id'),
		/*endedd*/

	);

	$q=$d->insert("appdetails",$a);
	if($q==TRUE) {

		header("location:../../data/index.php?successfully..");
		$response["message"] = "success";
		 $response["status"] = 1;
		 echo json_encode($response);
		
	} else {

		header("location:../../data/index.php?error..");
		$response["message"] = "error";
		 $response["status"] = 0;
		 echo json_encode($response);	
	}
}

