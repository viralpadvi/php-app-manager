<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; ?>




   
<div class="content">
<div class="container-fluid">
  <div class="row">

<!-- new google sepreted -->

      <div class="col-md-6"> 
    <section class="content">
           <form name="form_owners" id="form_owners" method="post" action="../../data/controller/manage.php">
          <table>                                                
              <tr>  
                 
                  <div class='col-ms-6'>
              <div class='form-group'>
                <label>Add Account</label>
               
               <input class="form-control"  name="txtName" type="text" required/>
              </div>
            </div>
              </tr>
         
          <tr>
            
              <td ><input type="submit" class="btn btn-lg btn-primary btn-block" name="txtSubmitAc" value="Create Account" class="btn btn-small btn-primary"/>
              </td>
          </tr>
          </table>
      </form >

          <!-- show data.... -->
          <div class="span6">
            <div class="widget-box">
              <div class="widget-header widget-header-flat widget-header-small">
                                <h4>
                                <i class="icon-user"></i>
                                Total Account Type
                                </h4>                                                
                            </div>
              <div class="widget-body">
                <div class="widget-main">                       
                  <div id="dashboard3">
                    <div id="owner_div">
                                            
                      <div class='col-md-8'>
                            <div class='form-group'>
                            
                              <select multiple name="developer_ac" style="max-width:100%;" >
                                 <?php 
                                $i=1;
                                $q=$d->select("developer","","");
                              while($row=mysqli_fetch_array($q)) {
                                 ?>
                          <option value="<?php echo $row['dev_id']; ?>"><?php echo $row['dev_name']; ?></option>
                        <?php } ?>
                          </select>
                      
                            </div>
                          </div>   
                    </div>
                    <div id="msgdiv"></div>
                  </div>
                </div><!--/widget-main-->
              </div><!--/widget-body-->
            </div><!--/widget-box-->
          </div><!--/span-->              

       
      </section>
    </div>

    <!-- new facebook sepreted part -->

     <div class="col-md-6"> 
     <section class="content">         
 <form name="form_owners" id="form_owners" class='col-ms-6' method="post" action="../../data/controller/manage.php">
          <table>                                                
              <tr>  
                  <div class='col-ms-6'>
              <div class='form-group'>
                <label>Category</label>
           
               <input class="form-control"  name="addcategory" type="text" required/>
              </div>
            </div>
              </tr>
         
          <tr>
            
              <td ><input type="submit" class="btn btn-lg btn-primary btn-block" name="txtSubmitCat" value="Create Category" class="btn btn-small btn-primary"/>
              </td>
          </tr>
          </table>
      </form>
    <!-- show data.... -->
          <div class="span6">
            <div class="widget-box">
              <div class="widget-header widget-header-flat widget-header-small">
                                <h4>
                                <i class="icon-user"></i>
                                Total Category Type
                                </h4>                                                
                            </div>
              <div class="widget-body">
                <div class="widget-main">                       
                  <div id="dashboard3">
                    <div id="owner_div">
                                            
                      <div class='col-md-8'>
                            <div class='form-group'>
                             
                              <select  name="developer_ac" style="max-width:100%;"  multiple >
                             <?php 
                                    $i=1;
                                    $q=$d->select("app_category","","");
                                  while($row=mysqli_fetch_array($q)) {
                                     ?>
                              <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></option>
                            <?php } ?>
                          </select>
                            </div>
                          </div>   
                    </div>
                    <div id="msgdiv"></div>
                  </div>
                </div><!--/widget-main-->
              </div><!--/widget-body-->
            </div><!--/widget-box-->
          </div><!--/span-->
       
              </section>
    </div>

    <!-- new integrated -->
 <div id="results"></div>
        </div>
      </div> 
</div> 

<br>
<br>
<br>
<br>
<br>
<br>
<!-- 
<script type="text/javascript">
$(document).ready(function() {
  $("form").submit(function() {
    // Getting the form ID
    var  formID = $(this).attr('id');
    var formDetails = $('#'+formID);
    $.ajax({
      type: "POST",
      url:"../../data/controller/manage",
      data: formDetails.serialize(),
      success: function (data) {  
        // Inserting html into the result div
        $('#results').html(data);
      },
      error: function(jqXHR, text, error){
            // Displaying if there are any errors
              $('#result').html(error);           
        }
    });
    return false;
  });
});
</script> -->

<?php include '../../data/common/footer.php'; ?>
 
 
