<?php
include('../constant.php');

session_start();

if (isset($_SESSION["loggedin"])) {
} else {
  header('location:'.$adminurl.'login.php');
}

$sql = "SELECT * FROM `applicants` WHERE `deleted_at` is null";
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
              <h5 class="m-0">List Of Applicants</h5>
            </div>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- job card start -->
      <div class="card" style="margin-left: 1rem; margin-right:1rem">
        <div class="card-body">
          <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Job Id</th>
                <th>Date</th>
                <th>Applicant</th>
                <th>Company Name</th>
                <th>Job Title</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {

                    switch ($row['status']) 
                    {
                      case "Applied":
                        $status = "badge-primary";
                        break;
                      case "In Touch":
                        $status = "badge-warning";
                        break;
                      case "Hired":
                        $status = "badge-success";
                        break;
                      case "Reject":
                        $status = "badge-danger";
                        break;
                      default:
                        $status = "badge-primary";
                    }
                ?>
                    <td><?php echo $row['job_id'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td> <?php echo $row['company_name'] ?></td>
                    <td><?php echo $row['job_title'] ?></td>
                    <td>
                      <span class="badge <?php echo $status?>"><?php echo $row['status'] ?></span>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-primary btn-sm" href="view.php?id=<?php echo $row['id'] ?>" style="background-color: #007bff;">
                        <i class="fas fa-folder">
                        </i>
                        View
                      </a>
                    </td>
              </tr>

          <?php
                  }
                }
          ?>


            </tbody>

          </table>
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