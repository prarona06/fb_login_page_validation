<?php session_start();
if (!isset($_SESSION['email'])){
    header('Location: ./login.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>

   <div class="mb-3">

           <?php  require_once 'menu.php'; ?>

        </div>
    <h1>This is profile page</h1>
    <p>Email: <?php echo $_SESSION['email'];?></p>
</body>
</html>