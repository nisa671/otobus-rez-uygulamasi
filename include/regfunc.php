<?php
session_start();

// initializing variables
$phone = "";
$email    = "";
$errors = array();

// connect to the database
include 'dbcon.inc.php';

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $b_date = mysqli_real_escape_string($conn,date('Y-m-d', strtotime($_POST['bdate'])) );

    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

    
    if ($password_1 != $password_2) {
        array_push($errors, "2 şifre eşleşmedi.");
    }

    $user_check_query = "SELECT * FROM users WHERE phone_n='$phone' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { 
        if ($user['phone_n'] === $phone) {
            array_push($errors, "Telefon numarası mevcut.");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Email adresi mevcut.");
        }
    }

    
    if (count($errors) == 0) {
        $password = md5($password_1);

        $query = "INSERT INTO users (f_name,l_name, email, password,phone_n,b_date) 
  			  VALUES('$f_name','$l_name', '$email', '$password', '$phone','$b_date')";
        mysqli_query($conn, $query);
        $_SESSION['name'] = $f_name;
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "Giriş yapıldı.";
        header('location: ../index.php');
    }
    else{
        ?>
        <div class="error">
            <?php foreach ($errors as $error) : ?>
                <p><?php echo $error ?></p>
            <?php endforeach ?>
        </div>
        <?php
    }
}
?>