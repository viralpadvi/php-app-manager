
<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; ?>

                  <div class="content">
                      
 

   <div class="content-wrapper">
   <section class="content">
          <div class="row">
		  
           <?php 
            $i=1;
            $status=$_GET['status'];
            $q=$d->select("appdetails","status='$status'");
          while($row=mysqli_fetch_array($q)) {
             ?>
		  <div class="col-sm-3">
            <div style="background-color: white;margin:0px;margin-bottom:10px;">
              <div class="info-box" > 
                    <div class="info-box-content" style="white-space: nowrap;overflow: hidden;padding:10px;text-overflow:ellipsis;">
                      <br>
                   <?php

                      if ($row['status'] =='0') {
                          echo '<a  href=#?status='.$row['status'].'>'.'<img height="20" style="float: right" width="20" src="..\..\data\img\resource\icon\Rad.png"/></a>';
                      }elseif ($row['status']=='1') {
                        # code...
                        echo '<a  href=#?status='.$row['status'].'>'.'<img  height="20" style="float: right" width="20" src="..\..\data\img\resource\icon\green.png"/></a>';
                      }elseif ($row['status']=='2') {
                        # code...
                        echo '<a  href=#?status='.$row['status'].'>'.'<img  height="20" style="float: right" width="20" src="..\..\data\img\resource\icon\yellow.png"/></a>';
                      }
            echo '<a  target="_blank"  href=https://play.google.com/store/apps/details?id='.$row['pkg_name'].'>'.'<img  height="20" style="float: left" width="20" src="https://www.gstatic.com/android/market_images/web/favicon_v2.ico"/></a>';
            
                      ?> 
                  <div class="text-center value">
                      <?php  $i++; ?>
                    <a href=../../data/pages/show_app_page.php?id=<?php echo $row['id']; ?> > <img id="my" height="150" width="150" src="<?PHP echo "/appdevinc/".$row['app_icon']; ?>"/> </a>
                    

                  </div>
                   
                  <br>

                  <label><?PHP echo $row['app_name']; ?></label>
                  <div class="text-muted" style="white-space: nowrap;overflow: hidden;text-overflow:ellipsis;"> DEV:-> <a  href=/data/pages/developerapp.php?developer_ac=<?php echo $row['developer_ac']; ?>><?php echo $row['developer_ac']; ?></a> <br/>  <?PHP echo $row['downloads']; ?> Downloads          
          <br/>  
          <a  href=../../data/pages/editapp.php?app_id=<?php echo $row['app_id']; ?> class="btn btn-success" style="float:center;">Edit</a>
          <a  href=../../data/fcm/getappId.php?id=<?php echo $row['id']; ?> class="btn btn-warning" style="float:center;">notify</a>
          
         
         
             
       
          </div>
                  <div class="text-center value" >
                 
          </div>



              </div>
            </div>
          </div>
          </div> 
		   
           <?php } ?>
		  
		  </div>
	</section>
   
   </div>
                     </div>
     <br>
       
<?php include '../common/footer.php'; ?>