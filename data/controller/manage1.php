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
/*today 29-08-2018*/
	if(isset($_POST['name'])){
		$str= date('YmdHi');
		$ren="package_".$str;
		$ren1="cover_".$str;
	
				/* package added ...*/
				/*1*/
				if($_POST['sdk_type']=="1"){
					//This is the directory where images will be saved
					$target1 = "lyricvid/material/theme/";
					$file_name= str_replace(" ","-",$_FILES['packageUrl']['name']);
					$albumimgnm=$file_name;
					$packageUrl=$target1.$albumimgnm;
					//$tpath1='uploads/'.$albumimgnm;       
					//$tmp = $_FILES['video_local']['tmp_name'];
					if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
					//Tells you if its all ok
					$packageUrl.$albumimgnm;
					}
				}
				/*2*/
				if($_POST['sdk_type']=="2"){
					//This is the directory where images will be saved
					$target1 = "lyricvid/material/videofx/";
					$file_name= str_replace(" ","-",$_FILES['packageUrl']['name']);
					$albumimgnm=$file_name;
					$packageUrl=$target1.$albumimgnm;
					//$tpath1='uploads/'.$albumimgnm;       
					//$tmp = $_FILES['video_local']['tmp_name'];
					if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
					//Tells you if its all ok
					$packageUrl.$albumimgnm;
					}
				}
				/*3*/
				if($_POST['sdk_type']=="4"){
					//This is the directory where images will be saved
					$target1 = "lyricvid/material/animatedsticker/";
					$file_name= str_replace(" ","-",$_FILES['packageUrl']['name']);
					$albumimgnm=$file_name;
					$packageUrl=$target1.$albumimgnm;
					//$tpath1='uploads/'.$albumimgnm;       
					//$tmp = $_FILES['video_local']['tmp_name'];
					if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
					//Tells you if its all ok
					$packageUrl.$albumimgnm;
					}
				}
				/*4*/
				if($_POST['sdk_type']=="3"){
					//This is the directory where images will be saved
					$target1 = "lyricvid/material/captionstyle/";
					$file_name= str_replace(" ","-",$_FILES['packageUrl']['name']);
					$albumimgnm=$file_name;
					$packageUrl=$target1.$albumimgnm;
					//$tpath1='uploads/'.$albumimgnm;       
					//$tmp = $_FILES['video_local']['tmp_name'];
					if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
					//Tells you if its all ok
					$packageUrl.$albumimgnm;
					}
				}
					/*5*/
					if($_POST['sdk_type']=="10"){
						//This is the directory where images will be saved
						$target1 = "lyricvid/material/facesticker/";
						$file_name= str_replace(" ","-",$_FILES['packageUrl']['name']);
						$albumimgnm=$file_name;
						$packageUrl=$target1.$albumimgnm;
						//$tpath1='uploads/'.$albumimgnm;       
						//$tmp = $_FILES['video_local']['tmp_name'];
						if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
						//Tells you if its all ok
						$packageUrl.$albumimgnm;
						}
					}
						/*6*/
						if($_POST['sdk_type']=="6"){
							//This is the directory where images will be saved
							$target1 = "lyricvid/material/font/";
							$file_name= str_replace(" ","-",$_FILES['packageUrl']['name']);
							$albumimgnm=$file_name;
							$packageUrl=$target1.$albumimgnm;
							//$tpath1='uploads/'.$albumimgnm;       
							//$tmp = $_FILES['video_local']['tmp_name'];
							if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
							//Tells you if its all ok
							$packageUrl.$albumimgnm;
					}
						}
							/*7*/
							if($_POST['sdk_type']=="11"){
								//This is the directory where images will be saved
								$target1 = "lyricvid/material/funsticker/";
								$file_name= str_replace(" ","-",$_FILES['packageUrl']['name']);
								$albumimgnm=$file_name;
								$packageUrl=$target1.$albumimgnm;
								//$tpath1='uploads/'.$albumimgnm;       
								//$tmp = $_FILES['video_local']['tmp_name'];
								if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
								//Tells you if its all ok
								$packageUrl.$albumimgnm;
								}
							}
							/*8*/
							if($_POST['sdk_type']=="7"){
								//This is the directory where images will be saved
								$target1 = "lyricvid/material/music/";
								$file_name= str_replace(" ","-",$_FILES['packageUrl']['name']);
								$albumimgnm=$file_name;
								$packageUrl=$target1.$albumimgnm;
								//$tpath1='uploads/'.$albumimgnm;       
								//$tmp = $_FILES['video_local']['tmp_name'];
								if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
								//Tells you if its all ok
								$packageUrl.$albumimgnm;
								}
							}
							/*9*/
							if($_POST['sdk_type']=="9"){
								//This is the directory where images will be saved
								$target1 = "lyricvid/material/partical/";
								$file_name= str_replace(" ","-",$_FILES['packageUrl']['name']);
								$albumimgnm=$file_name;
								$packageUrl=$target1.$albumimgnm;
								//$tpath1='uploads/'.$albumimgnm;       
								//$tmp = $_FILES['video_local']['tmp_name'];
								if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
								//Tells you if its all ok
								$packageUrl.$albumimgnm;
								}
							}
								/*10*/
								if($_POST['sdk_type']=="8"){
									//This is the directory where images will be saved
									$target1 = "lyricvid/material/scene/";
									$file_name= str_replace(" ","-",$_FILES['packageUrl']['name']);
									$albumimgnm=$file_name;
									$packageUrl=$target1.$albumimgnm;
									//$tpath1='uploads/'.$albumimgnm;       
									//$tmp = $_FILES['video_local']['tmp_name'];
									if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
									//Tells you if its all ok
									$packageUrl.$albumimgnm;
									}
								}
								/*11*/
								if($_POST['sdk_type']=="5"){
									//This is the directory where images will be saved
									$target1 = "lyricvid/material/videotransition/";
									$file_name= str_replace(" ","-",$_FILES['packageUrl']['name']);
									$albumimgnm=$file_name;
									$packageUrl=$target1.$albumimgnm;
									//$tpath1='uploads/'.$albumimgnm;       
									//$tmp = $_FILES['video_local']['tmp_name'];
									if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
									//Tells you if its all ok
									$packageUrl.$albumimgnm;
									}
								}
								if($_POST['sdk_type']=="12"){
								//This is the directory where images will be saved
								$target1 = "lyricvid/material/partical/";
								$file_name= str_replace(" ","-",$_FILES['packageUrl']['name']);
								$albumimgnm=$file_name;
								$packageUrl=$target1.$albumimgnm;
								//$tpath1='uploads/'.$albumimgnm;       
								//$tmp = $_FILES['video_local']['tmp_name'];
								if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
								//Tells you if its all ok
								$packageUrl.$albumimgnm;
								}
							}
				/*********finish package upload*******/
				/*added upload coverURL*/
				if($_POST['sdk_type']=="1"){
					//This is the directory where images will be saved
					$target1 = "lyricvid/material/theme/cover/";
					$target=explode(".",$_FILES['coverUrl']['tmp_name']);
					$target=$target[count($target)-1];
					$path = pathinfo($_FILES["coverUrl"]["name"]);
					$ext = $path['extension'];
					$coverUrl=$target1.$ren.'.'.$ext;
					if(move_uploaded_file($_FILES['coverUrl']['tmp_name'], $coverUrl)) {
					//Tells you if its all ok
					echo "The file ". basename( $_FILES['coverUrl']['name']). " has been uploaded, and your information has been added to the directory";
					}
				}
				/*2*/
				if($_POST['sdk_type']=="2"){
					//This is the directory where images will be saved
					$target1 = "lyricvid/material/videofx/cover/";
					$target=explode(".",$_FILES['coverUrl']['tmp_name']);
					$target=$target[count($target)-1];
					$path = pathinfo($_FILES["coverUrl"]["name"]);
					$ext = $path['extension'];
					$coverUrl=$target1.$ren.'.'.$ext;
					if(move_uploaded_file($_FILES['coverUrl']['tmp_name'], $coverUrl)) {
					//Tells you if its all ok
					echo "The file ". basename( $_FILES['coverUrl']['name']). " has been uploaded, and your information has been added to the directory";
					}
				}
				/*3*/
				if($_POST['sdk_type']=="4"){
					//This is the directory where images will be saved
					$target1 = "lyricvid/material/animatedsticker/cover/";
					$target=explode(".",$_FILES['coverUrl']['tmp_name']);
					$target=$target[count($target)-1];
					$path = pathinfo($_FILES["coverUrl"]["name"]);
					$ext = $path['extension'];
					$coverUrl=$target1.$ren.'.'.$ext;
					if(move_uploaded_file($_FILES['coverUrl']['tmp_name'], $coverUrl)) {
					//Tells you if its all ok
					echo "The file ". basename( $_FILES['coverUrl']['name']). " has been uploaded, and your information has been added to the directory";
					}
				}
				/*4*/
				if($_POST['sdk_type']=="3"){
					//This is the directory where images will be saved
					$target1 = "lyricvid/material/captionstyle/cover/";
					$target=explode(".",$_FILES['coverUrl']['tmp_name']);
					$target=$target[count($target)-1];
					$path = pathinfo($_FILES["coverUrl"]["name"]);
					$ext = $path['extension'];
					$coverUrl=$target1.$ren.'.'.$ext;
					if(move_uploaded_file($_FILES['coverUrl']['tmp_name'], $coverUrl)) {
					//Tells you if its all ok
					echo "The file ". basename( $_FILES['coverUrl']['name']). " has been uploaded, and your information has been added to the directory";
					}
				}
					/*5*/
					if($_POST['sdk_type']=="10"){
						//This is the directory where images will be saved
						$target1 = "lyricvid/material/facesticker/cover/";
						$target=explode(".",$_FILES['coverUrl']['tmp_name']);
						$target=$target[count($target)-1];
						$path = pathinfo($_FILES["coverUrl"]["name"]);
						$ext = $path['extension'];
						$coverUrl=$target1.$ren.'.'.$ext;
						if(move_uploaded_file($_FILES['coverUrl']['tmp_name'], $coverUrl)) {
						//Tells you if its all ok
						echo "The file ". basename( $_FILES['coverUrl']['name']). " has been uploaded, and your information has been added to the directory";
						}
					}
						/*6*/
						if($_POST['sdk_type']=="6"){
							//This is the directory where images will be saved
							$target1 = "lyricvid/material/font/cover/";
							$target=explode(".",$_FILES['coverUrl']['tmp_name']);
							$target=$target[count($target)-1];
							$path = pathinfo($_FILES["coverUrl"]["name"]);
							$ext = $path['extension'];
							$coverUrl=$target1.$ren.'.'.$ext;
							if(move_uploaded_file($_FILES['coverUrl']['tmp_name'], $coverUrl)) {
							//Tells you if its all ok
							echo "The file ". basename( $_FILES['coverUrl']['name']). " has been uploaded, and your information has been added to the directory";
							}
						}
							/*7*/
							if($_POST['sdk_type']=="11"){
								//This is the directory where images will be saved
								$target1 = "lyricvid/material/funsticker/cover/";
								$target=explode(".",$_FILES['coverUrl']['tmp_name']);
								$target=$target[count($target)-1];
								$path = pathinfo($_FILES["coverUrl"]["name"]);
								$ext = $path['extension'];
								$coverUrl=$target1.$ren.'.'.$ext;
								if(move_uploaded_file($_FILES['coverUrl']['tmp_name'], $coverUrl)) {
								//Tells you if its all ok
								echo "The file ". basename( $_FILES['coverUrl']['name']). " has been uploaded, and your information has been added to the directory";
								}
							}
							/*8*/
							if($_POST['sdk_type']=="7"){
								//This is the directory where images will be saved
								$target1 = "lyricvid/material/music/cover/";
								$target=explode(".",$_FILES['coverUrl']['tmp_name']);
								$target=$target[count($target)-1];
								$path = pathinfo($_FILES["coverUrl"]["name"]);
								$ext = $path['extension'];
								$coverUrl=$target1.$ren.'.'.$ext;
								if(move_uploaded_file($_FILES['coverUrl']['tmp_name'], $coverUrl)) {
								//Tells you if its all ok
								echo "The file ". basename( $_FILES['coverUrl']['name']). " has been uploaded, and your information has been added to the directory";
								}
							}
							/*9*/
							if($_POST['sdk_type']=="9"){
								//This is the directory where images will be saved
								$target1 = "lyricvid/material/partical/cover/";
								$target=explode(".",$_FILES['coverUrl']['tmp_name']);
								$target=$target[count($target)-1];
								$path = pathinfo($_FILES["coverUrl"]["name"]);
								$ext = $path['extension'];
								$coverUrl=$target1.$ren.'.'.$ext;
								if(move_uploaded_file($_FILES['coverUrl']['tmp_name'], $coverUrl)) {
								//Tells you if its all ok
								echo "The file ". basename( $_FILES['coverUrl']['name']). " has been uploaded, and your information has been added to the directory";
								}
							}
								/*10*/
								if($_POST['sdk_type']=="8"){
									//This is the directory where images will be saved
									$target1 = "lyricvid/material/scene/cover/";
									$target=explode(".",$_FILES['coverUrl']['tmp_name']);
									$target=$target[count($target)-1];
									$path = pathinfo($_FILES["coverUrl"]["name"]);
									$ext = $path['extension'];
									$coverUrl=$target1.$ren.'.'.$ext;
									if(move_uploaded_file($_FILES['coverUrl']['tmp_name'], $coverUrl)) {
									//Tells you if its all ok
									echo "The file ". basename( $_FILES['coverUrl']['name']). " has been uploaded, and your information has been added to the directory";
									}
								}
								/*11*/
								if($_POST['sdk_type']=="5"){
									//This is the directory where images will be saved
									$target1 = "lyricvid/material/videotransition/cover/";
									$target=explode(".",$_FILES['coverUrl']['tmp_name']);
									$target=$target[count($target)-1];
									$path = pathinfo($_FILES["coverUrl"]["name"]);
									$ext = $path['extension'];
									$coverUrl=$target1.$ren.'.'.$ext;
									if(move_uploaded_file($_FILES['coverUrl']['tmp_name'], $coverUrl)) {
									//Tells you if its all ok
									echo "The file ". basename( $_FILES['coverUrl']['name']). " has been uploaded, and your information has been added to the directory";
									}
								}
								/*11*/
								if($_POST['sdk_type']=="12"){
									//This is the directory where images will be saved
									$target1 = "lyricvid/material/particle/cover/";
									$target=explode(".",$_FILES['coverUrl']['tmp_name']);
									$target=$target[count($target)-1];
									$path = pathinfo($_FILES["coverUrl"]["name"]);
									$ext = $path['extension'];
									$coverUrl=$target1.$ren.'.'.$ext;
									if(move_uploaded_file($_FILES['coverUrl']['tmp_name'], $coverUrl)) {
									//Tells you if its all ok
									echo "The file ". basename( $_FILES['coverUrl']['name']). " has been uploaded, and your information has been added to the directory";
									}
								}
					/*finished coverURL*/
					
				 $app_id="app-".$str;
				 
					$m->set_data('id',test_input($id));
					$m->set_data('name',test_input($name));
					$m->set_data("category",test_input($sdk_type));
					$m->set_data('description',test_input($desc));
					$m->set_data('tags',test_input($tags));
					$m->set_data('version',test_input($version));
					$m->set_data('minAppVersion',test_input($minAppVersion));
					$m->set_data('packageUrl',test_input($packageUrl));
					$m->set_data('packageSize',test_input($packageSize));
					$m->set_data('coverUrl',test_input($coverUrl));
					$m->set_data('supportedAspectRatio',test_input($supportedAspectRatio));
				// create a new array
				$a = array (
					'id'=>$m->get_data('id'),
					'name'=>$m->get_data('name'),
					'category'=>$m->get_data('category'),
					'description'=>$m->get_data('description'),
					'tags'=>$m->get_data('tags'),
					'version'=>$m->get_data('version'),
					'minAppVersion'=>$m->get_data('minAppVersion'),
					'packageUrl'=>$m->get_data('packageUrl'),
					'packageSize'=>$m->get_data('packageSize'),
					'coverUrl'=>$m->get_data('coverUrl'),
					'supportedAspectRatio'=>$m->get_data('supportedAspectRatio'),
				);
				$q=$d->insert("video_sdk",$a);
				if($q==TRUE) {

					header("location:add_sdk_data.php?successfully..");
					
				} else {

					header("location:add_sdk_data.php?error");	
				}
	}
	
	
if(isset($n_id)) {

	$q=$d->delete("notify_db","n_id='$n_id'");
	if($q==TRUE) {
		 header("location:notifications.php?__successed");
	} else {
		 header("location:notifications.php?__error_");
	}

}


//add download token and urls fix 04-10-2018
	if(isset($_POST['api_name'])){
		
			
			$m->set_data("api_name",test_input($api_name));
			$m->set_data("api_link",test_input($api_link));
			$m->set_data("api_token",test_input($api_token));
			
			// create a new array
			$a = array (
				
				'name'=>$m->get_data('api_name'),
				'link'=>$m->get_data('api_link'),
				'token'=>$m->get_data('api_token'),
				
			);
			$q=$d->insert("tbl_api_fetch_url",$a);
		if($q==TRUE) {

			
			header("location:add_download_url.php?success");
		
		} else {

		header("location:add_download_url.php?error");	
		}

	} 

 
		
					
	
	?>