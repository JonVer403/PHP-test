<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

    $target_username = 'Admin';

    if (isset($_SESSION['username']) && $_SESSION['username'] != $target_username) {
        header("Location: index.php");
        exit();
    }
?>