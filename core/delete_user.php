<?php

require_once 'db.php';

$id = $_REQUEST['id'];
$delete_query = "DELETE FROM users WHERE id =$id";
$run_query = mysqli_query($connect,$delete_query);

header('Location: ../profile.php?user=deleted');