<?php
include('../constant.php');

session_start();

if(isset($_SESSION["loggedin"]))
{
    
}
else
{
    header('Location:'.$adminurl.'login.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM `contact` WHERE `deleted_at` is null AND `id`= '$id'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('../head.php');
  ?>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/21 09 logo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

    <!-- header  -->
    <?php
    include('../header.php');
    ?>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">

          <div class="row mb-2">
            <div class="col-sm-6">
              <h5 class="m-0">View Query</h5>
            </div>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


      <!-- back arrow -->
      <i class="fa-solid fa-circle-arrow-left fa-2x mb-5" onclick="history.back()" style="margin-top: 20px; color: #fff ; margin-bottom: 1rem; margin-left: 1rem "></i>


      <!-- job card start -->
      <div class="card" style="margin-left: 1rem; margin-right:1rem">
        <div class="card-body p-30">

          <form style="padding: 30px;" action="../logic.php" method="post">
          <?php
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                                    
                ?>
            <fieldset>

              <div class="form-group row">

                <div class="col-4">
                  <label for="disabledTextInput">Date</label>
                  <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $row['created_at']?>" readonly>
                </div>

                <div class="col-4">
                  <label for="disabledTextInput">Name</label>
                  <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $row['name']?>" readonly>
                </div>

                <div class="col-4">
                  <label for="disabledTextInput">Email</label>
                  <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $row['email']?>" readonly>
                </div>                

              </div>
              
              <div class="form-group row">

                <div class="col-12">
                  <label for="disabledTextInput">Query</label>
                  <!-- <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $row['comments']?>" readonly> -->
                  <textarea class="form-control" rows="3" id="disabledTextInput" placeholder="Enter ..." readonly><?php echo $row['comments']?></textarea>
                </div>

              </div>
            

            </fieldset>

            <?php
                  }
                }
            ?>

          </form>

        </div>
      </div>
    </div>

    <!-- job card end -->

    <!-- /.content-wrapper -->



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?php
    include('../footer.php');
    ?>

  </div>
  <!-- ./wrapper -->

  <!-- delete modal start -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Record</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Sure you want to delete the record</p>
        </div>
        <div class="modal-footer justify-content-between">
          <!-- <button type="button" class="btn btn-block btn-danger">Delete</button> -->
          <a class="btn btn-block btn-danger" href="delete.php?id=1">Delete</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- delete modal end -->

  <!-- REQUIRED SCRIPTS -->
  <?php include('../include-js.php') ?>

  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

</body>

</html>