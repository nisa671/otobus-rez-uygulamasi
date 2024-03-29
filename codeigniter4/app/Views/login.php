<?php
include 'include/header.php';
if(!isset($_SESSION['name'])){
?>
<div class="container shadow" style="max-width: 550px">
    <br>
    <div class="card">
        <h5 class="card-header">
            Giriş Yap
        </h5>
        <form class="container" id="" method="POST" action="include/loginfnc.php">
            <label for="mail"> E-Mail Adresi</label>
            <div class="form-row">
                <div class="col form-group">
                    <input name="email" id="mail" type="text" class="form-control" required="" placeholder="">
                    <span class="icon-inside"><i class="fas fa-envelope"></i></span>

                </div>
            </div>
            <label for="pass1"> Şifre</label>
            <div class="form-row">
                <div class="col form-group">
                    <input name="password" id="pass1" type="password" class="form-control" required="" placeholder="">
                    <span class="icon-inside"><i class="fas fa-key"></i></span>

                </div>
            </div>
            <input class="btn btn-primary btn-block" type="submit" name="login_user" value="Giriş Yap">
            <br>
        </form>
    </div>
    <br>
</div>
<?php
}
else{
    echo $_SESSION['success'];
}
include 'include/footer.php';
?>
