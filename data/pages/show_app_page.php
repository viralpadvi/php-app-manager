<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; ?>

 
 <?php 
   extract($_POST);
   
    $app_id=$_GET['id'];
   $q=$d->select('appdetails',"id='$app_id'");
   $data=mysqli_fetch_array($q);
   
    ?>

<div class="content">
  <div class="container">
    <div class="row">
  <div class="col-md-10">
        <div class="card ">
                   <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card card-testimonial" style="font-weight: bold;">  

       <img class="img" style=" width: 100%;height: 80%;top:0px;" src="../../appdevinc/<?php echo $data['app_banner']; ?>" />
        <a href="http://play.google.com/store/apps/details?id=<?php echo $data['pkg_name']; ?>" target="_blank"><b style="color:white;position: absolute; right: 15px;text-shadow: 2px 5px 5px black;font-size:20px;top:2px;font-style:bold;"><img width="30" height="30" src="../../data/img/resource/icon/play.png">&nbsp;Google play</b></a> 
       <div class="card-header">
        <div class="card-avatar">
                <a href="#pablo">
                   <a  href=../../data/pages/editapp.php?app_id=<?php echo $data['app_id']; ?> style="color: green;font: bold;text-shadow: 2px 5px 5px black;position: absolute; right:5px;"> Edit <i class="fa fa-paint-brush" ></i></a>
                  <img class="img" src="../../appdevinc/<?php echo $data['app_icon']; ?>" />
                </a>
              </div>
              <h4 class="card-title" style="text-shadow: 2px 2px 2px grey;font-weight: bold; font-size: 16px;color: black;"><?php echo $data['app_name']?></h4>
              <h6 class="card-category"><?php echo $data['short_desc']?></h6>
            </div>
            <div class="card-body">
              <h5 class="card-description" style="  margin: 4px 0px 0px 50px;font-weight: bold; font-size: 16px;color: black;" >
             <p><span class="fa fa-buysellads"></span> <span class="title">App Id:</span>  <?php echo $data['app_id']; ?>&nbsp;&nbsp; <span class="fa fa-android"></span> <span class="title">App Id:</span>  <?php echo $data['developer_ac']; ?>                                   
           <span class="fa fa-contao"></span> <span class="title">Version Code:</span> <?php echo $data['version_code']?>&nbsp;&nbsp;<span class="fa fa-eercast"></span> <span class="title">Version Name:</span> <?php echo $data['version_name']?>&nbsp;&nbsp;<span class="fa fa-gittip"></span> <span class="title">Status:</span> <?php echo $data['status']?> 
           <span class="glyphicon glyphicon-th-list"></span> <span class="title">Category:</span> <?php echo $data['category']?>&nbsp;&nbsp;<span class="glyphicon glyphicon-download"></span> <span class="title">Downloads:</span> <?php echo $data['downloads']?>

            <span class="glyphicon glyphicon-comment"></span> <span class="title">Description:</span> <?php echo $data['description']?></p>  

              </h5>
            </div>
           
          </div>
        </div>
          </div>
                </div>
                </div>
     </div>
   </div>

<?php include '../../data/common/footer.php'; ?>