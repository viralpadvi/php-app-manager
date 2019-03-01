
<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; ?>

 
  <div class="content">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">notifications</i>
          </div>
          
        </div>
        <div class="card-body">
          <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="material-datatables">
            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                  <th>Delete</th>
                    <th>IDs</th>
                   <th>Notify</th>
                    <th>App Name</th>
                    <th>Sent Category</th>
                    <th>Cat</th>
                    <th>Message</th>
                  </tr>
                </thead>
              <tfoot>
                 <tr>
                  <th>Delete</th>
                    <th>IDs</th>
                   <th>Notify</th>
                    <th>App Name</th>
                    <th>Sent Category</th>
                    <th>Cat</th>
                    <th>Message</th>
                  </tr>
              </tfoot>
              <tbody>
                <?php 
                  $i=1;
                  $q=$d->select("notify_db","","ORDER BY n_id DESC");
                while($row=mysqli_fetch_array($q)) {
             ?>
              <tr>
              <td>
                <a href="../../data/controller/manage1.php?n_id=<?php echo $row['n_id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
                      <td><?php echo $i++; ?></td>
                 <td>
                       
                 <!-- modiy today 10-10-2018 form data send-->
                 
                <form action=""  method="post">
                <input type="hidden" name="n_id" value="<?php echo $row["n_id"]; ?>" class="form-control" />
                <input type="submit" name="notification_n" class="btn btn-info" value="notify">
                </form>
                <!-- end -->
                
                      </td>
                       <td><?php echo $row['app_name'] ?></td>
                      <td><?php echo $row['type'] ?></td>
                      <td><?php echo $row['categoryName'] ?></td>
                      <td><?php echo $row['title'] ?></td>
                     
                    </tr>
          <?php } ?>
                
              </tbody>
            </table>
          </div>
        </div>
        <!-- end content-->
      </div>
      <!--  end card  -->
    </div>
    <!-- end col-md-12 -->
  </div>
  <!-- end row -->
</div>
<section>
  <?php
  
        //direct notify  for all apps
        if(isset($_POST['notification_n'])){  
          
    
            require_once __DIR__ . '/notification.php';
            $notification = new Notification();
            
            
            // code for Update here
            
              $id=$_POST['n_id']?$_POST['n_id']:'';
            
               extract($_POST);
               $q=$d->select('notify_db',"n_id='$id'");
               $row1=mysqli_fetch_array($q);
   
    
              /*$result = mysqli_query($conn,"INSERT INTO `notify_db` (`id`, `userId`, `userName`, `videoType`, `videoTitle`, `videoUrl`, `videoId`, `videoDuration`, `tags`, `totalViews`, `cid`, `categoryName`, `ThumbImage`, `downloads`, `fileSize`, `type`, `image`, `title`, `message`, `firebase_token`, `firebase_api`) VALUES ('$id', '$userId', '$userName', '$videoType', '$videoTitle', '$videoUrl', '$videoId', '$videoDuration', '$tags', '$totalViews', '$cid', '$categoryName', '$image', '$downloads', '$fileSize', '$type', '$image', '$title', '$message', '$firebase_token', '$firebase_api')");*/
               $title=$row1['title']?$row1['title']:'';
               $message=$row1['message']?$row1['message']:'';
              $url=$row1['url']?$row1['url']:'';
              //general values
              $type=$row1['type']?$row1['type']:'';
                            $userId=$row1['userId']?$row1['userId']:'';
                            $userName=$row1['userName']?$row1['userName']:'';
                            $videoType=$row1['videoType']?$row1['videoType']:'';
                            $videoTitle=$row1['videoTitle']?$row1['videoTitle']:'';
                            $videoUrl=$row1['videoUrl']?$row1['videoUrl']:'';
                            $videoId=$row1['videoId']?$row1['videoId']:'';
                            $videoDuration=$row1['videoDuration']?$row1['videoDuration']:'';     
                            $tags=$row1['tags']?$row1['tags']:'';
                            $totalViews=$row1['totalViews']?$row1['totalViews']:'';
                            $cid=$row1['cid']?$row1['cid']:'';
                            $categoryName=$row1['categoryName']?$row1['categoryName']:'';
                            $ThumbImage=$row1['ThumbImage']?$row1['ThumbImage']:'';
                            $downloads=$row1['downloads']?$row1['downloads']:'';
                            $fileSize=$row1['fileSize']?$row1['fileSize']:'';
                            $image=$row1['image']?$row1['image']:'';
              
               
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
              $firebase_token = $row1['firebase_token'];
              $firebase_api = $row1['firebase_api'];
              
              $topic = $row1['topic'];
              
              $msg = $notification->getNotificatin();
              
              if($row1['topic']!=null){
                $fields = array(
                  'to' =>$topic,
                  'data' => $msg,
                  
                );
                
              }else{
                
                $fields = array(
                  'to' => $firebase_token,
                  'data' => $msg,
                );
                
                /*$result = mysqli_query($conn,"INSERT INTO `notify_db` (`id`, `userId`, `userName`, `videoType`, `videoTitle`, `videoUrl`, `videoId`, `videoDuration`, `tags`, `totalViews`, `cid`, `categoryName`, `ThumbImage`, `downloads`, `fileSize`, `type`, `image`, `title`, `message`, `firebase_token`, `firebase_api`) VALUES ('$id', '$userId', '$userName', '$videoType', '$videoTitle', '$videoUrl', '$videoId', '$videoDuration', '$tags', '$totalViews', '$cid', '$categoryName', '$image', '$downloads', '$fileSize', '$type', '$image', '$title', '$message', '$firebase_token', '$firebase_api')");*/
              }
              
              // Set POST variables
              $url1 = 'https://fcm.googleapis.com/fcm/send';
   
              $headers = array(
                'Authorization: key=' . $firebase_api,
                'Content-Type: application/json'
              );
              
              // Open connection
              $ch = curl_init();
   
              // Set the url, number of POST vars, POST data
              curl_setopt($ch, CURLOPT_URL, $url1);
              
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
              header( "Location:notifications.php?successed"); 
              /*
              echo '<h2>Result</h2><hr/><h3>Request </h3><p><pre>';
              echo json_encode($fields,JSON_PRETTY_PRINT);
              echo '</pre></p><h3>Response </h3><p><pre>';
              echo $result;
              echo '</pre></p>';*/
              
        }
          ?>
  </section>
</div>

<?php include '../common/footer.php'; ?>

