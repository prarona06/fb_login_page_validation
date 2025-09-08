<?php

session_start();
if (!isset($_SESSION['email'])) {
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
       <?php require_once 'menu.php'; ?>
       <h1>This is profile page</h1>
      
   </div>
   <div>
<a href="./add_user.php">
<button type="button" class ="btn btn-primary">Add User</button>
</a>

   </div>
   <?php 
if (isset ($_REQUEST['user']))
{
    if($_REQUEST['user'] == 'delete'){
        echo '<p class="text-success">User deleted successfully</p>';
    }
     if($_REQUEST['user'] == 'failed'){
        echo '<p class="text-success">User deleted failed</p>';
    }
     if($_REQUEST['user'] == 'added'){
        echo '<p class="text-success">User added successfully</p>';
    }
    }


   ?>

   <div>
       <table border="1" style="border-collapse: collapse; width: 100%;">
           <tr>
               <th>SL</th>
               <th>NAME</th>
               <th>EMAIL</th>
               <th>ACTION</th>
           </tr>
           
           <?php 
           $query ="SELECT * FROM students";
           $run_query = mysqli_query($connect, $query);

           if (mysqli_num_rows($run_query) > 0) {
               $i = 1;
               while ($student = mysqli_fetch_assoc($run_query)) {
           ?>
               <tr>
                   <td><?php echo $i; $i++; ?></td>
                   <td><?php echo $student['st_name']; ?></td>
                   <td><?php echo $student['st_email']; ?></td>
                   <td>
                       <a class="edit" href="edit_user.php?id=<?php echo $student['id']; ?>">Edit</a> | 
                       <a class="delete" href="core/delete_user.php?id=<?php echo $student['id']; ?>">Delete</a>
                   </td>
               </tr>
           <?php
               }
           }
           ?>
       </table>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script type="text/javascript">
       $(document).ready(function(){
           $(".delete").on("click", function(e){
               e.preventDefault();
               let path = $(this).attr("href");

               if (confirm("Are you sure you want to delete this user?")) {
                   $.ajax({
                       type: "GET",
                       url: path,
                       success: function(response){
                           console.log("Successfully deleted!");
                           
                       }
                     
                   });
               }
           });
       });
   </script>

</body>
</html>
