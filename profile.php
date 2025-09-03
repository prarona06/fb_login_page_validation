<?php session_start();
if (!isset($_SESSION['email'])){
    header('Location: ./index.php');
    
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
                    <th>SL</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>ACTION</th>
                </tr>
               
                <?php 
                $students ="SELECT * FROM students";
                $run_query = mysqli_query($connect, $students);

                if(mysqli_num_rows($run_query) >0){
                    $i =1;

                    while($students = mysqli_fetch_assoc($run_query)){

                  
                    ?>
    
                 <tr>
                     <th><?php echo $i ; $i++;?></th>
                    <th><?php echo $students['st_name']?></th>
                    <th><?php echo $students['st_email']?></th>
                    <th>
                        <a href="#"> Edit</a>
                         <a href="#"> Delete</a>
                </th>
                </tr>
            <?php
                }
                  }
                ?>
            </table>
        </div>
</body>
</html>