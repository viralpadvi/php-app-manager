<?php include '../common/header.php'; ?>
<?php include '../common/sidebar.php'; ?>


<div class="col-md-12">
      <div class="card ">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <i class="material-icons">contacts</i>
          </div>
          <h4 class="card-title">Web Form</h4>
        </div>
        <div class="card-body ">
          <form name="add_name" id="add_name" enctype="multipart/form-data">
            <div class="row">
              <label class="col-md-2 col-form-label">Category</label>
              <div class="col-md-10">
                <div class="form-group has-default">
                  <input type="text" name="category"  id="category" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-md-2 col-form-label">Short Name</label>
              <div class="col-md-10">
                <div class="form-group">
                  <input type="text" name="short_name" id="short_name" class="form-control">
                </div>
              </div>
            </div>
             <div class="row">
              <label class="col-md-2 col-form-label">Name</label>
              <div class="col-md-10">
                <div class="form-group has-default">
                  <input type="text" name="web_name" id="web_name" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-md-2 col-form-label">Link</label>
              <div class="col-md-10">
                <div class="form-group">
                  <input type="text" name="link_name" id="link_name" class="form-control">
                </div>

              </div>
            </div> 
          </form>
        </div>
        <div class="card-footer ">
          <div class="row">
            <div class="col-md-9">
              <button type="submit" id="submit" class="btn btn-fill btn-rose">add web</button>
             
            </div>
             <p id="message" style="color: white;margin-left: 20px;background-color: green;"></p>
          </div>
        </div>
      </div>
    </div>

<?php include '../../data/common/footer.php'; ?>
 
  <script type="text/javascript" language="javascript">
$(document).ready(function(){
	 
	$('#submit').click(function(){		
		$.ajax({
			url:"../../data/controller/manage.php",
			method:"POST",
			//data:$('#add_name').serialize(),
			/*dataType:'JSON',*/
			data: {category:$("#category").val(),short_name:$("#short_name").val(),web_name:$("#web_name").val(),link_name:$("#link_name").val()},
			success:function(data)
			{
				$("#message").html('data add success....!');
				$("#add_name").trigger("reset");
				
				
			} 
		});
	});
	
});
</script>