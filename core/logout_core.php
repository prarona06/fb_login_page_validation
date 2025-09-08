<?php

session_start();
setcookie('PHPCOOKISET', $cookie_value, time() - 120, '/');

session_destroy();
header('Location: ../index.php');
exit;