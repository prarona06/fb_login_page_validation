<?php

require_once 'db.php';
session_start();



$email = htmlspecialchars($_REQUEST['email']);
$password =htmlspecialchars($_REQUEST['password']);

$_SESSION['email'] =$email;

$select_query = "SELECT * FROM students WHERE st_email = '$email'";
$run_query = mysqli_query($connect, $select_query); //query korte pari

if(!$run_query){
    header(('Location: ../index.php?error=failed'));
    exit;
}



//var_dump($data);

if(mysqli_num_rows($run_query) > 0){ //mysqli_num_rows function rows count kore
    $data =mysqli_fetch_assoc($run_query); //// fetch mane tule niye asa assoc  diye array akare dite pari
    if ($data['st_email'] ===$email && $data['st_pass'] === $password){
  header('Location: ../profile.php');
  exit;

}else{
    header('Location: ../index.php?error=failed');
exit;
}

}else{
    echo '<p class="text-danger"> NO Students found!</p>' ;
}