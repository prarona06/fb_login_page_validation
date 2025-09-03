<?php
require_once './core/db.php';

?>



<ul>
    <?php
    if (isset($_SESSION['email'])){
        ?>
        <li>
        <a href="./profile.php">Profile</a>
    </li>
     <li>
        <a href="./core/logout_core.php">Logout</a>
    </li>
<?php

    }
    if (!isset ($_SESSION['email'])){
        ?>
    <li>
        <a href="./index.php">Register Page</a>
    </li>
     <li>
        <a href="./login.php"> Login page</a>
    </li>
    <?php
    }
    ?>
     <li>
        <a href="./profile.php"> Profile page</a>
    </li>
</ul>