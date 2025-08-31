<?php
require_once 'db.php';

$signup_email    = htmlspecialchars($_REQUEST['email']);
$signup_password = htmlspecialchars($_REQUEST['password']);
$full_name       = htmlspecialchars($_REQUEST['fullname']);

// check empty
if (empty($signup_email) || empty($signup_password)) {
    $err = ['email'=>'empty', 'password'=>'empty'];
    $qstring = http_build_query($err);
    header('Location: ../index.php?' . $qstring);
    exit;
}

// validate email
if (!filter_var($signup_email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../index.php?email=invalid');
    exit;
}

// password length check
if (strlen($signup_password) < 5) {
    header('Location: ../index.php?password=short');
    exit;
}

// insert into database
$insert_query = "INSERT INTO students(`st_name`,`st_pass`,`st_email`) VALUES ('$full_name','$signup_password','$signup_email')";
$run_query = mysqli_query($connect, $insert_query);

if ($run_query) {
    header('Location: ../login.php?signup=success');
    exit;
} else {
    header('Location: ../index.php?signup=failed');
    exit;
}
