
<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; 
$str=$_GET['id'];
?>

                  <div class="content">
                      
 

   <div class="content-wrapper">
   <section class="content">
          
 <form action="/fcm/index.php" method="POST" enctype="multipart/form-data">
               <div class='col-md-6'>
                  <div class='form-group'>
                     <label>VideoId</label>
                <input type="text" class="form-control" name="video_id" placeholder="Enter video id" value=""><br>
                     <label>AppId</label>
                <input type="text" class="form-control" name="id" placeholder="Enter app id" value="<?php echo $str; ?>"><br>
              <button class="btn btn-success" value="submit">submit</button>
                  </div>
               </div>
            </form>

	</section>
   
   </div>
                     </div>
     <br>
       
<?php include '../common/footer.php'; ?>