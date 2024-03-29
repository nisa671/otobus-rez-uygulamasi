<?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['a_id'];
  //Add USer
  if(isset($_POST['change_pwd']))
    {

            $a_pwd=$_POST['a_pwd'];//update password
            $query=" UPDATE tms_admin SET a_pwd = ? WHERE a_id = ?";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('si', $a_pwd, $aid);
            $stmt->execute();
                if($stmt)
                {
                    $succ = "Şifre Değişti";
                }
                else 
                {
                    $err = "Tekrar Deneyiniz";
                }
            }
?>
<!DOCTYPE html>
<html lang="en">

<?php include('vendor/inc/head.php');?>

<body id="page-top">
 <!--Start Navigation Bar-->
  <?php include("vendor/inc/nav.php");?>
  <!--Navigation Bar-->

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include("vendor/inc/sidebar.php");?>
    <!--End Sidebar-->
    <div id="content-wrapper">

      <div class="container-fluid">
      <?php if(isset($succ)) {?>
                        <!--This code for injecting an alert-->
        <script>
                    setTimeout(function () 
                    { 
                        swal("Başarılı","<?php echo $succ;?>!","başarılı");
                    },
                        100);
        </script>

        <?php } ?>
        <?php if(isset($err)) {?>
        <!--This code for injecting an alert-->
        <script>
                    setTimeout(function () 
                    { 
                        swal("Başarısız!","<?php echo $err;?>!","Başarısız");
                    },
                        100);
        </script>

        <?php } ?>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Panel</a>
          </li>
          <li class="breadcrumb-item active"> Güncelleme</li>
        </ol>
        <hr>
        <div class="card col-md-12">
        <!-- <img src="../vendor/img/services_banner.jpg" class="card-img-top" alt="..."> -->
        <div class="card-body">
        <div class="card">
        <h2> Şifreyi Değiştir</h2>
            <div class="card-body">
               
                <form method ="post">                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Eski Şifre</label>
                        <input type="password" name="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Yeni Şifre</label>
                        <input type="password" name="a_pwd" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Tekrar Yeni Şifre</label>
                        <input type="password" class="form-control" name="" required>
                    </div>
                    <button type="submit" name="change_pwd" class="btn btn-success">Değiştir</button>
                </form>
            </div>
        </div>
        </div>
        </div>
      </div>      
      <hr>
     

      <!-- Sticky Footer -->
      <?php include("vendor/inc/footer.php");?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Çıkış Yapmayı Onaylıyor Musunuz?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Çıkış yapmak için butona tıklayın.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
          <a class="btn btn-danger" href="admin-logout.php">Çıkış Yap</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="vendor/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="vendor/js/demo/datatables-demo.js"></script>
  <script src="vendor/js/demo/chart-area-demo.js"></script>
 <!--INject Sweet alert js-->
 <script src="vendor/js/swal.js"></script>

</body>

</html>
