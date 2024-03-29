<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Umuttepe Turizm</title>
    <link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../vendor/css/style.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.css">

    <link rel="stylesheet" href="../vendor/gijgo/css/gijgo.css">

    <script src="../vendor/jquery/dist/jquery.min.js"></script>
    <script src="../vendor/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../vendor/font-awesome/font-awesome.js"></script>

    <script src="../vendor/gijgo/js/gijgo.js"></script>
    <script src="../vendor/js/bootstrap-birthday.js"></script>
</head>
<body>
<?php
include '../include/dbcon.inc.php';
session_start();
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: ../index.php");
}
if(isset($_SESSION['name']) && $user['admin'] == 1) {

    ?>
    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar">
            <header>
                <a href="index.php">Turizm</a>
            </header>
            <ul class="nav">
                <li class="btn-block">
                    <a href="addbus.php">
                        <i class="fas fa-plus-circle"></i> Yeni Araç Ekle
                    </a>
                </li>
                <li class="btn-block">
                    <a href="allbus.php">
                        <i class="fas fa-list"></i> Tüm Araçlar
                    </a>
                </li>
                <li data-toggle="collapse" data-target="#products" class="btn-block collapsed active">
                    <a href="#">
                        <i class="fas fa-file-invoice"></i> Fatura
                    </a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a href="invoiceall.php">Tüm Faturalar</a></li>
                    <li><a href="tempinvoice.php">Son Satılan Fatura</a></li>
                </ul>
            </ul>
        </div>
        <!-- Content -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light bd-navbar shadow p-1 mb-5 bg-primary rounded " style="margin-left: 200px;">
            <div class="container">
                <div class="logo">
            <a href="index.php" title="EBus"><img src="../img/logo.png" alt="" width="85" ></a>
        </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <h6><a class="nav-link" href="../index.php">Anasayfa <span class="sr-only">(current)</span></a></h6>
                        </li>
                        <li class="nav-item">
                            <h6><a class="nav-link " href="#"><?php echo $_SESSION['name'];?></a></h6>
                        </li>
                        <li class="nav-item">
                            <h6><a name="logout" class="nav-link " href="index.php?logout='1'">Çıkış Yap</a></h6>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
    </div>
    <?php
}
?>




