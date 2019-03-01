<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; ?>


<div class="content">
<div class="col-lg-12 col-md-12">
      <div class="card">
        <div class="card-header card-header-tabs card-header-rose">
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
              <span class="nav-tabs-title"> </span>
              <ul class="nav nav-tabs" data-tabs="tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#profile" data-toggle="tab">
                    <i class="material-icons">today</i> Today
                    <div class="ripple-container"></div>
                  </a>
           
              </ul>
            </div>
          </div>
        </div>
		
        <div class="card-body">
		
          <div class="tab-content">
		  
            <div class="tab-pane active" id="profile">
               
			   <table id="table1" class="table table-bordered table-striped datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>App_ID</th>
              <th>app name</th>
              <th>downoads</th>
              <th>date</th>
          
            </tr>
          </thead>
          <tbody>
            <div id="topic_group">
            <tr>
              <?php 

              $str=$_GET['id'];
        echo $curdate=date('Y-m-d');
            $i=1;
            $q=$d->select("date_filter,appdetails ","date_filter.app_id=appdetails.app_id AND date_filter.today_date= CURDATE() AND appdetails.app_id=$str","");
          while($row=mysqli_fetch_array($q)) {
             ?>
              <td><?php echo $i++; ?></td>
              <td ><?php echo $row['app_id'] ?></td>
              <td ><?php echo $row['app_name'] ?></td>
               <td><?php echo $row['download'] ?></td>
              <td><?php echo $row['today_date'] ?></td>

            </tr>
          <?php } ?>
          </div>
         
          </tbody>
        </table>
			   
            </div>
			
           
          </div>
		  
        </div>
		
		
      </div>
    </div>
  </div>


<?php include '../common/footer.php'; ?>