<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
include_once '../lib/dao.php';
include_once '../lib/model.php';
// create a is_object
$d = new dao();
$m = new model();
// error_reporting(0);
header('Access-Control-Allow-Origin: *'); //I have also tried the * wildcard and get the same response
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('content-type: application/json; charset=utf-8');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
//..................................................................................................................//
extract($_POST);
extract($_GET);
$response = array();
//add appdata in inserted data
if (isset($_POST['update_app_info'])) {
    $str = date('YmdHi');
    
    // mt_rand(100000000, 999999999);
    $ren      = "app_" . $str;
    $ren1     = "banner_" . $str;
    //This is the directory where images will be saved
    $target1  = "img/";
    $target   = explode(".", $_FILES['app_icon']['tmp_name']);
    $target   = $target[count($target) - 1];
    $path     = pathinfo($_FILES["app_icon"]["name"]);
    $ext      = $path['extension'];
    $app_icon = $target1 . $ren . '.' . $ext;
    if (move_uploaded_file($_FILES['app_icon']['tmp_name'], $app_icon)) {
        //Tells you if its all ok
        echo "The file " . basename($_FILES['app_icon']['name']) . " has been uploaded, and your information has been added to the directory";
    }
    $targ          = "img/";
    $banner_target = explode(".", $_FILES['app_banner']['tmp_name']);
    $banner_target = explode(".", $_FILES['app_banner']['type']);
    $banner_target = $banner_target[count($banner_target) - 1];
    $path_parts    = pathinfo($_FILES["app_banner"]["name"]);
    $extension     = $path_parts['extension'];
    $app_banner    = $target1 . $ren1 . '.' . $extension;
    
    //Writes the Filename to the server
    if (move_uploaded_file($_FILES['app_banner']['tmp_name'], $app_banner)) {
        //Tells you if its all ok
        echo "The file " . basename($_FILES['app_banner']['name']) . " has been uploaded, and your information has been added to the directory";
    }
    
    $app_id = "app-" . $str;
    $m->set_data("app_id", test_input($app_id));
    $m->set_data("pkg_name", test_input($pkg_name));
    $m->set_data('developer_ac', test_input($developer_ac));
    $m->set_data('app_name', test_input($app_name));
    $m->set_data('short_desc', test_input($short_desc));
    $m->set_data('description', test_input($description));
    $m->set_data('promo_video_id', test_input($promo_video_id));
    $m->set_data('version_code', test_input($version_code));
    $m->set_data('version_name', test_input($version_name));
    $m->set_data('category', test_input($category));
    $m->set_data('app_icon', test_input($app_icon));
    $m->set_data('app_banner', test_input($app_banner));
    // create a new array
    $a = array(
        /*
        'app_id'=>$m->get_data('app_id'),*/
        'pkg_name' => $m->get_data('pkg_name'),
        'developer_ac' => $m->get_data('developer_ac'),
        'app_name' => $m->get_data('app_name'),
        'short_desc' => $m->get_data('short_desc'),
        'description' => $m->get_data('description'),
        'promo_video_id' => $m->get_data('promo_video_id'),
        'version_code' => $m->get_data('version_code'),
        'version_name' => $m->get_data('version_name'),
        'category' => $m->get_data('category'),
        'app_icon' => $m->get_data('app_icon'),
        'app_banner' => $m->get_data('app_banner')
    );
    
    $q = $d->update("appdetails", $a, "app_id=$app_id");
    if ($q == TRUE) {
        
        header("location:index.php?successfully..");
        
    } else {
        
        header("location:editUser1.php?error");
    }
}
    //updateController
//........................................end....................................//

    /*...................................................*/
    /*delete app group id data*/
        //delete app data 
$group_id = $_GET['group_id'];
echo "$group_id";
$q=$d->delete("add_group_id","group_id='$group_id'");
$q1=$d->delete("app_group_cat","group_id='$group_id'");
    if($q==TRUE) {
         $response["message"] = "app deleted";
         $response["status"] = 1;
         header("Location:../../data/pages/add_group_id.php?success..");
         echo json_encode($response);
    } else {
         $response["message"] = "Error";
         $response["status"] = 0;
         header("Location:../../data/pages/add_group_id.php?Error");
         echo json_encode($response);
    }
    
  
?> 