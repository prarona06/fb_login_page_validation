

<?php
$data_email = 'prity123@gmail.com';
$data_password ='123456789123456789';

$signup_email = $_REQUEST['email'];
$signup_password = $_REQUEST['password'];



if (empty($signup_email))  {
  header('Location: ../index.php?email=empty');
}



if (!empty($signup_password)){
  $pLen =strLen($signup_password);
  if($pLen <15){
    if ($signup_password !== $data_password) {
header('Location ../index.php?password=wrong');
    } 
  echo'password is correct';
 }else{
    header('Location:../index.php?password=short');
  }

}else{
  header ('Location: ../index.php?password=empty');
}





echo "Email: " . $signup_email . '<br>';
echo "Password: " . $signup_password;


if ($signup_email = $data_email &&  $signup_password = $data_password){
  echo' success';
}else
{ 
  echo  'failed';
}
     
  
?>