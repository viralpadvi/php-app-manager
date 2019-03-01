<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; ?>


<script type='text/javascript'>
   function preview_image(event) 
   {
    var reader = new FileReader();
    reader.onload = function()
    {
     var output = document.getElementById('output_image');
     output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
   }
    function preview_imag(event) 
   {
    var reader = new FileReader();
    reader.onload = function()
    {
     var output = document.getElementById('output_imag');
     output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
   }
</script>
<?php 
   extract($_POST);
   
    $app_id=$_GET['app_id'];
   $q=$d->select('appdetails',"app_id='$app_id'");
   $data=mysqli_fetch_array($q);
   
    ?>

<div class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <!-- <i class="material-icons">mail_outline</i> -->
            <img src="https://png.icons8.com/metro/50/000000/android-os.png" style="filter: invert(100%);">
          </div>
          <h4 class="card-title">App Add</h4>
        </div>
        <div class="card-body ">
          <form method="POST" action="../../data/controller/update.php" enctype="multipart/form-data" >
            <div class="form-group">
              <label for="package_name" class="bmd-label-floating">Package Name</label>
              <input type="text" class="form-control" name="package_name" value="<?php echo $data['pkg_name']; ?>"  id="package_name">
            </div>

            <div class="form-group">
              <label for="developer_ac" class="bmd-label-floating"></label>
              <select class="form-control" name="developer_ac" id="developer_ac">

                <option selected="selected" value="<?php echo $data['developer_ac']?>"> <?php
            if ($data['developer_ac'] ==$data['developer_ac']) {
                          echo $data['developer_ac'];
                      }
            ?>
            </option>
                <?php 
                           $i=1;
                           $q=$d->select("developer","","");
                           while($row=mysqli_fetch_array($q)) {
                           ?>
                        <option value="<?php echo $row['dev_name']; ?>"><?php echo $row['dev_name']; ?></option>
                        <?php } ?>
              </select>
            </div>
      <br>
            <div class="form-group">
              <label for="app_name" class="bmd-label-floating">Application Name</label>
              <input type="text" class="form-control" name="app_name" value="<?php echo $data['app_name']?>" id="app_name">
            </div>

            <div class="form-group">
              <label for="short_desc" class="bmd-label-floating">Short Description</label>
              <input type="text" class="form-control" name="short_desc" value="<?php echo $data['short_desc']?>" id="short_desc">
            </div>

    <div class="form-group">
              <label for="desc" class="bmd-label-floating">Description</label>
              <textarea class="form-control" name="description" id="desc"  rows="6" cols="80"> <?php echo $data['description']?></textarea>
            </div>

            <div class="form-group">
              <label for="promo_video_id" class="bmd-label-floating">Promo Video Id (youtube id)</label>
              <input type="text" class="form-control" name="promo_video_id" value="<?php echo $data['promo_video_id']?>" id="promo_video_id">
            </div>

            <div class="form-group">
              <label for="version_code" class="bmd-label-floating">Version Code</label>
              <input type="text" class="form-control" name="version_code" value="<?php echo $data['version_code']?>" id="version_code">
            </div>
              <div class="form-group">
              <label for="version_name" class="bmd-label-floating">Version Name</label>
              <input type="text" class="form-control" value="<?php echo $data['version_name']?>" name="version_name" id="version_name">
            </div>

             <div class="form-group">
              <label for="category" class="bmd-label-floating"></label>
              <select class="form-control" name="category" id="category">
                 <option selected="selected" value="<?php echo $data['category']?>">
            <?php
            if ($data['category'] ==$data['category']) {
                          echo $data['category'];
                      }
            ?>
            </option>
                   <?php 
                           $i=1;
                           $q=$d->select("app_category","","");
                           while($row=mysqli_fetch_array($q)) {
                            ?>
                        <option value="<?php echo $row['cat_name']; ?>"><?php echo $row['cat_name']; ?></option>
                        <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="status" class="bmd-label-floating"></label>
              <select class="form-control" name="status" id="status">
                <option selected="selected" value="<?php echo $data['status']?>">
                        <?php
            if ($data['status'] =='0') {
                          echo 'Suspend';
                      }elseif ($data['status']=='1') {
                        # code...
                        echo 'Live';
                      }elseif ($data['status']=='2') {
                        # code...
                        echo 'Rejected';
                      }
            ?></option>

                 <option value="0">Suspend</option>
                         <option value="1">Live</option>
                          <option value="2">Rejected</option>
              </select>
            </div>

            <div class='form-group'>
                     <label></label>
                     <select name="onoff" class="form-control" type="text">
                        <option selected="selected" value="<?php echo $data['revenuad']?>">
            <?php
            if ($data['revenuad'] =='0') {
                          echo 'ads off';
                      }elseif ($data['revenuad']=='1') {
                        # code...
                        echo 'ads on';
                      }
            ?>
            </option>
                        <option value="0">ads off</option>
                        <option value="1">ads on</option>
                      
                     </select>
                  </div>


            <div class="form-group">
              <label for="AD" class="bmd-label-floating"></label>
              <select class="form-control" name="AD" id="AD">
                <option selected="selected" value="<?php echo $data['AD']?>">
                        <?php
            if ($data['AD'] =='0') {
                          echo 'Google';
                      }elseif ($data['AD']=='1') {
                        # code...
                        echo 'Facebook';
                      }
            ?></option>

                <option value="0">Google</option>
                         <option value="1">Facebook</option>
              </select>
            </div>
             <br>

             <div class="form-group">
              <label for="authentication"  class="bmd-label-floating">Firebase API key</label>
              <input type="text" class="form-control" value="<?php echo $data['authentication']; ?>" name="authentication" id="authentication">
            </div>
            <div class="form-group">
              <label for="token" class="bmd-label-floating">Token</label>
              <input type="text" class="form-control" value="<?php echo $data['token']; ?>" name="token" id="token">
            </div>
        </div>
        <div class="card-footer "> 
        </div>
      </div>
    </div>

<!-- new google sepreted -->

      <div class="col-md-6">
      <div class="card ">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <!-- <i class="material-icons">mail_outline</i> -->
            <img src="https://png.icons8.com/material/50/000000/google-logo.png" style="filter: invert(100%);">
          </div>
          <h3 class="card-title">GOOGLE</h3>
        </div>
        <div class="card-body "> 
            <div class="form-group">
              <label for="google_initialize_id" class="bmd-label-floating">Google Initialize</label>
              <input type="text" class="form-control" value="<?php echo $data['google_initialize_id']; ?>" name="google_initialize_id" id="google_initialize_id">
            </div>
            <div class="form-group">
              <label for="google_banner_id" class="bmd-label-floating">Google Banner</label>
              <input type="text" class="form-control" name="google_banner_id" value="<?php echo $data['google_banner_id']; ?>"  id="google_banner_id">
            </div>
      <div class="form-group">
        <label for="google_inter_id" class="bmd-label-floating">Google Inter</label>
        <input type="text" class="form-control" name="google_inter_id" value="<?php echo $data['google_inter_id']; ?>" id="google_inter_id">
         </div>
      <div class="form-group">
        <label for="google_native_id" class="bmd-label-floating">Google Native</label>
        <input type="text" class="form-control" name="google_native_id" value="<?php echo $data['google_native_id']; ?>" id="google_native_id">
         </div>
        </div>
      </div>
    </div>

    <!-- new facebook sepreted part -->

     <div class="col-md-6">
      <div class="card ">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <!-- <i class="material-icons">mail_outline</i> -->
            <img src="https://png.icons8.com/ios/50/000000/facebook-circled.png" style="filter: invert(100%);">
          </div>
          <h3 class="card-title">FACEBOOK</h3>
        </div>
        <div class="card-body "> 
            <div class="form-group">
              <label for="fb_banner_id" class="bmd-label-floating">FB Banner</label>
              <input type="text" class="form-control" name="fb_banner_id" value="<?php echo $data['fb_banner_id']; ?>" id="fb_banner_id">
            </div>
            <div class="form-group">
              <label for="fb_inter_id" class="bmd-label-floating">FB Inter</label>
              <input type="text" class="form-control" name="fb_inter_id" value="<?php echo $data['fb_inter_id']; ?>" id="fb_inter_id">
            </div>

            <div class="form-group">
              <label for="fb_native_id" class="bmd-label-floating">FB Native</label>
              <input type="text" class="form-control" name="fb_native_id" value="<?php echo $data['fb_native_id']; ?>" id="fb_native_id">
            </div>
             <div class="form-group"> 
              <input type="text" style="text-align: center;" class="form-control" value="*** FACEBOOK ***" id="examplePass" disabled="true">
            </div> 
        </div> 
      </div>
    </div>

    <!-- new integrated -->

     <div class="col-md-12">
      <div class="card ">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <!-- <i class="material-icons">mail_outline</i> -->
            <img src="https://png.icons8.com/ios-glyphs/50/000000/upload.png" style="filter: invert(100%);">
          </div> 
          <h3 class="card-title">Upload Image</h3>
        </div>
        <div class="card-body "> 
            <div class="row">

           
               <!-- end off -->


               <div class='col-md-6'>
                  <div>
                     <img id="output_image" src="../../appdevinc/<?php echo $data['app_icon']; ?>" width="225" height="225"/>
                     <br>
                     <label >
                     <input type="file" accept="img/*" name="app_icon" placeholder="upload" onchange="preview_image(event)">
                     </label>
                  </div>
               </div>
               <div class='col-md-6'>
                  <div  >
                     <img id="output_imag" src="../../appdevinc/<?php echo $data['app_icon']; ?>" width="412" height="325"/>
                     <br>
                     <label >
                     <input type="file" accept="img/*" name="app_banner" placeholder="upload" onchange="preview_imag(event)"  >
                     </label>
                  </div>
               </div>
           
        </div> 
      </div>
    </div>
      <div class="card-footer">
            <div class="mr-auto">
             <!--    <div class="row">
              <label class="col-md-4"></label>
              <div class="col-md-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="" required > Remember me
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
              </div>
            </div> -->
               <input class="hidden" name="app_id" value="<?php echo $data['app_id']; ?>" type="hidden"  />
   <input type="submit" name="editbtn" placeholder="update" class="btn btn-fill btn-rose" />
              
            </div>
</div>

          </form>
      </div> 
</div> 

<?php include '../../data/common/footer.php'; ?>


<!-- ajax data call directly 2018-09-26 -->
<script>
$(document).ready(function(){
   
  /*$('#submit').click(function(){    
    $.ajax({
      url:"../../data/controller/update",
      method:"POST",
      data:$('#add_name').serialize(),
      success:function(data)
      {
        alert("succes");
        
      }
    });
  });*/
  
});
</script>