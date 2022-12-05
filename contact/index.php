<?php
include('../constant.php');
session_start();
if (isset($_SESSION["loggedin"])) {
} else {
  header('location:'.$adminurl.'login.php');
}
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
              <h1 class="m-0">Contact</h1>
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
                <th>Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>Comments</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <!-- select data from mySQL -->
              <?php

              $sql = "SELECT * FROM `contact` WHERE `deleted_at` is null";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
              ?>
                  <tr>
                    <td>
                      <?php echo $row['created_at'] ?>
                    </td>
                    <td>
                      <?php echo $row['name']?>
                    </td>
                    <td>
                      <?php echo $row['email'] ?>
                    </td>
                    <td>
                      <?php echo $row['comments'] ?>
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
              // else {
              //   echo "0 results";
              // }
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

  <!-- REQUIRED SCRIPTS -->
  <?php include('../include-js.php') ?>

  <!-- Data table script -->
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
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  <!-- Alert script -->
  <?php
  if (isset($_SESSION["message"])) {
    // echo $_SESSION["message"];
  ?>
    <script>
      $(function() {
        $(document).Toasts('create', 
        {
        class: 'bg-info',
        title: 'New  Message',
        body: '<?php echo $_SESSION["message"]?>'
        })
      });
    </script>
  <?php
    $_SESSION["message"] = null;
  }
  ?>

</body>

</html>