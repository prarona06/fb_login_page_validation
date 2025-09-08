<?php  


if (isset($_COOKIE['PHPCOOKISET'])){
    header('Location:./profile.php');

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
        <h3>Login</h3>
        <form action ="./core/login_core.php" method = "post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
                <input type="email"  name ="email" class="form-control " id="email" placeholder="Enter your email">
         

               
                              
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name ="password" class="form-control <?php  if (isset ($_REQUEST ['password']) && $_REQUEST ['password'] == 'empty') { echo 'is-invalid';} ?>" id="password" placeholder="Enter your password">
          
           
            </div>

            <div class="mb-3">
                <div class="from-check">
                    <input type="checkbox" class="from-check-input" value="" id="flexCheck">
                    <label for="flexCheckDefault" class="form-check-label">
                        Remember me
                    </label>
                </div>
            </div>
            <?php
            
            if(isset($_REQUEST['error']) && $_REQUEST['error'] =='failed'){

            ?>

            <div class="mb-3"><p class="text-danger">Login Failed</p>

            </div>
             <?php
            
            
            }
            ?>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-login">Login</button>
            </div>
            <div class="text-center">
                <a href="#">Forgot password?</a>
            </div>
        </form>
        <hr>
        
    </div>

    
   
</body>

</html>