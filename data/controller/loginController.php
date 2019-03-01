<?php 
session_start();
include_once '../lib/dao.php';
include_once '../lib/model.php';
// create a is_object
$d = new dao();
$m = new model();

header('Access-Control-Allow-Origin: *');  //I have also tried the * wildcard and get the same response
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('content-type: application/json; charset=utf-8');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');


extract($_POST);
extract($_GET);
$response = array();

  
if(isset($_POST['loginemail'])){
	   $loginemail=$_POST['loginemail'];
	   $password=$_POST['password'];
	$q=$d->select("admin","name='$loginemail'and password='$password'");
	$data=mysqli_fetch_array($q);
	
	if ($data>0) {
		$_SESSION['admin_id']=$data['admin_id'];
		$_SESSION['name']=$data['name'];
		$_SESSION['email']=$data['email'];
		header("location:../../data/pages/index");
	}else{
		header("location:../../data/login.php?msgError=wrong details");
	}
}
?>