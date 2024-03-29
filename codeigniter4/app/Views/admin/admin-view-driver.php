<?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['a_id'];
?>
<!DOCTYPE html>
<html lang="en">

<?php include('vendor/inc/head.php');?>

<body id="page-top">

 <?php include("vendor/inc/nav.php");?>


  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('vendor/inc/sidebar.php');?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Seferler</a>
          </li>
          <li class="breadcrumb-item active">Seferleri İncele</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-users"></i>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Firma Adı</th>
                        <th>Tipi</th>
                        <th>İd</th>

                        
                    </tr>
                </thead>
                <tbody>
                <?php

$ret="SELECT * FROM _all_bus "; 
    $stmt= $mysqli->prepare($ret) ;
    $stmt->execute() ;//ok
    $res=$stmt->get_result();
    $cnt=1;
    while($row=$res->fetch_object()) 
{
?>
<tbody>
  <tr>
    <td><?php echo $cnt;?></td>
    <td><?php echo $row->name;?> 
    <td><?php echo $row->type;?></td>
    <td><?php echo $row->number;?></td>
    
  </tr>
</tbody>
<?php $cnt = $cnt+1; }?> 
       
    </tbody>
</table>

                </tbody>
            </table>
        </div>
    </div>
</div>

            
 

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


  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <script src="js/sb-admin.min.js"></script>

  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
