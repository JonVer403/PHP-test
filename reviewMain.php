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
            <div class="albumRow">
                <button>
                    <img src="Foto's/farewell-to-kings-cover-600x600.jpg" alt="A Farewell to Kings" width="300">
                    <h4>A Farewell to Kings - 1997</h4>
                    <p>Rush</p>
                </button>
                <button>
                    <img src="Foto's/echoes-pink-floyd.jpg" alt="Echoes" width="300">
                    <h4>Meddle - 1971</h4>
                    <p>Pink Floyd</p>
                </button>
                <button>
                    <img src="Foto's/trout-mask-replica.jpg" alt="Trout Mask Replica" width="300">
                    <h4>Trout Mask Replica - 1969</h4>
                    <p>Captain Beefheart & His Magic Band</p>
                </button>
            </div>
            <div class="albumRow">
                <button>
                    <img src="Foto's/temple-of-the-dog.jpg" alt="Temple of the Dog" width="300">
                    <h4>Temple of the Dog - 1990</h4>
                    <p>Temple of the Dog</p>
                </button>
                <button>
                    <img src="Foto's/in-the-wake-of-poseidon.jpg" alt="In the Wake of Poseidon" width="300">
                    <h4>In the Wake of Poseidon - 1970</h4>
                    <p>King Crimson</p>
                </button>
                <button>
                    <img src="Foto's/sailing-the-seas-of-cheese.jpg" alt="Sailing the Seas of Cheese" width="300">
                    <h4>Sailing the Seas of Cheese - 1991</h4>
                    <p>Primus</p>
                </button>
            </div>
        </section>
    </main>
</body>
</html>