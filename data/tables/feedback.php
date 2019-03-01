
<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; ?>

<!-- 
<section class="content">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Feedback</h3>
      </div> 
      <div class="box-body">
        <table id="example2" class="table table-bordered table-striped datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email(s)</th>
              <th>message(s)</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i=1;
            $q=$d->select("videofeedback","","");
          while($row=mysqli_fetch_array($q)) {
             ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['message'] ?></td>
              <td>
               
                <form action="userController.php" method="post">
                <input type="hidden" name="user_id_delete_feedback" value="<?php echo $row['f_id']; ?>">
                <button class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>
                </form> 
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div> 
    </div>

  </section> -->
  <!-- End Navbar -->

                  <div class="content">
                      <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">feedback</i>
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
                   <th>#</th>
              <th>Name</th>
              <th>Email(s)</th>
              <th>message(s)</th>
              <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                   <th>#</th>
              <th>Name</th>
              <th>Email(s)</th>
              <th>message(s)</th>
              <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php 
            $i=1;
            $q=$d->select("videofeedback","","");
          while($row=mysqli_fetch_array($q)) {
             ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['message'] ?></td>
              <td>
               
                <form action="../../controller/userController.php" method="post">
                <input type="hidden" name="user_id_delete_feedback" value="<?php echo $row['f_id']; ?>">
                <button class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>
                </form> 
              </td>
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

</div>

<?php include '../../data/common/footer.php'; ?>

