

<?php
$data_email = 'prity123@gmail.com';
$data_password ='123456';

$signup_email = $_REQUEST['email'];
$signup_password = $_REQUEST['password'];



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





     
  
