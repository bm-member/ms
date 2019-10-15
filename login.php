<?php

session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if($username === 'mgmg' && $password === '123') {
    $_SESSION['auth'] = true;
    unset($_SESSION['msg']);
    header("location: home.php");
} else {
    $_SESSION['msg'] = 'Username or password is incorrect.';
    $_SESSION['auth'] = false;
    header("location: login_form.php");
}