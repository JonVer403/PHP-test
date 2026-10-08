<?php
    require 'auth.php';
    include 'connection.php';

    $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="logout.php"><button class="button">uitloggen</button></a>
    </header>
    <main>
        <div>
            <h1>Worked</h1>
        </div>

    </main>
</body>
</html>