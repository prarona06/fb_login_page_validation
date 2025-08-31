<?php

require_once 'db.php';



$email = htmlspecialchars($_REQUEST['email']);
$password =htmlspecialchars($_REQUEST['password']);

$select_query = "SELECT * FROM students WHERE st_email = '$email'";
$run_query = mysqli_query($connect, $select_query); //query korte pari

if(!$run_query){
    header(('Location: ../index.php?error=failed'));
    exit;
}



//var_dump($data);

if(mysqli_num_rows($run_query) > 0){
    $data =mysqli_fetch_assoc($run_query); //// fetch mane tule niye asa assoc  diye array akare dite pari
    if ($data['st_email'] ===$email && $data['st_pass'] === $password){
    echo'<p class="text-danger">Login successful</p>';

}else{
    header('Location: ../index.php?error=failed');
exit;
}

}else{
    echo '<p class="text-danger"> NO Students found</p>' ;
}