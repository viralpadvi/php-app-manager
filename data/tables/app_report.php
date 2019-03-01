
<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; ?>



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
              <th>Video</th>
              <th>Status</th>
              <th>Downloads</th>
              <th>Action</th>
            </tr>
              </thead>
              <tfoot>
                <tr>
              <th>#</th>
              <th>Video</th>
              <th>Status</th>
              <th>Downloads</th>
              <th>Action</th>
            </tr>
              </tfoot>
              <tbody>
            <?php 
            $i=1;
            $q=$d->select("appdetails",""," ORDER BY downloads DESC");
          while($row=mysqli_fetch_array($q)) {
             ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $row['app_name'] ?></td>
              <td><?php
            if ($row['status'] =='0') {
                        echo 'Suspend';
                      }elseif ($row['status']=='1') {
                        # code...
                        echo 'Live';
                      }elseif ($row['status']=='2') {
                        # code...
                        echo 'Rejected';
                      }
            ?></td>

              <td><?php echo $row['downloads'] ?></td>
            <td>
              <a  href=/appdevinc/downloadReport.php?app_id=<?php echo $row['app_id']; ?> class="btn btn-success" style="float:center;">show</a>
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

