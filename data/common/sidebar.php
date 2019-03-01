	<!-- start sidebar start 10-10-1018 -->  
        


        <div class="wrapper ">
          
            <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->

    <div class="logo"><a href=" " class="simple-text logo-mini">
             AD 
        </a>

        <a href=" " class="simple-text logo-normal">
             YOUR_COMPANEY_NAME
        </a></div>

    <div class="sidebar-wrapper">
        
        <div class="user">
            <div class="photo">
                <img src="../assets/img/faces/avatar.jpg" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                       YOUR_COMPANEY_NAME
                      <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                              <span class="sidebar-mini"> MP </span>
                              <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                              <span class="sidebar-mini"> EP </span>
                              <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                              <span class="sidebar-mini"> S </span>
                              <span class="sidebar-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		
        <ul class="nav">

            <li class="nav-item active ">
                <a class="nav-link" href="../../data/index.php">
                    <i class="material-icons">dashboard</i>
                    <p> Home </p>
                </a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                    <i class="material-icons">android</i>
                    <p> Applications 
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="../../data/pages/addapp.php">
                              <span class="sidebar-mini">A </span>
                              <span class="sidebar-normal"> add App</span>
                            </a>
                        </li>
                      <li class="nav-item ">
                            <a class="nav-link" href="../../data/pages/addCategory.php">
                              <span class="sidebar-mini">AC </span>
                              <span class="sidebar-normal"> addDevloper A/C</span>
                            </a>
                        </li>
                         <li class="nav-item ">
                            <a class="nav-link" href="../../data/pages/add_group_id.php">
                              <span class="sidebar-mini">G</span>
                              <span class="sidebar-normal">add app Groups</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
               <a class="nav-link" target="_blank" href="">
                    <i class="material-icons">widgets</i>
                    <p>SDK Assets </p>
                </a>

            </li>

            
            <li class="nav-item ">
                <a class="nav-link" href="#">
                    <i class="material-icons">notifications</i>
                    <p> notifications </p>
                </a>
            </li>


               <li class="nav-item ">
                <a class="nav-link" href="../../data/tables/app_report.php">
                    <i class="material-icons">info</i>
                    <p> App Report </p>
                </a>
            </li>

            
             <li class="nav-item ">
                <a class="nav-link" href="../../data/tables/filter_date.php">
                    <i class="material-icons">cloud_done</i>
                    <p> App Download Report </p>
                </a>
            </li>
              <li class="nav-item ">
                <a class="nav-link" href="../../data/tables/feedback.php">
                    <i class="material-icons">feedback</i>
                    <p> feedback</p>
                </a>
            </li>

           
            
        </ul>
        

        
    </div>
</div>


            <div class="main-panel">
              <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
	<div class="container-fluid">
    <div class="navbar-wrapper">
      
       <div class="navbar-minimize">
          <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
              <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
              <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
          </button>
        </div>
        
      
			<a class="navbar-brand" href="#pablo">Dashboard</a>
		</div>

		<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
      <span class="sr-only">Toggle navigation</span>
			<span class="navbar-toggler-icon icon-bar"></span>
			<span class="navbar-toggler-icon icon-bar"></span>
			<span class="navbar-toggler-icon icon-bar"></span>
		</button>

	    <div class="collapse navbar-collapse justify-content-end">
        
          
            <form class="navbar-form" action="/data/pages/searchresult.php" method="post">
         <div class="input-group no-border">
        <input type="text" name="txt" value="" class="form-control" placeholder="Search...">
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
          <i class="material-icons">search</i>
          <div class="ripple-container"></div>
        </button>
    </div>
</form>


<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="#pablo">
      <i class="material-icons">dashboard</i>
      <p class="d-lg-none d-md-block">
        Stats
      </p>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link" href="http://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="material-icons">apps</i>
      <!-- <span class="notification"></span> -->
      <p class="d-lg-none d-md-block">
        Some Actions
      </p>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
      <?php 
   

                                    $i=1;
                                    $q=$d->select("dynamic_page","","");
                                  while($row=mysqli_fetch_array($q)) {
                                     ?>
      <a class="dropdown-item" target="_blank" href="<?php echo $row['link']; ?>"><?php echo $row['name']; ?></a>
    <?php } ?>

    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/data/logout.php">
      <i class="material-icons">person</i>
      <p class="d-lg-none d-md-block">
        Account
      </p>
    </a>
  </li>
</ul>

          
        

        
	    </div>
	</div>
</nav>
<!-- End Navbar -->
<!-- End Navbar  10-10-2018-->