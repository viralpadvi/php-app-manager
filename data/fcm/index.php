<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


try{
     // Your code
$servername = "localhost";
$username = "akshay";
$password = "qwerty3004";
$dbname = "appdev";
				 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
} 
catch(Error $e) {
    $trace = $e->getTrace();
    echo $e->getMessage().' in '.$e->getFile().' on line '.$e->getLine().' called from '.$trace[0]['file'].' on line '.$trace[0]['line'];
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Firebase Push Notification</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
						
					<h2>Send Firebase Push Notification</h2>
					<hr />
					
					<form action=""  method="post">
											   
						<div class="form-group">
							<label for="send_to">Send To:</label>
							<select name="send_to" id="send_to" class="form-control">
								<option value="sngle">Single Device</option>
								<option value="topic">Topic</option>
							</select>
						</div>
						<?php 
						if (isset($_POST['id'])) {
  							# code...
  						}
						 $str=$_POST['id'];
						 
						 $sql = "SELECT * FROM appdetails where id=$str";
							$result = $conn->query($sql);

 						   while($row = $result->fetch_assoc()) {  ?>
						<div class="form-group">
						<?php echo $str; ?>
						<input type="hidden" required="" value="<?php echo $row["app_name"]; ?>" class="form-control" id="app_name" name="app_name">
							<label for="firebase_api">Firebase Server API Key:</label>
							<input type="text" required="" class="form-control" id="firebase_api" placeholder="Enter Firebase Server API Key"  name="firebase_api" value="<?php echo $row["authentication"]; ?>" >
						</div>
						<div class="form-group" id="firebase_token_group">
							<label for="firebase_token">Firebase Token:</label>
							<input type="text" required="" class="form-control" id="firebase_token" placeholder="Enter Firebase Token"  name="firebase_token">
						</div>

						<div class="form-group" style="display: none" id="topic_group">
							<label for="topic">Topic Name:</label>
							<input type="text" class="form-control" value="<?php echo $row["token"]; ?>" id="topic" placeholder="Enter Topic Name" name="topic">
						</div>
					<?php } 
					?>
					
					<div class="radio">
							<label><input type="radio" id="myRadios" name="myRadios" value="Update">Update</label>

							<label><input type="radio" id="myRadios" name="myRadios" value="General">General</label>

							<label><input type="radio" id="myRadios" name="myRadios" value="Video">Video</label>
						</div>
						<?php 
						$conn1 = mysqli_connect("localhost","akshay","qwerty3004","fcmnew");
						if(!$conn1){
							die("Connection failed: " . mysqli_connect_error());
							}
						if (isset($_GET['video_id'])) {
  							# code...
  						}
						 $str1=$_GET['video_id'];
						 //echo $str1;
						 $sql1 = "select * from tbl_video LEFT JOIN tbl_video_category ON tbl_video.cat_id= tbl_video_category.cid where tbl_video.status='1' and id=$str1";
							$result1 = $conn1->query($sql1);

 						   while($row1 = $result1->fetch_assoc()) {  ?>
						   
						<!-- for update -->
						<div class="form-group" style="display: none" id="image_url_group">
							<label for="image_url">Title:</label>
							<input type="text" class="form-control" id="update_title" value="<?php echo $row1['video_title'];  ?>" placeholder="Enter title" name="update_title">
							<label for="image_url">Message:</label>
							<input type="text" class="form-control" value="Click to download and explore updates 🤗" id="update_message" placeholder="Enter message" name="update_message">
							<label for="image_url">URL:</label>
							<input type="text" class="form-control" id="update_url" value="https://play.google.com/store/apps/details?id=jugadu.statussharing" placeholder="Enter  URL" name="update_url">
						</div>

					
						<!-- for general  -->
						<div class="form-group" style="display: none" id="action_destination_group">
							<label for="action_title">Title:</label>
							<input type="text" class="form-control" id="action_title" value="<?php echo $row1['video_title'];  ?>" placeholder="Enter title" name="action_title">
							<label for="action_title">Message:</label>
							<input type="text" class="form-control" id="action_message" value="Click to download and explore all videos 🤗" placeholder="Enter  Message" name="action_message">
						</div>
 						<!-- for video  -->
 						<div class="form-group" style="display: none" id="image_video">
							<label for="video">Title:</label>
							<input type="text" class="form-control" id="video_title" value="<?php echo $row1['video_title'];  ?>" placeholder="Enter video title" name="video_title">
							<label for="video">Video ID:</label>

							<input type="text" class="form-control" id="video_id" placeholder="Enter title" name="video_id" value="<?php echo $row1['id'];  ?>">
							<input type="hidden"  name="videoGet" id=""  value="videoGet" class="btn btn-info">
							<br>
							<!-- add fild -->
							<label for="video">user ID:</label>
							<input type="text" class="form-control" id="video_userId" placeholder="Enter id" name="video_userId"  value="<?php echo $row1['user_id'];  ?>">
							<label for="video">user name:</label>
							<input type="text" class="form-control"  value="<?php echo $row1['user_name'];  ?>" id="video_username" placeholder="Enter user name" name="video_username">
							<label for="video">video type:</label>
							<input type="text" class="form-control"  value="<?php echo $row1['video_type'];  ?>" id="videoType" placeholder="Enter VideoType" name="videoType">
							<label for="video">videoTitle:</label>
							<input type="text" class="form-control"  value="<?php echo $row1['video_title']; ?>" id="videoTitle" placeholder="Enter Image URL" name="videoTitle">
							<label for="video">videoUrl:</label>
							<input type="text" class="form-control"   value="<?php echo $row1['video_url']; ?>" id="videoUrl" placeholder="Enter something" name="videoUrl">
							<label for="video">videoId:</label>
							<input type="text" class="form-control"  value="<?php echo $row1['video_id'];  ?>" id="videoId" placeholder="Enter something" name="videoId">
								<label for="video">videoDuration:</label>
							<input type="text" class="form-control"  value="<?php echo $row1['video_duration'];  ?>" id="videoDuration" placeholder="Enter something" name="videoDuration">
								<label for="video">tags:</label>
							<input type="text" class="form-control"  value="<?php echo $row1['tags'];  ?>" id="video_tags" placeholder="Enter something" name="video_tags">
								<label for="video">totalVIews:</label>
							<input type="text" class="form-control"  value="<?php echo $row1['total_views'];  ?>" id="video_totalVIews" placeholder="Enter something" name="video_totalViews">
								<label for="video">cid:</label>
							<input type="text" class="form-control"  value="<?php echo $row1['cid'];  ?>" id="video_cid" placeholder="Enter something" name="video_cid">
								<label for="video">categoryName:</label>
							<input type="text" class="form-control"  value="<?php echo $row1['category_name'];  ?>" id="video_categoryName" placeholder="Enter something" name="video_categoryName">
								<label for="video">ThumbImage:</label>
							<input type="text" class="form-control"  value="<?php echo $row1['video_thumbnail']; ?>" id="video_ThumbImage" placeholder="Enter something" name="video_ThumbImage">
								<label for="video">downloads:</label>
							<input type="text" class="form-control" id="video_downloads" value="<?php echo $row1['downloads'];  ?>" placeholder="Enter something" name="video_downloads">
								<label for="video">fileSize:</label>
							<input type="text" class="form-control"  value="1000" id="video_fileSize" placeholder="Enter something" name="video_fileSize">
								<label for="video">url:</label>
							<input type="text" class="form-control"  value="<?php echo 'https://play.google.com/store/apps/details?id=jugadu.statussharing' ; ?>" id="video_url" placeholder="Enter something" name="video_url">
								<label for="video">type:</label>
							<input type="text" class="form-control"  value="<?php echo 'Video';  ?>" id="video_type" placeholder="Enter something" name="video_type">
								<label for="video">image:</label>
							<input type="text" class="form-control"  value="<?php echo $row1['video_url'].'.jpg'; ?>" id="video_image" placeholder="Enter something" name="video_image">
								<label for="video">title:</label>
							<input type="text" class="form-control"  value="<?php echo $row1['video_title']; ?>" id="video_title1" placeholder="Enter something" name="video_title1">
							<label for="video">Message:</label>
							<textarea type="text" class="form-control" rows="5" id="video_message" placeholder="Enter message" name="video_message">Click to download and explore more videos 🤗</textarea>
						</div>
						<!-- end vodeo -->
						   <?php } ?>
						<input type="submit" name="notification" class="btn btn-info" value="submit">
					</form>
				</div>
				<div class="col-lg-6">
					<?php
					if(isset($_POST['notification'])){
		
						require_once __DIR__ . '/notification.php';
						$notification = new Notification();
						
						if(isset($_POST['myRadios'])) {
							if($_POST['myRadios'] == 'Update') {
								// code for Update here
									$title=isset($_POST['update_title'])?$_POST['update_title']:'';
									$message=isset($_POST['update_message'])?$_POST['update_message']:'';
									$url=isset($_POST['update_url'])?$_POST['update_url']:'';
							} elseif($_POST['myRadios'] == 'General') {
								// code for General here
									$title=isset($_POST['action_title'])?$_POST['action_title']:'';
									$message=isset($_POST['action_message'])?$_POST['action_message']:'';
									$url=isset($_POST['video_url'])?$_POST['video_url']:'';
							}elseif($_POST['myRadios'] == 'Video') {
								// code for Video here
									$title=isset($_POST['video_title1'])?$_POST['video_title1']:'';
									$message=isset($_POST['video_message'])?$_POST['video_message']:'';
									$url=isset($_POST['video_url'])?$_POST['video_url']:'';
							}
						}
						
						//general values
							$type=isset($_POST['myRadios'])?$_POST['myRadios']:'';
						    $id=isset($_POST['video_id'])?$_POST['video_id']:'';
                            $userId=isset($_POST['video_userId'])?$_POST['video_userId']:'';
                            $userName=isset($_POST['video_userName'])?$_POST['video_userName']:'';
                            $videoType=isset($_POST['videoType'])?$_POST['videoType']:'';
                            $videoTitle=isset($_POST['videoTitle'])?$_POST['videoTitle']:'';
                            $videoUrl=isset($_POST['videoUrl'])?$_POST['videoUrl']:'';
                            $videoId=isset($_POST['videoId1'])?$_POST['videoId1']:'';
                            $videoDuration=isset($_POST['videoDuration'])?$_POST['videoDuration']:'';     
                            $tags=isset($_POST['video_tags'])?$_POST['video_tags']:'';
                            $totalViews=isset($_POST['video_totalViews'])?$_POST['video_totalViews']:'';
                            $cid=isset($_POST['video_cid'])?$_POST['video_cid']:'';
                            $categoryName=isset($_POST['video_categoryName'])?$_POST['video_categoryName']:'';
                            $ThumbImage=isset($_POST['video_ThumbImage'])?$_POST['video_ThumbImage']:'';
                            $downloads=isset($_POST['video_downloads'])?$_POST['video_downloads']:'';
                            $fileSize=isset($_POST['video_fileSize'])?$_POST['video_fileSize']:'';
                            $image=isset($_POST['video_image'])?$_POST['video_image']:'';
						
						//getset
							$notification->setId($id);
							$notification->setUserId($userId);
							$notification->setUserName($userName);
							$notification->setVideoType($videoType);
							$notification->setVideoTitle($videoTitle);
							$notification->setVideoUrl($videoUrl);
							$notification->setVideoId($videoId);
							$notification->setVideoDuration($videoDuration);
							$notification->setTags($tags);
							$notification->setTotalViews($totalViews);
							$notification->setCid($cid);
							$notification->setCategoryName($categoryName);
							$notification->setThumbImage($image);
							$notification->setDownloads($downloads);
							$notification->setFileSize($fileSize);
							$notification->setUrl($url);
							$notification->setType($type);						
							$notification->setImage($image);
							$notification->setTitle($title);
							$notification->setMessage($message);
							
							//main
							$firebase_token = $_POST['firebase_token'];
							$firebase_api = $_POST['firebase_api'];
							
							$topic = $_POST['topic'];
							$app_name = $_POST['app_name'];
							$msg = $notification->getNotificatin();
							
							if($_POST['send_to']=='topic'){
								$fields = array(
									'to' =>$topic,
									'data' => $msg,
									
								);
								$result = mysqli_query($conn,"INSERT INTO `notify_db` (`id`, `userId`,`app_name`, `userName`, `videoType`, `videoTitle`, `videoUrl`,`url`, `videoId`, `videoDuration`, `tags`, `totalViews`, `cid`, `categoryName`, `ThumbImage`, `downloads`, `fileSize`, `type`, `image`, `title`, `message`, `firebase_api`,`topic`) VALUES ('$id', '$userId','$app_name', '$userName', '$videoType', '$videoTitle', '$videoUrl','$url', '$videoId', '$videoDuration', '$tags', '$totalViews', '$cid', '$categoryName', '$image', '$downloads', '$fileSize', '$type', '$image', '$title', '$message', '$firebase_api','$topic')");
							}else{
								
								$fields = array(
									'to' => $firebase_token,
									'data' => $msg,
								);
								/*$result = mysqli_query($conn,"INSERT INTO `notify_db` (`id`, `userId`, `userName`, `videoType`, `videoTitle`, `videoUrl`,`url`, `videoId`, `videoDuration`, `tags`, `totalViews`, `cid`, `categoryName`, `ThumbImage`, `downloads`, `fileSize`, `type`, `image`, `title`, `message`, `firebase_token`, `firebase_api`) VALUES ('$id', '$userId', '$userName', '$videoType', '$videoTitle', '$videoUrl','$url', '$videoId', '$videoDuration', '$tags', '$totalViews', '$cid', '$categoryName', '$image', '$downloads', '$fileSize', '$type', '$image', '$title', '$message', '$firebase_token', '$firebase_api')");*/
								
								$result = mysqli_query($conn,"INSERT INTO `notify_db` (`id`, `userId`,`app_name`, `userName`, `videoType`, `videoTitle`, `videoUrl`,`url`, `videoId`, `videoDuration`, `tags`, `totalViews`, `cid`, `categoryName`, `ThumbImage`, `downloads`, `fileSize`, `type`, `image`, `title`, `message`,`firebase_token`, `firebase_api`,`topic`) VALUES ('$id', '$userId','$app_name', '$userName', '$videoType', '$videoTitle', '$videoUrl','$url', '$videoId', '$videoDuration', '$tags', '$totalViews', '$cid', '$categoryName', '$image', '$downloads', '$fileSize', '$type', '$image', '$title', '$message', '$firebase_token', '$firebase_api','$topic')");
							}
							 
							
							
							// Set POST variables
							$url = 'https://fcm.googleapis.com/fcm/send';
	 
							$headers = array(
								'Authorization: key=' . $firebase_api,
								'Content-Type: application/json'
							);
							
							// Open connection
							$ch = curl_init();
	 
							// Set the url, number of POST vars, POST data
							curl_setopt($ch, CURLOPT_URL, $url);
							
							curl_setopt($ch, CURLOPT_POST, true);
							curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
							// Disabling SSL Certificate support temporarily
							curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	 
							curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
	 
							// Execute post
							$result = curl_exec($ch);
							if($result === FALSE){
								die('Curl failed: ' . curl_error($ch));
							}
	 
							// Close connection
							curl_close($ch);
							
							echo '<h2>Result</h2><hr/><h3>Request </h3><p><pre>';
							echo json_encode($fields,JSON_PRETTY_PRINT);
							echo '</pre></p><h3>Response </h3><p><pre>';
							echo $result;
							echo '</pre></p>';
					}
					?>
	
				</div>
			</div>
		</div>
		
		<script>
				$(function() {
				$('input:radio[name="myRadios"]').change(function() {
					if ($(this).val() == 'Update') {
						$('#image_url_group').show();
									$("#update_titlle").prop('required',true);
									$("#update_message").prop('required',true);
									$("#update_url").prop('required',true);
								}else{
									$('#image_url_group').hide();
									$("#update_titlle").prop('required',false);
									$("#update_message").prop('required',true);
									$("#update_url").prop('required',true);	
								} 
							});
						});
						$(function() {
						$('input:radio[name="myRadios"]').change(function() {
							if ($(this).val() == 'General') {
								$('#action_destination_group').show();
											$("#action_title").prop('required',true);
											$("#action_message").prop('required',true);
										}else{
											$('#action_destination_group').hide();
											$("#action_title").prop('required',false);
											$("#action_message").prop('required',false);
										
										} 
									});
								});
								$(function() {
								$('input:radio[name="myRadios"]').change(function() {
									if ($(this).val() == 'Video') {
											$('#image_video').show();
													$("#video_title").prop('required',true);
													$("#video_id").prop('required',true);
													$("#video_message").prop('required',true);
													
												}else{
													$('#image_video').hide();
													$("#video_title").prop('required',false);
													$("#video_id").prop('required',false);
													$("#video_message").prop('required',false);
													
												} 
											});
										});
/*
			//first checkbox
			$('#include_update').change(function(e){
					if($(this).prop("checked")==true){
						$('#image_url_group').show();
						$("#update_titlle").prop('required',true);
						$("#update_message").prop('required',true);
						$("#update_url").prop('required',true);
					}else{
						$('#image_url_group').hide();
						$("#update_titlle").prop('required',false);
						$("#update_message").prop('required',true);
						$("#update_url").prop('required',true);
					
					}
				});

			//second checkbox
			$('#include_general').change(function(e){
					if($(this).prop("checked")==true){
						$('#action_destination_group').show();
						$("#action_title").prop('required',true);
						$("#action_message").prop('required',true);
					}else{
						$('#action_destination_group').hide();
						$("#action_title").prop('required',false);
						$("#action_message").prop('required',false);
					
					
					}
				});
			//third checkbox
				$('#include_video').change(function(e){
					if($(this).prop("checked")==true){
						$('#image_video').show();
						$("#video_title").prop('required',true);
						$("#video_id").prop('required',true);
						$("#video_message").prop('required',true);
						
					}else{
						$('#image_video').hide();
						$("#video_title").prop('required',false);
						$("#video_id").prop('required',false);
						$("#video_message").prop('required',false);
						
					
					}
				});*/
				
			$('#send_to').change(function(e){
					var selectedVal = $("#send_to option:selected").val();
					if(selectedVal=='topic'){
						$('#topic_group').show();
						$("#topic").prop('required',true);
						$('#firebase_token_group').hide();
						$("#firebase_token").prop('required',false);
					}else{
						$('#topic_group').hide();
						$("#topic").prop('required',false);
						$('#firebase_token_group').show();
						$("#firebase_token").prop('required',true);
					}
				});
		</script>
	</body>
</html>