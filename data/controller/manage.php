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



//delete app data 
	$id = $_GET['id'];
	echo "$id";
	$q=$d->delete("appdetails","id='$id'");
	if($q==TRUE) {
		 $response["message"] = "app deleted";
		 $response["status"] = 1;
		 header("Location:index.php?success..");
		 echo json_encode($response);
	} else {
		 $response["message"] = "Error";
		 $response["status"] = 0;
		 header("Location:index.php?Error");
		 echo json_encode($response);
	}

//.............................................
//add category for insert category
	if(isset($_POST['c_name'])){

			$m->set_data("c_name",test_input($c_name));
			
			// create a new array
			$a = array (
				'c_name'=>$m->get_data('c_name'),
				
			);

			$q=$d->insert("category",$a);
		if($q==TRUE) {

			header("location:category.php?successfully..");
		
		} else {

		header("location:category.php?error");	
		}

	}

//..............................................
//add account for insert account name
	if(isset($_POST['txtName'])){

			$m->set_data("dev_name",test_input($txtName));
			
			// create a new array
			$a = array (
				'dev_name'=>$m->get_data('dev_name'),
				
			);

			$q=$d->insert("developer",$a);
		if($q==TRUE) {

			header("location:../../data/pages/addCategory.php?successfully..");
		
		} else {

		header("location:../../data/pages/addCategory.php?error");	
		}

	}

//.....................................................
//add category for insert category table name
	if(isset($_POST['addcategory'])){

			$m->set_data("cat_name",test_input($addcategory));
			
			// create a new array
			$a = array (
				'cat_name'=>$m->get_data('cat_name'),
				
			);

			$q=$d->insert("app_category",$a);
		if($q==TRUE) {

			header("location:../../data/pages/addCategory.php?successfully..");
		
		} else {

		header("location:../../data/pages/addCategory.php?error");	
		}

	}

//add category for insert category
	if(isset($_POST['submit_chk'])){

			$group_id="gp_".mt_rand(000000000,999999999);
			$m->set_data("group_id",test_input($group_id));
			if(!empty($_POST['checkbox'])){
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['checkbox'] as $selected){
	$m->set_data("app_ids",test_input($selected));

	}
	}
			// create a new array
			$a = array (
				'group_id'=>$m->get_data('group_id'),
				$selected.'\n',
			);


			$q=$d->insert("app_group_cat",$a);
		if($q==TRUE) {

			header("location:appsDetails.php?successfully..");
		
		} else {

		header("location:appsDetails.php?error");	
		}

	}

	//add group id for insert group id
	if(isset($_POST['btn_create_group'])){
		
			$m->set_data("group_id",test_input($group_id));
			
			// create a new array
			$a = array (
				'group_id'=>$m->get_data('group_id'),
				
			);
			$q=$d->insert("add_group_id",$a);
		if($q==TRUE) {

			$str=$_POST['group_id'];
			header("location:../../data/pages/add_group_app.php?group_id=$str");
		
		} else {

		header("location:../../data/pages/add_group_app.php?error");	
		}

	}
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
					$target=explode(".",$_FILES['packageUrl']['tmp_name']);
					$target=$target[count($target)-1];
					$path = pathinfo($_FILES["packageUrl"]["name"]);
					$ext = $path['extension'];
					$packageUrl=$target1.$ren.'.'.$ext;
					if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
					//Tells you if its all ok
					echo "The file ". basename( $_FILES['packageUrl']['name']). " has been uploaded, and your information has been added to the directory";
					}
				}
				/*2*/
				if($_POST['sdk_type']=="2"){
					//This is the directory where images will be saved
					$target1 = "lyricvid/material/videofx/";
					$target=explode(".",$_FILES['packageUrl']['tmp_name']);
					$target=$target[count($target)-1];
					$path = pathinfo($_FILES["packageUrl"]["name"]);
					$ext = $path['extension'];
					$packageUrl=$target1.$ren.'.'.$ext;
					if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
					//Tells you if its all ok
					echo "The file ". basename( $_FILES['packageUrl']['name']). " has been uploaded, and your information has been added to the directory";
					}
				}
				/*3*/
				if($_POST['sdk_type']=="3"){
					//This is the directory where images will be saved
					$target1 = "lyricvid/material/animatedsticker/";
					$target=explode(".",$_FILES['packageUrl']['tmp_name']);
					$target=$target[count($target)-1];
					$path = pathinfo($_FILES["packageUrl"]["name"]);
					$ext = $path['extension'];
					$packageUrl=$target1.$ren.'.'.$ext;
					if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
					//Tells you if its all ok
					echo "The file ". basename( $_FILES['packageUrl']['name']). " has been uploaded, and your information has been added to the directory";
					}
				}
				/*4*/
				if($_POST['sdk_type']=="4"){
					//This is the directory where images will be saved
					$target1 = "lyricvid/material/captionstyle/";
					$target=explode(".",$_FILES['packageUrl']['tmp_name']);
					$target=$target[count($target)-1];
					$path = pathinfo($_FILES["packageUrl"]["name"]);
					$ext = $path['extension'];
					$packageUrl=$target1.$ren.'.'.$ext;
					if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
					//Tells you if its all ok
					echo "The file ". basename( $_FILES['packageUrl']['name']). " has been uploaded, and your information has been added to the directory";
					}
				}
					/*5*/
					if($_POST['sdk_type']=="5"){
						//This is the directory where images will be saved
						$target1 = "lyricvid/material/facesticker/";
						$target=explode(".",$_FILES['packageUrl']['tmp_name']);
						$target=$target[count($target)-1];
						$path = pathinfo($_FILES["packageUrl"]["name"]);
						$ext = $path['extension'];
						$packageUrl=$target1.$ren.'.'.$ext;
						if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
						//Tells you if its all ok
						echo "The file ". basename( $_FILES['packageUrl']['name']). " has been uploaded, and your information has been added to the directory";
						}
					}
						/*6*/
						if($_POST['sdk_type']=="6"){
							//This is the directory where images will be saved
							$target1 = "lyricvid/material/font/";
							$target=explode(".",$_FILES['packageUrl']['tmp_name']);
							$target=$target[count($target)-1];
							$path = pathinfo($_FILES["packageUrl"]["name"]);
							$ext = $path['extension'];
							$packageUrl=$target1.$ren.'.'.$ext;
							if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
							//Tells you if its all ok
							echo "The file ". basename( $_FILES['packageUrl']['name']). " has been uploaded, and your information has been added to the directory";
							}
						}
							/*7*/
							if($_POST['sdk_type']=="7"){
								//This is the directory where images will be saved
								$target1 = "lyricvid/material/funsticker/";
								$target=explode(".",$_FILES['packageUrl']['tmp_name']);
								$target=$target[count($target)-1];
								$path = pathinfo($_FILES["packageUrl"]["name"]);
								$ext = $path['extension'];
								$packageUrl=$target1.$ren.'.'.$ext;
								if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
								//Tells you if its all ok
								echo "The file ". basename( $_FILES['packageUrl']['name']). " has been uploaded, and your information has been added to the directory";
								}
							}
							/*8*/
							if($_POST['sdk_type']=="8"){
								//This is the directory where images will be saved
								$target1 = "lyricvid/material/music/";
								$target=explode(".",$_FILES['packageUrl']['tmp_name']);
								$target=$target[count($target)-1];
								$path = pathinfo($_FILES["packageUrl"]["name"]);
								$ext = $path['extension'];
								$packageUrl=$target1.$ren.'.'.$ext;
								if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
								//Tells you if its all ok
								echo "The file ". basename( $_FILES['packageUrl']['name']). " has been uploaded, and your information has been added to the directory";
								}
							}
							/*9*/
							if($_POST['sdk_type']=="9"){
								//This is the directory where images will be saved
								$target1 = "lyricvid/material/partical/";
								$target=explode(".",$_FILES['packageUrl']['tmp_name']);
								$target=$target[count($target)-1];
								$path = pathinfo($_FILES["packageUrl"]["name"]);
								$ext = $path['extension'];
								$packageUrl=$target1.$ren.'.'.$ext;
								if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
								//Tells you if its all ok
								echo "The file ". basename( $_FILES['packageUrl']['name']). " has been uploaded, and your information has been added to the directory";
								}
							}
								/*10*/
								if($_POST['sdk_type']=="10"){
									//This is the directory where images will be saved
									$target1 = "lyricvid/material/scene/";
									$target=explode(".",$_FILES['packageUrl']['tmp_name']);
									$target=$target[count($target)-1];
									$path = pathinfo($_FILES["packageUrl"]["name"]);
									$ext = $path['extension'];
									$packageUrl=$target1.$ren.'.'.$ext;
									if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
									//Tells you if its all ok
									echo "The file ". basename( $_FILES['packageUrl']['name']). " has been uploaded, and your information has been added to the directory";
									}
								}
								/*11*/
								if($_POST['sdk_type']=="11"){
									//This is the directory where images will be saved
									$target1 = "lyricvid/material/videotransition/";
									$target=explode(".",$_FILES['packageUrl']['tmp_name']);
									$target=$target[count($target)-1];
									$path = pathinfo($_FILES["packageUrl"]["name"]);
									$ext = $path['extension'];
									$packageUrl=$target1.$ren.'.'.$ext;
									if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $packageUrl)) {
									//Tells you if its all ok
									echo "The file ". basename( $_FILES['packageUrl']['name']). " has been uploaded, and your information has been added to the directory";
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
				if($_POST['sdk_type']=="3"){
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
				if($_POST['sdk_type']=="4"){
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
					if($_POST['sdk_type']=="5"){
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
							if($_POST['sdk_type']=="7"){
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
							if($_POST['sdk_type']=="8"){
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
								if(move_uploaded_file($_FILES['packageUrl']['tmp_name'], $coverUrl)) {
								//Tells you if its all ok
								echo "The file ". basename( $_FILES['coverUrl']['name']). " has been uploaded, and your information has been added to the directory";
								}
							}
								/*10*/
								if($_POST['sdk_type']=="10"){
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
								if($_POST['sdk_type']=="11"){
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
					/*finished coverURL*/

				 
				 $app_id="app-".$str;

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



	/*add page hyperlink 02-10-2018  626*/

 	if(isset($_POST['link_name'])){
 		# code...

					$m->set_data('category',test_input($category));
					$m->set_data("short_name",test_input($short_name));
					$m->set_data('web_name',test_input($web_name));
					$m->set_data('link_name',test_input($link_name));
					
				// create a new array
				$a = array (
					
					'category'=>$m->get_data('category'),
					'short_name'=>$m->get_data('short_name'),
					'name'=>$m->get_data('web_name'),
					'link'=>$m->get_data('link_name'),
					
				);
				$q=$d->insert("dynamic_page",$a);
				if($q==TRUE) {
					 $response["message"] = "successfully.";
					 $response["status"] = 1;
					 echo json_encode($response);
				} else {
					 $response["message"] = "Error";
					 $response["status"] = 0;
					 echo json_encode($response);	
				}
	}

	/*end 02-10-2018*/
/*******************************************End Insert Section******************************************/

?>