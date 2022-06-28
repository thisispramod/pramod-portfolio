<?php 
session_start();
if(isset($_SESSION['email']))
{

include 'includes/header.php';
include 'includes/topbar.php';
include 'includes/sidebar.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Home</a></li>
              <li class="breadcrumb-item active">Project</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    
		<?php
		 if(isset($_SESSION['message'])){
			 ?>
		 <div class = "alert alert-success alert-dismissible fade show" role = "alert">
		 <strong>Hey!</strong><?php echo $_SESSION['message']; ?>
		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		 <span aria-hidden="true">&times;</span>
		 </button> 
		 </div>
		<?php 
		unset($_SESSION['message']);
		 }
		 ?>
	</section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Project</h3> 
              </div>
              <form action="project-back.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row">
                    
                    <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputname">Project URL</label>
                          <input type="text" class="form-control" name="project_url"  placeholder="Paste URL" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInputname">Starting Date</label>
                      <input type="date" class="form-control" name="starting_date" required>
                    </div>                    
                  </div>
				             <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ending Date</label>
                            <input type="date" class="form-control" name="ending_date" required>
                        </div>
                    </div>

                  <div class = "col-md-3">
                    <div class="form-group">
                      <label for="exampleInputname">Developer Name</label>
                      <input type="text" class="form-control" name="developer_name" placeholder="Enter Developer name " required>
                    </div>
					        </div>

                </div>
                    <div class="row">
						    <div class="col-md-3">
						     <div class="form-group">
								    <label for="exampleInputaddress">Technology</label>
								    <input type="text" class="form-control" name="technology" placeholder="Enter technology" required>						
						     </div>
						    </div>

            <div class="col-md-3">
						     <div class="form-group">
								<label for="exampleInputaddress">Project Image</label>
								<input type="file" class="form-control" name="image">						
						     </div>
						</div>

                <div class="col-md-6">
						     <div class="form-group">
							    	<label for="exampleInputaddress">Project Description</label>
								    <textarea  class="form-control" name="descriptions"  required></textarea>				
						     </div>
						    </div>

					</div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Add Project</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
<?php 
include 'includes/footer.php';
}
else{
	echo "<script> window.open('login.php','_self')</script>";
}
?>