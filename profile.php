<?php session_start();
if (!isset($_SESSION['email'])){
    header('Location: ./index.php');
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

    <h1>This is profile page</h1>
    <p>Email: <?php echo $_SESSION['email'];?></p>
    
        </div>
        <div>
           <table border="1" style="border-collapse: collapse; width: 100%;">


                <tr>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>ACTION</th>
                </tr>
                 <tr>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>ACTION</th>
                </tr>
                <?php 
                $students ="SELECT * FROM students";
                $run_query = mysqli_query($connect, $students);
                
                ?>
                 <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                </tr>
            </table>
        </div>
</body>
</html>