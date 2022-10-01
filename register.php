<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> sdijfhskdlj </title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>


    <form action="./vendor/signup.php" method="POST" enctype="multipart/form-data">
        <label for="">full name</label>
        <input name="full_name" type="text">
        <label for="">log</label>
        <input name="login" type="login">
        <label for="">email</label>
        <input name="email" type="email">

        <label for="">password</label>
        <input name="pswd" type="password">
        <label for="">repeat password </label>
        <input name="password_conf" type="password">
        <label for="">your photo</label>
        <input name="avatar" type="file">
        <button type="submit"> register </button>
        <p>
            <a href="./index.php">sign in</a>
        </p>
        <?php
        if ($_SESSION['message']) {
            echo "<p> {$_SESSION['message']} </p>";
        }
        unset($_SESSION['message']);
        ?>
    </form>
</body>

</html>