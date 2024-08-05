<?php
require_once ('functions.php');

$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$re_password = trim($_POST['re_password']);

$sql = "SELECT * FROM users WHERE email = '{$email}' ";
$res = $conn->query($sql);

if ($password != $re_password) {
    alert('danger', 'Password do not Match');
    header('Location:../index.php');
} else if ($res->num_rows > 0) {
    alert('danger', 'User Already Exist');
    header('Location: ../index.php');
} else {
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO USERS (
                first_name,
                last_name,
                password,
                email
    )
            VALUES (
                '{$first_name}',
                '{$last_name}',
                '{$password}',
                '{$email}'
    )";

    if ($conn->query($sql)) {
        alert("success", "Account Created Successfully");
        header('Location: ../index.php');
    } else {
        alert('danger', 'You entered Wrong username or Password');
        header('Location: ../index.php');
    }
}