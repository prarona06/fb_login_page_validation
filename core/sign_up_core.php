

<?php

require_once 'db.php';




$signup_email =htmlspecialchars($_REQUEST['email']) ;
$signup_password =htmlspecialchars($_REQUEST['password']) ;
$full_name =htmlspecialchars($_REQUEST['full_name']);



if (empty($signup_email))  {
  header('Location: ../index.php?email=empty');
}else{
  if(filter_var($signup_email, FILTER_VALIDATE_EMAIL)){
   if ($signup_email !== $data_email){
    header('Location:..index.php?email=wrong');
   }
  }else{
    header('Location:../index.php?email=invalid');
  }
}



if (!empty($signup_password)){
  $pLen =strLen($signup_password);

  if($pLen >=5){
    if ($signup_password !== $data_password) {
header('Location ../index.php?password=wrong');
    } 
 
 }else{
    header('Location:../index.php?password=short');
  }

}else{
  header ('Location: ../index.php?password=empty');
}





     
  
