<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; ?>


 
      <!-- Content Wrapper -->

      <div class="content-wrapper">
       
        <section class="content-title">
          <label></label>
          <?php $str=$_GET['group_id'];
                      ?>
          <a href="../../data/pages/add_group_app.php?group_id=<?php echo $str ?>" class="btn btn-success" style="float:right;">add More apps</a>

            
        </section>
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



            <?php include '../../data/common/footer.php'; ?>

