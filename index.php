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
    <link rel="stylesheet" href="style/1vooralles.css">
</head>
<body>
    <header>
        <a href="logout.php"><button class="button">uitloggen</button></a>
    </header>
    <main>
        <section>
            <div>
                <h1>PHP testing</h1>
            </div>
            <div>
                <p>Here will be multiple small projects i made using php.</p>
            </div>
        </section>
        <section>
            <a href="reviewMain.php"><button>
                <h3>Music reviews</h3>
                <p>Reviews of some albums and stuff.</p>
            </button></a>
            <a href="game.php"><button>
                <h3>Game</h3>
                <p>Clicker game</p>
            </button></a>
        </section>
    </main>
</body>
</html>