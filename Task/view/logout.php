<?php

    unset($_COOKIE['username']);
    unset($_COOKIE['lastSeen']);
    setcookie('rememberMe', '', time()-600, '/');
    setcookie('username', '', time()-600, '/');
    setcookie('lastSeen', '', time()-12300, '/');
    header('Location:login.php');
?>