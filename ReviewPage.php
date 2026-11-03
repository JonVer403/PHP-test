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
    <link rel="stylesheet" href="css/1vooralles.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php"><button>Home</button></a>
        </nav>
        <nav>
            <?php
                $target_username = 'Admin';

                if (isset($_SESSION['username']) && $_SESSION['username'] === $target_username) {
                    echo '<a href="adminReview.php"><button>Admin</button></a>';
                }
            ?>
        </nav>
    </header>
    <main>
        <section>
            <h1>Reviews</h1>
        </section>
        <section>
            
        </section>
    </main>
</body>
</html>