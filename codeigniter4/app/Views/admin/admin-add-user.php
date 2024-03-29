<?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['a_id'];
  
    
          if(isset($_POST['add_user'])) {
              $_tcno=$_POST['tcno'];
              $_f_name = $_POST['f_name'];
              $_l_name = $_POST['l_name'];
              $_email=$_POST['email'];
              $_password=$_POST['password'];
              $_phone_n=$_POST['phone_n'];
              $_b_date = $_POST['b_date'];
              
              $query = "INSERT INTO users (tcno, f_name, l_name, email, password, phone_n, b_date ) VALUES (?, ?, ?, ?, ?, ?, ?)";
              
              $stmt = $mysqli->prepare($query);
              $rc = $stmt->bind_param('sssssss', $_tcno, $_f_name, $_l_name, $_email, $_password, $_phone_n, $_b_date);
              $stmt->execute();
              
              if($stmt) {
                  $succ = "Kullanıcı Eklendi.";
              } else {
                  $err = "Lütfen Tekrar Deneyin.";
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
                      setTimeout(function () { 
                          swal("Başarılı!","<?php echo $succ;?>!","success");
                      }, 100);
                  </script>
                <?php } ?>
                <?php if(isset($err)) {?>
                 
                  <script>
                      setTimeout(function () { 
                          swal("Başarısız!","<?php echo $err;?>!","Failed");
                      }, 100);
                  </script>
                <?php } ?>
          
                  
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="#">Kullanıcılar</a>
                    </li>
                    <li class="breadcrumb-item active">Kullanıcı Ekle</li>
                  </ol>
                  <hr>
                  <div class="card">
                    <div class="card-header">
                      Kullanıcı Ekle
                    </div>
                    <div class="card-body">
                     
                      <form method ="POST"> 
                        <div class="form-group">
                          <label for="tcno">TC Kimlik Numarası</label>
                          <input type="text" class="form-control" name="tcno">
                        </div>
                        <div class="form-group">
                          <label for="f_name">Ad</label>
                          <input type="text" required class="form-control" id="f_name" name="f_name">
                        </div>
                        <div class="form-group">
                          <label for="l_name">Soyad</label>
                          <input type="text" class="form-control" id="l_name" name="l_name">
                        </div>
                        <div class="form-group">
                          <label for="phone_n">Telefon Numarası</label>
                          <input type="text" class="form-control" id="phone_n" name="phone_n">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                          <label for="b_date">tarih</label>
                          <input type="date" class="form-control" id="b_date" name="b_date">
                        </div>
                        <div class="form-group">
                          <label for="password">Şifre</label>
                          <input type="password" class="form-control" name="password" id="password">
                        </div>
          
                        <button type="submit" name="add_user" class="btn btn-success">Kullanıcı Ekle</button>
                      </form>
                     
                    </div>
                  </div>
                 
                  <hr>
          
                
                  <?php include("vendor/inc/footer.php");?>
          
                </div>
               
          
              </div>
           
          
      <hr>
    

    
      <?php include("vendor/inc/footer.php");?>

    </div>
   

  </div>
 


  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
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



  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>


  <script src="vendor/js/sb-admin.min.js"></script>

 
  <script src="vendor/js/demo/datatables-demo.js"></script>
  <script src="vendor/js/demo/chart-area-demo.js"></script>

 <script src="vendor/js/swal.js"></script>

</body>

</html>
