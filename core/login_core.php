<?php

require_once 'db.php';
session_start();



$email = htmlspecialchars($_REQUEST['email']);
$password =htmlspecialchars($_REQUEST['password']);

/*$hashEmail =base64_encode($email);
echo $hashEmail;
echo"<br>";
$decrypt =base64_decode($hashEmail);
echo $decrypt;
*/

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
    if ($data['st_email'] == $email &&   password_verify($password,$data['st_pass'])){

        $_SESSION['email'] = $email;

        $cookie_value = sha1(md5($data['st_email']).$data['st_pass']);
        var_dump($cookie_value);
      
        setcookie('PHPCOOKISET', $cookie_value, time() + 120, '/');

    
  header('Location: ../profile.php');
 

}else{
    header('Location: ../index.php?error=failed');

}

}else{
    echo '<p class="text-danger"> NO Students found!</p>' ;
}