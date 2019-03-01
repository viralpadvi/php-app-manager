<?php
//including the database connection file 2018-09-27 edding
$databaseHost     = 'localhost';
$databaseName     = 'appdevnew';
$databaseUsername = 'appdevdb';
$databasePassword = 'root@123';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);



   if(isset($_POST['editbtn'])) { 
   // mt_rand(100000000, 999999999);

                $id = $_POST['app_id']; 
               $str= date('YmdHi');
                 $ren="icon_".$str;
                 $ren1="banner_".$str;
                   $target1 = "../../appdevinc/img/";
                 if($_FILES['app_icon']['name']!='' && isset($_FILES['app_icon']['name'])){
                   //This is the directory where images will be saved
                   $target=explode(".",$_FILES['app_icon']['tmp_name']);
                   $target=$target[count($target)-1];
                   $path = pathinfo($_FILES["app_icon"]["name"]);
                   $ext = $path['extension'];
                   $app_icon=$target1.$ren.'.'.$ext;
                    $app_icon1= "img/".$ren.'.'.$ext;
                     if(move_uploaded_file($_FILES['app_icon']['tmp_name'], $app_icon)) {
                     //Tells you if its all ok
                     echo "The file ". basename( $_FILES['app_icon']['name']). " has been uploaded, and your information has been added to the directory";

                     $updateimg=mysqli_query($mysqli,"update `appdetails` SET app_icon='$app_icon1' where `appdetails`.`app_id` = '$id'");
                     
                   }
                 }

                 if($_FILES['app_banner']['name']!='' && isset($_FILES['app_banner']['name'])){

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

                  $updateimg=mysqli_query($mysqli,"update `appdetails` SET `app_banner` = '$app_banner1' where `appdetails`.`app_id` = '$id'");
               }
              }
                            
               $pkg_name = $_POST["pkg_name"]; 
               
               $developer_ac = $_POST["developer_ac"];
               $app_name = $_POST["app_name"];
               $short_desc = $_POST["short_desc"];
               $description = $_POST["description"];
                $promo_video_id = $_POST["promo_video_id"];
               $version_code = $_POST["version_code"];
               $version_name = $_POST["version_name"];
               $category = $_POST["category"];
               $status = $_POST["status"];
               //ad today 2018-09-12
               $AD = $_POST["AD"];
               $revenuad = $_POST["onoff"];
              // $app_icon =  $app_icon;
               $APP_API_key = $_POST["authentication"];
            $token = $_POST["token"];
            /*new added 12-09-2018*/
              $google_initialize_id = $_POST["google_initialize_id"];
                $google_banner_id = $_POST["google_banner_id"];
                  $google_native_id = $_POST["google_native_id"];
                    $google_inter_id = $_POST["google_inter_id"];
                      $fb_banner_id = $_POST["fb_banner_id"];
                        $fb_native_id = $_POST["fb_native_id"];
                          $fb_inter_id = $_POST["fb_inter_id"];
   
       $result = mysqli_query($mysqli,"UPDATE `appdetails` SET  `pkg_name` = '$pkg_name',`app_name` = '$app_name', `developer_ac` = '$developer_ac', `short_desc` = '$short_desc', `description` = '$description', `promo_video_id` = '$promo_video_id', `version_code` = '$version_code', `version_name` = '$version_name', `category` = '$category', `status` = '$status' ,`AD` = '$AD' , `revenuad` = '$revenuad' , `authentication`='$APP_API_key',`token`='$token',`google_initialize_id`='$google_initialize_id',`google_banner_id`='$google_banner_id',`google_native_id`='$google_native_id',`google_inter_id`='$google_inter_id',`fb_banner_id`='$fb_banner_id',`fb_native_id`='$fb_native_id',`fb_inter_id`='$fb_inter_id'  WHERE `appdetails`.`app_id` = '$id'");
            
          if($result==TRUE) {

              header("location:../../data/index.php?successfully..");
    
         }    
         
   }
   ?>