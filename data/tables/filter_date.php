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
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#messages" data-toggle="tab">
                    <i class="material-icons">today</i> Yesterday
                    <div class="ripple-container"></div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#settings" data-toggle="tab">
                    <i class="material-icons">today</i> this Week
                    <div class="ripple-container"></div>
                  </a>
                </li>
        <li class="nav-item">
                  <a class="nav-link" href="#settings2" data-toggle="tab">
                    <i class="material-icons">today</i> this month
                    <div class="ripple-container"></div>
                  </a>
                </li>
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
        echo $curdate=date('Y-m-d');
            $i=1;
            $q=$d->select("date_filter,appdetails ","date_filter.app_id=appdetails.app_id AND date_filter.today_date= CURDATE()","");
          while($row=mysqli_fetch_array($q)) {
             ?>
              <td><?php echo $i++; ?></td>
              <td ><?php echo $row['app_id'] ?></td>
              <td ><a href="/data/tables/filter_date.php?app_id=<?php echo $row['app_id'] ?>"><?php echo $row['app_name'] ?></a></td>
               <td><?php echo $row['download'] ?></td>
              <td><?php echo $row['today_date'] ?></td>

            </tr>
          <?php } ?>
          </div>
         
          </tbody>
        </table>
         
            </div>
      
            <div class="tab-pane" id="messages">
              
        
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
            $i=1;
            $q=$d->select("date_filter,appdetails","date_filter.app_id=appdetails.app_id AND date_filter.today_date = CURDATE()-1");
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
      
      
            <div class="tab-pane" id="settings">
              
        
        <table   class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
              <thead>
                <tr>
                    <th>#</th>
              <th>App_ID</th>
              <th>app name</th>
              <th>downoads</th>
              <th>date</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>#</th>
              <th>App_ID</th>
              <th>app name</th>
              <th>downoads</th>
              <th>date</th>
                </tr>
              </tfoot>
              <tbody>
                  <?php  
            $i=1;
            $q=$d->select("date_filter,appdetails","date_filter.app_id=appdetails.app_id AND date_filter.today_date BETWEEN CURDATE() - INTERVAL 7 DAY AND CURDATE()");
          while($row=mysqli_fetch_array($q)) {
             ?>
             <tr>
              <td><?php echo $i++; ?></td>
              <td ><?php echo $row['app_id'] ?></td>
              <td ><?php echo $row['app_name'] ?></td>
               <td><?php echo $row['download'] ?></td>
              <td><?php echo $row['today_date'] ?></td>

            </tr>
          <?php } ?>
                
              </tbody>
            </table>
        
            </div> 
      
      <div class="tab-pane" id="settings2">
              
        
        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
              <thead>
                <tr>
                    <th>#</th>
              <th>App_ID</th>
              <th>app name</th>
              <th>downoads</th>
              <th>date</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>#</th>
              <th>App_ID</th>
              <th>app name</th>
              <th>downoads</th>
              <th>date</th>
                </tr>
              </tfoot>
              <tbody>
                  <?php  
            $i=1;
            $q=$d->select("date_filter,appdetails","date_filter.app_id=appdetails.app_id AND date_filter.today_date BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()");
          while($row=mysqli_fetch_array($q)) {
             ?>
             <tr>
              <td><?php echo $i++; ?></td>
              <td ><?php echo $row['app_id'] ?></td>
              <td ><?php echo $row['app_name'] ?></td>
               <td><?php echo $row['download'] ?></td>
              <td><?php echo $row['today_date'] ?></td>

            </tr>
          <?php } ?>
                
              </tbody>
            </table>
        
        
        
            </div>
      
      
      
          </div>
      
        </div>
    
    
      </div>
    </div>
  </div>


<?php include '../common/footer.php'; ?>