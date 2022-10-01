<?php

session_start();
require_once 'connect.php';



$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['pswd'];
$password_conf = $_POST['password_conf'];

if ($password === $password_conf) {
    $_FLIES['avatar']['name'];
    $path = "assets/img/" . time() . "{$_FILES['avatar']['name']}";
    move_uploaded_file($_FILES['avatar']['tmp_name'], "../{$path}");
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], "../{$path}")) {
        $_SESSION['message'] = 'avatar not definde ';
        header("Location: ../register.php");
    }
    mysqli_query($connect, "INSERT INTO `users` ( `id`, `full_name`, `login`, `email`, `pswd`, `avatar`) VALUES (NULL, $full_name, $login, $email, $password, $path)");
    $_SESSION['message'] = 'register is done ';
    header('Location: ../index.php');
} else {
    $_SESSION['message'] = 'passwords do not match';
    header('Location: ../register.php');
}
?>
<pre>
    <?php print_r($_FILES) ?>
    <?php print_r($_POST) ?>
</pre>