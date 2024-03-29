<?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['a_id'];
 
  if(isset($_POST['book_vehicle']))
    {
            $u_id = $_GET['u_id'];
        
            $u_car_type = $_POST['u_car_type'];
           $u_car_regno  = $_POST['u_car_regno'];
            $u_car_bookdate = $_POST['u_car_bookdate'];
            $u_car_book_status  = $_POST['u_car_book_status'];
            $query="update tms_user set u_car_type=?, u_car_bookdate=?, u_car_regno=?, u_car_book_status=? where u_id=?";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('ssssi', $u_car_type, $u_car_bookdate, $u_car_regno, $u_car_book_status, $u_id);
            $stmt->execute();
                if($stmt)
                {
                    $succ = "Kullanıcı rezervasyonu eklendi.";
                }
                else 
                {
                    $err = "Lütfen tekrar Deneyiniz.";
                }
            }
?>
<!DOCTYPE html>
<html lang="en">

<?php include('vendor/inc/head.php');?>

<body id="page-top">
 
  <?php include("vendor/inc/nav.php");?>
 

  <div id="wrapper">

    
    <?php include("vendor/inc/sidebar.php");?>
   
    <div id="content-wrapper">

      <div class="container-fluid">
      <?php if(isset($succ)) {?>
                      
        <script>
                    setTimeout(function () 
                    { 
                        swal("Success!","<?php echo $succ;?>!","success");
                    },
                        100);
        </script>

        <?php } ?>
        <?php if(isset($err)) {?>
     
        <script>
                    setTimeout(function () 
                    { 
                        swal("Failed!","<?php echo $err;?>!","Failed");
                    },
                        100);
        </script>

        <?php } ?>

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Rezervasyonlar</a>
          </li>
          <li class="breadcrumb-item active">Ekle</li>
        </ol>
        <hr>
        <div class="card">
        <div class="card-header">
          
        </div>
        <div class="card-body">
         
          <?php
            $aid=$_GET['u_id'];
            $ret="select * from tms_user where u_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$aid);
            $stmt->execute() ;
            $res=$stmt->get_result();
            
            while($row=$res->fetch_object())
        {
        ?>
          <form method ="POST"> 
            <div class="form-group">
                <label for="exampleInputEmail1">Ad</label>
                <input type="text" value="<?php echo $row->u_fname;?>" required class="form-control" id="exampleInputEmail1" name="u_fname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Soyad</label>
                <input type="text" class="form-control" value="<?php echo $row->u_lname;?>" id="exampleInputEmail1" name="u_lname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefon Numarası</label>
                <input type="text" class="form-control" value="<?php echo $row->u_phone;?>" id="exampleInputEmail1" name="u_phone">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Adres</label>
                <input type="text" class="form-control" value="<?php echo $row->u_addr;?>" id="exampleInputEmail1" name="u_addr">
            </div>

            <div class="form-group" style="display:none">
                <label for="exampleInputEmail1">Kategori</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="User" name="u_category">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Mail Adresi</label>
                <input type="email" value="<?php echo $row->u_email;?>" class="form-control" name="u_email">
            </div>

            


            <div class="form-group">
              <label for="exampleFormControlSelect1">Rezervasyon Numarası</label>
              <select class="form-control" name="u_car_regno" id="exampleFormControlSelect1">
                <?php

                $ret="SELECT * FROM tms_vehicle  "; 
                $stmt= $mysqli->prepare($ret) ;
                $stmt->execute() ;
                $res=$stmt->get_result();
                $cnt=1;
                while($row=$res->fetch_object())
                {
                ?>
                <option><?php echo $row->v_reg_no;?></option>
                <?php }?> 
              </select>
            </div>

            

            <div class="form-group">
                <label for="exampleInputEmail1">Rezervasyon Tarihi</label>
                <input type="date" class="form-control" id="exampleInputEmail1"  name="u_car_bookdate">
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Rezervasyon Durumu</label>
              <select class="form-control" name="u_car_book_status" id="exampleFormControlSelect1">
                <option>Onaylandı</option>
                <option>Bekleniyor</option>
              </select>
            </div>

            <button type="submit" name="book_vehicle" class="btn btn-success">Rezervasyonu Doğrula</button>
          </form>
          <!-- End Form-->
        <?php }?>
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
          <h5 class="modal-title" id="exampleModalLabel">Çıkış Yapmak İstiyor Musunuz?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Oturumunuzu sonlandırmak istiyorsanız Çıkış butonuna tıklayınız.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
          <a class="btn btn-danger" href="admin-logout.php">Çıkış</a>
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
