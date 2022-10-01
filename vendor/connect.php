<?php
$connect = mysqli_connect('localhost', 'root', '', 'user');
if (!$connect) {
    die('error connect to data base');
}
