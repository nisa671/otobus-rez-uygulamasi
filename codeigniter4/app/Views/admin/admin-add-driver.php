<?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['a_id'];
  

  

if(isset($_POST['add_driver']) )
{
    $name = $_POST['bus_name'];
    $type = $_POST['bus_type'];
    $d_time = $_POST['d_time'];
    $dep_place = $_POST['d_place'];
    $a_time = $_POST['a_time'];
    $ari_place = $_POST['a_place'];
    $price = $_POST['price'];
    if($_POST['sat'] == 'evet'){
        $Sat = 1;
    }
    else{
        $Sat = 0;
    }
    if($_POST['sun'] == 'evet'){
        $Sun = 1;
    }
    else{
        $Sun = 0;
    }
    if($_POST['mon'] == 'evet'){
        $Mon = 1;
    }
    else{
        $Mon = 0;
    }
    if($_POST['tue'] == 'evet'){
        $Tue = 1;
    }
    else{
        $Tue = 0;
    }
    if($_POST['wed'] == 'evet'){
        $Wed = 1;
    }
    else{
        $Wed = 0;
    }
    if($_POST['thu'] == 'evet'){
        $Thu = 1;
    }
    else{
        $Thu = 0;
    }
    if($_POST['fri'] == 'evet'){
        $Fri = 1;
    }
    else{
        $Fri = 0;
    }
    $number=$_POST['bus_number'];
    $query = "INSERT INTO _all_bus (name, number, type, d_time, d_place, a_time, a_place, price, Sat, Sun, Mon, Tue, Wed, Thu, Fri) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
   
    
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('sssssssssssssss', $name, $number, $type, $d_time, $dep_place, $a_time, $ari_place, $price, $Sat, $Sun, $Mon, $Tue, $Wed, $Thu, $Fri);
    $stmt->execute();
                if($stmt)
                {
                    $succ = "Sefer Eklendi";
                }
                else 
                {
                    $err = "Başarısız";
                }
            }
    
   

?>

<script>

    $('#d_time').timepicker();
    $('#a_time').timepicker();
</script>
  

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
                        swal("Success!","<?php echo $succ;?>!","Success");
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
            <a href="#">Sefer</a>
          </li>
          <li class="breadcrumb-item active">Sefer Ekle</li>
        </ol>
        <hr>
        <div class="card">
        <div class="card-header">
          Sefer Ekle
        </div>
        <div class="card-body">
          
          <form method ="POST"> 
             <label for="bus_name" class="col-form-label">Firma Adı</label>
                <div class="form-row">
                    <div class="col form-group">

                        <input name="bus_name" id="bus_name" type="text" class="form-control" required  placeholder="">

                    </div>
                </div>
                <label for="bus_number" class="col-form-label">Otobüs İD</label>
                <div class="form-row">
                    <div class="col form-group">

                        <input name="bus_number" id="bus_number" type="text" class="form-control" required  placeholder="">

                    </div>
                </div>
                <label for="bus_type" class="col-form-label">Otobüs Tipi</label>
                <div class="form-row">
                    <div class="col form-group">
                            <select name="bus_type" class="form-control" id="bus_type">
                                <option>Class</option>
                                <option>Suit</option>
                            </select>
                    </div>
                </div>
                <label for="d_place" class="col-form-label">Kalkış Yeri</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select id="d_place" class="form-control" name="d_place">
                            <option selected hidden>Seç</option>
                            <option>İstanbul</option>
                            <option>Ankara</option>
                            <option>İzmir</option>
                            <option>Antalya</option>
                            
                        </select>

                    </div>
                </div>
                <label for="d_time" class="col-form-label">Kalkış Saati</label>
                <div class="form-row">
                    <div class="col form-group">
                            <input name="d_time" id="d_time" type="text" class="form-control">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>

                    </div>
                </div>
                <label for="a_place" class="col-form-label">Varış Yeri</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select id="a_place" class="form-control" name="a_place">
                          
                            <option selected hidden>Seç</option>
                            <option>İstanbul</option>
                            <option>Ankara</option>
                            <option>İzmir</option>
                            <option>Antalya</option>
                        </select>

                    </div>
                </div>
                <label for="a_time" class="col-form-label">Varış Saati</label>
                <div class="form-row">
                    <div class="col form-group">
                        <input name="a_time" id="a_time" type="text" class="form-control">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>

                    </div>
                </div>
                <label for="price" class="col-form-label">Fiyat</label>
                <div class="form-row">
                    <div class="col form-group">

                        <input name="price" id="price" type="text" class="form-control" required  placeholder="">

                    </div>
                </div>
                <label for="sat" class="col-form-label">Cumartesi</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="sat" class="form-control" id="sat">
                            <option>evet</option>
                            <option>hayır</option>
                        </select>
                    </div>
                </div>
                <label for="sun" class="col-form-label">Pazar</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="sun" class="form-control" id="sun">
                        <option>evet</option>
                            <option>hayır</option>
                        </select>
                    </div>
                </div>
                <label for="mon" class="col-form-label">Pazartesi</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="mon" class="form-control" id="mon">
                        <option>evet</option>
                            <option>hayır</option>
                        </select>
                    </div>
                </div>
                <label for="tue" class="col-form-label">Salı</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="tue" class="form-control" id="tue">
                        <option>evet</option>
                            <option>hayır</option>
                        </select>
                    </div>
                </div>
                <label for="wed" class="col-form-label">Çarşamba</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="wed" class="form-control" id="wed">
                        <option>evet</option>
                            <option>hayır</option>
                        </select>
                    </div>
                </div>
                <label for="thu" class="col-form-label">Perşembe</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="thu" class="form-control" id="thu">
                        <option>evet</option>
                            <option>hayır</option>
                        </select>
                    </div>
                </div>
                <label for="fri" class="col-form-label">Cuma</label>
                <div class="form-row">
                    <div class="col form-group">
                        <select name="fri" class="form-control" id="fri">
                        <option>evet</option>
                            <option>hayır</option>
                        </select>
                    </div>
                </div>
          

            <button type="submit" name="add_driver" class="btn btn-success">Ekle</button>
          </form> 
         
        </div>
      </div> 
              
      <hr>
     

      <!--<?php include("vendor/inc/footer.php");?> -->

    </div>
   

  </div>
 


  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


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
