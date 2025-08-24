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
        <h3>Login</h3>
        <form action ="./core/sign_up_core.php" method = "post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email"  name ="email" class="form-control" id="email" placeholder="Enter your email">
         
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name ="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-login">Login</button>
            </div>
            <div class="text-center">
                <a href="#">Forgot password?</a>
            </div>
        </form>
        <hr>
        <div class="text-center">
            <p>Don't have an account?</p>
            <a href="#" class="btn btn-success">Create Account</a>
        </div>
    </div>

    
   
</body>

</html>