<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

define('BASE_URL', 'http://localhost/Travilista');

$conn = new mysqli('localhost', 'root', '', 'travilista');

function protected_area()
{
    if (!isset($_SESSION['user'])) {
        alert('warning', 'Unauthorized Access, Login Before you proceed');
        header('Location: index.php');
    }
}
function alert($type, $message)
{
    $_SESSION['alert']['type'] = $type;
    $_SESSION['alert']['message'] = $message;
}


function login_user($email, $password)
{
    global $conn;
    $sql = "SELECT * FROM USERS WHERE email = '{$email}'";
    $res = $conn->query($sql);

    if ($res->num_rows < 1) {
        return false;
    }

    $row = $res->fetch_assoc();

    if (!password_verify($password, $row['password'])) {
        return false;
    }

    $_SESSION['user'] = $row;

    return true;
}


function is_logged_in()
{
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }

}


function logout()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
    alert('success', 'Logged out Successfully');
    header('Location:../index.php');
}