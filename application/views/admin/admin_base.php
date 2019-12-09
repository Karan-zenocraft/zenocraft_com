<!DOCTYPE html>
<html lang="en">

  <head>

<title>Admin - Dashboard</title>

<!-- Bootstrap core CSS-->
<?php echo link_tag('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assets/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assets/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assets/css/sb-admin.css'); ?>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/admin.css">
</head>
  </head>

  <body id="page-top" class="example-1  scrollbar-dusty-grass square thin">
       <?php include APPPATH . 'views/admin/includes/header.php';?>


    <div id="wrapper">

      <!-- Sidebar -->
            <?php include APPPATH . 'views/admin/includes/sidebar.php';?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
<?php echo $content; ?>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php include APPPATH . 'views/admin/includes/footer.php';?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/demo/datatables-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js'); ?>"></script>

<script>
$(document).ready(function(){
  $('ul li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
});
});      
      
</script>
    
    </body>

</html>
