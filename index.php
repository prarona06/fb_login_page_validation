<?php  
session_start();
if (isset($_SESSION['email'])){
    header('Location: ./profile.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
  
   
 <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="login-card bop">
        <div class="mb-3">

           <?php  require_once 'menu.php'; ?>

        </div>
        <h3>Register Here</h3>
        <form action ="./core/sign_up_core.php" method = "post">
            <?php
            if(isset ($_REQUEST ['signup'])){
                if($_REQUEST['signup'] == 'success'){
                    echo '<p class="text-danger">Signup Successful </p>';
                }
                if($_REQUEST['signup'] == 'failed'){
                    echo '<p class="text-danger">Signup failed </p>';
                }
            }
            
            ?>
        
        
        <div class="mb-3">
                <label for="name" class="form-label"> Full Name <span class="text-danger"></span></label>
                <input type="name"  name ="fullname" class="form-control" id="name" placeholder="Enter your name">
        
                                       
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
                <input type="email"  name ="email" class="form-control <?php  if (isset ($_REQUEST ['email']) && $_REQUEST ['email'] == 'empty') { echo 'is-invalid';} ?>" id="email" placeholder="Enter your email">
         

                <?php 
                if (isset ($_REQUEST['email']) && $_REQUEST ['email'] == 'empty') {
                      echo '<p class="text-danger">Email is Required!</p>';
                }else if(isset($_REQUEST['email']) && $_REQUEST['email'] =='invalid'){
                    echo '<p class="text-danger">Invalid Email</p>';
                }else if (isset($_REQUEST['email']) && $_REQUEST['email'] == 'wrong'){
                    echo'<p class="text-danger">Email Do Not Match</p>';
                }
            
                ?>
                              
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name ="password" class="form-control <?php  if (isset ($_REQUEST ['password']) && $_REQUEST ['password'] == 'empty') { echo 'is-invalid';} ?>" id="password" placeholder="Enter your password">
           <?php  
           if(isset($_REQUEST ['password']) && $_REQUEST['password'] = 'empty'){
            echo'<p class="text-danger">Password is required</p>';
           }else if((isset($_REQUEST ['password']) && $_REQUEST['password'] = 'short'))
   echo'<p class="text-danger">Password is too short</p>';
           
          else if((isset($_REQUEST ['password']) && $_REQUEST['password'] = 'short')){
             echo'<p class="text-danger">Password dose not matching </p>';
           
          }
  
           
  
           ?>
           
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-login">Sign Up</button>
            </div>
            <div class="text-center">
                <a href="#">Forgot password?</a>
            </div>
        </form>
                

        
    </div>

    
   
</body>

</html>