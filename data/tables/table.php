
<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; ?>



 <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">DataTables.net</h4>
        </div>
        <div class="card-body">
          <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
           <div class="col-md-12">
          <div class="material-datatables">
            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="1" width="100%">
              <thead>
                <tr>
                  <th>no&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                  <th>app id</th>
                  <th>package</th>
                  <th>name &nbsp;&nbsp;&nbsp;&nbsp;</th>
                  <th>developer A/C</th>
                  <th>status</th>
                  <th>revenuad &nbsp;&nbsp;&nbsp; </th> 
                   <th>download</th>
                  <th >Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                   <th>no</th>
                  <th>app id</th>
                  <th>package</th>
                  <th>name</th>
                  <th>developer A/C</th>
                  <th>status</th>
                  <th>revenuad</th> 
                   <th>Sdownload</th>
                  <th >Actions</th>
                </tr>
              </tfoot>
              <tbody> 
            <tr>
              <?php 
            $i=1;
            $q=$d->select("appdetails","");
          while($row=mysqli_fetch_array($q)) {
             ?>
              <td><?php echo $i++; ?>&nbsp;&nbsp;&nbsp;</td>
              <td ><?php echo $row['app_id'] ?></td>
               <td><?php echo $row['pkg_name'] ?></td>
              <td><?php echo $row['app_name'] ?></td>

              <td><?php echo $row['developer_ac'] ?></td>



              <td>  <?php echo $row['status'] ?></td>
               <td>  <?php echo $row['revenuad'] ?></td>
              <td>  <?php echo $row['downloads'] ?></td>
              
                  <td class="text-right">
                    <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                    <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a> 
                  </td>
                </tr>
                 <?php } ?>
              </tbody>
            </table>
          </div>
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

<?php include '../common/footer.php'; ?>

                 