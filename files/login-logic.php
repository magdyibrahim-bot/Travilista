<?php
require_once ('functions.php');

$email = trim($_POST['email']);
$password = trim($_POST['password']);

if (login_user($email, $password)) {
    alert("success", "Account Loggedin Successfully");
    header('Location: ../index.php');
} else {
    alert('danger', 'You entered Wrong username or Password');
    header('Location: ../index.php');
}