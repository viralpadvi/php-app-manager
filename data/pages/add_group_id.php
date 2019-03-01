<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; ?>


 <div class="content">
<div class="content-wrapper">
       
        <section class="content-title">
          <form action="../../data/controller/manage.php" method="POST">
    <div class="box-header" style="float: right;">
      <?php $str="gp_".date("YmdHis"); ?>
      <input type="hidden" name="group_id" value=<?php echo $str; ?>>
         <button class="btn btn-success" name="btn_create_group">Create app Group</button>
      </div>
     </form>

</section>
<br>
<br>
<br>

   
        <section class="content">
          <div class="row">
         
            <?php 
            $i=1;
            $q=$d->select("add_group_id","","");
          while($row=mysqli_fetch_array($q)) {
             ?>
          <div class="col-sm-3 " >
              <div class="info-box" style="background-color: white;margin:0px;margin-bottom:10px;padding: 10px;">
                <div class="info-box-content">
                 <input  name="group_id" value="<?php echo $str; ?>" type="hidden" />
                  <div class="text-center value">
                      <?php  $i++; ?>
                   <div class="text-muted" style="white-space: nowrap;overflow: hidden;text-overflow:ellipsis;">  
                 <a href=../../data/pages/show_group_apps.php?group_id=<?php echo $row['group_id']; ?>><h4><?php echo  $row['group_id'];  ?></h4></a>   
                   <br/> 

                    <a  href=../../data/controller/updateController.php?group_id=<?php echo $row['group_id']; ?> class="btn btn-danger" style="float:center;">delete</a>
          
          </div>
          </div>
                  <div class="text-center value" >
                   
                </div>
              </div>
            </div>
          </div>
            <?php } ?>
            <br>
        </div>
      </div>
      </form>
    </section>
        <!-- /. main content -->
        <span class="return-up"><i class="fa fa-chevron-up"></i></span>
    </div>
</div>
    <?php include '../../data/common/footer.php'; ?>