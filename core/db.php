<?php 

$host ='localhost';
$user ='root';
$pass ='';
$dbname ='register_db';

 $connect = mysqli_connect($host,$user,$pass,$dbname);




 

 if (!$connect){
            echo "<h1> ErrornEstablishing Database Connection!</h1>";
            exit;
        }
    












?>