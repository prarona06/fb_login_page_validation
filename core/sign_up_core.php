

<?php
$data_email = 'prity123@gmail.com';
$data_password ='123pass';

$signup_email = $_POST['email'];
$signup_password = $_POST['password'];

echo "Email: " . $signup_email . '<br>';
echo "Password: " . $signup_password;

if($signup_email == $data_email  &&  $signup_password == $data_password ) {

echo 'success';

}else{
    echo 'failed';
}


if (empty($signup_email) || empty($signup_password )){
     
   $erros = [
    
     'email_required' => 'required',
    'password_required' => 'required',
    
   ];
}

?>