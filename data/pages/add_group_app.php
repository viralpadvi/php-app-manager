<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; ?>


      <div class="content-wrapper">
       <form action="../../data/controller/a.php" method="POST">
        <section class="content-title">
        <button class="btn btn-success" style="float:right;">add group apps</button>

          <label><?php $str=$_GET['group_id'];
            echo $str; ?></label>
       
        </section>
        <br>
        <section class="content">
          <div class="row">
         
           <?php 
           $databaseHost     = 'localhost';
            $databaseName     = 'appdev';
            $databaseUsername = 'root';
            $databasePassword = '';

            $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

            $i=1;
           
          $result ="SELECT * FROM appdetails WHERE NOT EXISTS(SELECT *
          FROM   app_group_cat
          WHERE  app_group_cat.group_id='$str' AND app_group_cat.app_ids=appdetails.app_id )";
          $sql = mysqli_query($mysqli,$result)or die(mysqli_error());
          while($row = mysqli_fetch_assoc($sql)) {
             ?>
          <div class="col-sm-3 " >
              <div class="info-box" style="background-color: white;margin:0px;margin-bottom:10px;padding: 10px;">
                <div class="info-box-content">
                <input type="checkbox" name="submit_chk[]" value="<?php echo $row['app_id']; ?>" id="checkbox" style="float:right;">
                 <input  name="group_id" value="<?php echo $str; ?>" type="hidden" />
            
                   <?php

                      if ($row['status'] =='0') {
                          echo '<a  href=#?status='.$row['status'].'>'.'<img height="20" style="float: left" width="20" src="..\..\data\img\resource\icon\Rad.png"/></a>';
                      }elseif ($row['status']=='1') {
                        # code...
                        echo '<a  href=#?status='.$row['status'].'>'.'<img  height="20" style="float: left" width="20" src="..\..\data\img\resource\icon\green.png"/></a>';
                      }elseif ($row['status']=='2') {
                        # code...
                        echo '<a  href=#?status='.$row['status'].'>'.'<img  height="20" style="float: left" width="20" src="..\..\data\img\resource\icon\yellow.png"/></a>';
                      }
                      ?> 
                  <div class="text-center value">
                      <?php  $i++; ?>
                    <a href=#?id=<?php echo $row['id']; ?> > <img id="my" height="200" width="200" src="../../appdevinc/<?PHP echo $row['app_icon']; ?>"/> </a>
                    <br>

                  </div>
                 
                  <label>&nbsp;&nbsp;&nbsp;<?PHP echo $row['app_name']; ?></label>
                  <div class="text-muted"> &nbsp;&nbsp;&nbsp;DEV:-> <a  href=#?developer_ac=<?php echo $row['developer_ac']; ?>><?php echo $row['developer_ac']; ?></a>          
          <br/>  
          &nbsp;&nbsp;&nbsp;<a  href=../../data/pages/editapp.php?app_id=<?php echo $row['app_id']; ?> class="btn btn-success" style="float:center;">Edit</a>
          
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

    
