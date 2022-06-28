<?php include 'includes/header.php';
include 'includes/topbar.php';
include 'includes/sidebar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Projects</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Projects</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                  <thead>
                  <tr>
				    <th>Id</th>
                    <th>Project Url</th>
                    <th>Starting Date</th>
                    <th>Ending Date</th>
                    <th>Developer Name</th>
					          <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php include 'db.php'; 
				    $query = "SELECT * FROM `project`";
					$query = mysqli_query($conn,$query);
					while($result = mysqli_fetch_array($query)){
				  ?>                      
                  <tr>
                    <td><?= $result['id']; ?></td>
                    <td><?= $result['project_url'];?></td>
                    <td><?= $result['starting_date'];?></td>
                    <td><?= $result['ending_date'];?></td>
                    <td><?= $result['developer_name'];?></td>
                    <td><img src="<?= $result['image'];?>" height="50px; width:50px;"></td>
                    <td><?= $result['descriptions'];?></td>
					<td><a href= "delete-project.php?id=<?= $result['id']; ?>" class="text-red"><i class="fa fa-trash" aria-hidden="true"></i></a></td>                
                  </tr>
					<?php } 
					?>
                  </tbody>
                </table>
            </div>
        </div>
	</div>
<?php
include 'includes/footer.php';
?>
 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script>
	$(document).ready(function() {
	    var table = $('#example').DataTable( {
	        lengthChange: false,
	        buttons: [ 'copy', 'excel', 'csv', 'pdf', 'colvis' ]
	    } );
	 
	    table.buttons().container()
	        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
	} );
 </script>