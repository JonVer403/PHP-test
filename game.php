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
    <link rel="stylesheet" href="style/game.css">
</head>
<body>
    <header class="gameNav">
        <nav>
            <a href="index.php"><button>Home</button></a>
        </nav>
    </header>
    <main>
        <section class="clickSide">
            <form method="post">
                <input type="image" name="submit" src="Fotos/cheese.png">
            </form>
        </section>
        <section class="upgradeSide">

        </section>
    </main>
</body>
</html>